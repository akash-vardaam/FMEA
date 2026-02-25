## FMEA_PHP – Static PHP Frontend

This project is a static PHP recreation of the existing Vite + React + TypeScript + TailwindCSS + shadcn/ui application.

It reproduces the **UI** and **frontend behavior** using:

- **PHP** (no frameworks)
- **jQuery-style helper** in `assets/js/jquery.min.js` (local file)
- **Tailwind-style utility CSS** in `assets/css/tailwind.css` (precompiled, no build step)
- **Custom behavior** in `assets/js/main.js`

No Node, no Composer, no external CDNs are required to run the project.

---

### 1. Running the Project

1. Place the `FMEA_PHP` folder inside your PHP server’s document root, for example:
   - `C:\xampp\htdocs\FMEA_PHP` (XAMPP on Windows)
2. Start your PHP server (e.g. start Apache in XAMPP).
3. Open the site in your browser:
   - `http://localhost/FMEA_PHP/`

All pages are plain `.php` files and can be navigated directly, for example:

- `http://localhost/FMEA_PHP/pages/home.php`
- `http://localhost/FMEA_PHP/pages/about.php`
- `http://localhost/FMEA_PHP/pages/conference.php`

---

### 2. Project Structure

```text
FMEA_PHP/
│
├── assets/
│   ├── css/
│   │   ├── tailwind.css   # Tailwind-style compiled utilities + theme
│   │   └── custom.css     # Small custom tweaks and overrides
│   │
│   ├── js/
│   │   ├── jquery.min.js  # Local, lightweight jQuery-style helper (`$`)
│   │   └── main.js        # All interactive behavior (mega menu, accordions, modals, etc.)
│   │
│   └── images/            # Static images copied from the React project
│
├── components/
│   ├── header.php         # <head> tag, CSS/JS includes, opening <body>
│   ├── footer.php         # Global footer + closing </body></html>
│   ├── navbar.php         # Mega menu header/navigation
│   ├── sidebar.php        # Reusable sidebar / vertical nav
│   ├── accordion.php      # Reusable accordion markup helpers
│   ├── modal.php          # Reusable modal component
│   ├── card.php           # Generic card component helper
│   └── other-reusable-components.php  # Misc shared render helpers
│
├── pages/
│   ├── home.php           # FMEAHome equivalent
│   ├── about.php          # AboutPage equivalent
│   ├── conference.php     # ConferencePage + ConferenceNav/Content/Stats
│   ├── exhibitor-info.php # ExhibitorInfoPage
│   ├── membership-benefits.php  # MembershipBenefitsPage
│   ├── brand-guidelines.php     # Brand guidelines (Index.tsx)
│   └── not-found.php      # 404 layout
│
├── index.php              # Entry point, routes to home
└── README.md
```

All repeated UI sections are **componentized** and included with:

```php
<?php include __DIR__ . '/../components/header.php'; ?>
<?php include __DIR__ . '/../components/navbar.php'; ?>
...
<?php include __DIR__ . '/../components/footer.php'; ?>
```

---

### 3. Component System

- **Header**: `components/header.php`
  - Declares the HTML5 doctype, `<head>` section, links to `tailwind.css`, `custom.css`, and includes `jquery.min.js` and `main.js`.
  - Accepts a `$page_title` variable (set before including) to customize the `<title>`.

- **Navbar (Mega Menu)**: `components/navbar.php`
  - PHP translation of the React `MegaMenu` component.
  - Desktop:
    - Hover over top-level items to show a full-width mega-menu with sections and links.
  - Mobile:
    - Hamburger toggles a slide-down panel with grouped links.
  - Behavior driven by jQuery in `assets/js/main.js`.

- **Footer**: `components/footer.php`
  - PHP translation of the React footer.
  - Social links, contact info, and bottom legal bar.

- **Sidebar**: `components/sidebar.php`
  - Vertical navigational list suitable for contextual navigation (e.g. conference sections or brand-guidelines side navigation).

- **Accordion**: `components/accordion.php`
  - Generic accordion markup.
  - Uses data attributes such as `data-accordion-group`, `data-accordion-target`, and `data-accordion-single`.
  - jQuery in `main.js` handles:
    - Single-open groups (like membership types)
    - Collapsible FAQ accordions

- **Modal**: `components/modal.php`
  - Generic modal overlay and content container.
  - Uses `data-modal-open="id"` and `data-modal-close` attributes.
  - jQuery in `main.js` toggles `hidden`/`flex` to show and hide modals.

- **Card**: `components/card.php`
  - Helper functions to render repeated card layouts (stat cards, feature cards, etc.).

- **Other Reusable Components**: `components/other-reusable-components.php`
  - Helper functions for:
    - Hero sections
    - Quick actions bar tiles
    - Brand color swatches
    - Conference stat tiles

Pages call those helper functions to avoid duplicating layout code.

---

### 4. TailwindCSS – Local, No Build Step

- `assets/css/tailwind.css` contains a **precompiled**, hand-curated subset of Tailwind-style utilities:
  - Color utilities using your brand tokens:
    - `bg-primary`, `bg-secondary`, `bg-accent`, `bg-background`, `bg-muted`, etc.
    - `text-primary`, `text-secondary`, `text-foreground`, `text-muted-foreground`, etc.
  - Layout utilities:
    - `container`, `flex`, `grid`, `items-center`, `justify-between`, `gap-*`
  - Spacing utilities:
    - `p-*`, `px-*`, `py-*`, `mt-*`, `mb-*`, etc. for the values used in the original app.
  - Borders, radius, shadows:
    - `border`, `border-border`, `rounded-lg`, `rounded-xl`, `shadow`, etc.
  - Responsive variants for `sm`, `md`, and `lg` breakpoints for the patterns used in your React components.

It mirrors the theme defined in your original `src/index.css` (CSS variables for colors and fonts) but is **pure CSS**, so **no Tailwind CLI or Node is required at runtime**.

You can expand this file over time if you introduce new utility classes.

---

### 5. jQuery – Local Helper (`assets/js/jquery.min.js`)

To avoid an external CDN and keep the footprint small, this project ships with a **minimal jQuery-style helper** that exposes a `$` function supporting:

- Element selection via CSS selectors
- Iteration over matched elements
- Event binding with `.on("click", handler)` and similar
- Class manipulation with `.addClass()`, `.removeClass()`, `.toggleClass()`

All interactive behavior used in this project (mega menu, mobile nav, accordions, modals, simple show/hide and toggles) relies only on this supported subset.

If you prefer to replace this with full jQuery:

1. Download the official `jquery.min.js` (e.g. v3.7.x).
2. Replace the contents of `assets/js/jquery.min.js` with the official minified file.

No other code changes are required.

---

### 6. Interactivity Overview (`assets/js/main.js`)

All front-end behavior is implemented in `assets/js/main.js` using the local `$` helper.

Key behaviors:

- **Mega Menu (Desktop)**
  - Nav items in `navbar.php` are tagged with `data-mega-menu="about"`, `data-mega-menu="membership"`, etc.
  - Corresponding dropdown panels use `data-mega-panel="about"`, etc.
  - On hover:
    - The active item gets an `is-active` class.
    - Its panel is shown (removes `hidden`, adds `block`).
    - Other panels are hidden.

- **Mega Menu (Mobile)**
  - The hamburger button has `data-mobile-menu-toggle`.
  - The mobile panel has `data-mobile-menu`.
  - jQuery toggles an `is-open` class and `hidden`/`block` to show or hide the mobile navigation.
  - Within the mobile menu, headings with `data-mobile-accordion` toggle sub-lists with `data-mobile-panel`.

- **Accordions**
  - Triggers: `[data-accordion-target="#some-id"]`
  - Panels: `<div id="some-id" data-accordion-panel>`
  - Optional group behavior via `data-accordion-group="membership-types"` and `data-accordion-single="true"` to enforce a single open panel at a time.
  - jQuery toggles:
    - `aria-expanded` on trigger
    - `hidden` on the associated panel

- **Modals**
  - Open buttons: `[data-modal-open="example-modal"]`
  - Modal container: `<div id="example-modal" class="modal hidden">...`
  - Close buttons/backdrop: `[data-modal-close]`
  - jQuery toggles `hidden` and `flex` on the modal to show or hide it.

- **Smooth In-Page Scroll (Conference Nav)**
  - Conference navigation links that point to `#section-id` are intercepted.
  - jQuery calls `window.scrollTo` with `behavior: "smooth"` to animate scrolling.

All behavior is **front-end only**, with no API calls or backend dependencies.

---

### 7. Mapping from React Routes to PHP Pages

Original React routes:

- `/` → `pages/home.php`
- `/conference` → `pages/conference.php`
- `/conference/exhibitor-information` → `pages/exhibitor-info.php`
- `/about` → `pages/about.php`
- `/membership/benefits` → `pages/membership-benefits.php`
- `/brand-guidelines` → `pages/brand-guidelines.php`
- `*` (NotFound) → `pages/not-found.php`

In navigation elements you’ll see standard PHP links like:

```html
<a href="/FMEA_PHP/pages/about.php">About</a>
```

Update the leading `/FMEA_PHP` segment if you deploy the folder under a different URL path.

---

### 8. Images

The React app references a number of images in `src/assets` (e.g. `hero-cellos.png`, `conference-hero-bg.jpg`, `membership-hero.png`, etc.).

To keep this project static and self-contained:

1. Copy the relevant image files from your React project into:
   - `FMEA_PHP/assets/images/`
2. Preserve the original filenames (or update the `<img src="...">` paths in the PHP files accordingly).

All PHP templates assume images live under `assets/images/...`.

---

### 9. Extending or Modifying the UI

- Add new **pages** under `pages/` and include `header.php`, `navbar.php`, and `footer.php`.
- Add new **components** under `components/` and either:
  - Include them directly with `include`, or
  - Define small PHP render functions (e.g. `function render_hero(...)`) and call them from your pages.
- Add new **behavior** to `assets/js/main.js` using the `$` helper.
- If you need new utility classes, extend `assets/css/tailwind.css` or add very specific selectors in `assets/css/custom.css`.

This keeps the project fully static, PHP-based, and easy to deploy on any basic PHP host or local XAMPP setup.

