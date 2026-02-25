<?php
$page_title = "FMEA Conference";
$rootPrefix = "..";

require_once __DIR__ . "/../components/header.php";
require_once __DIR__ . "/../components/navbar.php";
require_once __DIR__ . "/../components/card.php";
?>

<div class="min-h-screen bg-background">
  <!-- Hero -->
  <section class="relative min-h-[60vh] flex items-center overflow-hidden">
    <div
      class="absolute inset-0 bg-cover bg-center bg-no-repeat"
      style="background-image: url('../assets/images/conference-hero-bg.jpg');"
    ></div>
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="container relative z-10 px-6 py-16 lg:py-24">
      <div class="max-w-4xl mx-auto text-center">
        <div class="w-full max-w-3xl mx-auto mb-4">
          <div class="bg-white/90 rounded-xl px-6 py-4 inline-block">
            <p class="text-sm font-body tracking-wide uppercase text-primary">
              The Power in Our Profession
            </p>
            <p class="text-xl md:text-2xl font-display font-bold text-foreground">
              Music Education for Collective Impact
            </p>
          </div>
        </div>
        <p class="mt-4 text-xl md:text-2xl lg:text-3xl font-display font-bold text-white tracking-wide">
          The FMEA Professional Learning Conference
        </p>
      </div>
    </div>
  </section>

  <!-- Simple conference nav bar (sticky) -->
  <nav class="sticky top-[72px] z-40 shadow-md" style="background-color:#032e7d;">
    <div class="container">
      <div class="hidden lg:flex items-center justify-center gap-0">
        <?php
        $navCategories = [
          "Attending" => [
            ["label" => "Registration", "id" => "registration"],
            ["label" => "Schedule", "id" => "attending-schedule"],
            ["label" => "Hotels", "id" => "hotels"],
          ],
          "Clinics" => [
            ["label" => "Schedule", "id" => "clinics-schedule"],
            ["label" => "Presenter Information", "id" => "presenter-info"],
          ],
          "Students" => [
            ["label" => "All-State Information", "id" => "all-state-info"],
            ["label" => "Tickets", "id" => "tickets"],
          ],
          "Exhibitors & Sponsors" => [
            ["label" => "Exhibitor Information", "id" => "exhibitor-info", "href" => "exhibitor-info.php"],
          ],
          "Plan Your Visit" => [
            ["label" => "Maps", "id" => "maps"],
            ["label" => "Parking", "id" => "parking"],
          ],
        ];
        foreach ($navCategories as $label => $items): ?>
          <div class="relative group">
            <button
              type="button"
              class="flex items-center gap-1.5 px-5 py-3.5 text-sm font-body font-semibold tracking-wide uppercase text-white/90 border-b-2 border-transparent group-hover:text-secondary group-hover:border-secondary/50 group-hover:bg-white/10"
            >
              <?php echo htmlspecialchars($label, ENT_QUOTES, "UTF-8"); ?>
            </button>
            <div class="absolute top-full left-0 min-w-[260px] bg-card border border-border rounded-b-lg shadow-2xl z-30 hidden group-hover:block">
              <div class="py-1">
                <?php foreach ($items as $item): ?>
                  <a
                    href="<?php echo isset($item['href']) ? htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') : '#'.$item['id']; ?>"
                    class="block px-5 py-3 text-sm font-body text-foreground hover:bg-[#032e7d]/5 hover:text-[#032e7d] border-l-2 border-transparent hover:border-[#032e7d] transition-all"
                    data-scroll-target="<?php echo htmlspecialchars($item['id'], ENT_QUOTES, 'UTF-8'); ?>"
                  >
                    <?php echo htmlspecialchars($item["label"], ENT_QUOTES, "UTF-8"); ?>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Mobile simple list -->
      <div class="lg:hidden">
        <div class="flex flex-wrap gap-2 py-2">
          <?php foreach ($navCategories as $label => $items): ?>
            <button
              type="button"
              class="px-3 py-1.5 rounded-full text-xs font-body font-semibold uppercase tracking-wide text-primary-foreground/90 bg-white/10 border border-white/30"
            >
              <?php echo htmlspecialchars($label, ENT_QUOTES, "UTF-8"); ?>
            </button>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </nav>

  <main class="bg-background">
    <!-- About the Conference -->
    <section class="container px-6 py-16">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">
          About the Conference
        </h2>
        <p class="font-body text-muted-foreground leading-relaxed mb-6">
          The FMEA Professional Learning Conference is one of the largest music education professional learning events in the United States.
          In addition to approximately 250 clinic sessions and concerts, it hosts 24 All-State Ensembles featuring Florida's top band,
          orchestra, chorus, guitar, orff, and popular music students, conducted by world-class conductors and teachers.
        </p>
        <p class="font-body text-muted-foreground leading-relaxed">
          It is attended by more than 10,000 people, including K-12 music teachers, school district music supervisors, college students,
          college music teachers &amp; professors, school administrators, K-12 students performing in the All-State and Honors ensembles,
          professional musicians, exhibitors, and parents and family members of performing students.
        </p>
      </div>
    </section>

    <!-- Callout cards -->
    <section style="background-color:#032e7d;">
      <div class="container px-6 py-16">
        <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
          <div class="bg-white/10 backdrop-blur-sm rounded-xl border border-white/20 p-6">
            <div class="w-10 h-10 rounded-lg bg-white/20 flex items-center justify-center mb-4">
              <span class="w-4 h-4 rounded-full bg-white"></span>
            </div>
            <h3 class="font-display font-bold text-lg text-white mb-2">
              Session Proposals &amp; Performing Ensembles
            </h3>
            <p class="font-body text-sm text-white/80 leading-relaxed">
              If you proposed a session or applied to perform, you should have received an email on July 1 indicating your acceptance status.
              If you did not receive this email, please contact
              <a href="mailto:web@fmea.org" class="underline hover:text-white">web@fmea.org</a>.
            </p>
          </div>
          <div class="bg-white/10 backdrop-blur-sm rounded-xl border border-white/20 p-6">
            <div class="w-10 h-10 rounded-lg bg-white/20 flex items-center justify-center mb-4">
              <span class="w-4 h-4 rounded-full bg-white"></span>
            </div>
            <h3 class="font-display font-bold text-lg text-white mb-2">
              Now Accepting Exhibitors for 2026
            </h3>
            <p class="font-body text-sm text-white/80 leading-relaxed mb-4">
              Reserve your booth by March 1 to maintain your same booth location or receive priority for moving to a different location.
            </p>
            <a href="exhibitor-info.php" class="inline-flex items-center px-4 py-2 rounded-md bg-white text-[#032e7d] text-sm font-body font-semibold hover:bg-white/90">
              Exhibitor Information
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Important Dates -->
    <section class="container px-6 py-16">
      <div class="text-center">
        <div class="flex items-center justify-center gap-3 mb-10">
          <?php icon_calendar("w-6 h-6 text-primary"); ?>
          <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground">
            Important Dates
          </h2>
        </div>
        <div class="max-w-xl mx-auto relative">
          <div class="absolute left-1/2 top-0 bottom-0 w-0.5 -translate-x-1/2" style="background-color:#032e7d33;"></div>
          <div class="flex flex-col gap-6">
            <?php
            $dates = [
              "February 15, 2025" => "Session Proposals and Performance Applications open",
              "May 9, 2025"       => "Deadline for Session Proposals and Performance Applications",
              "July 15, 2025"     => "Deadline for Product Showcase Applications",
              "September 27, 2025"=> "Hotels begin taking reservations at 9:00 a.m.",
              "December 12, 2025" => "Early Registration closes at 11:59:59 pm ET.",
            ];
            $i = 0;
            foreach ($dates as $date => $desc):
              $i++;
            ?>
              <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left">
                <?php if ($i > 1): ?>
                  <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background" style="background-color:#032e7d;"></div>
                <?php endif; ?>
                <p class="font-body font-bold text-sm mb-1" style="color:#032e7d;">
                  <?php echo htmlspecialchars($date, ENT_QUOTES, "UTF-8"); ?>
                </p>
                <p class="font-body text-sm text-muted-foreground leading-relaxed">
                  <?php echo htmlspecialchars($desc, ENT_QUOTES, "UTF-8"); ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Conference Impact Stats -->
    <section class="py-16" style="background-color:#fb9bf9;">
      <div class="container px-6">
        <div class="text-center mb-10">
          <h2 class="text-2xl md:text-3xl font-display font-bold" style="color:#2E2427;">
            Conference Impact
          </h2>
          <p class="font-body mt-2" style="color:#4a2a3a;">
            Florida's largest music education professional learning event
          </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 max-w-5xl mx-auto">
          <?php
          $stats = [
            "250+"  => "Clinic Sessions & Concerts",
            "24"    => "All-State Ensembles",
            "10,000+" => "Total Attendees",
            "50+"   => "Exhibitors & Sponsors",
            "6"     => "Performance Genres",
            "67"    => "Florida Counties Represented",
          ];
          foreach ($stats as $value => $label): ?>
            <div class="text-center">
              <span class="block text-3xl md:text-4xl font-display font-bold mb-1" style="color:#032e7d;">
                <?php echo htmlspecialchars($value, ENT_QUOTES, "UTF-8"); ?>
              </span>
              <span class="text-xs font-body font-medium uppercase tracking-wide" style="color:#4a2a3a;">
                <?php echo htmlspecialchars($label, ENT_QUOTES, "UTF-8"); ?>
              </span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>
</div>

<?php include __DIR__ . "/../components/footer.php"; ?>

