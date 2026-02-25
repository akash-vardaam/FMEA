<?php
$page_title = "Membership Benefits – FMEA";
$rootPrefix = "..";

require_once __DIR__ . "/../components/header.php";
require_once __DIR__ . "/../components/navbar.php";
require_once __DIR__ . "/../components/accordion.php";
?>

<div class="min-h-screen bg-background">
  <!-- Hero Banner -->
  <section class="relative py-16 lg:py-20 overflow-hidden">
    <div
      class="absolute inset-0 bg-cover bg-top bg-no-repeat"
      style="background-image: url('../assets/images/membership-hero.png');"
    ></div>
    <div class="absolute inset-0 bg-accent/90"></div>
    <div class="container relative z-10 px-6">
      <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-accent-foreground mb-4">
          Membership Benefits
        </h1>
        <p class="text-lg font-body text-accent-foreground/80 max-w-2xl">
          Grow as a music educator while connecting with over 5,000 music teachers from across Florida.
        </p>
      </div>
    </div>
  </section>

  <!-- Breadcrumbs -->
  <div class="bg-muted border-b border-border">
    <div class="container px-6">
      <nav class="flex items-center gap-1.5 py-3 text-sm font-body text-muted-foreground max-w-4xl mx-auto">
        <a href="home.php" class="flex items-center gap-1 hover:text-primary transition-colors">
          <?php icon_chevron_left("w-3.5 h-3.5"); ?>
          Home
        </a>
        <span class="text-foreground font-medium">/ Membership Benefits</span>
      </nav>
    </div>
  </div>

  <main class="bg-background">
    <!-- Intro with Feature Photo -->
    <section class="container px-6 py-16">
      <div class="max-w-4xl mx-auto">
        <div class="flex flex-col md:flex-row gap-8 items-start">
          <div class="w-full md:w-2/5 flex-shrink-0">
            <img
              src="../assets/images/membership-feature.jpg"
              alt="Music teachers collaborating at a professional development workshop"
              class="w-full h-64 md:h-full object-cover rounded-xl"
            />
          </div>
          <div class="flex-1">
            <p class="font-body text-muted-foreground leading-relaxed mb-6">
              The very core of FMEA is its membership. Membership in the association speaks volumes
              about an individual's commitment toward music education and the association's credibility
              in representing the music education profession.
            </p>
            <p class="font-body text-muted-foreground leading-relaxed">
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
        <div class="max-w-4xl mx-auto">
          <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-3">
            Core Benefits
          </h2>
          <p class="font-body text-muted-foreground mb-10">
            Every FMEA member enjoys these benefits regardless of membership type.
          </p>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $coreBenefits = [
              [
                "title" => "Annual Professional Development Conference",
                "description" => "Attend the largest music education conference in Florida with over 3,000 colleagues, featuring 300+ sessions, performances, and keynotes.",
              ],
              [
                "title" => "All-State Ensemble Eligibility",
                "description" => "Your students become eligible to audition for Florida All-State ensembles — the most prestigious honor for student musicians in the state.",
              ],
              [
                "title" => "Florida Music Director Magazine",
                "description" => "Receive the award-winning Florida Music Director magazine, packed with pedagogical articles, advocacy updates, and member news.",
              ],
              [
                "title" => "NAfME National Membership",
                "description" => "Your FMEA membership includes NAfME membership, connecting you to a nationwide network.",
              ],
              [
                "title" => "Professional Liability Insurance",
                "description" => "Access to professional liability insurance coverage through your NAfME membership at no additional cost.",
              ],
              [
                "title" => "Job Board & Career Resources",
                "description" => "Search music education job listings across Florida and access career development resources.",
              ],
            ];
            foreach ($coreBenefits as $benefit): ?>
              <div class="bg-card rounded-xl border border-border overflow-hidden group hover:shadow-md transition-shadow">
                <div class="w-full h-40 bg-cover bg-center bg-gradient-to-br from-brand-burgundy-dark via-brand-burgundy to-brand-burgundy-light"></div>
                <div class="p-6">
                  <div class="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-primary-foreground transition-colors text-sm font-display">
                    ★
                  </div>
                  <h3 class="font-display font-bold text-foreground mb-2 text-sm">
                    <?php echo htmlspecialchars($benefit["title"], ENT_QUOTES, "UTF-8"); ?>
                  </h3>
                  <p class="font-body text-sm text-muted-foreground leading-relaxed">
                    <?php echo htmlspecialchars($benefit["description"], ENT_QUOTES, "UTF-8"); ?>
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
      <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-3">
          Membership Types
        </h2>
        <p class="font-body text-muted-foreground mb-10">
          Choose the membership that fits your role in music education. Expand each type below
          to see specific benefits and pricing.
        </p>

        <div class="space-y-4" data-accordion-group="membership-types" data-accordion-single="true">
          <?php
          $membershipTypes = [
            [
              "id" => "active",
              "title" => "Active Membership",
              "subtitle" => "For certified music educators currently teaching in Florida",
              "price" => "$130/year",
              "benefits" => [
                "Full voting rights in FMEA elections",
                "Eligibility to serve on committees and the board of directors",
                "Student eligibility for All-State ensembles and MPAs",
                "Discounted conference registration",
                "Florida Music Director magazine subscription",
                "NAfME national membership included",
                "Professional liability insurance coverage",
                "Access to member-only resources and publications",
              ],
            ],
            [
              "id" => "collegiate",
              "title" => "Collegiate Membership",
              "subtitle" => "For college students majoring in music education",
              "price" => "$43/year",
              "benefits" => [
                "Discounted conference registration",
                "Networking with active music educators",
                "Access to mentorship programs",
                "NAfME Collegiate membership included",
                "Job board access for student teaching and first-year positions",
              ],
            ],
            [
              "id" => "retired",
              "title" => "Retired Membership",
              "subtitle" => "For retired music educators who wish to stay connected",
              "price" => "$75/year",
              "benefits" => [
                "Continued access to conferences and events",
                "Florida Music Director magazine subscription",
                "NAfME membership included",
                "Networking with active and retired colleagues",
                "Eligibility to mentor new teachers",
              ],
            ],
            [
              "id" => "associate",
              "title" => "Associate / Friend of Music",
              "subtitle" => "For supporters of music education who are not certified educators",
              "price" => "$75/year",
              "benefits" => [
                "Conference attendance eligibility",
                "Florida Music Director magazine subscription",
                "Support the mission of music education in Florida",
                "Networking with music education professionals",
              ],
            ],
          ];

          foreach ($membershipTypes as $type):
            ob_start();
            ?>
            <p class="text-sm font-body font-semibold text-primary mb-4">
              <?php echo htmlspecialchars($type["price"], ENT_QUOTES, "UTF-8"); ?>
            </p>
            <div class="grid gap-3">
              <?php foreach ($type["benefits"] as $benefit): ?>
                <div class="flex items-start gap-3">
                  <?php icon_check_circle("w-4 h-4 text-primary mt-0.5 flex-shrink-0"); ?>
                  <p class="font-body text-sm text-muted-foreground">
                    <?php echo htmlspecialchars($benefit, ENT_QUOTES, "UTF-8"); ?>
                  </p>
                </div>
              <?php endforeach; ?>
            </div>
            <?php
            $content = ob_get_clean();
            ?>
            <div class="border border-border rounded-xl overflow-hidden bg-card">
              <button
                type="button"
                class="w-full px-6 py-5 flex items-center gap-4 text-left hover:bg-muted/50 accordion-trigger"
                data-accordion-target="#membership-<?php echo htmlspecialchars($type["id"], ENT_QUOTES, "UTF-8"); ?>"
                aria-expanded="false"
              >
                <div class="w-10 h-10 rounded-lg bg-primary text-primary-foreground flex items-center justify-center flex-shrink-0">
                  <?php echo strtoupper(substr($type["title"], 0, 1)); ?>
                </div>
                <div>
                  <h3 class="font-display font-bold text-foreground text-base">
                    <?php echo htmlspecialchars($type["title"], ENT_QUOTES, "UTF-8"); ?>
                  </h3>
                  <p class="text-sm font-body text-muted-foreground mt-0.5">
                    <?php echo htmlspecialchars($type["subtitle"], ENT_QUOTES, "UTF-8"); ?>
                  </p>
                </div>
                <span class="ml-auto mr-4 text-sm font-body font-semibold text-primary whitespace-nowrap hidden sm:block">
                  <?php echo htmlspecialchars($type["price"], ENT_QUOTES, "UTF-8"); ?>
                </span>
                <span class="w-4 h-4 border-b border-r border-current rotate-45 block accordion-icon"></span>
              </button>
              <div
                id="membership-<?php echo htmlspecialchars($type["id"], ENT_QUOTES, "UTF-8"); ?>"
                class="px-6 pb-6 pt-0 hidden accordion-panel"
                data-accordion-panel
              >
                <div class="pt-2">
                  <?php echo $content; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- FAQ section using generic accordion helper -->
    <section class="bg-muted">
      <div class="container px-6 py-16">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-3">
            Frequently Asked Questions
          </h2>
          <p class="font-body text-muted-foreground mb-10">
            Common questions about FMEA membership.
          </p>
          <div class="space-y-3" data-accordion-group="membership-faq" data-accordion-single="true">
            <?php
            render_accordion_item(
              "faq",
              "1",
              "Does my FMEA membership include NAfME?",
              "<p>Yes! Individual FMEA membership automatically includes membership in the National Association for Music Education (NAfME). This gives you access to national resources, advocacy at the federal level, and professional liability insurance coverage.</p>"
            );
            render_accordion_item(
              "faq",
              "2",
              "When does my membership expire?",
              "<p>FMEA memberships run on a fiscal year from July 1 through June 30. You can renew your membership at any time through the member portal. If your membership lapses, your students will lose eligibility for All-State and MPA events.</p>"
            );
            render_accordion_item(
              "faq",
              "3",
              "I'm a student teacher — which membership should I choose?",
              "<p>If you are currently enrolled in a college or university music education program, the Collegiate Membership is right for you. It offers a reduced rate and includes access to mentorship programs, conference registration discounts, and job board resources to help launch your career.</p>"
            );
            render_accordion_item(
              "faq",
              "4",
              "Can non-teachers join FMEA?",
              "<p>Absolutely. The Associate / Friend of Music membership is designed for parents, administrators, community members, and other supporters of music education who want to stay connected and support FMEA's mission.</p>"
            );
            ?>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="bg-primary">
      <div class="container px-6 py-16">
        <div class="max-w-4xl mx-auto text-center">
          <div class="w-10 h-10 rounded-full bg-secondary mx-auto mb-4 flex items-center justify-center text-secondary-foreground">
            <?php icon_star("w-5 h-5"); ?>
          </div>
          <h2 class="text-2xl md:text-3xl font-display font-bold text-primary-foreground mb-4">
            Ready to Join?
          </h2>
          <p class="font-body text-primary-foreground/80 mb-8 max-w-2xl mx-auto">
            Join over 5,000 music educators across Florida who rely on FMEA for professional development, student opportunities, and advocacy.
          </p>
          <div class="flex flex-wrap gap-4 justify-center">
            <a
              href="#"
              class="inline-flex items-center px-6 py-3 rounded-md bg-secondary text-secondary-foreground text-sm font-body font-semibold hover:bg-secondary/90"
            >
              Join FMEA Today
              <span class="ml-2">
                <?php icon_arrow_right("w-4 h-4"); ?>
              </span>
            </a>
            <a
              href="#"
              class="inline-flex items-center px-6 py-3 rounded-md bg-primary-foreground/20 text-primary-foreground border border-primary-foreground/40 text-sm font-body hover:bg-primary-foreground/30"
            >
              Renew Membership
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php include __DIR__ . "/../components/footer.php"; ?>

