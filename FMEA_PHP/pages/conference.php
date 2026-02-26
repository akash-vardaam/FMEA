<?php
$page_title = "FMEA Conference";
$rootPrefix = "..";

require_once __DIR__ . "/../components/header.php";
require_once __DIR__ . "/../components/navbar.php";
?>

<section class="relative min-h-[60vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style="background-image: url('<?php echo $rootPrefix; ?>/assets/images/conference-hero-bg.jpg');"></div><img
        src="<?php echo $rootPrefix; ?>/assets/images/music-note.png" alt=""
        class="absolute right-4 md:right-12 lg:right-24 top-1/2 -translate-y-1/2 w-40 md:w-56 lg:w-72 opacity-90 pointer-events-none z-10">
    <div class="container relative z-10 px-6 py-16 lg:py-24">
        <div class="max-w-4xl mx-auto text-center" style="opacity: 1; transform: none;"><img
                src="<?php echo $rootPrefix; ?>/assets/images/conference-logo.png"
                alt="The Power in our Profession — Music Education for Collective Impact"
                class="w-full max-w-3xl mx-auto">
            <p class="mt-4 text-xl md:text-2xl lg:text-3xl font-display font-bold text-white tracking-wide">The FMEA
                Professional Learning Conference</p>
        </div>
    </div>
</section>
<nav class="sticky top-[73px] z-40 shadow-md" style="background-color: rgb(3, 46, 125);">
    <div class="hidden lg:block container relative">
        <div class="hidden lg:flex items-center justify-center gap-0 relative">
            <style>
                /* Local styles for the white vertical dropdown */
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
                    /* text-gray-600 */
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

        <div class="lg:hidden">
            <div class="flex flex-wrap gap-1 py-2">
                <div class="w-full">
                    <button
                        class="flex items-center justify-between w-full px-3 py-2.5 text-sm font-body font-semibold uppercase tracking-wide text-primary-foreground/90"
                        data-mobile-accordion="conf-attending">
                        Attending
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-down w-4 h-4 transition-transform mobile-accordion-icon"
                            style="transform: rotate(45deg);">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>
                    <div class="hidden bg-white/5 px-4 py-2 space-y-2" data-mobile-panel="conf-attending">
                        <a href="#" class="block py-1 text-sm text-white/70 hover:text-white">Registration Info</a>
                        <a href="#" class="block py-1 text-sm text-white/70 hover:text-white">Housing & Hotels</a>
                    </div>
                </div>
                <div class="w-full">
                    <button
                        class="flex items-center justify-between w-full px-3 py-2.5 text-sm font-body font-semibold uppercase tracking-wide text-primary-foreground/90"
                        data-mobile-accordion="conf-clinics">
                        Clinics
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-down w-4 h-4 transition-transform mobile-accordion-icon"
                            style="transform: rotate(45deg);">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>
                    <div class="hidden bg-white/5 px-4 py-2 space-y-2" data-mobile-panel="conf-clinics">
                        <a href="#" class="block py-1 text-sm text-white/70 hover:text-white">Call for Proposals</a>
                        <a href="#" class="block py-1 text-sm text-white/70 hover:text-white">Clinic Schedule</a>
                    </div>
                </div>
                <div class="w-full">
                    <button
                        class="flex items-center justify-between w-full px-3 py-2.5 text-sm font-body font-semibold uppercase tracking-wide text-primary-foreground/90"
                        data-mobile-accordion="conf-students">
                        Students
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-down w-4 h-4 transition-transform mobile-accordion-icon"
                            style="transform: rotate(45deg);">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>
                    <div class="hidden bg-white/5 px-4 py-2 space-y-2" data-mobile-panel="conf-students">
                        <a href="#" class="block py-1 text-sm text-white/70 hover:text-white">All-State Ensembles</a>
                        <a href="#" class="block py-1 text-sm text-white/70 hover:text-white">Honours Ensembles</a>
                    </div>
                </div>
                <div class="w-full">
                    <button
                        class="flex items-center justify-between w-full px-3 py-2.5 text-sm font-body font-semibold uppercase tracking-wide text-primary-foreground/90"
                        data-mobile-accordion="conf-policies">
                        Policies
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-down w-4 h-4 transition-transform mobile-accordion-icon"
                            style="transform: rotate(45deg);">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>
                    <div class="hidden bg-white/5 px-4 py-2 space-y-2" data-mobile-panel="conf-policies">
                        <a href="#" class="block py-1 text-sm text-white/70 hover:text-white">Code of Conduct</a>
                        <a href="#" class="block py-1 text-sm text-white/70 hover:text-white">Refund Policy</a>
                    </div>
                </div>
                <div class="w-full">
                    <button
                        class="flex items-center justify-between w-full px-3 py-2.5 text-sm font-body font-semibold uppercase tracking-wide text-primary-foreground/90"
                        data-mobile-accordion="conf-exhibitors">
                        Exhibitors &amp; Sponsors
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-down w-4 h-4 transition-transform mobile-accordion-icon"
                            style="transform: rotate(45deg);">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>
                    <div class="hidden bg-white/5 px-4 py-2 space-y-2" data-mobile-panel="conf-exhibitors">
                        <a href="<?php echo $rootPrefix; ?>/pages/exhibitor-info.php"
                            class="block py-1 text-sm text-white/70 hover:text-white">Exhibitor Prospectus</a>
                        <a href="#" class="block py-1 text-sm text-white/70 hover:text-white">Sponsorship
                            Opportunities</a>
                    </div>
                </div>
                <div class="w-full">
                    <button
                        class="flex items-center justify-between w-full px-3 py-2.5 text-sm font-body font-semibold uppercase tracking-wide text-primary-foreground/90"
                        data-mobile-accordion="conf-plan">
                        Plan Your Visit
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-down w-4 h-4 transition-transform mobile-accordion-icon"
                            style="transform: rotate(45deg);">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>
                    <div class="hidden bg-white/5 px-4 py-2 space-y-2" data-mobile-panel="conf-plan">
                        <a href="#" class="block py-1 text-sm text-white/70 hover:text-white">Hotel Information</a>
                        <a href="#" class="block py-1 text-sm text-white/70 hover:text-white">Restaurants & Dining</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<main>
    <div class="bg-background">
        <section class="container px-6 py-16">
            <div class="max-w-4xl mx-auto" style="opacity: 1; transform: none;">
                <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">About the Conference</h2>
                <p class="font-body text-muted-foreground leading-relaxed mb-6">The FMEA Professional Learning
                    Conference is one of the largest music education professional learning events in the United States.
                    In addition to approximately 250 clinic sessions and concerts, it hosts 24 All-State Ensembles
                    featuring Florida's top band, orchestra, chorus, guitar, orff, and popular music students, conducted
                    by world-class conductors and teachers.</p>
                <p class="font-body text-muted-foreground leading-relaxed">It is attended by more than 10,000 people,
                    including K-12 music teachers, school district music supervisors, college students, college music
                    teachers &amp; professors, school administrators, K-12 students performing in the All-State and
                    Honors ensembles, professional musicians performing with invited performing ensembles, exhibitors,
                    and parents and family members of performing students.</p>
            </div>
        </section>
        <div style="background-color: rgb(241, 240, 128);">
            <section class="py-12 border-t border-border">
                <div class="container px-6 mb-6">
                    <p
                        class="text-center text-sm font-body text-muted-foreground uppercase tracking-widest font-semibold">
                        Our Partners
                        &amp; Sponsors</p>
                </div>
                <div class="container px-6">
                    <div class="relative flex items-center gap-4"><button type="button" data-slider-prev="partners"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input hover:text-accent-foreground h-10 w-10 flex-shrink-0 bg-card hover:bg-muted shadow-sm shadow-sm"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-left w-5 h-5">
                                <path d="m15 18-6-6 6-6"></path>
                            </svg></button>
                        <div class="flex gap-6 overflow-hidden scroll-smooth max-w-[896px] mx-auto py-2"
                            data-slider-content="partners">
                            <div
                                class="flex-shrink-0 w-[160px] h-[80px] bg-card rounded-lg border border-border shadow-sm flex items-center justify-center hover:shadow-md transition-shadow">
                                <span
                                    class="text-base font-display font-semibold text-muted-foreground text-center px-2">NAfME</span>
                            </div>
                            <div
                                class="flex-shrink-0 w-[160px] h-[80px] bg-card rounded-lg border border-border shadow-sm flex items-center justify-center hover:shadow-md transition-shadow">
                                <span
                                    class="text-base font-display font-semibold text-muted-foreground text-center px-2">FL
                                    DOE</span>
                            </div>
                            <div
                                class="flex-shrink-0 w-[160px] h-[80px] bg-card rounded-lg border border-border shadow-sm flex items-center justify-center hover:shadow-md transition-shadow">
                                <span
                                    class="text-base font-display font-semibold text-muted-foreground text-center px-2">Yamaha</span>
                            </div>
                            <div
                                class="flex-shrink-0 w-[160px] h-[80px] bg-card rounded-lg border border-border shadow-sm flex items-center justify-center hover:shadow-md transition-shadow">
                                <span
                                    class="text-base font-display font-semibold text-muted-foreground text-center px-2">Jupiter</span>
                            </div>
                            <div
                                class="flex-shrink-0 w-[160px] h-[80px] bg-card rounded-lg border border-border shadow-sm flex items-center justify-center hover:shadow-md transition-shadow">
                                <span
                                    class="text-base font-display font-semibold text-muted-foreground text-center px-2">Conn-Selmer</span>
                            </div>
                            <div
                                class="flex-shrink-0 w-[160px] h-[80px] bg-card rounded-lg border border-border shadow-sm flex items-center justify-center hover:shadow-md transition-shadow">
                                <span
                                    class="text-base font-display font-semibold text-muted-foreground text-center px-2">Hal
                                    Leonard</span>
                            </div>
                            <div
                                class="flex-shrink-0 w-[160px] h-[80px] bg-card rounded-lg border border-border shadow-sm flex items-center justify-center hover:shadow-md transition-shadow">
                                <span
                                    class="text-base font-display font-semibold text-muted-foreground text-center px-2">J.W.
                                    Pepper</span>
                            </div>
                            <div
                                class="flex-shrink-0 w-[160px] h-[80px] bg-card rounded-lg border border-border shadow-sm flex items-center justify-center hover:shadow-md transition-shadow">
                                <span
                                    class="text-base font-display font-semibold text-muted-foreground text-center px-2">Music
                                    &amp; Arts</span>
                            </div>
                        </div><button type="button" data-slider-next="partners"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input hover:text-accent-foreground h-10 w-10 flex-shrink-0 bg-card hover:bg-muted shadow-sm"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-right w-5 h-5">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg></button>
                    </div>
                </div>
            </section>
        </div>
        <section style="background-color: rgb(3, 46, 125);">
            <div class="container px-6 py-16">
                <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl border border-white/20 p-6"
                        style="opacity: 1; transform: none;">
                        <div class="w-10 h-10 rounded-lg bg-white/20 flex items-center justify-center mb-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-mail w-5 h-5 text-white">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg></div>
                        <h3 class="font-display font-bold text-lg text-white mb-2">Session Proposals &amp; Performing
                            Ensembles</h3>
                        <p class="font-body text-sm text-white/80 leading-relaxed">If you proposed a session or applied
                            to perform, you should have received an email on July 1 indicating your acceptance status.
                            If you did not receive this email, please contact <a href="mailto:web@fmea.org"
                                class="text-white underline hover:text-white/90">web@fmea.org</a>.</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl border border-white/20 p-6"
                        style="opacity: 1; transform: none;">
                        <div class="w-10 h-10 rounded-lg bg-white/20 flex items-center justify-center mb-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-shopping-cart w-5 h-5 text-white">
                                <circle cx="8" cy="21" r="1"></circle>
                                <circle cx="19" cy="21" r="1"></circle>
                                <path
                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                </path>
                            </svg></div>
                        <h3 class="font-display font-bold text-lg text-white mb-2">Now Accepting Exhibitors for 2026
                        </h3>
                        <p class="font-body text-sm text-white/80 leading-relaxed mb-4">Reserve your booth by March 1 to
                            maintain your same booth location or receive priority for moving to a different location.
                        </p><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border hover:text-accent-foreground h-9 rounded-md px-3 font-body bg-white text-[#032e7d] border-white hover:bg-white/90 font-semibold">Exhibitor
                            Information</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container px-6 py-16">
            <div class="text-center" style="opacity: 1; transform: none;">
                <div class="flex items-center justify-center gap-3 mb-10"><svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-check w-6 h-6"
                        style="color: rgb(3, 46, 125);">
                        <path d="M8 2v4"></path>
                        <path d="M16 2v4"></path>
                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                        <path d="M3 10h18"></path>
                        <path d="m9 16 2 2 4-4"></path>
                    </svg>
                    <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground">Important Dates</h2>
                </div>
                <div class="max-w-xl mx-auto relative">
                    <div class="absolute left-1/2 top-0 bottom-0 w-0.5 -translate-x-1/2"
                        style="background-color: rgba(3, 46, 125, 0.2);"></div>
                    <div class="flex flex-col gap-6">
                        <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                            style="opacity: 1; transform: none;">
                            <p class="font-body font-bold text-sm mb-1" style="color: rgb(3, 46, 125);">February 15,
                                2025</p>
                            <p class="font-body text-sm text-muted-foreground leading-relaxed">Session Proposals and
                                Performance Applications open</p>
                        </div>
                        <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                            style="opacity: 1; transform: none;">
                            <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background z-10"
                                style="background-color: rgb(3, 46, 125);"></div>
                            <p class="font-body font-bold text-sm mb-1" style="color: rgb(3, 46, 125);">May 9, 2025</p>
                            <p class="font-body text-sm text-muted-foreground leading-relaxed">Deadline for Session
                                Proposals and Performance Applications</p>
                        </div>
                        <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                            style="opacity: 1; transform: none;">
                            <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background z-10"
                                style="background-color: rgb(3, 46, 125);"></div>
                            <p class="font-body font-bold text-sm mb-1" style="color: rgb(3, 46, 125);">July 15, 2025
                            </p>
                            <p class="font-body text-sm text-muted-foreground leading-relaxed">Deadline for Product
                                Showcase Applications</p>
                        </div>
                        <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                            style="opacity: 1; transform: none;">
                            <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background z-10"
                                style="background-color: rgb(3, 46, 125);"></div>
                            <p class="font-body font-bold text-sm mb-1" style="color: rgb(3, 46, 125);">September 12,
                                2025</p>
                            <p class="font-body text-sm text-muted-foreground leading-relaxed">Early Registration Opens;
                                Nominations open for Student Conference Experience and Tri-M Experience</p>
                        </div>
                        <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                            style="opacity: 1; transform: none;">
                            <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background z-10"
                                style="background-color: rgb(3, 46, 125);"></div>
                            <p class="font-body font-bold text-sm mb-1" style="color: rgb(3, 46, 125);">September 27,
                                2025</p>
                            <p class="font-body text-sm text-muted-foreground leading-relaxed">Hotels begin taking
                                reservations at 9:00 a.m.</p>
                        </div>
                        <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                            style="opacity: 1; transform: none;">
                            <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background z-10"
                                style="background-color: rgb(3, 46, 125);"></div>
                            <p class="font-body font-bold text-sm mb-1" style="color: rgb(3, 46, 125);">October 1, 2025
                            </p>
                            <p class="font-body text-sm text-muted-foreground leading-relaxed">Presenters' deadline for
                                editing session details and requesting A/V equipment</p>
                        </div>
                        <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                            style="opacity: 1; transform: none;">
                            <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background z-10"
                                style="background-color: rgb(3, 46, 125);"></div>
                            <p class="font-body font-bold text-sm mb-1" style="color: rgb(3, 46, 125);">October 23, 2025
                            </p>
                            <p class="font-body text-sm text-muted-foreground leading-relaxed">Popular Music Collective
                                Submission Deadline</p>
                        </div>
                        <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                            style="opacity: 1; transform: none;">
                            <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background z-10"
                                style="background-color: rgb(3, 46, 125);"></div>
                            <p class="font-body font-bold text-sm mb-1" style="color: rgb(3, 46, 125);">October 30, 2025
                            </p>
                            <p class="font-body text-sm text-muted-foreground leading-relaxed">Student Conference
                                Experience Nomination Deadline</p>
                        </div>
                        <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                            style="opacity: 1; transform: none;">
                            <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background z-10"
                                style="background-color: rgb(3, 46, 125);"></div>
                            <p class="font-body font-bold text-sm mb-1" style="color: rgb(3, 46, 125);">November 7, 2025
                            </p>
                            <p class="font-body text-sm text-muted-foreground leading-relaxed">Digital Music Showcase
                                Submission Deadline</p>
                        </div>
                        <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                            style="opacity: 1; transform: none;">
                            <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background z-10"
                                style="background-color: rgb(3, 46, 125);"></div>
                            <p class="font-body font-bold text-sm mb-1" style="color: rgb(3, 46, 125);">November 8, 2025
                            </p>
                            <p class="font-body text-sm text-muted-foreground leading-relaxed">Hotel Room Cancellation
                                Deadline 5:00 p.m.</p>
                        </div>
                        <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                            style="opacity: 1; transform: none;">
                            <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background z-10"
                                style="background-color: rgb(3, 46, 125);"></div>
                            <p class="font-body font-bold text-sm mb-1" style="color: rgb(3, 46, 125);">November 11,
                                2025</p>
                            <p class="font-body text-sm text-muted-foreground leading-relaxed">Hotels will charge a
                                non-refundable deposit for the first night of each room not canceled by the deadline</p>
                        </div>
                        <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                            style="opacity: 1; transform: none;">
                            <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background z-10"
                                style="background-color: rgb(3, 46, 125);"></div>
                            <p class="font-body font-bold text-sm mb-1" style="color: rgb(3, 46, 125);">December 12,
                                2025</p>
                            <p class="font-body text-sm text-muted-foreground leading-relaxed">Early Registration closes
                                at 11:59:59 pm ET. Prices increase to regular rates. Postmark deadline for mailed
                                checks.</p>
                        </div>
                        <div class="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                            style="opacity: 1; transform: none;">
                            <div class="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background z-10"
                                style="background-color: rgb(3, 46, 125);"></div>
                            <p class="font-body font-bold text-sm mb-1" style="color: rgb(3, 46, 125);">December 15,
                                2025</p>
                            <p class="font-body text-sm text-muted-foreground leading-relaxed">All school lodging checks
                                due to hotels. Final deadline for discounted hotel blocks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="py-16" style="background-color: rgb(251, 155, 249);">
        <div class="container px-6">
            <div class="text-center mb-10" style="opacity: 1; transform: none;">
                <h2 class="text-2xl md:text-3xl font-display font-bold" style="color: rgb(46, 36, 39);">Conference
                    Impact</h2>
                <p class="font-body mt-2" style="color: rgb(74, 42, 58);">Florida's largest music education professional
                    learning event</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 max-w-5xl mx-auto">
                <div class="text-center" style="opacity: 1; transform: none;"><span
                        class="block text-3xl md:text-4xl font-display font-bold mb-1"
                        style="color: rgb(3, 46, 125);">250+</span><span
                        class="text-xs font-body font-medium uppercase tracking-wide"
                        style="color: rgb(74, 42, 58);">Clinic Sessions &amp; Concerts</span></div>
                <div class="text-center" style="opacity: 1; transform: none;"><span
                        class="block text-3xl md:text-4xl font-display font-bold mb-1"
                        style="color: rgb(3, 46, 125);">24</span><span
                        class="text-xs font-body font-medium uppercase tracking-wide"
                        style="color: rgb(74, 42, 58);">All-State Ensembles</span></div>
                <div class="text-center" style="opacity: 1; transform: none;"><span
                        class="block text-3xl md:text-4xl font-display font-bold mb-1"
                        style="color: rgb(3, 46, 125);">10,000+</span><span
                        class="text-xs font-body font-medium uppercase tracking-wide"
                        style="color: rgb(74, 42, 58);">Total Attendees</span></div>
                <div class="text-center" style="opacity: 1; transform: none;"><span
                        class="block text-3xl md:text-4xl font-display font-bold mb-1"
                        style="color: rgb(3, 46, 125);">50+</span><span
                        class="text-xs font-body font-medium uppercase tracking-wide"
                        style="color: rgb(74, 42, 58);">Exhibitors &amp; Sponsors</span></div>
                <div class="text-center" style="opacity: 1; transform: none;"><span
                        class="block text-3xl md:text-4xl font-display font-bold mb-1"
                        style="color: rgb(3, 46, 125);">6</span><span
                        class="text-xs font-body font-medium uppercase tracking-wide"
                        style="color: rgb(74, 42, 58);">Performance Genres</span></div>
                <div class="text-center" style="opacity: 1; transform: none;"><span
                        class="block text-3xl md:text-4xl font-display font-bold mb-1"
                        style="color: rgb(3, 46, 125);">67</span><span
                        class="text-xs font-body font-medium uppercase tracking-wide"
                        style="color: rgb(74, 42, 58);">Florida Counties Represented</span></div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . "/../components/footer.php"; ?>