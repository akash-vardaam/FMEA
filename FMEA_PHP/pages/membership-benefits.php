<?php
$page_title = "Membership Benefits – FMEA";
$rootPrefix = "..";

require_once __DIR__ . "/../components/header.php";
require_once __DIR__ . "/../components/navbar.php";

$coreBenefits = [
  [
    "icon" => "calendar",
    "title" => "Annual Professional Development Conference",
    "description" => "Attend the largest music education conference in Florida with over 3,000 colleagues, featuring 300+ sessions, performances, and keynotes.",
    "image" => "benefit-conference.jpg",
  ],
  [
    "icon" => "music",
    "title" => "All-State Ensemble Eligibility",
    "description" => "Your students become eligible to audition for Florida All-State ensembles — the most prestigious honor for student musicians in the state.",
    "image" => "benefit-allstate.jpg",
  ],
  [
    "icon" => "book_open",
    "title" => "Florida Music Director Magazine",
    "description" => "Receive the award-winning Florida Music Director magazine, packed with pedagogical articles, advocacy updates, and member news.",
    "image" => "benefit-magazine.jpg",
  ],
  [
    "icon" => "globe",
    "title" => "NAfME National Membership",
    "description" => "Your FMEA membership includes National Association for Music Education (NAfME) membership, connecting you to a nationwide network.",
    "image" => "benefit-national.jpg",
  ],
  [
    "icon" => "shield",
    "title" => "Professional Liability Insurance",
    "description" => "Access to $1 million in professional liability insurance coverage through your NAfME membership at no additional cost.",
    "image" => "benefit-insurance.jpg",
  ],
  [
    "icon" => "briefcase",
    "title" => "Job Board & Career Resources",
    "description" => "Search music education job listings across Florida and access career development resources exclusively for members.",
    "image" => "benefit-careers.jpg",
  ],
];

$membershipTypes = [
  [
    "id" => "active",
    "title" => "Active Membership",
    "subtitle" => "For certified music educators currently teaching in Florida",
    "icon" => "users",
    "price" => "$130/year",
    "color" => "bg-primary text-primary-foreground",
    "benefits" => [
      "Full voting rights in FMEA elections",
      "Eligibility to serve on committees and the board of directors",
      "Student eligibility for All-State ensembles and MPAs",
      "Discounted conference registration",
      "Florida Music Director magazine subscription",
      "NAfME national membership included",
      "Professional liability insurance coverage",
      "Access to member-only resources and publications",
      "Professional development certificate tracking",
    ],
  ],
  [
    "id" => "collegiate",
    "title" => "Collegiate Membership",
    "subtitle" => "For college students majoring in music education",
    "icon" => "graduation_cap",
    "price" => "$43/year",
    "color" => "bg-secondary text-secondary-foreground",
    "benefits" => [
      "Discounted conference registration",
      "Networking with active music educators",
      "Access to mentorship programs",
      "NAfME Collegiate membership included",
      "Florida Music Director magazine subscription",
      "Job board access for student teaching and first-year positions",
      "Eligibility for collegiate chapter events",
      "Professional development workshops",
    ],
  ],
  [
    "id" => "retired",
    "title" => "Retired Membership",
    "subtitle" => "For retired music educators who wish to stay connected",
    "icon" => "award",
    "price" => "$75/year",
    "color" => "bg-accent text-accent-foreground",
    "benefits" => [
      "Continued access to conferences and events",
      "Florida Music Director magazine subscription",
      "NAfME membership included",
      "Networking with active and retired colleagues",
      "Eligibility to mentor new teachers",
      "Voting rights maintained",
    ],
  ],
  [
    "id" => "associate",
    "title" => "Associate / Friend of Music",
    "subtitle" => "For supporters of music education who are not certified educators",
    "icon" => "heart",
    "price" => "$75/year",
    "color" => "bg-primary text-primary-foreground",
    "benefits" => [
      "Conference attendance eligibility",
      "Florida Music Director magazine subscription",
      "Support the mission of music education in Florida",
      "Networking with music education professionals",
      "Access to FMEA publications and resources",
    ],
  ],
  [
    "id" => "corporate",
    "title" => "Corporate Partner Membership",
    "subtitle" => "For businesses and organizations supporting music education",
    "icon" => "briefcase",
    "price" => "Starting at $500/year",
    "color" => "bg-secondary text-secondary-foreground",
    "benefits" => [
      "Exhibitor priority booth selection",
      "Logo placement on FMEA website and publications",
      "Product Showcase session opportunities at conference",
      "Complimentary conference registrations",
      "Advertising discounts in Florida Music Director",
      "Access to FMEA mailing list (one-time use)",
      "Recognition at conference events",
      "Direct connection to 5,000+ music educators",
    ],
  ],
];
?>

<div class="min-h-screen bg-background">
  <!-- Hero Banner -->
  <section class="relative py-16 lg:py-20 overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-top bg-no-repeat"
      style="background-image: url('<?php echo $rootPrefix; ?>/assets/images/membership-hero.png');"></div>
    <div class="absolute inset-0 bg-accent/90"></div>
    <div class="container relative z-10 px-6">
      <div class="max-w-4xl mx-auto animate-fade-in">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-accent-foreground mb-4">
          Membership Benefits
        </h1>
        <p class="text-lg font-body text-accent-foreground/80 max-w-2xl whitespace-nowrap overflow-hidden">
          Grow as a music educator while connecting with over 5,000 music teachers from across Florida.
        </p>
      </div>
    </div>
  </section>

  <!-- Breadcrumbs -->
  <div class="bg-muted border-b border-border">
    <div class="container px-6">
      <nav class="flex items-center gap-1.5 py-3 text-sm font-body text-muted-foreground max-w-4xl mx-auto">
        <a href="home.php" class="hover:text-primary transition-colors">Home</a>
        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <polyline points="9 18 15 12 9 6" />
        </svg>
        <span class="text-foreground font-medium">Membership Benefits</span>
      </nav>
    </div>
  </div>

  <main class="bg-background">
    <!-- Intro with Feature Photo -->
    <section class="container px-6 py-16">
      <div class="max-w-4xl mx-auto animate-fade-in">
        <div class="flex flex-col md:flex-row gap-8 items-start">
          <div class="w-full md:w-2/5 flex-shrink-0">
            <img src="<?php echo $rootPrefix; ?>/assets/images/membership-feature.jpg"
              alt="Music teachers collaborating at a professional development workshop"
              class="w-full h-64 md:h-full object-cover rounded-xl shadow-lg" />
          </div>
          <div class="flex-1">
            <p class="font-body text-muted-foreground leading-relaxed mb-6 text-lg">
              The very core of FMEA is its membership. Membership in the association speaks volumes
              about an individual's commitment toward music education and the association's
              credibility in representing the music education profession.
            </p>
            <p class="font-body text-muted-foreground leading-relaxed text-lg">
              Individual FMEA membership includes membership in the National Association for Music
              Education (NAfME), providing access to national resources, advocacy, and professional
              liability insurance. Here's what your membership unlocks.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Core Benefits Grid -->
    <section class="bg-muted">
      <div class="container px-6 py-16">
        <div class="max-w-4xl mx-auto animate-fade-in">
          <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-3">
            Core Benefits
          </h2>
          <p class="font-body text-muted-foreground mb-10 text-lg">
            Every FMEA member enjoys these benefits regardless of membership type.
          </p>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($coreBenefits as $benefit): ?>
              <div
                class="bg-card rounded-xl border border-border overflow-hidden group hover:shadow-md transition-shadow">
                <img src="<?php echo $rootPrefix; ?>/assets/images/<?php echo $benefit['image']; ?>"
                  alt="<?php echo htmlspecialchars($benefit['title'], ENT_QUOTES, 'UTF-8'); ?>"
                  class="w-full h-40 object-cover" />
                <div class="p-6">
                  <div
                    class="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                    <?php
                    $iconClass = "w-6 h-6";
                    switch ($benefit['icon']) {
                      case 'calendar':
                        echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>';
                        break;
                      case 'music':
                        echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>';
                        break;
                      case 'book_open':
                        echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a4 4 0 0 0-4-4H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a4 4 0 0 1 4-4h6z"/></svg>';
                        break;
                      case 'globe':
                        echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>';
                        break;
                      case 'shield':
                        echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>';
                        break;
                      case 'briefcase':
                        echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>';
                        break;
                    }
                    ?>
                  </div>
                  <h3 class="font-display font-bold text-foreground mb-2 text-sm leading-tight">
                    <?php echo htmlspecialchars($benefit['title'], ENT_QUOTES, 'UTF-8'); ?>
                  </h3>
                  <p class="font-body text-sm text-muted-foreground leading-relaxed">
                    <?php echo htmlspecialchars($benefit['description'], ENT_QUOTES, 'UTF-8'); ?>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Membership Types Accordion -->
    <section class="container px-6 py-16">
      <div class="max-w-4xl mx-auto animate-fade-in">
        <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-3">
          Membership Types
        </h2>
        <p class="font-body text-muted-foreground mb-10 text-lg">
          Choose the membership that fits your role in music education. Expand each type below
          to see specific benefits and pricing.
        </p>

        <div class="space-y-4" data-accordion-group="membership-types" data-accordion-single="true">
          <?php foreach ($membershipTypes as $type): ?>
            <div class="border border-border rounded-xl overflow-hidden bg-card transition-shadow shadow-sm">
              <button type="button"
                class="w-full px-6 py-5 flex items-center gap-4 text-left hover:bg-muted/50 transition-colors accordion-trigger"
                data-accordion-target="#type-<?php echo $type['id']; ?>" aria-expanded="false">
                <div
                  class="w-10 h-10 rounded-lg <?php echo $type['color']; ?> flex items-center justify-center flex-shrink-0">
                  <?php
                  $iconClass = "w-5 h-5";
                  switch ($type['icon']) {
                    case 'users':
                      echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>';
                      break;
                    case 'graduation_cap':
                      echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.42 10.922L12 15.666 2.58 10.922m18.84 0L12 6.177 2.58 10.922m18.84 0v6.177L12 21.823l-9.42-4.724V10.922"/><path d="M3 10.25v7l9 4.5 9-4.5v-7"/></svg>';
                      break;
                    case 'award':
                      echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>';
                      break;
                    case 'heart':
                      echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>';
                      break;
                    case 'briefcase':
                      echo '<svg class="' . $iconClass . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>';
                      break;
                  }
                  ?>
                </div>
                <div class="flex-1">
                  <h3 class="font-display font-bold text-foreground text-base">
                    <?php echo htmlspecialchars($type['title'], ENT_QUOTES, 'UTF-8'); ?>
                  </h3>
                  <p class="text-sm font-body text-muted-foreground mt-0.5">
                    <?php echo htmlspecialchars($type['subtitle'], ENT_QUOTES, 'UTF-8'); ?>
                  </p>
                </div>
                <span class="ml-auto mr-4 text-sm font-body font-semibold text-primary whitespace-nowrap hidden sm:block">
                  <?php echo $type['price']; ?>
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200">
                  <path d="m6 9 6 6 6-6"></path>
                </svg>
              </button>
              <div id="type-<?php echo $type['id']; ?>" class="px-6 pb-6 pt-0 hidden accordion-panel"
                data-accordion-panel>
                <div class="pt-2">
                  <p class="text-sm font-body font-semibold text-primary mb-4 sm:hidden">
                    <?php echo $type['price']; ?>
                  </p>
                  <div class="grid gap-3">
                    <?php foreach ($type['benefits'] as $benefit): ?>
                      <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-primary mt-0.5 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                          <polyline points="22 4 12 14.01 9 11.01" />
                        </svg>
                        <p class="font-body text-sm text-muted-foreground leading-snug">
                          <?php echo htmlspecialchars($benefit, ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- FAQ section -->
    <section class="bg-muted">
      <div class="container px-6 py-16">
        <div class="max-w-4xl mx-auto animate-fade-in">
          <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-3">
            Frequently Asked Questions
          </h2>
          <p class="font-body text-muted-foreground mb-10 text-lg">
            Common questions about FMEA membership.
          </p>
          <div class="space-y-3" data-accordion-group="membership-faq" data-accordion-single="true">
            <?php
            $faqs = [
              [
                "q" => "Does my FMEA membership include NAfME?",
                "a" => "Yes! Individual FMEA membership automatically includes membership in the National Association for Music Education (NAfME). This gives you access to national resources, advocacy at the federal level, and professional liability insurance coverage."
              ],
              [
                "q" => "When does my membership expire?",
                "a" => "FMEA memberships run on a fiscal year from July 1 through June 30. You can renew your membership at any time through the member portal. If your membership lapses, your students will lose eligibility for All-State and MPA events."
              ],
              [
                "q" => "I'm a student teacher — which membership should I choose?",
                "a" => "If you are currently enrolled in a college or university music education program, the Collegiate Membership is right for you. It offers a reduced rate and includes access to mentorship programs, conference registration discounts, and job board resources to help launch your career."
              ],
              [
                "q" => "Can non-teachers join FMEA?",
                "a" => "Absolutely. The Associate / Friend of Music membership is designed for parents, administrators, community members, and other supporters of music education who want to stay connected and support FMEA's mission."
              ]
            ];
            foreach ($faqs as $i => $faq):
              ?>
              <div class="border border-border rounded-xl overflow-hidden bg-card">
                <button type="button"
                  class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-muted/50 transition-colors accordion-trigger"
                  data-accordion-target="#faq-<?php echo $i; ?>" aria-expanded="false">
                  <span class="font-display font-semibold text-foreground"><?php echo $faq['q']; ?></span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200">
                    <path d="m6 9 6 6 6-6"></path>
                  </svg>
                </button>
                <div id="faq-<?php echo $i; ?>" class="px-6 pb-5 hidden accordion-panel" data-accordion-panel>
                  <p class="font-body text-sm text-muted-foreground leading-relaxed">
                    <?php echo $faq['a']; ?>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <!-- CTA -->
    <section class="bg-primary">
      <div class="container px-6 py-16">
        <div class="max-w-4xl mx-auto text-center animate-fade-in">
          <div class="text-secondary mx-auto mb-4 flex justify-center">
            <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
          </div>
          <h2 class="text-2xl md:text-3xl font-display font-bold text-primary-foreground mb-4">
            Ready to Join?
          </h2>
          <p class="font-body text-primary-foreground/80 mb-8 max-w-2xl mx-auto">
            Join over 5,000 music educators across Florida who rely on FMEA for professional
            development, student opportunities, and advocacy.
          </p>
          <div class="flex flex-wrap gap-4 justify-center">
            <a href="#"
              class="inline-flex items-center justify-center px-8 py-3 rounded-md bg-secondary text-secondary-foreground font-body font-semibold hover:bg-secondary/90 transition-all">
              Join FMEA Today
              <span class="ml-2">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12" />
                  <polyline points="12 5 19 12 12 19" />
                </svg>
              </span>
            </a>
            <a href="#"
              class="inline-flex items-center justify-center px-8 py-3 rounded-md bg-primary-foreground/20 text-primary-foreground border border-primary-foreground/40 font-body hover:bg-primary-foreground/30 transition-all">
              Renew Membership
              <span class="ml-2">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                  <polyline points="15 3 21 3 21 9" />
                  <line x1="10" y1="14" x2="21" y2="3" />
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
</div><?php include __DIR__ . "/../components/footer.php"; ?>