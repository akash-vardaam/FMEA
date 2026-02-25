<?php
// Generic accordion helpers. Output is purely structural; behavior is handled by assets/js/main.js.

/**
 * Renders a single accordion item.
 *
 * @param string $groupId ID namespace for the group (used in element IDs)
 * @param string $itemId  Unique item id
 * @param string $title   Title text
 * @param string $content HTML content for the panel body
 */
function render_accordion_item(string $groupId, string $itemId, string $title, string $content): void
{
    $panelId = $groupId . "-" . $itemId;
    ?>
    <div class="border border-border rounded-xl overflow-hidden bg-card">
      <button
        type="button"
        class="w-full px-6 py-4 text-left font-display font-semibold text-foreground flex items-center justify-between hover:bg-muted/50 accordion-trigger"
        data-accordion-target="#<?php echo htmlspecialchars($panelId, ENT_QUOTES, 'UTF-8'); ?>"
        aria-expanded="false"
      >
        <span class="pr-4 text-sm"><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></span>
        <span class="w-4 h-4 border-b border-r border-current rotate-45 block transition-transform accordion-icon"></span>
      </button>
      <div
        id="<?php echo htmlspecialchars($panelId, ENT_QUOTES, 'UTF-8'); ?>"
        class="px-6 pb-5 pt-0 hidden accordion-panel"
        data-accordion-panel
      >
        <div class="pt-3 text-sm font-body text-muted-foreground leading-relaxed">
          <?php echo $content; ?>
        </div>
      </div>
    </div>
    <?php
}

