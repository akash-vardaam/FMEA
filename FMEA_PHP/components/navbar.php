<?php
// Mega-menu style navbar, translated from the React MegaMenu component.
if (!isset($rootPrefix)) {
    $rootPrefix = "..";
}

// Define Navigation Data (Mirroring navigationItems from MegaMenu.tsx)
$navigationItems = [
    [
        "label" => "About",
        "key" => "about",
        "feature" => [
            "title" => "Our 80+ Year Legacy",
            "description" => "FMEA has been advancing music education across Florida since 1939, supporting thousands of educators and students.",
            "href" => $rootPrefix . "/pages/about.php",
            "ctaText" => "Explore Our History",
            "icon" => "award",
            "bgColor" => "bg-primary"
        ],
        "sections" => [
            [
                "title" => "Who We Are",
                "items" => [
                    ["label" => "Our Mission", "href" => $rootPrefix . "/pages/about.php", "description" => "Advancing music education across Florida"],
                    ["label" => "Leadership", "href" => $rootPrefix . "/pages/about.php", "description" => "Meet our board and staff"],
                    ["label" => "History", "href" => $rootPrefix . "/pages/about.php", "description" => "Over 80 years of excellence"],
                    ["label" => "Contact Us", "href" => $rootPrefix . "/pages/about.php", "description" => "Get in touch with FMEA"]
                ]
            ],
            [
                "title" => "Get Involved",
                "items" => [
                    ["label" => "Committees", "href" => "#", "description" => "Serve on a committee"],
                    ["label" => "Awards Program", "href" => "#", "description" => "Recognize excellence"],
                    ["label" => "Careers", "href" => "#", "description" => "Join our team"]
                ]
            ]
        ]
    ],
    [
        "label" => "Membership",
        "key" => "membership",
        "feature" => [
            "title" => "Join 5,000+ Educators",
            "description" => "Become part of Florida's largest community of music education professionals. Access exclusive resources.",
            "href" => $rootPrefix . "/pages/membership-benefits.php",
            "ctaText" => "Become a Member",
            "icon" => "users",
            "bgColor" => "bg-secondary"
        ],
        "sections" => [
            [
                "title" => "Join FMEA",
                "items" => [
                    ["label" => "Membership Benefits", "href" => $rootPrefix . "/pages/membership-benefits.php", "description" => "See what you get as a member"],
                    ["label" => "Join Now", "href" => "#", "description" => "Become a member today"],
                    ["label" => "Renew Membership", "href" => "#", "description" => "Continue your membership"],
                    ["label" => "Membership Types", "href" => "#", "description" => "Find the right membership for you"]
                ]
            ],
            [
                "title" => "Member Resources",
                "items" => [
                    ["label" => "Member Portal", "href" => "#", "description" => "Access exclusive content"],
                    ["label" => "Publications", "href" => "#", "description" => "Florida Music Director magazine"],
                    ["label" => "Job Board", "href" => "#", "description" => "Find music education positions"]
                ]
            ]
        ]
    ],
    [
        "label" => "Conference",
        "key" => "conference",
        "feature" => [
            "title" => "2026 Professional Learning Conference",
            "description" => "January 14-17, 2026 in Tampa. Join thousands of music educators for sessions and performances.",
            "href" => $rootPrefix . "/pages/conference.php",
            "ctaText" => "Learn More",
            "icon" => "calendar",
            "bgColor" => "bg-accent"
        ],
        "sections" => [
            [
                "title" => "2026 Conference",
                "items" => [
                    ["label" => "Conference Overview", "href" => $rootPrefix . "/pages/conference.php", "description" => "January 14-17, 2026 in Tampa"],
                    ["label" => "Register Now", "href" => $rootPrefix . "/pages/conference.php#registration", "description" => "Secure your spot"],
                    ["label" => "Schedule", "href" => $rootPrefix . "/pages/conference.php#schedule", "description" => "Sessions and events"],
                    ["label" => "Exhibitors", "href" => $rootPrefix . "/pages/exhibitor-info.php", "description" => "Browse our partners"]
                ]
            ],
            [
                "title" => "Conference Resources",
                "items" => [
                    ["label" => "Hotel & Travel", "href" => "#", "description" => "Plan your trip"],
                    ["label" => "Presenter Information", "href" => "#", "description" => "Session guidelines"],
                    ["label" => "Past Conferences", "href" => "#", "description" => "Previous programs"]
                ]
            ]
        ]
    ],
    [
        "label" => "All-State",
        "key" => "all-state",
        "feature" => [
            "title" => "Florida All-State Ensembles",
            "description" => "The most prestigious honor for Florida's student musicians. Audition to perform with the best.",
            "href" => "#",
            "ctaText" => "View Audition Info",
            "icon" => "music",
            "bgColor" => "bg-primary"
        ],
        "sections" => [
            [
                "title" => "All-State Ensembles",
                "items" => [
                    ["label" => "About All-State", "href" => "#", "description" => "Florida's finest student musicians"],
                    ["label" => "Audition Information", "href" => "#", "description" => "Requirements and dates"],
                    ["label" => "Repertoire", "href" => "#", "description" => "2025 audition music"],
                    ["label" => "Results", "href" => "#", "description" => "View ensemble rosters"]
                ]
            ],
            [
                "title" => "Ensembles",
                "items" => [
                    ["label" => "Concert Band", "href" => "#", "description" => "Wind and percussion"],
                    ["label" => "Orchestra", "href" => "#", "description" => "Strings and full orchestra"],
                    ["label" => "Chorus", "href" => "#", "description" => "Mixed and treble choirs"],
                    ["label" => "Jazz Band", "href" => "#", "description" => "Jazz ensemble"]
                ]
            ]
        ]
    ],
    [
        "label" => "Programs",
        "key" => "programs",
        "feature" => [
            "title" => "Professional Development",
            "description" => "Grow your skills with workshops, certifications, and mentorship programs.",
            "href" => "#",
            "ctaText" => "Explore Programs",
            "icon" => "award",
            "bgColor" => "bg-secondary"
        ],
        "sections" => [
            [
                "title" => "Student Programs",
                "items" => [
                    ["label" => "All-State Ensembles", "href" => "#", "description" => "Honor ensembles"],
                    ["label" => "Solo & Ensemble MPA", "href" => "#", "description" => "Performance assessments"],
                    ["label" => "Collegiate Programs", "href" => "#", "description" => "College student resources"]
                ]
            ],
            [
                "title" => "Professional Development",
                "items" => [
                    ["label" => "Workshops", "href" => "#", "description" => "Regional learning opportunities"],
                    ["label" => "Certification", "href" => "#", "description" => "Maintain your credentials"],
                    ["label" => "Mentorship", "href" => "#", "description" => "New teacher support"]
                ]
            ]
        ]
    ],
    [
        "label" => "Advocacy",
        "key" => "advocacy",
        "feature" => [
            "title" => "Stand Up for Music Education",
            "description" => "Your voice matters. Join fellow educators in advocating for funding and policy.",
            "href" => "#",
            "ctaText" => "Take Action",
            "icon" => "users",
            "bgColor" => "bg-accent"
        ],
        "sections" => [
            [
                "title" => "Advocacy Resources",
                "items" => [
                    ["label" => "Why Advocate", "href" => "#", "description" => "The importance of music education"],
                    ["label" => "Legislative Updates", "href" => "#", "description" => "Policy news and alerts"],
                    ["label" => "Toolkit", "href" => "#", "description" => "Resources for advocacy"],
                    ["label" => "Research", "href" => "#", "description" => "Data supporting music education"]
                ]
            ],
            [
                "title" => "Take Action",
                "items" => [
                    ["label" => "Contact Legislators", "href" => "#", "description" => "Make your voice heard"],
                    ["label" => "Advocacy Day", "href" => "#", "description" => "Annual advocacy event"]
                ]
            ]
        ]
    ]
];
?>

<header class="sticky top-0 z-50 bg-card border-b border-border font-body">
    <!-- Top Bar -->
    <div class="bg-primary text-primary-foreground">
        <div class="container flex items-center justify-between py-2 text-sm">
            <div class="flex items-center gap-6">
                <span class="font-body hidden sm:inline">Florida Music Education Association</span>
            </div>
            <div class="flex items-center gap-4">
                <a href="<?php echo $rootPrefix; ?>/pages/membership-benefits.php" class="hidden sm:flex items-center gap-2 hover:text-secondary transition-colors font-medium">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg> Join or Renew
                </a>
                <a href="#" class="flex items-center gap-2 hover:text-secondary transition-colors font-medium">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg> Member Login
                </a>
                <a href="#" class="flex items-center gap-2 hover:text-secondary transition-colors font-medium">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg> Donate
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="relative">
        <div class="container">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <a href="<?php echo $rootPrefix; ?>/pages/home.php" class="flex items-center">
                    <img src="<?php echo $rootPrefix; ?>/assets/images/fmea-logo.png" alt="FMEA Logo" class="h-14 w-auto">
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center gap-1">
                    <?php foreach ($navigationItems as $item): ?>
                            <div class="relative group/nav" data-mega-menu="<?php echo $item['key']; ?>">
                                <button class="mega-menu-trigger flex items-center gap-1 px-4 py-2 text-sm font-medium transition-colors text-foreground hover:text-primary group-[.is-active]/nav:text-primary">
                                    <?php echo htmlspecialchars($item['label']); ?>
                                    <?php if (isset($item['sections'])): ?>
                                            <svg class="w-4 h-4 transition-transform duration-200 group-[.is-active]/nav:rotate-180" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                                    <?php endif; ?>
                                </button>
                            </div>
                    <?php endforeach; ?>
                </div>

                <!-- Search and Mobile Toggle -->
                <div class="flex items-center gap-4">
                    <div class="hidden lg:flex items-center relative">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-muted-foreground" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><line x1="16.65" y1="16.65" x2="21" y2="21"/></svg>
                        <input type="search" placeholder="Search..." class="pl-9 w-48 h-9 rounded-md border border-input bg-background font-body text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary">
                    </div>
                    <button class="lg:hidden p-2 text-foreground" data-mobile-menu-toggle>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Full-Width Mega Menu Dropdown -->
        <div class="mega-menu-root hidden absolute left-0 right-0 top-full w-full bg-card border-t border-b border-border shadow-xl z-50">
            <div class="container py-8">
                <?php foreach ($navigationItems as $item): ?>
                        <div data-mega-panel="<?php echo $item['key']; ?>" class="hidden">
                            <div class="grid grid-cols-12 gap-8">
                                <!-- Navigation Sections (8/12) -->
                                <div class="col-span-8 grid grid-cols-2 gap-8">
                                    <?php foreach ($item['sections'] as $section): ?>
                                            <div>
                                                <h3 class="font-display font-semibold text-sm text-primary mb-4 uppercase tracking-wide border-b border-border pb-2">
                                                    <?php echo htmlspecialchars($section['title']); ?>
                                                </h3>
                                                <ul class="space-y-1">
                                                    <?php foreach ($section['items'] as $menuItem): ?>
                                                            <li>
                                                                <a href="<?php echo $menuItem['href']; ?>" class="group flex items-start gap-3 p-3 -mx-3 rounded-lg hover:bg-muted transition-colors">
                                                                    <div class="flex-1">
                                                                        <span class="font-body font-medium text-foreground group-hover:text-primary transition-colors block">
                                                                            <?php echo htmlspecialchars($menuItem['label']); ?>
                                                                        </span>
                                                                        <?php if (isset($menuItem['description'])): ?>
                                                                                <p class="text-xs text-muted-foreground mt-0.5">
                                                                                    <?php echo htmlspecialchars($menuItem['description']); ?>
                                                                                </p>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <svg class="w-4 h-4 text-muted-foreground opacity-0 group-hover:opacity-100 group-hover:text-primary transition-all mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                                                </a>
                                                            </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                    <?php endforeach; ?>
                                </div>

                                <!-- Feature Highlight (4/12) -->
                                <?php if (isset($item['feature'])): ?>
                                        <div class="col-span-4">
                                            <?php
                                            $feat = $item['feature'];
                                            $featTextClass = ($feat['bgColor'] === 'bg-secondary') ? 'text-secondary-foreground' : 'text-primary-foreground';
                                            ?>
                                            <div class="<?php echo $feat['bgColor']; ?> rounded-xl p-6 h-full flex flex-col <?php echo $featTextClass; ?>">
                                                <div class="mb-4 opacity-90">
                                                    <?php
                                                    $iconClass = "w-8 h-8";
                                                    switch ($feat['icon']) {
                                                        case 'award':
                                                            echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>';
                                                            break;
                                                        case 'users':
                                                            echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>';
                                                            break;
                                                        case 'calendar':
                                                            echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>';
                                                            break;
                                                        case 'music':
                                                            echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>';
                                                            break;
                                                    }
                                                    ?>
                                                </div>
                                                <h4 class="font-display font-bold text-xl mb-2"><?php echo htmlspecialchars($feat['title']); ?></h4>
                                                <p class="text-sm mb-6 flex-1 <?php echo ($feat['bgColor'] === 'bg-secondary') ? 'text-secondary-foreground/80' : 'opacity-90'; ?>">
                                                    <?php echo htmlspecialchars($feat['description']); ?>
                                                </p>
                                                <a href="<?php echo $feat['href']; ?>" class="inline-flex items-center gap-2 font-body font-medium px-4 py-2 rounded-lg transition-colors w-fit <?php echo ($feat['bgColor'] === 'bg-secondary') ? 'bg-primary text-primary-foreground hover:bg-primary/90' : 'bg-card text-foreground hover:bg-muted'; ?>">
                                                    <?php echo htmlspecialchars($feat['ctaText']); ?>
                                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                                </a>
                                            </div>
                                        </div>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Mobile Navigation Panel -->
        <div class="hidden lg:hidden border-t border-border bg-card" data-mobile-menu>
            <div class="container py-4 space-y-4">
                <?php foreach ($navigationItems as $item): ?>
                        <div class="space-y-2">
                            <button class="flex items-center justify-between w-full px-2 py-2 font-body font-medium text-foreground border-b border-border" data-mobile-accordion="<?php echo $item['key']; ?>">
                                <?php echo htmlspecialchars($item['label']); ?>
                                <svg class="w-4 h-4 mobile-accordion-icon transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                            </button>
                            <div class="hidden pl-4 space-y-1 pb-2" data-mobile-panel="<?php echo $item['key']; ?>">
                                <?php foreach ($item['sections'] as $section): ?>
                                        <?php foreach ($section['items'] as $menuItem): ?>
                                                <a href="<?php echo $menuItem['href']; ?>" class="block py-2 text-sm text-muted-foreground hover:text-primary transition-colors">
                                                    <?php echo htmlspecialchars($menuItem['label']); ?>
                                                </a>
                                        <?php endforeach; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                <?php endforeach; ?>

                <div class="flex flex-col gap-2 pt-4 border-t border-border">
                    <a href="#" class="w-full inline-flex items-center justify-center px-4 py-2 rounded-md border border-input bg-background text-sm font-medium hover:bg-accent hover:text-accent-foreground transition-colors">Member Portal</a>
                    <a href="#" class="w-full inline-flex items-center justify-center px-4 py-2 rounded-md bg-primary text-primary-foreground text-sm font-medium hover:bg-primary/90 transition-colors">Join FMEA</a>
                </div>
            </div>
        </div>
    </nav>
</header>