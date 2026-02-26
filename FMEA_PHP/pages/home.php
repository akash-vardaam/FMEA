<?php
$page_title = "FMEA – Florida Music Education Association";
$rootPrefix = "..";

require_once __DIR__ . "/../components/header.php";
require_once __DIR__ . "/../components/navbar.php";
?>

<main class="min-h-screen bg-background">
  <!-- 1. Hero Section -->
  <section class="relative min-h-[70vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
      style="background-image: url('<?php echo $rootPrefix; ?>/assets/images/hero-cellos.png');"></div>
    <div class="absolute inset-0 bg-accent/85"></div>
    <div class="container relative z-10 px-6 py-20">
      <div class="max-w-4xl mx-auto text-center animate-fade-in">
        <h1
          class="text-4xl md:text-5xl lg:text-6xl font-display font-bold text-primary-foreground tracking-tight leading-[1.1] mb-6">
          Advancing Music </br> Education
          <span class="text-secondary italic inline md:inline">Across Florida</span>
        </h1>
        <p class="text-lg md:text-xl font-body text-primary-foreground/85 leading-relaxed mb-8">
          Connect, learn, and advocate for the future of music education in the Sunshine State.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="conference.php"
            class="inline-flex items-center justify-center px-8 py-3 rounded-md bg-secondary text-secondary-foreground font-body font-semibold text-base hover:bg-secondary/90 transition-all">
            Explore Programs
          </a>
          <a href="#"
            class="inline-flex items-center justify-center px-8 py-3 rounded-md border-2 border-primary-foreground/60 bg-primary-foreground/15 text-primary-foreground font-body font-semibold text-base hover:bg-primary-foreground/25 backdrop-blur-sm transition-all">
            Donate
          </a>
        </div>
        <div class="flex justify-center gap-8 mt-12 pt-8 border-t border-primary-foreground/20">
          <div>
            <span class="block text-3xl font-display font-bold text-primary-foreground">6,000+</span>
            <span class="text-sm font-body text-primary-foreground/70">Active Members</span>
          </div>
          <div>
            <span class="block text-3xl font-display font-bold text-primary-foreground">85+</span>
            <span class="text-sm font-body text-primary-foreground/70">Years of Excellence</span>
          </div>
          <div>
            <span class="block text-3xl font-display font-bold text-primary-foreground">67</span>
            <span class="text-sm font-body text-primary-foreground/70">Florida Counties</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. Quick Actions Bar -->
  <section class="py-6 bg-background -mt-8 relative z-20 flex justify-center">
    <div class="container px-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-card rounded-xl p-5 shadow-sm border border-border">
          <h3 class="font-display text-sm font-semibold uppercase tracking-wider mb-4 text-primary">Educators</h3>
          <div class="flex flex-col gap-2">
            <a href="membership-benefits.php"
              class="bg-primary hover:bg-primary/90 text-primary-foreground rounded-lg px-4 py-3 flex items-center gap-3 text-sm font-medium shadow-sm transition-all">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <line x1="19" y1="8" x2="19" y2="14" />
                <line x1="22" y1="11" x2="16" y2="11" />
              </svg>
              Join / Renew
            </a>
            <a href="conference.php"
              class="bg-primary hover:bg-primary/90 text-primary-foreground rounded-lg px-4 py-3 flex items-center gap-3 text-sm font-medium shadow-sm transition-all">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2" />
                <line x1="16" y1="2" x2="16" y2="6" />
                <line x1="8" y1="2" x2="8" y2="6" />
                <line x1="3" y1="10" x2="21" y2="10" />
              </svg>
              Conference
            </a>
            <a href="#"
              class="bg-primary hover:bg-primary/90 text-primary-foreground rounded-lg px-4 py-3 flex items-center gap-3 text-sm font-medium shadow-sm transition-all">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="m3 11 18-5v12L3 14v-3z" />
                <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6" />
              </svg>
              Advocacy
            </a>
          </div>
        </div>
        <div class="bg-card rounded-xl p-5 shadow-sm border border-border">
          <h3 class="font-display text-sm font-semibold uppercase tracking-wider mb-4 text-primary">Students</h3>
          <div class="flex flex-col gap-2">
            <a href="#"
              class="bg-[#E8DCC8] hover:bg-[#DED0B8] text-primary rounded-lg px-4 py-3 flex items-center gap-3 text-sm font-medium shadow-sm transition-all">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 18V5l12-2v13" />
                <circle cx="6" cy="18" r="3" />
                <circle cx="18" cy="16" r="3" />
              </svg>
              All-State
            </a>
            <a href="#"
              class="bg-[#E8DCC8] hover:bg-[#DED0B8] text-primary rounded-lg px-4 py-3 flex items-center gap-3 text-sm font-medium shadow-sm transition-all">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="8" r="7" />
                <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88" />
              </svg>
              Competitions
            </a>
            <a href="#"
              class="bg-[#E8DCC8] hover:bg-[#DED0B8] text-primary rounded-lg px-4 py-3 flex items-center gap-3 text-sm font-medium shadow-sm transition-all">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2" />
                <line x1="16" y1="2" x2="16" y2="6" />
                <line x1="8" y1="2" x2="8" y2="6" />
                <line x1="3" y1="10" x2="21" y2="10" />
              </svg>
              Programs
            </a>
          </div>
        </div>
        <div class="bg-card rounded-xl p-5 shadow-sm border border-border">
          <h3 class="font-display text-sm font-semibold uppercase tracking-wider mb-4 text-accent">New to FMEA?</h3>
          <div class="flex flex-col gap-2">
            <a href="about.php"
              class="bg-accent hover:bg-accent/90 text-accent-foreground rounded-lg px-4 py-3 flex items-center gap-3 text-sm font-medium shadow-sm transition-all">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
              </svg>
              Organization Info
            </a>
            <a href="membership-benefits.php"
              class="bg-accent hover:bg-accent/90 text-accent-foreground rounded-lg px-4 py-3 flex items-center gap-3 text-sm font-medium shadow-sm transition-all">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="8" r="7" />
                <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88" />
              </svg>
              Membership Benefits
            </a>
            <a href="#"
              class="bg-accent hover:bg-accent/90 text-accent-foreground rounded-lg px-4 py-3 flex items-center gap-3 text-sm font-medium shadow-sm transition-all">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <line x1="19" y1="8" x2="19" y2="14" />
                <line x1="22" y1="11" x2="16" y2="11" />
              </svg>
              Application Process
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. Mission Section -->
  <section class="py-20 bg-background">
    <div class="container px-6">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="animate-fade-in">
          <span
            class="inline-flex items-center gap-2 text-sm font-body font-medium text-primary tracking-widest uppercase mb-4">
            <span class="w-8 h-px bg-primary"></span>
            About FMEA
          </span>
          <h2
            class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-foreground tracking-tight leading-tight mb-6">
            Championing Music Education for <span class="text-primary italic">Every Student</span>
          </h2>
          <p class="text-lg font-body text-muted-foreground leading-relaxed mb-6">
            The Florida Music Education Association serves as the unified voice for music educators throughout Florida.
            We provide professional development, advocacy, and community to ensure every student has access to quality
            music instruction.
          </p>
          <p class="text-base font-body text-muted-foreground leading-relaxed mb-8">
            From elementary general music to high school marching bands, from college theory classes to community
            orchestras—FMEA supports music educators at every level and in every discipline.
          </p>
          <a href="about.php"
            class="inline-flex items-center justify-center border border-input h-10 px-6 font-body font-medium rounded hover:bg-accent hover:text-accent-foreground group transition-colors">
            Learn More About FMEA
            <span class="ml-2 group-hover:translate-x-1 transition-transform">→</span>
          </a>
        </div>
        <div class="space-y-6 animate-fade-in" style="animation-delay: 200ms">
          <div class="bg-card rounded-xl p-6 border border-border shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-start gap-4">
              <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <circle cx="12" cy="12" r="6" />
                  <circle cx="12" cy="12" r="2" />
                </svg>
              </div>
              <div>
                <h3 class="font-display font-semibold text-xl text-foreground mb-2">Our Mission</h3>
                <p class="font-body text-muted-foreground">To advance comprehensive music education for all students in
                  Florida schools through advocacy, professional development, and collaborative support.</p>
              </div>
            </div>
          </div>
          <div class="bg-card rounded-xl p-6 border border-border shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-start gap-4">
              <div class="w-14 h-14 rounded-full bg-secondary/30 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-secondary-foreground" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
              </div>
              <div>
                <h3 class="font-display font-semibold text-xl text-foreground mb-2">Our Community</h3>
                <p class="font-body text-muted-foreground">A network of over 6,000 music educators, administrators,
                  college faculty, students, and industry partners working together across all 67 Florida counties.</p>
              </div>
            </div>
          </div>
          <div class="bg-card rounded-xl p-6 border border-border shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-start gap-4">
              <div class="w-14 h-14 rounded-full bg-accent/10 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="8" r="7" />
                  <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88" />
                </svg>
              </div>
              <div>
                <h3 class="font-display font-semibold text-xl text-foreground mb-2">Our Impact</h3>
                <p class="font-body text-muted-foreground">For over 85 years, FMEA has shaped music education policy,
                  recognized excellence through awards, and celebrated student achievement through All-State programs.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Featured Programs -->
  <section class="py-20 bg-muted">
    <div class="container px-6">
      <div class="text-center mb-16 animate-fade-in">
        <span
          class="inline-flex items-center gap-2 text-sm font-body font-medium text-primary tracking-widest uppercase mb-4">
          <span class="w-8 h-px bg-primary"></span>
          What We Do
          <span class="w-8 h-px bg-primary"></span>
        </span>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-foreground tracking-tight">Programs &
          Initiatives</h2>
        <p class="mt-4 text-lg font-body text-muted-foreground max-w-2xl mx-auto">From professional development to
          student recognition, discover how FMEA supports music education at every level.</p>
      </div>
      <div class="grid md:grid-cols-2 gap-8">
        <!-- Program 1: PLC -->
        <a href="conference.php"
          class="group bg-card rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all animate-fade-in">
          <div class="relative h-48 overflow-hidden">
            <img src="<?php echo $rootPrefix; ?>/assets/images/plc.png" alt="Professional Learning Conference"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-foreground/60 to-transparent"></div>
            <span
              class="absolute bottom-4 left-4 px-3 py-1 bg-primary text-primary-foreground text-xs font-body font-semibold rounded-full">January
              14-17, 2026</span>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="4" width="18" height="18" rx="2" />
                  <line x1="16" y1="2" x2="16" y2="6" />
                  <line x1="8" y1="2" x2="8" y2="6" />
                  <line x1="3" y1="10" x2="21" y2="10" />
                </svg>
              </div>
              <h3 class="text-xl font-display font-bold text-foreground group-hover:text-primary transition-colors">
                Professional Learning Conference</h3>
            </div>
            <p class="font-body text-muted-foreground text-sm leading-relaxed mb-4">Florida's largest gathering of music
              educators featuring world-class clinicians, hands-on workshops, and the celebrated All-State concerts.</p>
            <div class="flex flex-wrap gap-2">
              <span
                class="text-xs font-body font-medium px-2 py-1 bg-primary text-primary-foreground rounded-full border border-primary">Educators</span>
              <span
                class="text-xs font-body font-medium px-2 py-1 bg-accent text-accent-foreground rounded-full border border-accent">Collegiate</span>
              <span
                class="text-xs font-body font-medium px-2 py-1 bg-brand-charcoal text-white rounded-full border border-brand-charcoal">Administrators</span>
            </div>
          </div>
        </a>

        <!-- Program 2: All-State -->
        <a href="#"
          class="group bg-card rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all animate-fade-in"
          style="animation-delay: 100ms">
          <div class="relative h-48 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1465847899084-d164df4dedc6?w=600&h=400&fit=crop"
              alt="All-State Ensembles"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-foreground/60 to-transparent"></div>
            <span
              class="absolute bottom-4 left-4 px-3 py-1 bg-primary text-primary-foreground text-xs font-body font-semibold rounded-full">Auditions
              Open</span>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M9 18V5l12-2v13" />
                  <circle cx="6" cy="18" r="3" />
                  <circle cx="18" cy="16" r="3" />
                </svg>
              </div>
              <h3 class="text-xl font-display font-bold text-foreground group-hover:text-primary transition-colors">
                All-State Ensembles</h3>
            </div>
            <p class="font-body text-muted-foreground text-sm leading-relaxed mb-4">Honor ensembles showcasing Florida's
              most talented student musicians in concert band, orchestra, chorus, and jazz.</p>
            <div class="flex flex-wrap gap-2">
              <span
                class="text-xs font-body font-medium px-2 py-1 bg-secondary-dark text-white rounded-full border border-secondary-dark">Students</span>
              <span
                class="text-xs font-body font-medium px-2 py-1 bg-primary text-primary-foreground rounded-full border border-primary">Educators</span>
            </div>
          </div>
        </a>

        <!-- Program 3: Student & Collegiate -->
        <a href="#"
          class="group bg-card rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all animate-fade-in"
          style="animation-delay: 200ms">
          <div class="relative h-48 overflow-hidden">
            <img src="<?php echo $rootPrefix; ?>/assets/images/students.jpg" alt="Student & Collegiate Programs"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-foreground/60 to-transparent"></div>
            <span
              class="absolute bottom-4 left-4 px-3 py-1 bg-primary text-primary-foreground text-xs font-body font-semibold rounded-full">For
              Students</span>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path
                    d="M21.42 10.922L12 15.666 2.58 10.922m18.84 0L12 6.177 2.58 10.922m18.84 0v6.177L12 21.823l-9.42-4.724V10.922" />
                  <path d="M3 10.25v7l9 4.5 9-4.5v-7" />
                </svg>
              </div>
              <h3 class="text-xl font-display font-bold text-foreground group-hover:text-primary transition-colors">
                Student & Collegiate Programs</h3>
            </div>
            <p class="font-body text-muted-foreground text-sm leading-relaxed mb-4">From Solo & Ensemble MPA to
              collegiate scholarships and professional development for future educators.</p>
            <div class="flex flex-wrap gap-2">
              <span
                class="text-xs font-body font-medium px-2 py-1 bg-secondary-dark text-white rounded-full border border-secondary-dark">Students</span>
              <span
                class="text-xs font-body font-medium px-2 py-1 bg-accent text-accent-foreground rounded-full border border-accent">Collegiate</span>
            </div>
          </div>
        </a>

        <!-- Program 4: Advocacy -->
        <a href="#"
          class="group bg-card rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all animate-fade-in"
          style="animation-delay: 300ms">
          <div class="relative h-48 overflow-hidden">
            <img src="<?php echo $rootPrefix; ?>/assets/images/capital.png" alt="Advocacy & Leadership"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-foreground/60 to-transparent"></div>
            <span
              class="absolute bottom-4 left-4 px-3 py-1 bg-primary text-primary-foreground text-xs font-body font-semibold rounded-full">Take
              Action</span>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="m3 11 18-5v12L3 14v-3z" />
                  <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6" />
                </svg>
              </div>
              <h3 class="text-xl font-display font-bold text-foreground group-hover:text-primary transition-colors">
                Advocacy & Leadership</h3>
            </div>
            <p class="font-body text-muted-foreground text-sm leading-relaxed mb-4">Making the case for music education
              at the state and local level. Resources, research, and direct action.</p>
            <div class="flex flex-wrap gap-2">
              <span
                class="text-xs font-body font-medium px-2 py-1 bg-primary text-primary-foreground rounded-full border border-primary">Educators</span>
              <span
                class="text-xs font-body font-medium px-2 py-1 bg-brand-charcoal text-white rounded-full border border-brand-charcoal">Administrators</span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- 5. Advertisement Scroll -->
  <section class="py-8 bg-secondary/30 flex justify-center">
    <div class="container px-6">
      <div class="relative flex items-center gap-4">
        <button type="button"
          class="flex-shrink-0 bg-card hover:bg-muted w-10 h-10 rounded-md flex items-center justify-center border border-border shadow-sm transition-colors"
          data-slider-prev="ads">❮</button>
        <div class="flex gap-6 overflow-hidden scroll-smooth max-w-[948px] mx-auto py-2" data-slider-content="ads">
          <?php
          $ads = [
            ["name" => "Yamaha Music", "tagline" => "Performance. Passion. Purpose."],
            ["name" => "Jupiter Instruments", "tagline" => "Inspiring Musicians"],
            ["name" => "Conn-Selmer", "tagline" => "The Choice of Artists"],
            ["name" => "Hal Leonard", "tagline" => "Sheet Music & More"],
            ["name" => "J.W. Pepper", "tagline" => "World's Largest Sheet Music Store"],
            ["name" => "Music & Arts", "tagline" => "Rent. Buy. Play."],
          ];
          foreach ($ads as $ad): ?>
            <a href="#"
              class="flex-shrink-0 w-[265px] sm:w-[300px] h-[250px] bg-card rounded-lg border border-border shadow-sm hover:shadow-md transition-shadow flex flex-col items-center justify-center gap-2">
              <span
                class="text-lg font-display font-bold text-foreground text-center px-4"><?php echo $ad['name']; ?></span>
              <span class="text-sm font-body text-muted-foreground text-center px-4"><?php echo $ad['tagline']; ?></span>
              <span class="text-xs text-muted-foreground/50 mt-2">300×250 Ad</span>
            </a>
          <?php endforeach; ?>
        </div>
        <button type="button"
          class="flex-shrink-0 bg-card hover:bg-muted w-10 h-10 rounded-md flex items-center justify-center border border-border shadow-sm transition-colors"
          data-slider-next="ads">❯</button>
      </div>
    </div>
  </section>

  <!-- 6. Conference Banner -->
  <section class="bg-accent overflow-hidden flex justify-center">
    <div class="flex flex-col lg:flex-row w-screen">
      <div class="lg:w-1/2 h-64 lg:h-auto">
        <img src="<?php echo $rootPrefix; ?>/assets/images/conference-photo.jpg"
          alt="FMEA Professional Learning Conference" class="w-full h-full object-cover">
      </div>
      <div class="lg:w-1/2 px-8 py-12 lg:px-12 lg:py-16 flex items-center">
        <div class="w-full animate-fade-in">
          <span
            class="inline-block px-3 py-1 text-xs font-body font-semibold uppercase tracking-wider text-secondary bg-accent-foreground/10 rounded-full mb-4">Featured
            Event</span>
          <h2 class="text-2xl md:text-3xl font-display font-bold text-accent-foreground">2026 Professional Learning
            Conference</h2>
          <p class="text-accent-foreground/80 font-body mt-2 mb-8">January 14–17, 2026 • Tampa Convention Center</p>
          <div class="flex flex-wrap gap-6 mb-8">
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 rounded-full bg-accent-foreground/10 flex items-center justify-center">
                <span class="text-secondary font-display font-bold text-sm">250+</span>
              </div>
              <span class="font-body font-medium text-accent-foreground text-sm">Clinic Sessions</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 rounded-full bg-accent-foreground/10 flex items-center justify-center">
                <span class="text-secondary font-display font-bold text-sm">50+</span>
              </div>
              <span class="font-body font-medium text-accent-foreground text-sm">Exhibitors</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 rounded-full bg-accent-foreground/10 flex items-center justify-center">
                <span class="text-secondary font-display font-bold text-sm">24</span>
              </div>
              <span class="font-body font-medium text-accent-foreground text-sm">All-State Ensembles</span>
            </div>
          </div>
          <a href="conference.php"
            class="inline-flex items-center gap-2 font-body font-semibold px-6 py-3 rounded-lg bg-secondary text-secondary-foreground hover:bg-secondary/90 transition-colors">
            Learn More & Register <span>→</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Membership Value -->
  <section class="py-20 bg-primary relative overflow-hidden flex justify-center">
    <div class="container px-6 relative z-10">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12 animate-fade-in">
          <span
            class="inline-flex items-center gap-2 text-sm font-body font-medium text-secondary tracking-widest uppercase mb-4">
            <span class="w-8 h-px bg-secondary"></span>
            Membership
            <span class="w-8 h-px bg-secondary"></span>
          </span>
          <h2
            class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-primary-foreground tracking-tight leading-tight mb-6">
            Your Investment in <span class="text-secondary italic">Music Education</span>
          </h2>
          <p class="text-lg font-body text-primary-foreground/85 leading-relaxed max-w-2xl mx-auto">Join the largest
            community of music educators in Florida. Your membership supports advocacy efforts, funds student programs,
            and gives you access to resources that elevate your teaching.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
          <div class="flex items-start gap-3 bg-primary-foreground/10 rounded-lg p-4 animate-fade-in">
            <div class="w-10 h-10 rounded-full bg-primary-foreground/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-5 h-5 text-secondary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 3h6a4 4 0 0 1 4 4v14a4 4 0 0 0-4-4H2z" />
                <path d="M22 3h-6a4 4 0 0 0-4 4v14a4 4 0 0 1 4-4h6z" />
              </svg>
            </div>
            <div>
              <h4 class="font-body font-semibold text-primary-foreground text-sm">Professional Development</h4>
              <p class="text-xs font-body text-primary-foreground/70 mt-1">Access to workshops, webinars, and the annual
                conference at member rates</p>
            </div>
          </div>
          <div class="flex items-start gap-3 bg-primary-foreground/10 rounded-lg p-4 animate-fade-in"
            style="animation-delay: 100ms">
            <div class="w-10 h-10 rounded-full bg-primary-foreground/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-5 h-5 text-secondary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
              </svg>
            </div>
            <div>
              <h4 class="font-body font-semibold text-primary-foreground text-sm">Statewide Network</h4>
              <p class="text-xs font-body text-primary-foreground/70 mt-1">Connect with 6,000+ music educators across
                all disciplines and grade levels</p>
            </div>
          </div>
          <div class="flex items-start gap-3 bg-primary-foreground/10 rounded-lg p-4 animate-fade-in"
            style="animation-delay: 200ms">
            <div class="w-10 h-10 rounded-full bg-primary-foreground/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-5 h-5 text-secondary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="8" r="7" />
                <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88" />
              </svg>
            </div>
            <div>
              <h4 class="font-body font-semibold text-primary-foreground text-sm">Recognition Programs</h4>
              <p class="text-xs font-body text-primary-foreground/70 mt-1">Nominate colleagues and students for state
                and national awards</p>
            </div>
          </div>
          <div class="flex items-start gap-3 bg-primary-foreground/10 rounded-lg p-4 animate-fade-in"
            style="animation-delay: 300ms">
            <div class="w-10 h-10 rounded-full bg-primary-foreground/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-5 h-5 text-secondary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
              </svg>
            </div>
            <div>
              <h4 class="font-body font-semibold text-primary-foreground text-sm">Career Resources</h4>
              <p class="text-xs font-body text-primary-foreground/70 mt-1">Job board access, mentorship programs, and
                professional advancement support</p>
            </div>
          </div>
          <div class="flex items-start gap-3 bg-primary-foreground/10 rounded-lg p-4 animate-fade-in"
            style="animation-delay: 400ms">
            <div class="w-10 h-10 rounded-full bg-primary-foreground/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-5 h-5 text-secondary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              </svg>
            </div>
            <div>
              <h4 class="font-body font-semibold text-primary-foreground text-sm">Advocacy Support</h4>
              <p class="text-xs font-body text-primary-foreground/70 mt-1">Legislative updates, advocacy tools, and a
                unified voice for music education</p>
            </div>
          </div>
          <div class="flex items-start gap-3 bg-primary-foreground/10 rounded-lg p-4 animate-fade-in"
            style="animation-delay: 500ms">
            <div class="w-10 h-10 rounded-full bg-primary-foreground/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-5 h-5 text-secondary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2" />
                <line x1="16" y1="2" x2="16" y2="6" />
                <line x1="8" y1="2" x2="8" y2="6" />
                <line x1="3" y1="10" x2="21" y2="10" />
              </svg>
            </div>
            <div>
              <h4 class="font-body font-semibold text-primary-foreground text-sm">Exclusive Events</h4>
              <p class="text-xs font-body text-primary-foreground/70 mt-1">Member-only sessions, networking events, and
                leadership opportunities</p>
            </div>
          </div>
        </div>
        <div class="text-center animate-fade-in">
          <a href="membership-benefits.php"
            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 h-11 rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/90 font-body font-semibold px-8">Join
            or Renew<span>→</span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. News & Deadlines Section -->
  <section class="py-20 bg-background">
    <div class="container px-6">
      <div class="grid lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2">
          <div class="flex items-center justify-between mb-8 animate-fade-in">
            <div>
              <span
                class="inline-flex items-center gap-2 text-sm font-body font-medium text-primary tracking-widest uppercase mb-2">Latest
                Updates</span>
              <h2 class="text-3xl md:text-4xl font-display font-bold text-foreground tracking-tight">News &
                Announcements</h2>
            </div>
            <a href="#"
              class="hidden sm:flex items-center gap-2 border border-input h-10 px-4 py-2 font-body text-sm rounded hover:bg-accent transition-colors">View
              All News <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg></a>
          </div>
          <div class="space-y-6">
            <?php
            $news = [
              ["type" => "announcement", "date" => "January 2, 2025", "title" => "2025 All-State Concert Schedule Announced", "excerpt" => "View the complete schedule for all All-State ensemble performances at the January conference in Tampa.", "featured" => true],
              ["type" => "news", "date" => "December 15, 2024", "title" => "FMEA Welcomes New Executive Director", "excerpt" => "The FMEA Board of Directors is pleased to announce the appointment of Dr. Maria Santos as Executive Director.", "featured" => false],
              ["type" => "news", "date" => "November 30, 2024", "title" => "Advocacy Update: New Legislation Affects Music Programs", "excerpt" => "Our advocacy team has analyzed several bills moving through the Florida legislature that could impact music education funding.", "featured" => false],
            ];
            foreach ($news as $item): ?>
              <a href="#"
                class="group block p-6 rounded-xl border border-border hover:border-primary/30 hover:shadow-md transition-all <?php echo $item['featured'] ? 'bg-muted' : 'bg-card'; ?> animate-fade-in">
                <div class="flex items-center gap-2 mb-3">
                  <span
                    class="px-2 py-1 text-xs font-body font-semibold rounded <?php echo $item['type'] === 'announcement' ? 'bg-primary text-primary-foreground' : 'bg-secondary text-secondary-foreground'; ?>"><?php echo ucfirst($item['type']); ?></span>
                  <span class="flex items-center gap-1 text-sm text-muted-foreground font-body"><svg class="w-3 h-3"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <rect x="3" y="4" width="18" height="18" rx="2" />
                      <line x1="16" y1="2" x2="16" y2="6" />
                      <line x1="8" y1="2" x2="8" y2="6" />
                      <line x1="3" y1="10" x2="21" y2="10" />
                    </svg>
                    <?php echo $item['date']; ?></span>
                </div>
                <h3
                  class="font-display font-semibold text-xl text-foreground group-hover:text-primary transition-colors mb-2">
                  <?php echo $item['title']; ?>
                </h3>
                <p class="font-body text-muted-foreground"><?php echo $item['excerpt']; ?></p>
                <span class="inline-flex items-center mt-4 text-sm font-body font-medium text-primary">Read More <span
                    class="ml-1 group-hover:translate-x-1 transition-transform">→</span></span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
        <div>
          <div class="mb-8 animate-fade-in">
            <span
              class="inline-flex items-center gap-2 text-sm font-body font-medium text-primary tracking-widest uppercase mb-2"><svg
                class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="12 6 12 12 16 14" />
              </svg>
              Important Dates</span>
            <h2 class="text-2xl font-display font-bold text-foreground tracking-tight">Upcoming Deadlines</h2>
          </div>
          <div class="bg-card rounded-xl border border-border overflow-hidden animate-fade-in">
            <div class="divide-y divide-border">
              <?php
              $deadlines = [
                ["date" => "January 5, 2025", "title" => "Conference Early Registration Ends", "urgent" => true],
                ["date" => "January 15, 2025", "title" => "Solo & Ensemble MPA Registration Opens", "urgent" => false],
                ["date" => "February 1, 2025", "title" => "Summer Workshop Proposals Due", "urgent" => false],
                ["date" => "March 15, 2025", "title" => "Award Nominations Deadline", "urgent" => false],
              ];
              foreach ($deadlines as $deadline): ?>
                <div class="p-4 hover:bg-muted/50 transition-colors">
                  <div class="flex items-start gap-3">
                    <?php if ($deadline['urgent']): ?>
                      <svg class="w-5 h-5 text-destructive flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="12" y1="8" x2="12" y2="12" />
                        <line x1="12" y1="16" x2="12.01" y2="16" />
                      </svg>
                    <?php endif; ?>
                    <div class="<?php echo !$deadline['urgent'] ? 'pl-8' : ''; ?>">
                      <span
                        class="block text-sm font-body font-semibold <?php echo $deadline['urgent'] ? 'text-destructive' : 'text-primary'; ?>"><?php echo $deadline['date']; ?></span>
                      <span class="font-body text-foreground"><?php echo $deadline['title']; ?></span>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="p-4 bg-muted/50">
              <a href="#" class="w-full inline-flex items-center justify-center font-body text-sm hover:underline">View
                Full Calendar <span class="ml-2">→</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. TestimonialsSection -->
  <section class="py-16 bg-muted flex justify-center">
    <div class="container px-6">
      <div class="text-center mb-12 animate-fade-in">
        <span
          class="inline-flex items-center gap-2 text-sm font-body font-medium text-primary tracking-widest uppercase mb-4">Member
          Voices</span>
        <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground tracking-tight">What Our Members Say</h2>
        <p class="mt-3 text-base font-body text-muted-foreground max-w-xl mx-auto">Hear from music educators across
          Florida about the impact of FMEA membership.</p>
      </div>
      <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
        <?php
        $testimonials = [
          ["quote" => "FMEA has been instrumental in my growth as a music educator. The professional development opportunities and networking have transformed my teaching.", "name" => "Sarah Mitchell", "role" => "Band Director"],
          ["quote" => "The annual conference is the highlight of my year. I always leave inspired with new ideas and resources to bring back to my classroom.", "name" => "Marcus Johnson", "role" => "Choral Director"],
          ["quote" => "Being part of this community has connected me with mentors who have shaped my career. FMEA truly supports educators at every stage.", "name" => "Emily Chen", "role" => "Orchestra Teacher"],
        ];
        foreach ($testimonials as $t): ?>
          <div class="bg-card rounded-xl p-6 border border-border shadow-sm animate-fade-in">
            <div class="text-primary/30 mb-4 text-2xl">❝</div>
            <blockquote class="text-foreground font-display text-base leading-relaxed mb-6">"<?php echo $t['quote']; ?>"
            </blockquote>
            <div class="border-t border-border pt-4">
              <p class="font-display font-semibold text-foreground"><?php echo $t['name']; ?></p>
              <p class="text-sm font-body text-muted-foreground"><?php echo $t['role']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 10. Partners Scroll -->
  <section class="py-12 border-t border-border flex justify-center">
    <div class="container px-6 w-full">
      <div class="text-center mb-6">
        <p class="text-sm font-body text-muted-foreground uppercase tracking-wider">Our Partners & Sponsors</p>
      </div>
      <div class="relative flex items-center gap-4">
        <button type="button"
          class="flex-shrink-0 bg-card hover:bg-muted w-10 h-10 rounded-md flex items-center justify-center border border-border shadow-sm transition-colors"
          data-slider-prev="partners">❮</button>
        <div class="flex gap-6 overflow-hidden scroll-smooth max-w-[896px] mx-auto py-2" data-slider-content="partners">
          <?php
          $partners = ["NAfME", "FL DOE", "Yamaha", "Jupiter", "Conn-Selmer", "Hal Leonard", "J.W. Pepper", "Music & Arts"];
          foreach ($partners as $partner): ?>
            <div
              class="flex-shrink-0 w-[160px] h-[80px] bg-card rounded-lg border border-border shadow-sm flex items-center justify-center font-display font-semibold text-muted-foreground">
              <?php echo $partner; ?>
            </div>
          <?php endforeach; ?>
        </div>
        <button type="button"
          class="flex-shrink-0 bg-card hover:bg-muted w-10 h-10 rounded-md flex items-center justify-center border border-border shadow-sm transition-colors"
          data-slider-next="partners">❯</button>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . "/../components/footer.php"; ?>