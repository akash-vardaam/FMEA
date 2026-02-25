<?php
$page_title = "Brand Guidelines – Color System";
$rootPrefix = "..";

require_once __DIR__ . "/../components/header.php";
require_once __DIR__ . "/../components/navbar.php";
?>

<main class="min-h-screen bg-background">
  <!-- Hero -->
  <section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-primary">
    <div class="absolute inset-0 opacity-10">
      <div class="absolute top-20 right-20 w-96 h-96 rounded-full bg-primary-light blur-3xl"></div>
      <div class="absolute bottom-20 left-20 w-64 h-64 rounded-full bg-secondary blur-3xl"></div>
    </div>
    <div class="container relative z-10 px-6 py-20 text-center">
      <div>
        <span class="inline-block px-4 py-2 mb-8 text-sm font-body font-medium tracking-widest uppercase text-primary-foreground/70 border border-primary-foreground/20 rounded-full">
          Brand Guidelines
        </span>
      </div>
      <h1 class="text-5xl md:text-7xl lg:text-8xl font-display font-bold text-primary-foreground tracking-tight leading-[0.9]">
        Color<br />
        <span class="text-secondary italic">System</span>
      </h1>
      <p class="mt-8 max-w-xl mx-auto text-lg md:text-xl font-body text-primary-foreground/80 leading-relaxed">
        A comprehensive guide to our brand color palette, built around a sophisticated burgundy foundation that evokes luxury, elegance, and timeless refinement.
      </p>
      <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4">
        <div class="flex items-center gap-3 px-6 py-3 bg-primary-foreground/10 backdrop-blur-sm rounded-full border border-primary-foreground/20">
          <div class="w-4 h-4 rounded-full bg-primary-foreground"></div>
          <span class="font-body font-medium text-primary-foreground">Primary: #962c3c</span>
        </div>
        <div class="flex items-center gap-3 px-6 py-3 bg-primary-foreground/10 backdrop-blur-sm rounded-full border border-primary-foreground/20">
          <div class="w-4 h-4 rounded-full bg-secondary"></div>
          <span class="font-body font-medium text-primary-foreground">Secondary: Champagne</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Primary Palette -->
  <section class="py-24 px-6">
    <div class="container max-w-6xl">
      <div class="flex items-baseline justify-between mb-10">
        <div>
          <p class="text-xs font-body tracking-widest uppercase text-muted-foreground mb-2">
            01
          </p>
          <h2 class="text-3xl md:text-4xl font-display font-bold text-foreground">
            Primary Palette
          </h2>
          <p class="mt-3 text-sm font-body text-muted-foreground max-w-2xl">
            Our signature burgundy anchors the brand identity, representing sophistication, warmth, and premium quality. Use these shades as the dominant colors in key brand touchpoints.
          </p>
        </div>
      </div>
      <div class="mb-12">
        <div class="relative h-64 md:h-80 rounded-2xl bg-brand-burgundy overflow-hidden shadow-2xl">
          <div class="absolute inset-0 flex items-end p-8">
            <div class="text-primary-foreground">
              <p class="text-sm font-body font-medium tracking-widest uppercase opacity-70">Primary Brand Color</p>
              <h3 class="text-4xl md:text-5xl font-display font-bold mt-2">Burgundy</h3>
              <p class="font-body mt-2 opacity-80">#962c3c · HSL 351° 55% 38% · RGB 150, 44, 60</p>
            </div>
          </div>
          <div class="absolute top-8 right-8 w-32 h-32 rounded-full bg-secondary opacity-30 blur-2xl"></div>
        </div>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <?php
        $primary = [
          ["name" => "Burgundy Dark", "class" => "bg-brand-burgundy-dark", "hex" => "#5c1a24", "hsl" => "HSL 351° 60% 25%", "light" => false],
          ["name" => "Burgundy", "class" => "bg-brand-burgundy", "hex" => "#962c3c", "hsl" => "HSL 351° 55% 38%", "light" => false],
          ["name" => "Burgundy Light", "class" => "bg-brand-burgundy-light", "hex" => "#c26a78", "hsl" => "HSL 351° 45% 55%", "light" => false],
          ["name" => "Blush", "class" => "bg-brand-blush", "hex" => "#f0dfe1", "hsl" => "HSL 351° 40% 92%", "light" => true],
        ];
        foreach ($primary as $color): ?>
          <div class="rounded-xl border border-border overflow-hidden bg-card">
            <div class="h-24 <?php echo $color["class"]; ?>"></div>
            <div class="p-4">
              <p class="font-display text-sm font-semibold mb-1">
                <?php echo htmlspecialchars($color["name"], ENT_QUOTES, "UTF-8"); ?>
              </p>
              <p class="font-body text-xs text-muted-foreground">
                <?php echo htmlspecialchars($color["hex"], ENT_QUOTES, "UTF-8"); ?>
              </p>
              <p class="font-body text-[11px] text-muted-foreground mt-1">
                <?php echo htmlspecialchars($color["hsl"], ENT_QUOTES, "UTF-8"); ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Supporting Colors -->
  <section class="py-24 px-6 bg-muted">
    <div class="container max-w-6xl">
      <div class="flex items-baseline justify-between mb-10">
        <div>
          <p class="text-xs font-body tracking-widest uppercase text-muted-foreground mb-2">
            02
          </p>
          <h2 class="text-3xl md:text-4xl font-display font-bold text-foreground">
            Supporting Colors
          </h2>
          <p class="mt-3 text-sm font-body text-muted-foreground max-w-2xl">
            Complementary colors that harmonize with burgundy, providing balance and versatility across different applications and contexts.
          </p>
        </div>
      </div>

      <h3 class="text-xl font-display font-semibold text-foreground mb-6">
        Secondary — Champagne
      </h3>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
        <?php
        $secondary = [
          ["name" => "Champagne", "class" => "bg-brand-champagne", "hex" => "#e8dcc8", "hsl" => "HSL 38° 45% 85%"],
          ["name" => "Cream", "class" => "bg-brand-cream", "hex" => "#f9f6f0", "hsl" => "HSL 40° 40% 96%"],
        ];
        foreach ($secondary as $color): ?>
          <div class="rounded-xl border border-border overflow-hidden bg-card">
            <div class="h-24 <?php echo $color["class"]; ?>"></div>
            <div class="p-4">
              <p class="font-display text-sm font-semibold mb-1">
                <?php echo htmlspecialchars($color["name"], ENT_QUOTES, "UTF-8"); ?>
              </p>
              <p class="font-body text-xs text-muted-foreground">
                <?php echo htmlspecialchars($color["hex"], ENT_QUOTES, "UTF-8"); ?>
              </p>
              <p class="font-body text-[11px] text-muted-foreground mt-1">
                <?php echo htmlspecialchars($color["hsl"], ENT_QUOTES, "UTF-8"); ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <h3 class="text-xl font-display font-semibold text-foreground mb-6">
        Neutrals
      </h3>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
        <?php
        $neutrals = [
          ["name" => "Charcoal", "class" => "bg-brand-charcoal", "hex" => "#2e2427", "hsl" => "HSL 351° 15% 20%"],
          ["name" => "Warm Gray", "class" => "bg-brand-warm-gray", "hex" => "#9a908e", "hsl" => "HSL 30° 10% 60%"],
        ];
        foreach ($neutrals as $color): ?>
          <div class="rounded-xl border border-border overflow-hidden bg-card">
            <div class="h-24 <?php echo $color["class"]; ?>"></div>
            <div class="p-4">
              <p class="font-display text-sm font-semibold mb-1">
                <?php echo htmlspecialchars($color["name"], ENT_QUOTES, "UTF-8"); ?>
              </p>
              <p class="font-body text-xs text-muted-foreground">
                <?php echo htmlspecialchars($color["hex"], ENT_QUOTES, "UTF-8"); ?>
              </p>
              <p class="font-body text-[11px] text-muted-foreground mt-1">
                <?php echo htmlspecialchars($color["hsl"], ENT_QUOTES, "UTF-8"); ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <h3 class="text-xl font-display font-semibold text-foreground mb-6">
        Accent — Navy
      </h3>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="rounded-xl border border-border overflow-hidden bg-card">
          <div class="h-24 bg-accent"></div>
          <div class="p-4">
            <p class="font-display text-sm font-semibold mb-1">
              Navy
            </p>
            <p class="font-body text-xs text-muted-foreground">
              #232d3d
            </p>
            <p class="font-body text-[11px] text-muted-foreground mt-1">
              HSL 220° 35% 20%
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . "/../components/footer.php"; ?>

