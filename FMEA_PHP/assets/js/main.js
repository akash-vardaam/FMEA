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
  });

  function setupMegaMenu() {
    var root = $(".mega-menu-root");
    if (!root.elements.length) return;

    var container = root.elements[0];
    var openKey = null;

    function openPanel(key) {
      openKey = key;
      root.removeClass("hidden").addClass("is-open");
      $(".mega-menu-panel", container).each(function () {
        var panelKey = this.getAttribute("data-mega-panel");
        if (panelKey === key) {
          this.classList.remove("hidden");
        } else {
          this.classList.add("hidden");
        }
      });
    }

    function closeAll() {
      openKey = null;
      root.addClass("hidden").removeClass("is-open");
      $(".mega-menu-panel", container).each(function () {
        this.classList.add("hidden");
      });
    }

    $("[data-mega-menu]").each(function () {
      var triggerWrapper = this;
      var key = triggerWrapper.getAttribute("data-mega-menu");
      var btn = triggerWrapper.querySelector(".mega-menu-trigger");
      if (!btn) return;

      triggerWrapper.addEventListener("mouseenter", function () {
        openPanel(key);
      });
      triggerWrapper.addEventListener("mouseleave", function (e) {
        var related = e.relatedTarget;
        if (!container.contains(related)) {
          closeAll();
        }
      });
    });

    container.addEventListener("mouseleave", function () {
      closeAll();
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
          if (icon) icon.style.transform = "rotate(45deg)";
        } else {
          panelEl.classList.remove("hidden");
          if (icon) icon.style.transform = "rotate(225deg)";
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
})();

