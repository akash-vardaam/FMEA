<?php
// Mega-menu style navbar, translated from the React MegaMenu component.
if (!isset($rootPrefix)) {
    $rootPrefix = "..";
}

$navigationItems = [
    [
        "key" => "about",
        "label" => "About",
        "feature" => [
            "title" => "Our 80+ Year Legacy",
            "description" => "FMEA has been advancing music education across Florida since 1939, supporting thousands of educators and students.",
            "href" => $rootPrefix . "/pages/about.php",
            "ctaText" => "Explore Our History",
            "bgColor" => "bg-primary",
        ],
        "sections" => [
            [
                "title" => "Who We Are",
                "items" => [
                    ["label" => "Our Mission", "href" => $rootPrefix . "/pages/about.php"],
                    ["label" => "Leadership", "href" => $rootPrefix . "/pages/about.php"],
                    ["label" => "History", "href" => $rootPrefix . "/pages/about.php"],
                    ["label" => "Contact Us", "href" => $rootPrefix . "/pages/about.php#contact"],
                ],
            ],
            [
                "title" => "Get Involved",
                "items" => [
                    ["label" => "Committees", "href" => "#"],
                    ["label" => "Awards Program", "href" => "#"],
                    ["label" => "Careers", "href" => "#"],
                ],
            ],
        ],
    ],
    [
        "key" => "membership",
        "label" => "Membership",
        "feature" => [
            "title" => "Join 5,000+ Music Educators",
            "description" => "Become part of Florida's largest community of music education professionals.",
            "href" => $rootPrefix . "/pages/membership-benefits.php",
            "ctaText" => "Membership Benefits",
            "bgColor" => "bg-secondary",
        ],
        "sections" => [
            [
                "title" => "Join FMEA",
                "items" => [
                    ["label" => "Membership Benefits", "href" => $rootPrefix . "/pages/membership-benefits.php"],
                    ["label" => "Join Now", "href" => "#"],
                    ["label" => "Renew Membership", "href" => "#"],
                    ["label" => "Membership Types", "href" => "#"],
                ],
            ],
            [
                "title" => "Member Resources",
                "items" => [
                    ["label" => "Member Portal", "href" => "#"],
                    ["label" => "Publications", "href" => "#"],
                    ["label" => "Job Board", "href" => "#"],
                ],
            ],
        ],
    ],
    [
        "key" => "conference",
        "label" => "Conference",
        "feature" => [
            "title" => "2026 Professional Learning Conference",
            "description" => "January 14–17, 2026 in Tampa. Join thousands of music educators.",
            "href" => $rootPrefix . "/pages/conference.php",
            "ctaText" => "Learn More",
            "bgColor" => "bg-accent",
        ],
        "sections" => [
            [
                "title" => "2026 Conference",
                "items" => [
                    ["label" => "Conference Overview", "href" => $rootPrefix . "/pages/conference.php"],
                    ["label" => "Registration", "href" => $rootPrefix . "/pages/conference.php#registration"],
                    ["label" => "Schedule", "href" => $rootPrefix . "/pages/conference.php#attending-schedule"],
                    ["label" => "Exhibitors", "href" => $rootPrefix . "/pages/exhibitor-info.php"],
                ],
            ],
            [
                "title" => "Conference Resources",
                "items" => [
                    ["label" => "Hotel & Travel", "href" => $rootPrefix . "/pages/conference.php#hotels"],
                    ["label" => "Presenter Information", "href" => $rootPrefix . "/pages/conference.php#presenter-info"],
                    ["label" => "Past Conferences", "href" => "#"],
                ],
            ],
        ],
    ],
    [
        "key" => "all-state",
        "label" => "All-State",
        "feature" => [
            "title" => "Florida All-State Ensembles",
            "description" => "The most prestigious honor for Florida's student musicians.",
            "href" => "#",
            "ctaText" => "View Audition Info",
            "bgColor" => "bg-primary",
        ],
        "sections" => [],
    ],
    [
        "key" => "programs",
        "label" => "Programs",
        "feature" => [
            "title" => "Professional Development",
            "description" => "Grow your skills with workshops, certifications, and mentorship programs.",
            "href" => "#",
            "ctaText" => "Explore Programs",
            "bgColor" => "bg-secondary",
        ],
        "sections" => [],
    ],
    [
        "key" => "advocacy",
        "label" => "Advocacy",
        "feature" => [
            "title" => "Stand Up for Music Education",
            "description" => "Join fellow educators in advocating for music education funding and policy.",
            "href" => "#",
            "ctaText" => "Take Action",
            "bgColor" => "bg-accent",
        ],
        "sections" => [],
    ],
];
?>

<header class="sticky top-0 z-50 bg-card border-b border-border">
  <!-- Top Bar -->
  <div class="bg-primary text-primary-foreground flex justify-center">
    <div class="container flex items-center justify-between py-2 text-sm">
      <div class="flex items-center gap-6">
        <span class="font-body">Florida Music Education Association</span>
      </div>
      <div class="flex items-center gap-4">
        <a href="<?php echo $rootPrefix; ?>/pages/membership-benefits.php" class="hidden sm:flex items-center gap-2 hover:text-secondary transition-colors font-medium">
          <?php icon_user("w-4 h-4"); ?>
          Join or Renew
        </a>
        <a href="#" class="flex items-center gap-2 hover:text-secondary transition-colors font-medium">
          <?php icon_log_in("w-4 h-4"); ?>
          Member Login
        </a>
        <a href="#" class="flex items-center gap-2 hover:text-secondary transition-colors font-medium">
          <?php icon_heart("w-4 h-4"); ?>
          Donate
        </a>
      </div>
    </div>
  </div>

  <!-- Main Navigation -->
  <nav class="relative flex justify-center">
    <div class="container">
      <div class="flex items-center justify-between py-4">
        <!-- Logo -->
        <a href="<?php echo $rootPrefix; ?>/pages/home.php" class="flex items-center">
          <img src="../assets/images/fmea-logo.png" alt="Florida Music Education Association" class="h-14 w-auto">
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex items-center gap-1">
          <?php foreach ($navigationItems as $item): ?>
            <div
              class="relative"
              data-mega-menu="<?php echo htmlspecialchars($item['key'], ENT_QUOTES, 'UTF-8'); ?>"
            >
              <button
                class="flex items-center gap-1 px-4 py-2 text-sm font-body font-medium text-foreground hover:text-primary transition-colors mega-menu-trigger"
              >
                <?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
                <?php if (!empty($item['sections'])): ?>
                  <?php icon_chevron_down("w-4 h-4 mt-0.5"); ?>
                <?php endif; ?>
              </button>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Search Box -->
        <div class="hidden lg:flex items-center">
          <div class="relative">
            <span class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 rounded-full border border-muted-foreground/60"></span>
            <input
              type="search"
              placeholder="Search..."
              class="pl-9 w-48 h-9 font-body text-sm border border-input rounded-md bg-background"
            />
          </div>
        </div>

        <!-- Mobile Menu Toggle -->
        <button
          class="lg:hidden p-2 text-foreground"
          type="button"
          data-mobile-menu-toggle
        >
          <span class="block w-6 h-0.5 bg-foreground mb-1"></span>
          <span class="block w-6 h-0.5 bg-foreground mb-1"></span>
          <span class="block w-6 h-0.5 bg-foreground"></span>
        </button>
      </div>
    </div>

    <!-- Full-Width Mega Menu Dropdown (desktop) -->
            <div class="absolute left-0 right-0 top-full w-full bg-card border-t border-b border-border shadow-xl z-40 hidden mega-menu-root">
      <div class="container py-8">
        <?php foreach ($navigationItems as $item): ?>
          <?php if (!empty($item['sections'])): ?>
            <div
              class="mega-menu-panel hidden"
              data-mega-panel="<?php echo htmlspecialchars($item['key'], ENT_QUOTES, 'UTF-8'); ?>"
            >
              <div class="grid grid-cols-12 gap-8">
                <!-- Navigation Sections -->
                <div class="col-span-8 grid grid-cols-2 gap-8">
                  <?php foreach ($item['sections'] as $section): ?>
                    <div>
                      <h3 class="font-display font-semibold text-sm text-primary mb-4 uppercase tracking-wide border-b border-border pb-2">
                        <?php echo htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8'); ?>
                      </h3>
                      <ul class="space-y-1">
                        <?php foreach ($section['items'] as $menuItem): ?>
                          <li>
                            <a
                              href="<?php echo htmlspecialchars($menuItem['href'], ENT_QUOTES, 'UTF-8'); ?>"
                              class="group flex items-start gap-3 p-3 -mx-3 rounded-lg hover:bg-muted transition-colors"
                            >
                              <div class="flex-1">
                                <span class="font-body font-medium text-foreground group-hover:text-primary transition-colors block">
                                  <?php echo htmlspecialchars($menuItem['label'], ENT_QUOTES, 'UTF-8'); ?>
                                </span>
                              </div>
                              <span class="opacity-0 group-hover:opacity-100 mt-1 transition-all text-primary">
                                <?php icon_chevron_right("w-4 h-4"); ?>
                              </span>
                            </a>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  <?php endforeach; ?>
                </div>

                <!-- Feature Highlight -->
                <?php if (!empty($item['feature'])):
                  $f = $item['feature'];
                  $isSecondary = $f['bgColor'] === 'bg-secondary';
                  ?>
                  <div class="col-span-4">
                    <div class="<?php echo $f['bgColor']; ?> rounded-xl p-6 h-full flex flex-col <?php echo $isSecondary ? 'text-secondary-foreground' : 'text-primary-foreground'; ?>">
                      <div class="mb-4 opacity-90 text-3xl font-display">
                        <?php icon_star("w-7 h-7"); ?>
                      </div>
                      <h4 class="font-display font-bold text-xl mb-2">
                        <?php echo htmlspecialchars($f['title'], ENT_QUOTES, 'UTF-8'); ?>
                      </h4>
                      <p class="text-sm mb-6 flex-1 <?php echo $isSecondary ? 'text-secondary-foreground/80' : 'opacity-90'; ?>">
                        <?php echo htmlspecialchars($f['description'], ENT_QUOTES, 'UTF-8'); ?>
                      </p>
                      <a
                        href="<?php echo htmlspecialchars($f['href'], ENT_QUOTES, 'UTF-8'); ?>"
                        class="inline-flex items-center gap-2 font-body font-medium px-4 py-2 rounded-lg transition-colors w-fit <?php echo $isSecondary ? 'bg-primary text-primary-foreground hover:bg-primary/90' : 'bg-card text-foreground hover:bg-muted'; ?>"
                      >
                        <?php echo htmlspecialchars($f['ctaText'], ENT_QUOTES, 'UTF-8'); ?>
                        <?php icon_arrow_right("w-4 h-4"); ?>
                      </a>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <div class="lg:hidden border-t border-border bg-card hidden" data-mobile-menu>
            <div class="container py-4 space-y-4">
        <?php foreach ($navigationItems as $item): ?>
          <div class="space-y-2">
            <button
              type="button"
              class="flex items-center justify-between w-full px-2 py-2 font-body font-medium text-foreground"
              data-mobile-accordion="<?php echo htmlspecialchars($item['key'], ENT_QUOTES, 'UTF-8'); ?>"
            >
              <?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
              <?php icon_chevron_down("w-4 h-4 transition-transform mobile-accordion-icon"); ?>
            </button>
            <?php if (!empty($item['sections'])): ?>
              <div class="pl-4 space-y-1 hidden" data-mobile-panel="<?php echo htmlspecialchars($item['key'], ENT_QUOTES, 'UTF-8'); ?>">
                <?php foreach ($item['sections'] as $section): ?>
                  <?php foreach ($section['items'] as $menuItem): ?>
                    <a
                      href="<?php echo htmlspecialchars($menuItem['href'], ENT_QUOTES, 'UTF-8'); ?>"
                      class="block py-2 text-sm text-muted-foreground hover:text-primary transition-colors"
                    >
                      <?php echo htmlspecialchars($menuItem['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                  <?php endforeach; ?>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>

        <div class="flex flex-col gap-2 pt-4 border-t border-border">
          <a href="<?php echo $rootPrefix; ?>/pages/conference.php" class="w-full inline-flex items-center justify-center px-4 py-2 rounded-md border border-border bg-background text-sm font-body hover:bg-muted transition-colors">
            Find an Event
          </a>
          <a href="<?php echo $rootPrefix; ?>/pages/membership-benefits.php" class="w-full inline-flex items-center justify-center px-4 py-2 rounded-md bg-primary text-primary-foreground text-sm font-body hover:bg-primary/90 transition-colors">
            Join FMEA
          </a>
        </div>
      </div>
    </div>
  </nav>
</header>

