// All interactive behavior for the static PHP site.
// Uses the local mini jQuery helper (assets/js/jquery.min.js).

(function () {
  if (typeof $ === "undefined") return;

  function ready(fn) {
    if (document.readyState !== "loading") {
      fn();
    } else {
      document.addEventListener("DOMContentLoaded", fn);
    }
  }

  ready(function () {
    setupMegaMenu();
    setupMobileMenu();
    setupAccordions();
    setupModals();
    setupSmoothScroll();
    setupSliders();
  });

  function setupMegaMenu() {
    var menuState = {
      activeRoot: null,
      activeKey: null,
      timer: null
    };

    function openPanel(root, key, trigger) {
      if (menuState.timer) clearTimeout(menuState.timer);
      
      // If switching roots, close previous root immediately
      if (menuState.activeRoot && menuState.activeRoot !== root) {
        closeAll(menuState.activeRoot);
      }

      menuState.activeRoot = root;
      menuState.activeKey = key;

      root.classList.remove("hidden");
      root.classList.add("is-open");
      
      // Position the root if it is a dropdown (not full-width)
      if (!root.classList.contains("w-full")) {
        var triggerRect = trigger.getBoundingClientRect();
        var parentRect = root.parentElement.getBoundingClientRect();
        var leftPos = triggerRect.left - parentRect.left;
        
        // Safety check to keep it within the container
        var rootWidth = root.offsetWidth || 240;
        if (leftPos + rootWidth > parentRect.width) {
          leftPos = parentRect.width - rootWidth;
        }
        if (leftPos < 0) leftPos = 0;
        
        root.style.left = leftPos + "px";
      }

      root.querySelectorAll("[data-mega-panel]").forEach(function (panel) {
        if (panel.getAttribute("data-mega-panel") === key) {
          panel.classList.remove("hidden");
        } else {
          panel.classList.add("hidden");
        }
      });

      // Update active state on triggers
      var nav = root.closest("nav") || trigger.closest("nav");
      if (nav) {
        nav.querySelectorAll("[data-mega-menu]").forEach(function(el) {
          el.classList.remove("is-active");
        });
        trigger.classList.add("is-active");
      }
    }

    function closeAll(root) {
      if (!root) return;
      root.classList.add("hidden");
      root.classList.remove("is-open");
      root.querySelectorAll("[data-mega-panel]").forEach(function (panel) {
        panel.classList.add("hidden");
      });
      
      var nav = root.closest("nav");
      if (nav) {
        nav.querySelectorAll("[data-mega-menu]").forEach(function(el) {
          el.classList.remove("is-active");
        });
      }

      if (menuState.activeRoot === root) {
        menuState.activeRoot = null;
        menuState.activeKey = null;
      }
    }

    function startCloseTimer() {
      if (menuState.timer) clearTimeout(menuState.timer);
      menuState.timer = setTimeout(function() {
        if (menuState.activeRoot) {
          closeAll(menuState.activeRoot);
        }
      }, 300); // Increased to 300ms for smoother handoffs
    }

    $(".mega-menu-trigger").each(function () {
      var btn = this;
      var triggerWrapper = btn.parentElement;
      var key = triggerWrapper.getAttribute("data-mega-menu");
      if (!key) return;

      var nav = btn.closest("nav");
      var root = nav ? nav.querySelector(".mega-menu-root") : document.querySelector(".mega-menu-root");
      if (!root) return;

      triggerWrapper.addEventListener("mouseenter", function () {
        openPanel(root, key, triggerWrapper);
      });

      triggerWrapper.addEventListener("mouseleave", function (e) {
        startCloseTimer();
      });
    });

    $(".mega-menu-root").each(function() {
      var root = this;
      root.addEventListener("mouseenter", function() {
        if (menuState.timer) clearTimeout(menuState.timer);
      });
      root.addEventListener("mouseleave", function() {
        startCloseTimer();
      });
    });

    document.addEventListener("click", function (e) {
      if (!e.target.closest("[data-mega-menu]") && !e.target.closest(".mega-menu-root")) {
        $(".mega-menu-root").each(function() {
          closeAll(this);
        });
      }
    });
  }

  function setupMobileMenu() {
    var toggle = $("[data-mobile-menu-toggle]");
    var panel = $("[data-mobile-menu]");
    if (!toggle.elements.length || !panel.elements.length) return;

    var isOpen = false;
    toggle.on("click", function () {
      isOpen = !isOpen;
      panel[isOpen ? "removeClass" : "addClass"]("hidden");
    });

    $("[data-mobile-accordion]").each(function () {
      var key = this.getAttribute("data-mobile-accordion");
      var panelEl = document.querySelector('[data-mobile-panel="' + key + '"]');
      var icon = this.querySelector(".mobile-accordion-icon");
      if (!panelEl) return;

      this.addEventListener("click", function () {
        var isVisible = !panelEl.classList.contains("hidden");
        if (isVisible) {
          panelEl.classList.add("hidden");
          if (icon) icon.style.transform = "rotate(0deg)";
        } else {
          panelEl.classList.remove("hidden");
          if (icon) icon.style.transform = "rotate(180deg)";
        }
      });
    });
  }

  function setupAccordions() {
    var groups = {};

    document.querySelectorAll("[data-accordion-group]").forEach(function (groupEl) {
      var groupId = groupEl.getAttribute("data-accordion-group");
      groups[groupId] = {
        el: groupEl,
        single: groupEl.getAttribute("data-accordion-single") === "true",
      };
    });

    $(".accordion-trigger").each(function () {
      var trigger = this;
      var targetSelector = trigger.getAttribute("data-accordion-target");
      if (!targetSelector) return;
      var panel = document.querySelector(targetSelector);
      if (!panel) return;

      trigger.setAttribute("aria-expanded", "false");
      panel.classList.add("hidden");

      trigger.addEventListener("click", function () {
        var expanded = trigger.getAttribute("aria-expanded") === "true";
        var parentGroup = trigger.closest("[data-accordion-group]");
        if (parentGroup) {
          var groupId = parentGroup.getAttribute("data-accordion-group");
          var group = groups[groupId];
          if (group && group.single) {
            parentGroup.querySelectorAll(".accordion-trigger").forEach(function (otherTrigger) {
              if (otherTrigger !== trigger) {
                var otherSel = otherTrigger.getAttribute("data-accordion-target");
                var otherPanel = otherSel ? document.querySelector(otherSel) : null;
                otherTrigger.setAttribute("aria-expanded", "false");
                if (otherPanel) otherPanel.classList.add("hidden");
              }
            });
          }
        }

        if (expanded) {
          trigger.setAttribute("aria-expanded", "false");
          panel.classList.add("hidden");
        } else {
          trigger.setAttribute("aria-expanded", "true");
          panel.classList.remove("hidden");
        }
      });
    });
  }

  function setupModals() {
    $("[data-modal-open]").on("click", function (e) {
      e.preventDefault();
      var id = this.getAttribute("data-modal-open");
      var modal = document.getElementById(id);
      if (!modal) return;
      modal.classList.remove("hidden");
      modal.classList.add("flex");
    });

    $("[data-modal-close]").on("click", function () {
      var modal = this.closest(".modal");
      if (!modal) return;
      modal.classList.add("hidden");
      modal.classList.remove("flex");
    });
  }

  function setupSmoothScroll() {
    $("[data-scroll-target]").on("click", function (e) {
      var id = this.getAttribute("data-scroll-target");
      if (!id) return;
      var target = document.getElementById(id);
      if (!target) return;
      e.preventDefault();
      var offsetTop = target.getBoundingClientRect().top + window.scrollY - 120;
      window.scrollTo({ top: offsetTop, behavior: "smooth" });
    });
  }

  function setupSliders() {
    // Standard Sliders (using data-slider-prev, data-slider-next, data-slider-content)
    document.querySelectorAll("[data-slider-prev], [data-slider-next]").forEach(function (btn) {
      btn.addEventListener("click", function () {
        var id = this.getAttribute("data-slider-prev") || this.getAttribute("data-slider-next");
        var isNext = this.hasAttribute("data-slider-next");
        var container = document.querySelector('[data-slider-content="' + id + '"]');
        if (!container) return;

        // Calculate scroll amount based on first item width + gap
        var firstItem = container.querySelector(":scope > *");
        var scrollAmount = firstItem ? firstItem.offsetWidth + 24 : 300;
        
        container.scrollBy({
          left: isNext ? scrollAmount : -scrollAmount,
          behavior: "smooth",
        });
      });
    });

    // Legacy/Old Scroll Buttons Support
    document.querySelectorAll(".scroll-btn").forEach(function (btn) {
      btn.addEventListener("click", function () {
        var dir = this.getAttribute("data-scroll-dir");
        var container = this.parentElement.querySelector("[data-scroll-container]");
        if (!container) return;
        
        var scrollAmount = 324; // 300px width + 24px gap
        container.scrollBy({
          left: dir === "left" ? -scrollAmount : scrollAmount,
          behavior: "smooth",
        });
      });
    });
  }
})();

