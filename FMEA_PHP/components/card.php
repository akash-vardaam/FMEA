<?php
// Simple reusable card helpers.

/**
 * Generic informational card.
 *
 * @param string $title
 * @param string $body
 * @param string|null $badge
 */
function render_info_card(string $title, string $body, ?string $badge = null): void
{
    ?>
    <div class="bg-card rounded-xl border border-border p-6 shadow-sm hover:shadow-md transition-shadow">
      <?php if ($badge !== null): ?>
        <div class="inline-flex items-center px-3 py-1 mb-3 rounded-full bg-primary/10 text-primary text-xs font-body font-semibold uppercase tracking-wide">
          <?php echo htmlspecialchars($badge, ENT_QUOTES, 'UTF-8'); ?>
        </div>
      <?php endif; ?>
      <h3 class="font-display font-semibold text-lg text-foreground mb-2">
        <?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>
      </h3>
      <p class="font-body text-sm text-muted-foreground leading-relaxed">
        <?php echo htmlspecialchars($body, ENT_QUOTES, 'UTF-8'); ?>
      </p>
    </div>
    <?php
}

/**
 * Statistic card (value + label).
 *
 * @param string $value
 * @param string $label
 */
function render_stat_card(string $value, string $label): void
{
    ?>
    <div class="text-center">
      <span class="block text-3xl md:text-4xl font-display font-bold mb-1 text-primary">
        <?php echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); ?>
      </span>
      <span class="text-xs font-body font-medium uppercase tracking-wide text-muted-foreground">
        <?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?>
      </span>
    </div>
    <?php
}

