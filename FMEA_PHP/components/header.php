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

// SVG icon helpers have been inlined into pages and components.
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, "UTF-8"); ?></title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- Tailwind via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        container: {
          center: true,
          padding: "2rem",
          screens: {
            "2xl": "1400px",
          },
        },
        extend: {
          fontFamily: {
            display: ['Playfair Display', 'Georgia', 'serif'],
            body: ['Inter', 'system-ui', 'sans-serif'],
          },
          colors: {
            border: "hsl(var(--border))",
            input: "hsl(var(--input))",
            ring: "hsl(var(--ring))",
            background: "hsl(var(--background))",
            foreground: "hsl(var(--foreground))",
            primary: {
              DEFAULT: "hsl(var(--primary))",
              foreground: "hsl(var(--primary-foreground))",
              light: "hsl(var(--primary-light))",
              dark: "hsl(var(--primary-dark))",
              muted: "hsl(var(--primary-muted))",
            },
            secondary: {
              DEFAULT: "hsl(var(--secondary))",
              foreground: "hsl(var(--secondary-foreground))",
              dark: "hsl(var(--secondary-dark))",
            },
            destructive: {
              DEFAULT: "hsl(var(--destructive))",
              foreground: "hsl(var(--destructive-foreground))",
            },
            muted: {
              DEFAULT: "hsl(var(--muted))",
              foreground: "hsl(var(--muted-foreground))",
            },
            accent: {
              DEFAULT: "hsl(var(--accent))",
              foreground: "hsl(var(--accent-foreground))",
            },
            popover: {
              DEFAULT: "hsl(var(--popover))",
              foreground: "hsl(var(--popover-foreground))",
            },
            card: {
              DEFAULT: "hsl(var(--card))",
              foreground: "hsl(var(--card-foreground))",
            },
            brand: {
              burgundy: {
                DEFAULT: "hsl(var(--brand-burgundy))",
                light: "hsl(var(--brand-burgundy-light))",
                dark: "hsl(var(--brand-burgundy-dark))",
              },
              champagne: {
                DEFAULT: "hsl(var(--brand-champagne))",
                dark: "hsl(var(--brand-champagne-dark))",
              },
              cream: "hsl(var(--brand-cream))",
              charcoal: "hsl(var(--brand-charcoal))",
              "warm-gray": "hsl(var(--brand-warm-gray))",
              blush: "hsl(var(--brand-blush))",
            },
          },
          borderRadius: {
            lg: "var(--radius)",
            md: "calc(var(--radius) - 2px)",
            sm: "calc(var(--radius) - 4px)",
          },
          keyframes: {
            "accordion-down": {
              from: { height: "0" },
              to: { height: "var(--radix-accordion-content-height)" },
            },
            "accordion-up": {
              from: { height: "var(--radix-accordion-content-height)" },
              to: { height: "0" },
            },
            "fade-in": {
              from: { opacity: "0", transform: "translateY(10px)" },
              to: { opacity: "1", transform: "translateY(0)" },
            },
            "scale-in": {
              from: { opacity: "0", transform: "scale(0.95)" },
              to: { opacity: "1", transform: "scale(1)" },
            },
          },
          animation: {
            "accordion-down": "accordion-down 0.2s ease-out",
            "accordion-up": "accordion-up 0.2s ease-out",
            "fade-in": "fade-in 0.5s ease-out forwards",
            "scale-in": "scale-in 0.3s ease-out forwards",
          },
        },
      },
  };
  </script>

  <style type="text/css">
    :root {
      --primary: 351 55% 38%;
      --primary-foreground: 0 0% 98%;
      --primary-light: 351 45% 55%;
      --primary-dark: 351 60% 25%;
      --primary-muted: 351 30% 70%;
      --secondary: 38 45% 85%;
      --secondary-foreground: 351 55% 25%;
      --secondary-dark: 38 35% 45%;
      --accent: 220 35% 20%;
      --accent-foreground: 0 0% 98%;
      --background: 30 25% 98%;
      --foreground: 351 25% 15%;
      --card: 0 0% 100%;
      --card-foreground: 351 25% 15%;
      --popover: 0 0% 100%;
      --popover-foreground: 351 25% 15%;
      --muted: 30 15% 94%;
      --muted-foreground: 351 10% 45%;
      --destructive: 0 84% 60%;
      --destructive-foreground: 0 0% 98%;
      --border: 30 20% 88%;
      --input: 30 20% 88%;
      --ring: 351 55% 38%;
      --radius: 0.5rem;
      --brand-burgundy: 351 55% 38%;
      --brand-burgundy-light: 351 45% 55%;
      --brand-burgundy-dark: 351 60% 25%;
      --brand-champagne: 38 45% 85%;
      --brand-champagne-dark: 38 35% 55%;
      --brand-cream: 40 40% 96%;
      --brand-charcoal: 353 12% 16%;
      --brand-warm-gray: 30 10% 60%;
      --brand-blush: 351 40% 92%;
      --font-display: "Playfair Display", Georgia, serif;
      --font-body: "Inter", system-ui, sans-serif;
    }
  </style>

  <!-- CSS variables and local overrides -->
  <link rel="stylesheet" href="<?php echo $rootPrefix; ?>/assets/css/custom.css" />
</head>

<body class="bg-background text-foreground font-body antialiased">