<?php
// Reusable inline SVG icons (Lucide-inspired).
// Each helper echoes an <svg> element with configurable Tailwind classes.

function icon_chevron_right(string $class = 'w-4 h-4'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>';
}

function icon_chevron_left(string $class = 'w-4 h-4'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>';
}

function icon_chevron_down(string $class = 'w-4 h-4'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>';
}

function icon_arrow_right(string $class = 'w-4 h-4'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>';
}

function icon_user(string $class = 'w-4 h-4'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.121 17.804A7 7 0 0 1 12 14a7 7 0 0 1 6.879 3.804"/><circle cx="12" cy="7" r="4"/></svg>';
}

function icon_log_in(string $class = 'w-4 h-4'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg>';
}

function icon_heart(string $class = 'w-4 h-4'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>';
}

function icon_search(string $class = 'w-4 h-4'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><line x1="16.65" y1="16.65" x2="21" y2="21"/></svg>';
}

function icon_phone(string $class = 'w-4 h-4'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.1 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.81.35 1.59.68 2.33a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.75-1.75a2 2 0 0 1 2.11-.45 11.36 11.36 0 0 0 2.33.68A2 2 0 0 1 22 16.92z"/></svg>';
}

function icon_mail(string $class = 'w-4 h-4'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><polyline points="3 7 12 13 21 7"/></svg>';
}

function icon_map_pin(string $class = 'w-4 h-4'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s-6-5.33-6-11a6 6 0 0 1 12 0c0 5.67-6 11-6 11z"/><circle cx="12" cy="10" r="2.5"/></svg>';
}

function icon_calendar(string $class = 'w-4 h-4'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>';
}

function icon_music(string $class = 'w-5 h-5'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>';
}

function icon_check_circle(string $class = 'w-4 h-4'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>';
}

function icon_star(string $class = 'w-5 h-5'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M12 2.5l2.9 5.88 6.5.95-4.7 4.58 1.1 6.44L12 17.77l-5.8 3.05 1.1-6.44-4.7-4.58 6.5-.95L12 2.5z"/></svg>';
}

function icon_facebook(string $class = 'w-5 h-5'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 9H16V6h-2.5C10.91 6 9 7.79 9 10.92V13H7v3h2v5h3v-5h2.5l.5-3H12v-2.08C12 10.36 12.34 9 13.5 9z"/></svg>';
}

function icon_twitter(string $class = 'w-5 h-5'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="currentColor"><path d="M20.75 7.04c.01.18.01.36.01.54 0 5.5-4.18 11.84-11.84 11.84-2.35 0-4.54-.69-6.38-1.87.33.04.66.06 1 .06 1.95 0 3.74-.66 5.16-1.78a4.18 4.18 0 0 1-3.9-2.9c.26.05.53.08.8.08.39 0 .78-.05 1.14-.15A4.17 4.17 0 0 1 3.5 8.37v-.05c.56.31 1.21.5 1.9.52a4.17 4.17 0 0 1-1.85-3.47c0-.77.21-1.5.58-2.13a11.83 11.83 0 0 0 8.58 4.35 4.71 4.71 0 0 1-.1-.95A4.17 4.17 0 0 1 19.5 6c.92-.17 1.78-.52 2.56-.98a4.17 4.17 0 0 1-1.83 2.3 8.32 8.32 0 0 0 2.4-.66 8.96 8.96 0 0 1-2.88 2.38z"/></svg>';
}

function icon_instagram(string $class = 'w-5 h-5'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>';
}

function icon_youtube(string $class = 'w-5 h-5'): void
{
    echo '<svg class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" viewBox="0 0 24 24" fill="currentColor"><path d="M21.8 8.001a2.75 2.75 0 0 0-1.94-1.94C18.23 5.5 12 5.5 12 5.5s-6.23 0-7.86.561A2.75 2.75 0 0 0 2.2 8.001 28.6 28.6 0 0 0 1.64 12a28.6 28.6 0 0 0 .44 3.999 2.75 2.75 0 0 0 1.94 1.94C5.77 18.5 12 18.5 12 18.5s6.23 0 7.86-.561a2.75 2.75 0 0 0 1.94-1.94A28.6 28.6 0 0 0 22.36 12a28.6 28.6 0 0 0-.56-3.999ZM10 15.25v-6.5L15.5 12 10 15.25Z"/></svg>';
}

