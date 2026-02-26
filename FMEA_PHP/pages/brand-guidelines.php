<?php
$page_title = "Brand Guidelines – Color System";
$rootPrefix = "..";

require_once __DIR__ . "/../components/header.php";
?>

<main class="min-h-screen">
    <section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-primary">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 right-20 w-96 h-96 rounded-full bg-primary-light blur-3xl"></div>
            <div class="absolute bottom-20 left-20 w-64 h-64 rounded-full bg-secondary blur-3xl"></div>
        </div>
        <div class="container relative z-10 px-6 py-20 text-center">
            <div style="opacity: 1; transform: none;"><span
                    class="inline-block px-4 py-2 mb-8 text-sm font-body font-medium tracking-widest uppercase text-primary-foreground/70 border border-primary-foreground/20 rounded-full">Brand
                    Guidelines</span></div>
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-display font-bold text-primary-foreground tracking-tight leading-[0.9]"
                style="opacity: 1; transform: none;">Color<br><span class="text-secondary italic">System</span></h1>
            <p class="mt-8 max-w-xl mx-auto text-lg md:text-xl font-body text-primary-foreground/80 leading-relaxed"
                style="opacity: 1; transform: none;">A comprehensive guide to our brand color palette, built around a
                sophisticated burgundy foundation that evokes luxury, elegance, and timeless refinement.</p>
            <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4"
                style="opacity: 1; transform: none;">
                <div
                    class="flex items-center gap-3 px-6 py-3 bg-primary-foreground/10 backdrop-blur-sm rounded-full border border-primary-foreground/20">
                    <div class="w-4 h-4 rounded-full bg-primary-foreground"></div><span
                        class="font-body font-medium text-primary-foreground">Primary: #962c3c</span>
                </div>
                <div
                    class="flex items-center gap-3 px-6 py-3 bg-primary-foreground/10 backdrop-blur-sm rounded-full border border-primary-foreground/20">
                    <div class="w-4 h-4 rounded-full bg-secondary"></div><span
                        class="font-body font-medium text-primary-foreground">Secondary: Champagne</span>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6">
        <div class="container max-w-6xl">
            <div class="mb-12" style="opacity: 1; transform: none;">
                <div class="flex items-baseline gap-4 mb-2"><span
                        class="text-sm font-body font-medium text-primary tracking-widest uppercase">01</span>
                    <div class="h-px flex-1 bg-border max-w-24"></div>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-semibold text-foreground tracking-tight">Primary
                    Palette</h2>
                <p class="mt-4 text-lg font-body text-muted-foreground max-w-2xl">Our signature burgundy anchors the
                    brand identity, representing sophistication, warmth, and premium quality. Use these shades as the
                    dominant colors in key brand touchpoints.</p>
            </div>
            <div class="mb-12">
                <div class="relative h-64 md:h-80 rounded-2xl bg-brand-burgundy overflow-hidden shadow-2xl">
                    <div class="absolute inset-0 flex items-end p-8">
                        <div class="text-primary-foreground">
                            <p class="text-sm font-body font-medium tracking-widest uppercase opacity-70">Primary Brand
                                Color</p>
                            <h3 class="text-4xl md:text-5xl font-display font-bold mt-2">Burgundy</h3>
                            <p class="font-body mt-2 opacity-80">#962c3c · HSL 351° 55% 38% · RGB 150, 44, 60</p>
                        </div>
                    </div>
                    <div class="absolute top-8 right-8 w-32 h-32 rounded-full bg-secondary opacity-30 blur-2xl"></div>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="group" style="opacity: 1; transform: none;">
                    <div
                        class="h-32 w-full bg-brand-burgundy-dark rounded-lg shadow-md cursor-pointer transition-all duration-300 hover:shadow-xl hover:scale-[1.02] relative overflow-hidden">
                        <div
                            class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-copy w-5 h-5">
                                <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3 space-y-1">
                        <p class="font-display font-medium text-foreground">Burgundy Dark</p>
                        <p class="text-sm font-body text-muted-foreground uppercase tracking-wide">#5c1a24</p>
                        <p class="text-xs font-body text-muted-foreground">HSL 351° 60% 25%</p>
                    </div>
                </div>
                <div class="group" style="opacity: 1; transform: none;">
                    <div
                        class="h-32 w-full bg-brand-burgundy rounded-lg shadow-md cursor-pointer transition-all duration-300 hover:shadow-xl hover:scale-[1.02] relative overflow-hidden">
                        <div
                            class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-copy w-5 h-5">
                                <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3 space-y-1">
                        <p class="font-display font-medium text-foreground">Burgundy</p>
                        <p class="text-sm font-body text-muted-foreground uppercase tracking-wide">#962c3c</p>
                        <p class="text-xs font-body text-muted-foreground">HSL 351° 55% 38%</p>
                    </div>
                </div>
                <div class="group" style="opacity: 1; transform: none;">
                    <div
                        class="h-32 w-full bg-brand-burgundy-light rounded-lg shadow-md cursor-pointer transition-all duration-300 hover:shadow-xl hover:scale-[1.02] relative overflow-hidden">
                        <div
                            class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-copy w-5 h-5">
                                <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3 space-y-1">
                        <p class="font-display font-medium text-foreground">Burgundy Light</p>
                        <p class="text-sm font-body text-muted-foreground uppercase tracking-wide">#c26a78</p>
                        <p class="text-xs font-body text-muted-foreground">HSL 351° 45% 55%</p>
                    </div>
                </div>
                <div class="group" style="opacity: 1; transform: none;">
                    <div
                        class="h-32 w-full bg-brand-blush rounded-lg shadow-md cursor-pointer transition-all duration-300 hover:shadow-xl hover:scale-[1.02] relative overflow-hidden">
                        <div
                            class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity text-brand-charcoal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-copy w-5 h-5">
                                <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3 space-y-1">
                        <p class="font-display font-medium text-foreground">Blush</p>
                        <p class="text-sm font-body text-muted-foreground uppercase tracking-wide">#f0dfe1</p>
                        <p class="text-xs font-body text-muted-foreground">HSL 351° 40% 92%</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 bg-muted">
        <div class="container max-w-6xl">
            <div class="mb-12" style="opacity: 1; transform: none;">
                <div class="flex items-baseline gap-4 mb-2"><span
                        class="text-sm font-body font-medium text-primary tracking-widest uppercase">02</span>
                    <div class="h-px flex-1 bg-border max-w-24"></div>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-semibold text-foreground tracking-tight">Supporting
                    Colors</h2>
                <p class="mt-4 text-lg font-body text-muted-foreground max-w-2xl">Complementary colors that harmonize
                    with burgundy, providing balance and versatility across different applications and contexts.</p>
            </div>
            <div class="mb-16" style="opacity: 1; transform: none;">
                <h3 class="text-xl font-display font-semibold text-foreground mb-6">Secondary — Champagne</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="group" style="opacity: 1; transform: none;">
                        <div
                            class="h-32 w-full bg-brand-champagne rounded-lg shadow-md cursor-pointer transition-all duration-300 hover:shadow-xl hover:scale-[1.02] relative overflow-hidden">
                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity text-brand-charcoal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-copy w-5 h-5">
                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-3 space-y-1">
                            <p class="font-display font-medium text-foreground">Champagne</p>
                            <p class="text-sm font-body text-muted-foreground uppercase tracking-wide">#e8dcc8</p>
                            <p class="text-xs font-body text-muted-foreground">HSL 38° 45% 85%</p>
                        </div>
                    </div>
                    <div class="group" style="opacity: 1; transform: none;">
                        <div
                            class="h-32 w-full bg-brand-cream rounded-lg shadow-md cursor-pointer transition-all duration-300 hover:shadow-xl hover:scale-[1.02] relative overflow-hidden">
                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity text-brand-charcoal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-copy w-5 h-5">
                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-3 space-y-1">
                            <p class="font-display font-medium text-foreground">Cream</p>
                            <p class="text-sm font-body text-muted-foreground uppercase tracking-wide">#f9f6f0</p>
                            <p class="text-xs font-body text-muted-foreground">HSL 40° 40% 96%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-16" style="opacity: 1; transform: none;">
                <h3 class="text-xl font-display font-semibold text-foreground mb-6">Neutrals</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="group" style="opacity: 1; transform: none;">
                        <div
                            class="h-32 w-full bg-brand-charcoal rounded-lg shadow-md cursor-pointer transition-all duration-300 hover:shadow-xl hover:scale-[1.02] relative overflow-hidden">
                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-copy w-5 h-5">
                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-3 space-y-1">
                            <p class="font-display font-medium text-foreground">Charcoal</p>
                            <p class="text-sm font-body text-muted-foreground uppercase tracking-wide">#2e2427</p>
                            <p class="text-xs font-body text-muted-foreground">HSL 351° 15% 20%</p>
                        </div>
                    </div>
                    <div class="group" style="opacity: 1; transform: none;">
                        <div
                            class="h-32 w-full bg-brand-warm-gray rounded-lg shadow-md cursor-pointer transition-all duration-300 hover:shadow-xl hover:scale-[1.02] relative overflow-hidden">
                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-copy w-5 h-5">
                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-3 space-y-1">
                            <p class="font-display font-medium text-foreground">Warm Gray</p>
                            <p class="text-sm font-body text-muted-foreground uppercase tracking-wide">#9a908e</p>
                            <p class="text-xs font-body text-muted-foreground">HSL 30° 10% 60%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <h3 class="text-xl font-display font-semibold text-foreground mb-6">Accent — Navy</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="group" style="opacity: 1; transform: none;">
                        <div
                            class="h-32 w-full bg-accent rounded-lg shadow-md cursor-pointer transition-all duration-300 hover:shadow-xl hover:scale-[1.02] relative overflow-hidden">
                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-copy w-5 h-5">
                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-3 space-y-1">
                            <p class="font-display font-medium text-foreground">Navy</p>
                            <p class="text-sm font-body text-muted-foreground uppercase tracking-wide">#232d3d</p>
                            <p class="text-xs font-body text-muted-foreground">HSL 220° 35% 20%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6">
        <div class="container max-w-6xl">
            <div class="mb-12" style="opacity: 1; transform: none;">
                <div class="flex items-baseline gap-4 mb-2"><span
                        class="text-sm font-body font-medium text-primary tracking-widest uppercase">03</span>
                    <div class="h-px flex-1 bg-border max-w-24"></div>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-semibold text-foreground tracking-tight">Color
                    Combinations</h2>
                <p class="mt-4 text-lg font-body text-muted-foreground max-w-2xl">Approved color pairings that maintain
                    visual harmony and ensure accessibility across all brand applications.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="group" style="opacity: 1; transform: none;">
                    <div
                        class="bg-brand-cream rounded-xl p-8 h-48 flex items-end transition-transform duration-300 group-hover:scale-[1.02] shadow-md">
                        <div class="text-brand-burgundy">
                            <p class="text-2xl font-display font-semibold">Aa</p>
                            <p class="text-sm font-body mt-1 opacity-80">The quick brown fox</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="font-display font-medium text-foreground">Primary on Light</p>
                        <p class="text-sm font-body text-muted-foreground mt-1">Headlines and primary actions on light
                            backgrounds</p>
                    </div>
                </div>
                <div class="group" style="opacity: 1; transform: none;">
                    <div
                        class="bg-brand-burgundy rounded-xl p-8 h-48 flex items-end transition-transform duration-300 group-hover:scale-[1.02] shadow-md">
                        <div class="text-primary-foreground">
                            <p class="text-2xl font-display font-semibold">Aa</p>
                            <p class="text-sm font-body mt-1 opacity-80">The quick brown fox</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="font-display font-medium text-foreground">Light on Primary</p>
                        <p class="text-sm font-body text-muted-foreground mt-1">Hero sections and high-impact areas</p>
                    </div>
                </div>
                <div class="group" style="opacity: 1; transform: none;">
                    <div
                        class="bg-brand-champagne rounded-xl p-8 h-48 flex items-end transition-transform duration-300 group-hover:scale-[1.02] shadow-md">
                        <div class="text-brand-burgundy-dark">
                            <p class="text-2xl font-display font-semibold">Aa</p>
                            <p class="text-sm font-body mt-1 opacity-80">The quick brown fox</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="font-display font-medium text-foreground">Primary on Champagne</p>
                        <p class="text-sm font-body text-muted-foreground mt-1">Callouts and featured content blocks</p>
                    </div>
                </div>
                <div class="group" style="opacity: 1; transform: none;">
                    <div
                        class="bg-brand-cream rounded-xl p-8 h-48 flex items-end transition-transform duration-300 group-hover:scale-[1.02] shadow-md">
                        <div class="text-brand-charcoal">
                            <p class="text-2xl font-display font-semibold">Aa</p>
                            <p class="text-sm font-body mt-1 opacity-80">The quick brown fox</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="font-display font-medium text-foreground">Charcoal on Cream</p>
                        <p class="text-sm font-body text-muted-foreground mt-1">Body text and secondary content</p>
                    </div>
                </div>
                <div class="group" style="opacity: 1; transform: none;">
                    <div
                        class="bg-brand-burgundy-dark rounded-xl p-8 h-48 flex items-end transition-transform duration-300 group-hover:scale-[1.02] shadow-md">
                        <div class="text-brand-champagne">
                            <p class="text-2xl font-display font-semibold">Aa</p>
                            <p class="text-sm font-body mt-1 opacity-80">The quick brown fox</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="font-display font-medium text-foreground">Champagne on Burgundy</p>
                        <p class="text-sm font-body text-muted-foreground mt-1">Elegant accents and subtle highlights
                        </p>
                    </div>
                </div>
                <div class="group" style="opacity: 1; transform: none;">
                    <div
                        class="bg-accent rounded-xl p-8 h-48 flex items-end transition-transform duration-300 group-hover:scale-[1.02] shadow-md">
                        <div class="text-brand-champagne">
                            <p class="text-2xl font-display font-semibold">Aa</p>
                            <p class="text-sm font-body mt-1 opacity-80">The quick brown fox</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="font-display font-medium text-foreground">Navy Accent</p>
                        <p class="text-sm font-body text-muted-foreground mt-1">Alternative dark backgrounds for variety
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 bg-brand-cream">
        <div class="container max-w-6xl">
            <div class="mb-12" style="opacity: 1; transform: none;">
                <div class="flex items-baseline gap-4 mb-2"><span
                        class="text-sm font-body font-medium text-primary tracking-widest uppercase">04</span>
                    <div class="h-px flex-1 bg-border max-w-24"></div>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-semibold text-foreground tracking-tight">Typography
                </h2>
                <p class="mt-4 text-lg font-body text-muted-foreground max-w-2xl">Our type system pairs an elegant serif
                    display font with a modern sans-serif for body text, creating a refined yet readable hierarchy.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-card rounded-2xl p-8 shadow-lg" style="opacity: 1; transform: none;"><span
                        class="text-sm font-body font-medium text-primary tracking-widest uppercase">Display Font</span>
                    <h3 class="text-6xl md:text-7xl font-display font-bold text-foreground mt-4 leading-[0.9]">
                        Playfair<br><span class="italic">Display</span></h3>
                    <p class="text-muted-foreground font-body mt-6 leading-relaxed">Used for headlines, titles, and
                        high-impact messaging. The elegant serifs and refined details convey luxury and sophistication.
                    </p>
                    <div class="mt-8 space-y-2">
                        <p class="font-display text-4xl text-foreground">Aa Bb Cc Dd</p>
                        <p class="font-display text-2xl text-muted-foreground">1234567890</p>
                    </div>
                </div>
                <div class="bg-card rounded-2xl p-8 shadow-lg" style="opacity: 1; transform: none;"><span
                        class="text-sm font-body font-medium text-primary tracking-widest uppercase">Body Font</span>
                    <h3 class="text-6xl md:text-7xl font-body font-bold text-foreground mt-4 leading-[0.9]">Inter</h3>
                    <p class="text-muted-foreground font-body mt-6 leading-relaxed">Used for body text, UI elements, and
                        supporting content. Clean and highly legible at all sizes, ensuring excellent readability.</p>
                    <div class="mt-8 space-y-2">
                        <p class="font-body text-4xl text-foreground">Aa Bb Cc Dd</p>
                        <p class="font-body text-2xl text-muted-foreground">1234567890</p>
                    </div>
                </div>
            </div>
            <div class="mt-16 bg-card rounded-2xl p-8 shadow-lg" style="opacity: 1; transform: none;">
                <h4 class="text-xl font-display font-semibold text-foreground mb-8">Type Scale</h4>
                <div class="space-y-6">
                    <div class="flex items-baseline gap-6 border-b border-border pb-4"><span
                            class="text-sm font-body text-muted-foreground w-20">H1</span>
                        <p class="text-5xl md:text-6xl font-display font-bold text-foreground">Display Heading</p>
                    </div>
                    <div class="flex items-baseline gap-6 border-b border-border pb-4"><span
                            class="text-sm font-body text-muted-foreground w-20">H2</span>
                        <p class="text-4xl font-display font-semibold text-foreground">Section Title</p>
                    </div>
                    <div class="flex items-baseline gap-6 border-b border-border pb-4"><span
                            class="text-sm font-body text-muted-foreground w-20">H3</span>
                        <p class="text-2xl font-display font-medium text-foreground">Subsection Heading</p>
                    </div>
                    <div class="flex items-baseline gap-6 border-b border-border pb-4"><span
                            class="text-sm font-body text-muted-foreground w-20">Body</span>
                        <p class="text-base font-body text-foreground">The quick brown fox jumps over the lazy dog.</p>
                    </div>
                    <div class="flex items-baseline gap-6"><span
                            class="text-sm font-body text-muted-foreground w-20">Caption</span>
                        <p class="text-sm font-body text-muted-foreground">Supporting text and labels</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6">
        <div class="container max-w-6xl">
            <div class="mb-12" style="opacity: 1; transform: none;">
                <div class="flex items-baseline gap-4 mb-2"><span
                        class="text-sm font-body font-medium text-primary tracking-widest uppercase">05</span>
                    <div class="h-px flex-1 bg-border max-w-24"></div>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-semibold text-foreground tracking-tight">Usage
                    Guidelines</h2>
                <p class="mt-4 text-lg font-body text-muted-foreground max-w-2xl">Follow these principles to maintain
                    brand consistency and ensure our colors are used effectively across all touchpoints.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="space-y-4" style="opacity: 1; transform: none;">
                    <div class="rounded-xl overflow-hidden border border-border bg-card">
                        <div class="bg-brand-burgundy p-8">
                            <h3 class="text-2xl font-display font-bold text-primary-foreground">Elegant Headline</h3>
                            <p class="font-body text-primary-foreground/80 mt-2">Supporting text with proper contrast.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div
                            class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center bg-green-100 text-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-check w-4 h-4">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-display font-semibold text-green-700">Use sufficient contrast</p>
                            <p class="text-sm font-body text-muted-foreground mt-1">Ensure text is legible by using
                                light text on dark backgrounds and dark text on light backgrounds.</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4" style="opacity: 1; transform: none;">
                    <div class="rounded-xl overflow-hidden border border-border bg-card">
                        <div class="bg-brand-burgundy-light p-8">
                            <h3 class="text-2xl font-display font-bold text-brand-burgundy">Hard to Read</h3>
                            <p class="font-body text-brand-burgundy/70 mt-2">This text lacks sufficient contrast.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div
                            class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center bg-red-100 text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-x w-4 h-4">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-display font-semibold text-red-700">Avoid low contrast pairings</p>
                            <p class="text-sm font-body text-muted-foreground mt-1">Don't use similar tones together as
                                they reduce readability and accessibility.</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4" style="opacity: 1; transform: none;">
                    <div class="rounded-xl overflow-hidden border border-border bg-card">
                        <div class="bg-brand-cream p-8 flex items-center justify-between"><span
                                class="font-display text-xl text-brand-charcoal">Subscribe Today</span><button
                                class="px-6 py-3 bg-brand-burgundy text-primary-foreground font-body font-medium rounded-lg">Get
                                Started</button></div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div
                            class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center bg-green-100 text-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-check w-4 h-4">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-display font-semibold text-green-700">Use burgundy for key elements</p>
                            <p class="text-sm font-body text-muted-foreground mt-1">Reserve the primary burgundy for
                                important actions, headlines, and focal points.</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4" style="opacity: 1; transform: none;">
                    <div class="rounded-xl overflow-hidden border border-border bg-card">
                        <div class="bg-brand-burgundy p-8"><span
                                class="font-display text-xl text-brand-burgundy-light">Everything Burgundy</span><button
                                class="mt-4 block px-6 py-3 bg-brand-burgundy-dark text-brand-burgundy-light font-body font-medium rounded-lg border border-brand-burgundy-light">No
                                Contrast</button></div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div
                            class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center bg-red-100 text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-x w-4 h-4">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-display font-semibold text-red-700">Don't overuse primary color</p>
                            <p class="text-sm font-body text-muted-foreground mt-1">Using burgundy for everything
                                dilutes its impact and creates visual fatigue.</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4" style="opacity: 1; transform: none;">
                    <div class="rounded-xl overflow-hidden border border-border bg-card">
                        <div class="bg-brand-champagne p-8">
                            <div class="bg-card rounded-lg p-4 shadow-sm"><span
                                    class="text-xs font-body font-medium text-brand-burgundy tracking-widest uppercase">Featured</span>
                                <h3 class="text-xl font-display font-semibold text-foreground mt-2">Premium Content</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div
                            class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center bg-green-100 text-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-check w-4 h-4">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-display font-semibold text-green-700">Maintain brand hierarchy</p>
                            <p class="text-sm font-body text-muted-foreground mt-1">Use champagne and cream for
                                backgrounds to let burgundy elements stand out.</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4" style="opacity: 1; transform: none;">
                    <div class="rounded-xl overflow-hidden border border-border bg-card">
                        <div class="bg-blue-500 p-8">
                            <div class="bg-green-200 rounded-lg p-4"><span
                                    class="text-xs font-body font-medium text-orange-600 tracking-widest uppercase">Featured</span>
                                <h3 class="text-xl font-display font-semibold text-purple-800 mt-2">Off Brand</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div
                            class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center bg-red-100 text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-x w-4 h-4">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-display font-semibold text-red-700">Don't mix competing colors</p>
                            <p class="text-sm font-body text-muted-foreground mt-1">Avoid introducing off-brand colors
                                that clash with the burgundy palette.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 bg-muted">
        <div class="container max-w-6xl">
            <div class="mb-12" style="opacity: 1; transform: none;">
                <div class="flex items-baseline gap-4 mb-2"><span
                        class="text-sm font-body font-medium text-primary tracking-widest uppercase">06</span>
                    <div class="h-px flex-1 bg-border max-w-24"></div>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-semibold text-foreground tracking-tight">Accessibility
                </h2>
                <p class="mt-4 text-lg font-body text-muted-foreground max-w-2xl">Our color system is designed with WCAG
                    2.1 guidelines in mind. Always verify contrast ratios meet minimum requirements for text legibility.
                </p>
            </div>
            <div class="bg-card rounded-2xl p-8 shadow-lg" style="opacity: 1; transform: none;">
                <h4 class="text-xl font-display font-semibold text-foreground mb-6">Contrast Ratios</h4>
                <div class="grid gap-4">
                    <div class="flex items-center gap-4 p-4 rounded-lg bg-muted" style="opacity: 1; transform: none;">
                        <div
                            class="bg-brand-burgundy text-primary-foreground w-32 h-16 rounded-lg flex items-center justify-center font-body font-medium">
                            Aa</div>
                        <div class="flex-1">
                            <p class="font-body font-medium text-foreground">Burgundy + White</p>
                            <p class="text-sm font-body text-muted-foreground">Contrast ratio: 7.2:1</p>
                        </div>
                        <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-green-100 text-green-700"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-check w-4 h-4">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg><span class="text-sm font-body font-medium">AA Pass</span></div>
                    </div>
                    <div class="flex items-center gap-4 p-4 rounded-lg bg-muted" style="opacity: 1; transform: none;">
                        <div
                            class="bg-brand-burgundy-dark text-primary-foreground w-32 h-16 rounded-lg flex items-center justify-center font-body font-medium">
                            Aa</div>
                        <div class="flex-1">
                            <p class="font-body font-medium text-foreground">Dark Burgundy + White</p>
                            <p class="text-sm font-body text-muted-foreground">Contrast ratio: 10.1:1</p>
                        </div>
                        <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-green-100 text-green-700"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-check w-4 h-4">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg><span class="text-sm font-body font-medium">AA Pass</span></div>
                    </div>
                    <div class="flex items-center gap-4 p-4 rounded-lg bg-muted" style="opacity: 1; transform: none;">
                        <div
                            class="bg-brand-cream text-brand-charcoal w-32 h-16 rounded-lg flex items-center justify-center font-body font-medium">
                            Aa</div>
                        <div class="flex-1">
                            <p class="font-body font-medium text-foreground">Cream + Charcoal</p>
                            <p class="text-sm font-body text-muted-foreground">Contrast ratio: 11.5:1</p>
                        </div>
                        <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-green-100 text-green-700"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-check w-4 h-4">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg><span class="text-sm font-body font-medium">AA Pass</span></div>
                    </div>
                    <div class="flex items-center gap-4 p-4 rounded-lg bg-muted" style="opacity: 1; transform: none;">
                        <div
                            class="bg-brand-champagne text-brand-burgundy-dark w-32 h-16 rounded-lg flex items-center justify-center font-body font-medium">
                            Aa</div>
                        <div class="flex-1">
                            <p class="font-body font-medium text-foreground">Champagne + Dark Burgundy</p>
                            <p class="text-sm font-body text-muted-foreground">Contrast ratio: 5.8:1</p>
                        </div>
                        <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-green-100 text-green-700"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-check w-4 h-4">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg><span class="text-sm font-body font-medium">AA Pass</span></div>
                    </div>
                    <div class="flex items-center gap-4 p-4 rounded-lg bg-muted" style="opacity: 1; transform: none;">
                        <div
                            class="bg-brand-blush text-brand-burgundy w-32 h-16 rounded-lg flex items-center justify-center font-body font-medium">
                            Aa</div>
                        <div class="flex-1">
                            <p class="font-body font-medium text-foreground">Blush + Burgundy</p>
                            <p class="text-sm font-body text-muted-foreground">Contrast ratio: 3.9:1</p>
                        </div>
                        <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-red-100 text-red-700"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-x w-4 h-4">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg><span class="text-sm font-body font-medium">Fail</span></div>
                    </div>
                    <div class="flex items-center gap-4 p-4 rounded-lg bg-muted" style="opacity: 1; transform: none;">
                        <div
                            class="bg-accent text-brand-champagne w-32 h-16 rounded-lg flex items-center justify-center font-body font-medium">
                            Aa</div>
                        <div class="flex-1">
                            <p class="font-body font-medium text-foreground">Navy + Champagne</p>
                            <p class="text-sm font-body text-muted-foreground">Contrast ratio: 8.4:1</p>
                        </div>
                        <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-green-100 text-green-700"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-check w-4 h-4">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg><span class="text-sm font-body font-medium">AA Pass</span></div>
                    </div>
                </div>
                <div class="mt-8 p-6 bg-brand-blush rounded-xl">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 rounded-full bg-brand-burgundy flex items-center justify-center flex-shrink-0">
                            <span class="text-primary-foreground font-body font-bold">!</span>
                        </div>
                        <div>
                            <p class="font-display font-semibold text-foreground">Important Note</p>
                            <p class="font-body text-muted-foreground mt-1">For text smaller than 18pt (or 14pt bold),
                                ensure contrast ratio is at least 4.5:1 (AA) or 7:1 (AAA). Large text requires minimum
                                3:1 (AA) or 4.5:1 (AAA).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 bg-brand-burgundy">
        <div class="container max-w-6xl">
            <div class="text-center mb-12" style="opacity: 1; transform: none;">
                <h2 class="text-4xl md:text-5xl font-display font-bold text-primary-foreground">Ready to Use</h2>
                <p class="mt-4 text-lg font-body text-primary-foreground/80 max-w-xl mx-auto">Copy individual color
                    tokens or download the complete CSS file for your project.</p>
            </div>
            <div class="bg-card rounded-2xl p-8 shadow-2xl" style="opacity: 1; transform: none;">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="text-xl font-display font-semibold text-foreground">Color Tokens</h4><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-10 px-4 py-2 bg-brand-burgundy hover:bg-brand-burgundy-dark text-primary-foreground font-body"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-download w-4 h-4 mr-2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>Download CSS</button>
                </div>
                <div class="grid gap-3">
                    <div
                        class="flex items-center justify-between p-4 rounded-lg bg-muted hover:bg-muted/80 transition-colors cursor-pointer group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg shadow-inner border border-border"
                                style="background-color: rgb(150, 44, 60);"></div>
                            <div><code class="font-mono text-sm text-foreground">--brand-burgundy</code>
                                <p class="text-xs font-body text-muted-foreground mt-1">#962c3c</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-body text-muted-foreground"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-copy w-4 h-4">
                                <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                            </svg><span>Copy</span></div>
                    </div>
                    <div
                        class="flex items-center justify-between p-4 rounded-lg bg-muted hover:bg-muted/80 transition-colors cursor-pointer group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg shadow-inner border border-border"
                                style="background-color: rgb(92, 26, 36);"></div>
                            <div><code class="font-mono text-sm text-foreground">--brand-burgundy-dark</code>
                                <p class="text-xs font-body text-muted-foreground mt-1">#5c1a24</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-body text-muted-foreground"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-copy w-4 h-4">
                                <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                            </svg><span>Copy</span></div>
                    </div>
                    <div
                        class="flex items-center justify-between p-4 rounded-lg bg-muted hover:bg-muted/80 transition-colors cursor-pointer group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg shadow-inner border border-border"
                                style="background-color: rgb(194, 106, 120);"></div>
                            <div><code class="font-mono text-sm text-foreground">--brand-burgundy-light</code>
                                <p class="text-xs font-body text-muted-foreground mt-1">#c26a78</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-body text-muted-foreground"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-copy w-4 h-4">
                                <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                            </svg><span>Copy</span></div>
                    </div>
                    <div
                        class="flex items-center justify-between p-4 rounded-lg bg-muted hover:bg-muted/80 transition-colors cursor-pointer group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg shadow-inner border border-border"
                                style="background-color: rgb(232, 220, 200);"></div>
                            <div><code class="font-mono text-sm text-foreground">--brand-champagne</code>
                                <p class="text-xs font-body text-muted-foreground mt-1">#e8dcc8</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-body text-muted-foreground"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-copy w-4 h-4">
                                <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                            </svg><span>Copy</span></div>
                    </div>
                    <div
                        class="flex items-center justify-between p-4 rounded-lg bg-muted hover:bg-muted/80 transition-colors cursor-pointer group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg shadow-inner border border-border"
                                style="background-color: rgb(179, 154, 107);"></div>
                            <div><code class="font-mono text-sm text-foreground">--brand-champagne-dark</code>
                                <p class="text-xs font-body text-muted-foreground mt-1">#b39a6b</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-body text-muted-foreground"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-copy w-4 h-4">
                                <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                            </svg><span>Copy</span></div>
                    </div>
                    <div
                        class="flex items-center justify-between p-4 rounded-lg bg-muted hover:bg-muted/80 transition-colors cursor-pointer group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg shadow-inner border border-border"
                                style="background-color: rgb(249, 246, 240);"></div>
                            <div><code class="font-mono text-sm text-foreground">--brand-cream</code>
                                <p class="text-xs font-body text-muted-foreground mt-1">#f9f6f0</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-body text-muted-foreground"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-copy w-4 h-4">
                                <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                            </svg><span>Copy</span></div>
                    </div>
                    <div
                        class="flex items-center justify-between p-4 rounded-lg bg-muted hover:bg-muted/80 transition-colors cursor-pointer group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg shadow-inner border border-border"
                                style="background-color: rgb(46, 36, 39);"></div>
                            <div><code class="font-mono text-sm text-foreground">--brand-charcoal</code>
                                <p class="text-xs font-body text-muted-foreground mt-1">#2e2427</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-body text-muted-foreground"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-copy w-4 h-4">
                                <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                            </svg><span>Copy</span></div>
                    </div>
                    <div
                        class="flex items-center justify-between p-4 rounded-lg bg-muted hover:bg-muted/80 transition-colors cursor-pointer group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg shadow-inner border border-border"
                                style="background-color: rgb(240, 223, 225);"></div>
                            <div><code class="font-mono text-sm text-foreground">--brand-blush</code>
                                <p class="text-xs font-body text-muted-foreground mt-1">#f0dfe1</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-body text-muted-foreground"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-copy w-4 h-4">
                                <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                            </svg><span>Copy</span></div>
                    </div>
                </div>
            </div>
            <p class="text-center mt-12 font-body text-primary-foreground/60 text-sm" style="opacity: 1;">© 2026 Brand
                Guidelines. All colors optimized for web and print use.</p>
        </div>
    </section>
</main>