<?php
$page_title = "About FMEA";
$rootPrefix = "..";

require_once __DIR__ . "/../components/header.php";
require_once __DIR__ . "/../components/navbar.php";
?>

<div class="min-h-screen bg-background">
  <!-- Hero Banner -->
  <section class="relative py-16 lg:py-20 overflow-hidden">
    <div
      class="absolute inset-0 bg-cover bg-top bg-no-repeat"
      style="background-image: url('../assets/images/about-feature.jpg');"
    ></div>
    <div class="absolute inset-0 bg-accent/90"></div>
    <div class="container relative z-10 px-6">
      <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-accent-foreground mb-4">
          About FMEA
        </h1>
        <p class="text-lg font-body text-accent-foreground/80">
          The Florida Music Education Association
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
        <span class="text-foreground font-medium">/ About</span>
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
              src="../assets/images/about-feature.jpg"
              alt="Students playing instruments together in a music classroom"
              class="w-full h-64 md:h-full object-cover rounded-xl"
            />
          </div>
          <div class="flex-1">
            <p class="font-body text-muted-foreground leading-relaxed mb-4">
              FMEA is a not-for-profit 501(c)(3) organization dedicated to advancing music education across Florida.
              We publish the <em>Florida Music Director</em> magazine, organize professional development opportunities,
              and advocate for music education at the state and national level.
            </p>
            <p class="font-body text-muted-foreground leading-relaxed">
              Founded in 1944, FMEA is the state affiliate of NAfME, representing educators from elementary general music
              through university programs.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Mission Statement -->
    <section class="container px-6 pb-16">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">
          Our Mission
        </h2>
        <blockquote class="border-l-4 border-secondary pl-6">
          <p class="text-xl font-display italic text-foreground/90 leading-relaxed">
            The mission of the Florida Music Education Association is to promote quality, comprehensive music education in all Florida schools.
          </p>
        </blockquote>
      </div>
    </section>

    <!-- Highlights -->
    <section class="bg-muted">
      <div class="container px-6 py-16">
        <div class="max-w-4xl mx-auto">
          <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <?php
            $highlights = [
              ["value" => "6,000+", "label" => "Active Members"],
              ["value" => "85+", "label" => "Years of Service"],
              ["value" => "67", "label" => "Florida Counties"],
              ["value" => "501(c)(3)", "label" => "Nonprofit Status"],
            ];
            foreach ($highlights as $stat): ?>
              <div class="bg-card rounded-xl border border-border p-6 text-center">
                <span class="block text-2xl font-display font-bold text-primary mb-1">
                  <?php echo htmlspecialchars($stat["value"], ENT_QUOTES, "UTF-8"); ?>
                </span>
                <span class="text-sm font-body text-muted-foreground">
                  <?php echo htmlspecialchars($stat["label"], ENT_QUOTES, "UTF-8"); ?>
                </span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- What We Do -->
    <section class="container px-6 py-16">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">
          What We Do
        </h2>
        <div class="grid md:grid-cols-2 gap-6">
          <div class="bg-card rounded-xl border border-border overflow-hidden">
            <div class="w-full h-40 bg-cover bg-center" style="background-image: url('../assets/images/plc.png');"></div>
            <div class="p-6">
              <h3 class="font-display font-bold text-lg text-foreground mb-2">Professional Development</h3>
              <p class="font-body text-sm text-muted-foreground leading-relaxed">
                FMEA organizes the annual Professional Learning Conference — one of the largest music education conferences in the nation — along with year-round workshops, webinars, and online learning opportunities.
              </p>
            </div>
          </div>
          <div class="bg-card rounded-xl border border-border overflow-hidden">
            <div class="w-full h-40 bg-cover bg-center" style="background-image: url('../assets/images/all-state.jpg');"></div>
            <div class="p-6">
              <h3 class="font-display font-bold text-lg text-foreground mb-2">All-State Ensembles</h3>
              <p class="font-body text-sm text-muted-foreground leading-relaxed">
                Each year, FMEA coordinates auditions and performances for 24 All-State ensembles, giving Florida's finest student musicians the opportunity to perform under nationally renowned conductors.
              </p>
            </div>
          </div>
          <div class="bg-card rounded-xl border border-border overflow-hidden">
            <div class="w-full h-40 bg-cover bg-center" style="background-image: url('../assets/images/capital.png');"></div>
            <div class="p-6">
              <h3 class="font-display font-bold text-lg text-foreground mb-2">Advocacy</h3>
              <p class="font-body text-sm text-muted-foreground leading-relaxed">
                FMEA advocates for music education at the state and national levels, working with legislators and education leaders to ensure every Florida student has access to a quality music education.
              </p>
            </div>
          </div>
          <div class="bg-card rounded-xl border border-border overflow-hidden">
            <div class="w-full h-40 bg-cover bg-center" style="background-image: url('../assets/images/students.jpg');"></div>
            <div class="p-6">
              <h3 class="font-display font-bold text-lg text-foreground mb-2">Publications & Research</h3>
              <p class="font-body text-sm text-muted-foreground leading-relaxed">
                FMEA publishes the <em>Florida Music Director</em> magazine and supports music education research, providing educators with resources and the latest developments in the field.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Leadership -->
    <section class="container px-6 py-16">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">
          Leadership
        </h2>
        <p class="font-body text-muted-foreground leading-relaxed mb-6">
          FMEA is governed by an elected Board of Directors composed of music educators from across the state.
          The organization is led by the Executive Director, Dr. Kathleen D. Sanz, and a team of dedicated staff
          based at the Hinckley Center for Fine Arts Education in Tallahassee.
        </p>
        <div class="bg-card rounded-xl border border-border p-6">
          <h3 class="font-display font-bold text-lg text-foreground mb-1">
            Dr. Kathleen D. Sanz
          </h3>
          <p class="text-sm font-body text-primary font-semibold mb-3">Executive Director</p>
          <p class="font-body text-sm text-muted-foreground leading-relaxed">
            Dr. Sanz has led the organization for over two decades, advancing FMEA's mission through strategic partnerships,
            advocacy efforts, and the expansion of professional development programs for Florida's music educators.
          </p>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="bg-primary">
      <div class="container px-6 py-16">
        <div class="max-w-4xl mx-auto text-center">
          <h2 class="text-2xl md:text-3xl font-display font-bold text-primary-foreground mb-4">
            Get in Touch
          </h2>
          <p class="font-body text-primary-foreground/80 mb-8 max-w-2xl mx-auto">
            Have questions about FMEA or music education in Florida? We'd love to hear from you.
          </p>
          <div class="flex flex-wrap items-center justify-center gap-6 text-sm font-body text-primary-foreground/70 mb-4">
            <span class="flex items-center gap-2">
              <?php icon_map_pin("w-4 h-4"); ?>
              402 Office Plaza Drive, Tallahassee, FL 32301
            </span>
          </div>
          <div class="flex flex-wrap items-center justify-center gap-6 text-sm font-body text-primary-foreground/70">
            <a href="tel:8508786844" class="flex items-center gap-2 hover:text-secondary transition-colors">
              <?php icon_phone("w-4 h-4"); ?>
              (850) 878-6844
            </a>
            <a href="mailto:info@fmea.org" class="flex items-center gap-2 hover:text-secondary transition-colors">
              <?php icon_mail("w-4 h-4"); ?>
              info@fmea.org
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php include __DIR__ . "/../components/footer.php"; ?>

