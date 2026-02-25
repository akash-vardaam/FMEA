<?php
// Misc shared render helpers used across multiple pages.

require_once __DIR__ . '/card.php';

function render_home_hero(): void
{
    ?>
    <section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden bg-accent">
      <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-60" style="background-image: url('../assets/images/hero-cellos.png');"></div>
      <div class="absolute inset-0 bg-accent/85"></div>
      <div class="container relative z-10 px-6 py-20">
        <div class="max-w-3xl mx-auto text-center">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-bold text-primary-foreground tracking-tight leading-[1.1] mb-6">
            Advancing Music Education
            <span class="text-secondary italic block md:inline">Across Florida</span>
          </h1>
          <p class="text-lg md:text-xl font-body text-primary-foreground/85 leading-relaxed mb-8">
            Connect, learn, and advocate for the future of music education in the Sunshine State.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="conference.php" class="inline-flex items-center justify-center px-8 py-3 rounded-md bg-secondary text-secondary-foreground font-body font-semibold text-base hover:bg-secondary/90">
              Explore Programs
            </a>
            <a href="#" class="inline-flex items-center justify-center px-8 py-3 rounded-md border-2 border-primary-foreground/60 bg-primary-foreground/15 text-primary-foreground font-body font-semibold text-base hover:bg-primary-foreground/25">
              Donate
            </a>
          </div>
          <div class="flex flex-wrap justify-center gap-8 mt-12 pt-8 border-t border-primary-foreground/20">
            <?php
            render_stat_card("6,000+", "Active Members");
            render_stat_card("85+", "Years of Excellence");
            render_stat_card("67", "Florida Counties");
            ?>
          </div>
        </div>
      </div>
    </section>
    <?php
}

function render_home_quick_actions(): void
{
    $groups = [
        [
            "title" => "Educators",
            "color" => "bg-primary hover:bg-primary/90 text-primary-foreground",
            "titleColor" => "text-primary",
            "actions" => [
                ["label" => "Join / Renew", "href" => "membership-benefits.php"],
                ["label" => "Conference", "href" => "conference.php"],
                ["label" => "Advocacy", "href" => "#"],
            ],
        ],
        [
            "title" => "Students",
            "color" => "bg-[#E8DCC8] hover:bg-[#DED0B8] text-primary",
            "titleColor" => "text-primary",
            "actions" => [
                ["label" => "All-State", "href" => "#"],
                ["label" => "Competitions", "href" => "#"],
                ["label" => "Programs", "href" => "#"],
            ],
        ],
        [
            "title" => "New to FMEA?",
            "color" => "bg-accent hover:bg-accent/90 text-accent-foreground",
            "titleColor" => "text-accent",
            "actions" => [
                ["label" => "Organization Information", "href" => "about.php"],
                ["label" => "Membership Benefits", "href" => "membership-benefits.php"],
                ["label" => "Membership Application Process", "href" => "#"],
            ],
        ],
    ];
    ?>
    <section class="py-6 bg-background -mt-8 relative z-20 flex justify-center">
      <div class="container px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <?php foreach ($groups as $group): ?>
            <div class="bg-card rounded-xl p-5 shadow-sm border border-border">
              <h3 class="font-display text-sm font-semibold uppercase tracking-wider mb-4 <?php echo $group['titleColor']; ?>">
                <?php echo htmlspecialchars($group['title'], ENT_QUOTES, 'UTF-8'); ?>
              </h3>
              <div class="flex flex-col gap-2">
                <?php foreach ($group['actions'] as $action): ?>
                  <a
                    href="<?php echo htmlspecialchars($action['href'], ENT_QUOTES, 'UTF-8'); ?>"
                    class="<?php echo $group['color']; ?> rounded-lg px-4 py-3 flex items-center gap-3 text-sm font-medium shadow-sm hover:shadow-md transition-all"
                  >
                    <span class="w-5 h-5 rounded-full bg-black/10"></span>
                    <span><?php echo htmlspecialchars($action['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php
}

function render_simple_section_header(string $eyebrow, string $title): void
{
    ?>
    <span class="inline-flex items-center gap-2 text-sm font-body font-medium text-primary tracking-widest uppercase mb-4">
      <span class="w-8 h-px bg-primary"></span>
      <?php echo htmlspecialchars($eyebrow, ENT_QUOTES, 'UTF-8'); ?>
    </span>
    <h2 class="text-3xl md:text-4xl font-display font-bold text-foreground tracking-tight leading-tight mb-6">
      <?php echo $title; ?>
    </h2>
    <?php
}

