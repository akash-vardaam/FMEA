<?php
// Shared HTML <head> and opening <body> wrapper.
// Each page should set $page_title (optional) and $rootPrefix before including this file.

if (!isset($page_title)) {
    $page_title = "FMEA – Florida Music Education Association";
}

// $rootPrefix is used so this header works from both the project root and /pages.
// Examples:
// - From index.php          → $rootPrefix = ".";
// - From pages/home.php     → $rootPrefix = "..";
if (!isset($rootPrefix)) {
    $rootPrefix = ".";
}

// Make SVG icon helpers available globally.
require_once __DIR__ . "/icons.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, "UTF-8"); ?></title>

    <!-- Tailwind via CDN (actual Tailwind engine) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              display: ['"Playfair Display"', "Georgia", "serif"],
              body: ["Inter", "system-ui", "sans-serif"],
            },
            colors: {
              primary: "#962c3c",
              "primary-foreground": "#f9fafb",
              secondary: "#e8dcc8",
              "secondary-foreground": "#4b1b24",
              accent: "#232d3d",
              "accent-foreground": "#f9fafb",
              background: "#f7f1e7",
              foreground: "#2e2427",
              card: "#ffffff",
              "card-foreground": "#2e2427",
              muted: "#f3ede4",
              "muted-foreground": "#7a6268",
              border: "#e0d4c4",
              input: "#e0d4c4",
            },
          },
        },
      };
    </script>

    <!-- Optional local overrides -->
    <link rel="stylesheet" href="<?php echo $rootPrefix; ?>/assets/css/custom.css" />
  </head>
  <body class="bg-background text-foreground font-body antialiased">

