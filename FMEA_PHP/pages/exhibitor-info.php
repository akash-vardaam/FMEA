<?php
$page_title = "Exhibitor Information – FMEA Conference";
$rootPrefix = "..";

require_once __DIR__ . "/../components/header.php";
require_once __DIR__ . "/../components/navbar.php";
?>

<section class="relative py-16 lg:py-20 overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style="background-image: url('<?php echo $rootPrefix; ?>/assets/images/conference-photo.jpg');"></div>
    <div class="absolute inset-0 bg-accent/90"></div>
    <div class="container relative z-10 px-6">
        <div class="max-w-4xl mx-auto" style="opacity: 1; transform: none;"><a
                class="inline-flex items-center gap-2 text-sm font-body text-accent-foreground/70 hover:text-secondary transition-colors mb-6"
                href="conference.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-left w-4 h-4">
                    <path d="m12 19-7-7 7-7"></path>
                    <path d="M19 12H5"></path>
                </svg>Back to Conference</a>
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-accent-foreground mb-4">Exhibitor
                Information</h1>
            <p class="text-lg font-body text-accent-foreground/80 mb-2">FMEA 2026 Professional Learning Conference</p>
            <div class="flex flex-wrap items-center gap-4 text-sm font-body text-accent-foreground/60"><span
                    class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-calendar w-4 h-4">
                        <path d="M8 2v4"></path>
                        <path d="M16 2v4"></path>
                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                        <path d="M3 10h18"></path>
                    </svg>January 14–17, 2026</span><span class="flex items-center gap-1.5"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-map-pin w-4 h-4">
                        <path
                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                        </path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>Tampa Convention Center</span></div>
        </div>
    </div>
</section>

<nav class="sticky top-[73px] z-40 shadow-md" style="background-color: rgb(3, 46, 125);">
    <div class="hidden lg:block container relative">
        <div class="hidden lg:flex items-center justify-center gap-0 relative">
            <style>
                [data-mega-menu].is-active>.mega-menu-trigger {
                    background-color: rgba(255, 255, 255, 0.15);
                    color: white;
                }

                [data-mega-menu].is-active .lucide-chevron-down {
                    transform: rotate(180deg);
                }

                .local-dropdown-item {
                    display: flex;
                    align-items: center;
                    padding: 0.75rem 1.5rem;
                    font-size: 0.875rem;
                    color: #4b5563;
                    transition: all 0.2s;
                    border-left: 3px solid transparent;
                    white-space: nowrap;
                    font-family: var(--font-body);
                }

                .local-dropdown-item:hover {
                    background-color: #f0f7ff;
                    color: #032e7d;
                    border-left-color: #032e7d;
                }

                .local-dropdown-item.active {
                    background-color: #f0f7ff;
                    color: #032e7d;
                    border-left-color: #032e7d;
                    font-weight: 600;
                }
            </style>
            <div class="relative" data-mega-menu="attending">
                <button
                    class="mega-menu-trigger flex items-center gap-1.5 px-6 py-4 text-sm font-body font-semibold tracking-wide uppercase transition-all duration-200 border-b-2 text-white/90 border-transparent hover:text-white hover:bg-white/5">
                    Attending
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down w-3.5 h-3.5 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
            </div>
            <div class="relative" data-mega-menu="clinics">
                <button
                    class="mega-menu-trigger flex items-center gap-1.5 px-6 py-4 text-sm font-body font-semibold tracking-wide uppercase transition-all duration-200 border-b-2 text-white/90 border-transparent hover:text-white hover:bg-white/5">
                    Clinics
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down w-3.5 h-3.5 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
            </div>
            <div class="relative" data-mega-menu="students">
                <button
                    class="mega-menu-trigger flex items-center gap-1.5 px-6 py-4 text-sm font-body font-semibold tracking-wide uppercase transition-all duration-200 border-b-2 text-white/90 border-transparent hover:text-white hover:bg-white/5">
                    Students
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down w-3.5 h-3.5 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
            </div>
            <div class="relative" data-mega-menu="policies">
                <button
                    class="mega-menu-trigger flex items-center gap-1.5 px-6 py-4 text-sm font-body font-semibold tracking-wide uppercase transition-all duration-200 border-b-2 text-white/90 border-transparent hover:text-white hover:bg-white/5">
                    Policies
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down w-3.5 h-3.5 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
            </div>
            <div class="relative" data-mega-menu="exhibitors">
                <button
                    class="mega-menu-trigger flex items-center gap-1.5 px-6 py-4 text-sm font-body font-semibold tracking-wide uppercase transition-all duration-200 border-b-2 text-white/90 border-transparent hover:text-white hover:bg-white/5">
                    Exhibitors &amp; Sponsors
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down w-3.5 h-3.5 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
            </div>
            <div class="relative" data-mega-menu="plan">
                <button
                    class="mega-menu-trigger flex items-center gap-1.5 px-6 py-4 text-sm font-body font-semibold tracking-wide uppercase transition-all duration-200 border-b-2 text-white/90 border-transparent hover:text-white hover:bg-white/5">
                    Plan Your Visit
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down w-3.5 h-3.5 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Local Mega Menu Root -->
        <div
            class="mega-menu-root hidden absolute top-full left-0 min-w-[240px] bg-white shadow-2xl z-50 rounded-b-lg border-t-2 border-primary overflow-hidden">
            <div class="py-2">
                <!-- Attending Panel -->
                <div data-mega-panel="attending" class="hidden">
                    <a href="#" class="local-dropdown-item">Registration</a>
                    <a href="#" class="local-dropdown-item">Schedule</a>
                    <a href="#" class="local-dropdown-item">Hotels</a>
                    <a href="#" class="local-dropdown-item">Administrator Support Letter</a>
                    <a href="#" class="local-dropdown-item">Policies</a>
                </div>
                <!-- Clinics Panel -->
                <div data-mega-panel="clinics" class="hidden">
                    <a href="#" class="local-dropdown-item">Schedule</a>
                    <a href="#" class="local-dropdown-item">Pre-Conference Workshop</a>
                    <a href="#" class="local-dropdown-item">Presenter Information</a>
                    <a href="#" class="local-dropdown-item">Proposals</a>
                    <a href="#" class="local-dropdown-item">Call for Research Posters</a>
                    <a href="#" class="local-dropdown-item">Session Attendance Report</a>
                    <a href="#" class="local-dropdown-item">Session Coordinators</a>
                </div>
                <!-- Students Panel -->
                <div data-mega-panel="students" class="hidden">
                    <a href="#" class="local-dropdown-item">All-State Information</a>
                    <a href="#" class="local-dropdown-item">All-State Concert Program</a>
                    <a href="#" class="local-dropdown-item">All-State Concert Recordings</a>
                    <a href="#" class="local-dropdown-item">All-State Merchandise</a>
                    <a href="#" class="local-dropdown-item">All-State Rehearsals</a>
                    <a href="#" class="local-dropdown-item">Tickets / Ticket Policy</a>
                </div>
                <!-- Policies Panel -->
                <div data-mega-panel="policies" class="hidden">
                    <a href="#" class="local-dropdown-item">Invited Ensembles & Demonstration Groups</a>
                    <a href="#" class="local-dropdown-item">Student Conference Experience</a>
                    <a href="#" class="local-dropdown-item">Tri-M Conference Experience</a>
                    <a href="#" class="local-dropdown-item">Student Leadership Workshop</a>
                    <a href="#" class="local-dropdown-item">College Night</a>
                </div>
                <!-- Exhibitors Panel -->
                <div data-mega-panel="exhibitors" class="hidden">
                    <a href="#" class="local-dropdown-item">Exhibitor Information</a>
                    <a href="#" class="local-dropdown-item">Exhibit Hall Floor Plan</a>
                    <a href="#" class="local-dropdown-item">College Night</a>
                    <a href="#" class="local-dropdown-item">Product Showcases</a>
                    <a href="#" class="local-dropdown-item">Sponsors</a>
                    <a href="#" class="local-dropdown-item">Corporate & Academic Partners</a>
                </div>
                <!-- Plan Panel -->
                <div data-mega-panel="plan" class="hidden">
                    <a href="#" class="local-dropdown-item">Mobile App</a>
                    <a href="#" class="local-dropdown-item">Program</a>
                    <a href="#" class="local-dropdown-item">Schedule</a>
                    <a href="#" class="local-dropdown-item">Concert Tickets</a>
                    <a href="#" class="local-dropdown-item">Hotels</a>
                    <a href="#" class="local-dropdown-item">Food</a>
                    <a href="#" class="local-dropdown-item">Maps</a>
                    <a href="#" class="local-dropdown-item">Parking & Downtown Tampa</a>
                    <a href="#" class="local-dropdown-item">WiFi</a>
                </div>
            </div>
        </div>

        <!-- Mobile Accordion Section -->
        <div class="lg:hidden">
            <div class="flex flex-wrap gap-1 py-2">
                <div class="w-full">
                    <button data-mobile-accordion="attending"
                        class="flex items-center justify-between w-full px-3 py-2.5 text-sm font-body font-semibold uppercase tracking-wide text-primary-foreground/90 transition-colors hover:bg-white/10">
                        Attending
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-plus w-4 h-4 transition-transform mobile-accordion-icon"
                            style="transform: rotate(45deg);">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                    </button>
                    <div data-mobile-panel="attending" class="hidden bg-white/5 border-l-2 border-secondary ml-2 py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-white/80 hover:text-white">Registration</a>
                        <a href="#" class="block px-4 py-2 text-sm text-white/80 hover:text-white">Schedule</a>
                        <a href="#" class="block px-4 py-2 text-sm text-white/80 hover:text-white">Hotels</a>
                    </div>
                </div>
                <div class="w-full">
                    <button data-mobile-accordion="clinics"
                        class="flex items-center justify-between w-full px-3 py-2.5 text-sm font-body font-semibold uppercase tracking-wide text-primary-foreground/90 transition-colors hover:bg-white/10">
                        Clinics
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-plus w-4 h-4 transition-transform mobile-accordion-icon"
                            style="transform: rotate(45deg);">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                    </button>
                    <div data-mobile-panel="clinics" class="hidden bg-white/5 border-l-2 border-secondary ml-2 py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-white/80 hover:text-white">Schedule</a>
                        <a href="#" class="block px-4 py-2 text-sm text-white/80 hover:text-white">Proposals</a>
                    </div>
                </div>
                <div class="w-full">
                    <button data-mobile-accordion="exhibitors"
                        class="flex items-center justify-between w-full px-3 py-2.5 text-sm font-body font-semibold uppercase tracking-wide text-primary-foreground/90 transition-colors hover:bg-white/10">
                        Exhibitors & Sponsors
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-plus w-4 h-4 transition-transform mobile-accordion-icon"
                            style="transform: rotate(45deg);">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                    </button>
                    <div data-mobile-panel="exhibitors" class="hidden bg-white/5 border-l-2 border-secondary ml-2 py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-white/80 hover:text-white">Exhibitor
                            Information</a>
                        <a href="#" class="block px-4 py-2 text-sm text-white/80 hover:text-white">Sponsors</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="bg-muted border-b border-border">
    <div class="container px-6">
        <nav class="flex items-center gap-1.5 py-3 text-sm font-body text-muted-foreground max-w-4xl mx-auto"><a
                class="hover:text-primary transition-colors" href="home.php">Home</a><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-right w-3.5 h-3.5">
                <path d="m9 18 6-6-6-6"></path>
            </svg><a class="hover:text-primary transition-colors" href="conference.php">Conference</a><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-right w-3.5 h-3.5">
                <path d="m9 18 6-6-6-6"></path>
            </svg><span class="text-foreground font-medium">Exhibitor Information</span></nav>
    </div>
</div>
<main class="bg-background">
    <section class="container px-6 py-16">
        <div class="max-w-4xl mx-auto" style="opacity: 1; transform: none;">
            <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">Exhibit at the FMEA Conference
            </h2>
            <p class="font-body text-muted-foreground leading-relaxed mb-6">The FMEA Conference is host to over 10,000
                attendees, including music educators, music education majors, professors, music supervisors,
                professional musicians, school administrators, K-12 students, and their parents and chaperones. More
                than 300 events will include professional learning clinic sessions, keynote speakers, meetings, and
                performances by world-class musicians and Florida's finest student musicians.</p>
            <p class="font-body text-muted-foreground leading-relaxed">The exhibit hall is a key feature of the
                conference experience, providing attendees with the opportunity to explore the latest products,
                services, and innovations in music education.</p>
        </div>
    </section>
    <section class="bg-muted">
        <div class="container px-6 py-16">
            <div class="max-w-4xl mx-auto" style="opacity: 1; transform: none;">
                <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-8">Why Exhibit?</h2>
                <div class="grid gap-4">
                    <div class="flex items-start gap-3" style="opacity: 1; transform: none;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check-big w-5 h-5 text-primary mt-0.5 flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg>
                        <p class="font-body text-muted-foreground">Access to over 10,000 attendees including music
                            educators, college students, and administrators</p>
                    </div>
                    <div class="flex items-start gap-3" style="opacity: 1; transform: none;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check-big w-5 h-5 text-primary mt-0.5 flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg>
                        <p class="font-body text-muted-foreground">Network with K-12 music teachers and college music
                            professors from across Florida</p>
                    </div>
                    <div class="flex items-start gap-3" style="opacity: 1; transform: none;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check-big w-5 h-5 text-primary mt-0.5 flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg>
                        <p class="font-body text-muted-foreground">Showcase your products and services to key
                            decision-makers in music education</p>
                    </div>
                    <div class="flex items-start gap-3" style="opacity: 1; transform: none;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check-big w-5 h-5 text-primary mt-0.5 flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg>
                        <p class="font-body text-muted-foreground">Participate in Product Showcase sessions to
                            demonstrate your offerings</p>
                    </div>
                    <div class="flex items-start gap-3" style="opacity: 1; transform: none;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check-big w-5 h-5 text-primary mt-0.5 flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg>
                        <p class="font-body text-muted-foreground">Visibility throughout the 4-day conference at the
                            Tampa Convention Center</p>
                    </div>
                    <div class="flex items-start gap-3" style="opacity: 1; transform: none;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check-big w-5 h-5 text-primary mt-0.5 flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg>
                        <p class="font-body text-muted-foreground">Complimentary exhibitor badges for booth staff</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container px-6 py-16">
        <div class="max-w-4xl mx-auto" style="opacity: 1; transform: none;">
            <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-8">Booth Options</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-card rounded-xl border border-border p-6" style="opacity: 1; transform: none;">
                    <h3 class="font-display font-bold text-lg text-foreground mb-1">Standard Booth</h3>
                    <p class="text-sm font-body font-semibold text-primary mb-3">10' x 10'</p>
                    <p class="font-body text-sm text-muted-foreground leading-relaxed">Includes pipe &amp; drape, one 6'
                        skirted table, two chairs, company ID sign, and one electrical outlet.</p>
                </div>
                <div class="bg-card rounded-xl border border-border p-6" style="opacity: 1; transform: none;">
                    <h3 class="font-display font-bold text-lg text-foreground mb-1">Double Booth</h3>
                    <p class="text-sm font-body font-semibold text-primary mb-3">10' x 20'</p>
                    <p class="font-body text-sm text-muted-foreground leading-relaxed">Two standard booths combined for
                        greater visibility and display space.</p>
                </div>
                <div class="bg-card rounded-xl border border-border p-6" style="opacity: 1; transform: none;">
                    <h3 class="font-display font-bold text-lg text-foreground mb-1">Island Booth</h3>
                    <p class="text-sm font-body font-semibold text-primary mb-3">20' x 20'</p>
                    <p class="font-body text-sm text-muted-foreground leading-relaxed">Premium open-floor display area
                        with exposure from all sides.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-muted">
        <div class="container px-6 py-16">
            <div class="max-w-4xl mx-auto" style="opacity: 1; transform: none;">
                <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-8">Exhibit Hall Schedule</h2>
                <div class="space-y-3">
                    <div class="bg-card rounded-xl border border-border p-5 flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6"
                        style="opacity: 1; transform: none;">
                        <div class="sm:w-48 flex-shrink-0">
                            <p class="font-body font-bold text-sm text-primary">Wednesday, January 14</p>
                        </div>
                        <p class="font-body text-sm text-muted-foreground">12:00 PM – 6:00 PM — Exhibitor Move-In</p>
                    </div>
                    <div class="bg-card rounded-xl border border-border p-5 flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6"
                        style="opacity: 1; transform: none;">
                        <div class="sm:w-48 flex-shrink-0">
                            <p class="font-body font-bold text-sm text-primary">Thursday, January 15</p>
                        </div>
                        <p class="font-body text-sm text-muted-foreground">9:00 AM – 5:00 PM — Exhibit Hall Open</p>
                    </div>
                    <div class="bg-card rounded-xl border border-border p-5 flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6"
                        style="opacity: 1; transform: none;">
                        <div class="sm:w-48 flex-shrink-0">
                            <p class="font-body font-bold text-sm text-primary">Friday, January 16</p>
                        </div>
                        <p class="font-body text-sm text-muted-foreground">9:00 AM – 5:00 PM — Exhibit Hall Open</p>
                    </div>
                    <div class="bg-card rounded-xl border border-border p-5 flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6"
                        style="opacity: 1; transform: none;">
                        <div class="sm:w-48 flex-shrink-0">
                            <p class="font-body font-bold text-sm text-primary">Saturday, January 17</p>
                        </div>
                        <p class="font-body text-sm text-muted-foreground">9:00 AM – 1:00 PM — Exhibit Hall Open &amp;
                            Move-Out</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container px-6 py-16">
        <div class="text-center" style="opacity: 1; transform: none;">
            <div class="flex items-center justify-center gap-3 mb-10"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-6 h-6 text-primary">
                    <path d="M8 2v4"></path>
                    <path d="M16 2v4"></path>
                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                    <path d="M3 10h18"></path>
                </svg>
                <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground">Key Dates for Exhibitors</h2>
            </div>
            <div class="max-w-xl mx-auto relative">
                <div class="absolute left-1/2 top-0 bottom-0 w-0.5 bg-primary/20 -translate-x-1/2"></div>
                <div class="flex flex-col gap-6">
                    <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                        style="opacity: 1; transform: none;">
                        <p class="font-body font-bold text-sm text-primary mb-1">March 1, 2025</p>
                        <p class="font-body text-sm text-muted-foreground leading-relaxed">Priority booth selection
                            deadline for returning exhibitors</p>
                    </div>
                    <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                        style="opacity: 1; transform: none;">
                        <div
                            class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full bg-primary border-2 border-background z-10">
                        </div>
                        <p class="font-body font-bold text-sm text-primary mb-1">July 15, 2025</p>
                        <p class="font-body text-sm text-muted-foreground leading-relaxed">Product Showcase application
                            deadline</p>
                    </div>
                    <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                        style="opacity: 1; transform: none;">
                        <div
                            class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full bg-primary border-2 border-background z-10">
                        </div>
                        <p class="font-body font-bold text-sm text-primary mb-1">October 1, 2025</p>
                        <p class="font-body text-sm text-muted-foreground leading-relaxed">Exhibitor service kit
                            available online</p>
                    </div>
                    <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                        style="opacity: 1; transform: none;">
                        <div
                            class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full bg-primary border-2 border-background z-10">
                        </div>
                        <p class="font-body font-bold text-sm text-primary mb-1">December 12, 2025</p>
                        <p class="font-body text-sm text-muted-foreground leading-relaxed">Early registration deadline
                        </p>
                    </div>
                    <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                        style="opacity: 1; transform: none;">
                        <div
                            class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full bg-primary border-2 border-background z-10">
                        </div>
                        <p class="font-body font-bold text-sm text-primary mb-1">January 14, 2026</p>
                        <p class="font-body text-sm text-muted-foreground leading-relaxed">Exhibitor move-in begins</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-primary">
        <div class="container px-6 py-16">
            <div class="max-w-4xl mx-auto text-center" style="opacity: 1; transform: none;">
                <h2 class="text-2xl md:text-3xl font-display font-bold text-primary-foreground mb-4">Ready to Exhibit?
                </h2>
                <p class="font-body text-primary-foreground/80 mb-8 max-w-2xl mx-auto">Reserve your booth today to
                    secure your preferred location. Returning exhibitors receive priority placement when reserving by
                    March 1.</p>
                <div class="flex flex-wrap gap-4 justify-center mb-8"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 bg-secondary text-secondary-foreground hover:bg-secondary/90 font-body font-semibold">Reserve
                        Your Booth<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-external-link ml-2 w-4 h-4">
                            <path d="M15 3h6v6"></path>
                            <path d="M10 14 21 3"></path>
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        </svg></button><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 bg-primary-foreground/20 text-primary-foreground border border-primary-foreground/40 hover:bg-primary-foreground/30 font-body">Download
                        Exhibitor Kit</button></div>
                <div
                    class="flex flex-wrap items-center justify-center gap-6 text-sm font-body text-primary-foreground/70">
                    <a href="mailto:exhibits@fmea.org"
                        class="flex items-center gap-2 hover:text-secondary transition-colors"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-mail w-4 h-4">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>exhibits@fmea.org</a><a href="tel:8005057220"
                        class="flex items-center gap-2 hover:text-secondary transition-colors"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-phone w-4 h-4">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>(800) 505-7220</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . "/../components/footer.php"; ?>