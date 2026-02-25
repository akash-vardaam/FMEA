<?php
$page_title = "FMEA – Florida Music Education Association";
$rootPrefix = "..";

require_once __DIR__ . "/../components/header.php";
require_once __DIR__ . "/../components/navbar.php";
require_once __DIR__ . "/../components/other-reusable-components.php";
?>

<main class="min-h-screen bg-background">
  <?php render_home_hero(); ?>
  <?php render_home_quick_actions(); ?>

  <!-- Mission Section -->
  <section class="py-20 bg-background flex justify-center">
    <div class="container px-6">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div>
          <?php render_simple_section_header("About FMEA", "Championing Music Education for <span class=\"text-primary italic\">Every Student</span>"); ?>
          <p class="text-lg font-body text-muted-foreground leading-relaxed mb-6">
            The Florida Music Education Association serves as the unified voice for music educators
            throughout Florida. We provide professional development, advocacy, and community to ensure
            every student has access to quality music instruction.
          </p>
          <p class="text-base font-body text-muted-foreground leading-relaxed mb-8">
            From elementary general music to high school marching bands, from college theory classes
            to community orchestras—FMEA supports music educators at every level and in every discipline.
          </p>
          <a href="about.php" class="inline-flex items-center px-4 py-2 rounded-md border border-border bg-background font-body text-sm hover:bg-muted">
            Learn More About FMEA
            <span class="ml-2">
              <?php icon_arrow_right("w-4 h-4"); ?>
            </span>
          </a>
        </div>
        <div class="space-y-6">
          <?php
          require_once __DIR__ . "/../components/card.php";
          render_info_card(
              "Our Mission",
              "To advance comprehensive music education for all students in Florida schools through advocacy, professional development, and collaborative support."
          );
          render_info_card(
              "Our Community",
              "A network of over 6,000 music educators, administrators, college faculty, students, and industry partners working together across all 67 Florida counties."
          );
          render_info_card(
              "Our Impact",
              "For over 85 years, FMEA has shaped music education policy, recognized excellence, and celebrated student achievement through All-State programs."
          );
          ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Simple News / Highlights placeholder -->
  <section class="bg-muted flex justify-center">
    <div class="container px-6 py-16">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-4">
          News & Highlights
        </h2>
        <p class="font-body text-muted-foreground mb-8">
          Stay up to date with upcoming events, conference announcements, and advocacy alerts.
        </p>
        <div class="grid md:grid-cols-3 gap-6 text-left">
          <?php
          render_info_card(
              "2026 Professional Learning Conference",
              "Join thousands of music educators in Tampa for four days of clinics, concerts, and networking.",
              "Conference"
          );
          render_info_card(
              "Membership Renewal",
              "Renew your FMEA membership to maintain student eligibility for All-State ensembles and MPAs.",
              "Membership"
          );
          render_info_card(
              "Advocacy Updates",
              "Access resources to help you advocate for strong music programs in your district and community.",
              "Advocacy"
          );
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . "/../components/footer.php"; ?>

