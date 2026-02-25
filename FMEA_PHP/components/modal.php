<?php
// Reusable modal component; behavior handled by assets/js/main.js.

/**
 * Renders a modal container.
 *
 * Usage:
 *   render_modal('example-modal', 'Title', '<p>Body</p>');
 *
 * @param string $id
 * @param string $title
 * @param string $bodyHtml
 */
function render_modal(string $id, string $title, string $bodyHtml): void
{
    ?>
    <div
      id="<?php echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8'); ?>"
      class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm modal"
      aria-hidden="true"
    >
      <div class="bg-card text-card-foreground rounded-xl shadow-xl max-w-lg w-full mx-4 p-6 relative">
        <button
          type="button"
          class="absolute top-3 right-3 w-8 h-8 rounded-full border border-border flex items-center justify-center text-muted-foreground hover:bg-muted"
          data-modal-close
        >
          ×
        </button>
        <h2 class="text-xl font-display font-bold mb-4">
          <?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>
        </h2>
        <div class="text-sm font-body text-muted-foreground leading-relaxed">
          <?php echo $bodyHtml; ?>
        </div>
      </div>
    </div>
    <?php
}

