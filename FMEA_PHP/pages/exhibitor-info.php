<?php
$page_title = "Exhibitor Information – FMEA Conference";
$rootPrefix = "..";

require_once __DIR__ . "/../components/header.php";
require_once __DIR__ . "/../components/navbar.php";
?>

<div class="min-h-screen bg-background">
  <!-- Hero Banner -->
  <section class="relative py-16 lg:py-20 overflow-hidden">
    <div
      class="absolute inset-0 bg-cover bg-center bg-no-repeat"
      style="background-image: url('../assets/images/conference-photo.jpg');"
    ></div>
    <div class="absolute inset-0 bg-accent/90"></div>
    <div class="container relative z-10 px-6">
      <div class="max-w-4xl mx-auto">
        <a
          href="conference.php"
          class="inline-flex items-center gap-2 text-sm font-body text-accent-foreground/70 hover:text-secondary transition-colors mb-6"
        >
          <?php icon_chevron_left("w-4 h-4"); ?>
          Back to Conference
        </a>
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-accent-foreground mb-4">
          Exhibitor Information
        </h1>
        <p class="text-lg font-body text-accent-foreground/80 mb-2">
          FMEA 2026 Professional Learning Conference
        </p>
        <div class="flex flex-wrap items-center gap-4 text-sm font-body text-accent-foreground/60">
          <span class="flex items-center gap-1.5">
            <?php icon_calendar("w-4 h-4"); ?>
            January 14–17, 2026
          </span>
          <span class="flex items-center gap-1.5">
            <?php icon_map_pin("w-4 h-4"); ?>
            Tampa Convention Center
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- Breadcrumbs -->
  <div class="bg-muted border-b border-border">
    <div class="container px-6">
      <nav class="flex items-center gap-1.5 py-3 text-sm font-body text-muted-foreground max-w-4xl mx-auto">
        <a href="home.php" class="hover:text-primary transition-colors">Home</a>
        <span class="w-3.5 h-3.5 border-b border-r border-muted-foreground rotate-45 inline-block"></span>
        <a href="conference.php" class="hover:text-primary transition-colors">Conference</a>
        <span class="w-3.5 h-3.5 border-b border-r border-muted-foreground rotate-45 inline-block"></span>
        <span class="text-foreground font-medium">Exhibitor Information</span>
      </nav>
    </div>
  </div>

  <main class="bg-background">
    <!-- Intro -->
    <section class="container px-6 py-16">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">
          Exhibit at the FMEA Conference
        </h2>
        <p class="font-body text-muted-foreground leading-relaxed mb-6">
          The FMEA Conference is host to over 10,000 attendees, including music educators, music education majors,
          professors, music supervisors, professional musicians, school administrators, K-12 students, and their parents
          and chaperones. More than 300 events will include professional learning clinic sessions, keynote speakers,
          meetings, and performances by world-class musicians and Florida's finest student musicians.
        </p>
        <p class="font-body text-muted-foreground leading-relaxed">
          The exhibit hall is a key feature of the conference experience, providing attendees with the opportunity to explore
          the latest products, services, and innovations in music education.
        </p>
      </div>
    </section>

    <!-- Why Exhibit -->
    <section class="bg-muted">
      <div class="container px-6 py-16">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-8">
            Why Exhibit?
          </h2>
          <div class="grid gap-4">
            <?php
            $reasons = [
              "Access to over 10,000 attendees including music educators, college students, and administrators",
              "Network with K-12 music teachers and college music professors from across Florida",
              "Showcase your products and services to key decision-makers in music education",
              "Participate in Product Showcase sessions to demonstrate your offerings",
              "Visibility throughout the 4-day conference at the Tampa Convention Center",
              "Complimentary exhibitor badges for booth staff",
            ];
            foreach ($reasons as $reason): ?>
              <div class="flex items-start gap-3">
                <?php icon_check_circle("w-5 h-5 text-primary mt-0.5 flex-shrink-0"); ?>
                <p class="font-body text-muted-foreground">
                  <?php echo htmlspecialchars($reason, ENT_QUOTES, "UTF-8"); ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Booth Types -->
    <section class="container px-6 py-16">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-8">
          Booth Options
        </h2>
        <div class="grid md:grid-cols-3 gap-6">
          <?php
          $boothTypes = [
            [
              "name" => "Standard Booth",
              "size" => "10' x 10'",
              "description" => "Includes pipe & drape, one 6' skirted table, two chairs, company ID sign, and one electrical outlet.",
            ],
            [
              "name" => "Double Booth",
              "size" => "10' x 20'",
              "description" => "Two standard booths combined for greater visibility and display space.",
            ],
            [
              "name" => "Island Booth",
              "size" => "20' x 20'",
              "description" => "Premium open-floor display area with exposure from all sides.",
            ],
          ];
          foreach ($boothTypes as $booth): ?>
            <div class="bg-card rounded-xl border border-border p-6">
              <h3 class="font-display font-bold text-lg text-foreground mb-1">
                <?php echo htmlspecialchars($booth["name"], ENT_QUOTES, "UTF-8"); ?>
              </h3>
              <p class="text-sm font-body font-semibold text-primary mb-3">
                <?php echo htmlspecialchars($booth["size"], ENT_QUOTES, "UTF-8"); ?>
              </p>
              <p class="font-body text-sm text-muted-foreground leading-relaxed">
                <?php echo htmlspecialchars($booth["description"], ENT_QUOTES, "UTF-8"); ?>
              </p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Exhibit Hall Schedule -->
    <section class="bg-muted">
      <div class="container px-6 py-16">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-8">
            Exhibit Hall Schedule
          </h2>
          <div class="space-y-3">
            <?php
            $schedule = [
              ["day" => "Wednesday, January 14", "time" => "12:00 PM – 6:00 PM", "event" => "Exhibitor Move-In"],
              ["day" => "Thursday, January 15", "time" => "9:00 AM – 5:00 PM", "event" => "Exhibit Hall Open"],
              ["day" => "Friday, January 16",  "time" => "9:00 AM – 5:00 PM", "event" => "Exhibit Hall Open"],
              ["day" => "Saturday, January 17","time" => "9:00 AM – 1:00 PM", "event" => "Exhibit Hall Open & Move-Out"],
            ];
            foreach ($schedule as $item): ?>
              <div class="bg-card rounded-xl border border-border p-5 flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6">
                <div class="sm:w-48 flex-shrink-0">
                  <p class="font-body font-bold text-sm text-primary">
                    <?php echo htmlspecialchars($item["day"], ENT_QUOTES, "UTF-8"); ?>
                  </p>
                </div>
                <p class="font-body text-sm text-muted-foreground">
                  <?php echo htmlspecialchars($item["time"], ENT_QUOTES, "UTF-8"); ?> — <?php echo htmlspecialchars($item["event"], ENT_QUOTES, "UTF-8"); ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Key Dates -->
    <section class="container px-6 py-16">
      <div class="text-center">
        <div class="flex items-center justify-center gap-3 mb-10">
          <span class="w-6 h-6 rounded-full border border-primary"></span>
          <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground">
            Key Dates for Exhibitors
          </h2>
        </div>
        <div class="max-w-xl mx-auto relative">
          <div class="absolute left-1/2 top-0 bottom-0 w-0.5 -translate-x-1/2 bg-primary/20"></div>
          <div class="flex flex-col gap-6">
            <?php
            $keyDates = [
              "March 1, 2025" => "Priority booth selection deadline for returning exhibitors",
              "July 15, 2025" => "Product Showcase application deadline",
              "October 1, 2025" => "Exhibitor service kit available online",
              "December 12, 2025" => "Early registration deadline",
              "January 14, 2026" => "Exhibitor move-in begins",
            ];
            $index = 0;
            foreach ($keyDates as $date => $description):
              $index++;
            ?>
              <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left">
                <?php if ($index > 1): ?>
                  <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full bg-primary border-2 border-background z-10"></div>
                <?php endif; ?>
                <p class="font-body font-bold text-sm text-primary mb-1">
                  <?php echo htmlspecialchars($date, ENT_QUOTES, "UTF-8"); ?>
                </p>
                <p class="font-body text-sm text-muted-foreground leading-relaxed">
                  <?php echo htmlspecialchars($description, ENT_QUOTES, "UTF-8"); ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact / CTA -->
    <section class="bg-primary">
      <div class="container px-6 py-16">
        <div class="max-w-4xl mx-auto text-center">
          <h2 class="text-2xl md:text-3xl font-display font-bold text-primary-foreground mb-4">
            Ready to Exhibit?
          </h2>
          <p class="font-body text-primary-foreground/80 mb-8 max-w-2xl mx-auto">
            Reserve your booth today to secure your preferred location. Returning exhibitors receive priority placement when reserving by March 1.
          </p>
          <div class="flex flex-wrap gap-4 justify-center mb-8">
            <a
              href="#"
              class="inline-flex items-center px-6 py-3 rounded-md bg-secondary text-secondary-foreground text-sm font-body font-semibold hover:bg-secondary/90"
            >
              Reserve Your Booth
              <span class="ml-2 w-4 h-4 border-b border-r border-current rotate-45 block"></span>
            </a>
            <a
              href="#"
              class="inline-flex items-center px-6 py-3 rounded-md bg-primary-foreground/20 text-primary-foreground border border-primary-foreground/40 text-sm font-body hover:bg-primary-foreground/30"
            >
              Download Exhibitor Kit
            </a>
          </div>
          <div class="flex flex-wrap items-center justify-center gap-6 text-sm font-body text-primary-foreground/70">
            <a href="mailto:exhibits@fmea.org" class="flex items-center gap-2 hover:text-secondary transition-colors">
              <?php icon_mail("w-4 h-4"); ?>
              exhibits@fmea.org
            </a>
            <a href="tel:8005057220" class="flex items-center gap-2 hover:text-secondary transition-colors">
              <?php icon_phone("w-4 h-4"); ?>
              (800) 505-7220
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php include __DIR__ . "/../components/footer.php"; ?>

