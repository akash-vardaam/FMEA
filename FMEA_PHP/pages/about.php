<?php
$page_title = "About FMEA";
$rootPrefix = "..";

require_once __DIR__ . "/../components/header.php";
require_once __DIR__ . "/../components/navbar.php";
?>

<section class="relative py-16 lg:py-20 overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-top bg-no-repeat"
        style="background-image: url('<?php echo $rootPrefix; ?>/assets/images/about-feature.jpg');"></div>
    <div class="absolute inset-0 bg-accent/90"></div>
    <div class="container relative z-10 px-6">
        <div class="max-w-4xl mx-auto" style="opacity: 1; transform: none;">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-accent-foreground mb-4">About FMEA
            </h1>
            <p class="text-lg font-body text-accent-foreground/80">The Florida Music Education Association</p>
        </div>
    </div>
</section>
<div class="bg-muted border-b border-border">
    <div class="container px-6">
        <nav class="flex items-center gap-1.5 py-3 text-sm font-body text-muted-foreground max-w-4xl mx-auto"><a
                class="hover:text-primary transition-colors" href="home.php">Home</a><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-right w-3.5 h-3.5">
                <path d="m9 18 6-6-6-6"></path>
            </svg><span class="text-foreground font-medium">About</span></nav>
    </div>
</div>
<main class="bg-background">
    <section class="container px-6 py-16">
        <div class="max-w-4xl mx-auto" style="opacity: 1; transform: none;">
            <div class="flex flex-col md:flex-row gap-8 items-start">
                <div class="w-full md:w-2/5 flex-shrink-0"><img
                        src="<?php echo $rootPrefix; ?>/assets/images/about-feature.jpg"
                        alt="Students playing instruments together in a music classroom"
                        class="w-full h-64 md:h-full object-cover rounded-xl"></div>
                <div class="flex-1">
                    <p class="font-body text-muted-foreground leading-relaxed mb-4">FMEA is a not-for-profit 501(c)(3)
                        organization dedicated to advancing music education across Florida. We publish the <em>Florida
                            Music Director</em> magazine, organize professional development opportunities, and advocate
                        for music education at the state and national level.</p>
                    <p class="font-body text-muted-foreground leading-relaxed">Founded in 1944, FMEA is the state
                        affiliate of NAfME, representing educators from elementary general music through university
                        programs.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container px-6 pb-16">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">Our Mission</h2>
            <blockquote class="border-l-4 border-secondary pl-6">
                <p class="text-xl font-display italic text-foreground/90 leading-relaxed">The mission of the Florida
                    Music Education Association is to promote quality, comprehensive music education in all Florida
                    schools.</p>
            </blockquote>
        </div>
    </section>
    <section class="bg-muted">
        <div class="container px-6 py-16">
            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="bg-card rounded-xl border border-border p-6 text-center"><span
                            class="block text-2xl font-display font-bold text-primary mb-1">6,000+</span><span
                            class="text-sm font-body text-muted-foreground">Active Members</span></div>
                    <div class="bg-card rounded-xl border border-border p-6 text-center"><span
                            class="block text-2xl font-display font-bold text-primary mb-1">85+</span><span
                            class="text-sm font-body text-muted-foreground">Years of Service</span></div>
                    <div class="bg-card rounded-xl border border-border p-6 text-center"><span
                            class="block text-2xl font-display font-bold text-primary mb-1">67</span><span
                            class="text-sm font-body text-muted-foreground">Florida Counties</span></div>
                    <div class="bg-card rounded-xl border border-border p-6 text-center"><span
                            class="block text-2xl font-display font-bold text-primary mb-1">501(c)(3)</span><span
                            class="text-sm font-body text-muted-foreground">Nonprofit Status</span></div>
                </div>
            </div>
        </div>
    </section>
    <section class="container px-6 py-16">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">What We Do</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-card rounded-xl border border-border overflow-hidden"><img
                        src="<?php echo $rootPrefix; ?>/assets/images/plc.png" alt="Professional Learning Conference"
                        class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="font-display font-bold text-lg text-foreground mb-2">Professional Development</h3>
                        <p class="font-body text-sm text-muted-foreground leading-relaxed">FMEA organizes the annual
                            Professional Learning Conference — one of the largest music education conferences in the
                            nation — along with year-round workshops, webinars, and online learning opportunities.</p>
                    </div>
                </div>
                <div class="bg-card rounded-xl border border-border overflow-hidden"><img
                        src="https://images.unsplash.com/photo-1465847899084-d164df4dedc6?w=600&amp;h=400&amp;fit=crop"
                        alt="All-State Ensembles" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="font-display font-bold text-lg text-foreground mb-2">All-State Ensembles</h3>
                        <p class="font-body text-sm text-muted-foreground leading-relaxed">Each year, FMEA coordinates
                            auditions and performances for 24 All-State ensembles, giving Florida's finest student
                            musicians the opportunity to perform under nationally renowned conductors.</p>
                    </div>
                </div>
                <div class="bg-card rounded-xl border border-border overflow-hidden"><img
                        src="<?php echo $rootPrefix; ?>/assets/images/capital.png" alt="Advocacy at the state capitol"
                        class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="font-display font-bold text-lg text-foreground mb-2">Advocacy</h3>
                        <p class="font-body text-sm text-muted-foreground leading-relaxed">FMEA advocates for music
                            education at the state and national levels, working with legislators and education leaders
                            to ensure every Florida student has access to a quality music education.</p>
                    </div>
                </div>
                <div class="bg-card rounded-xl border border-border overflow-hidden"><img
                        src="<?php echo $rootPrefix; ?>/assets/images/students.jpg"
                        alt="Students and educators collaborating" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="font-display font-bold text-lg text-foreground mb-2">Publications &amp; Research</h3>
                        <p class="font-body text-sm text-muted-foreground leading-relaxed">FMEA publishes the
                            <em>Florida Music Director</em> magazine and supports music education research, providing
                            educators with resources and the latest developments in the field.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-muted">
        <div class="container px-6 py-16">
            <div class="max-w-4xl mx-auto" style="transform: translateY(20px);">
                <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-4">Our Divisions</h2>
                <p class="font-body text-muted-foreground mb-8">FMEA is organized into six component divisions, each
                    serving a specific area of music education.</p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="bg-card rounded-xl border border-border p-5 flex items-center gap-3"
                        style="transform: translateY(20px);">
                        <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-music w-4 h-4 text-primary">
                                <path d="M9 18V5l12-2v13"></path>
                                <circle cx="6" cy="18" r="3"></circle>
                                <circle cx="18" cy="16" r="3"></circle>
                            </svg>
                        </div><span class="font-body font-medium text-foreground text-sm">Band</span>
                    </div>
                    <div class="bg-card rounded-xl border border-border p-5 flex items-center gap-3"
                        style="transform: translateY(20px);">
                        <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-music w-4 h-4 text-primary">
                                <path d="M9 18V5l12-2v13"></path>
                                <circle cx="6" cy="18" r="3"></circle>
                                <circle cx="18" cy="16" r="3"></circle>
                            </svg>
                        </div><span class="font-body font-medium text-foreground text-sm">Orchestra</span>
                    </div>
                    <div class="bg-card rounded-xl border border-border p-5 flex items-center gap-3"
                        style="transform: translateY(20px);">
                        <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-music w-4 h-4 text-primary">
                                <path d="M9 18V5l12-2v13"></path>
                                <circle cx="6" cy="18" r="3"></circle>
                                <circle cx="18" cy="16" r="3"></circle>
                            </svg>
                        </div><span class="font-body font-medium text-foreground text-sm">Vocal/Choral</span>
                    </div>
                    <div class="bg-card rounded-xl border border-border p-5 flex items-center gap-3"
                        style="transform: translateY(20px);">
                        <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-book-open w-4 h-4 text-primary">
                                <path d="M12 7v14"></path>
                                <path
                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                </path>
                            </svg>
                        </div><span class="font-body font-medium text-foreground text-sm">General Music</span>
                    </div>
                    <div class="bg-card rounded-xl border border-border p-5 flex items-center gap-3"
                        style="transform: translateY(20px);">
                        <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-award w-4 h-4 text-primary">
                                <path
                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                </path>
                                <circle cx="12" cy="8" r="6"></circle>
                            </svg>
                        </div><span class="font-body font-medium text-foreground text-sm">College</span>
                    </div>
                    <div class="bg-card rounded-xl border border-border p-5 flex items-center gap-3"
                        style="transform: translateY(20px);">
                        <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-book-open w-4 h-4 text-primary">
                                <path d="M12 7v14"></path>
                                <path
                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                </path>
                            </svg>
                        </div><span class="font-body font-medium text-foreground text-sm">Music Education
                            Research</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container px-6 py-16">
        <div class="max-w-4xl mx-auto" style="transform: translateY(20px);">
            <h2 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">Leadership</h2>
            <p class="font-body text-muted-foreground leading-relaxed mb-6">FMEA is governed by an elected Board of
                Directors composed of music educators from across the state. The organization is led by the Executive
                Director, Dr. Kathleen D. Sanz, and a team of dedicated staff based at the Hinckley Center for Fine Arts
                Education in Tallahassee.</p>
            <div class="bg-card rounded-xl border border-border p-6">
                <h3 class="font-display font-bold text-lg text-foreground mb-1">Dr. Kathleen D. Sanz</h3>
                <p class="text-sm font-body text-primary font-semibold mb-3">Executive Director</p>
                <p class="font-body text-sm text-muted-foreground leading-relaxed">Dr. Sanz has led the organization for
                    over two decades, advancing FMEA's mission through strategic partnerships, advocacy efforts, and the
                    expansion of professional development programs for Florida's music educators.</p>
            </div>
        </div>
    </section>
    <section class="bg-primary">
        <div class="container px-6 py-16">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl font-display font-bold text-primary-foreground mb-4">Get in Touch</h2>
                <p class="font-body text-primary-foreground/80 mb-8 max-w-2xl mx-auto">Have questions about FMEA or
                    music education in Florida? We'd love to hear from you.</p>
                <div
                    class="flex flex-wrap items-center justify-center gap-6 text-sm font-body text-primary-foreground/70 mb-4">
                    <span class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-4 h-4">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                            </path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>402 Office Plaza Drive, Tallahassee, FL 32301</span>
                </div>
                <div
                    class="flex flex-wrap items-center justify-center gap-6 text-sm font-body text-primary-foreground/70">
                    <a href="tel:8508786844" class="flex items-center gap-2 hover:text-secondary transition-colors"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-phone w-4 h-4">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>(850) 878-6844</a><a href="mailto:info@fmea.org"
                        class="flex items-center gap-2 hover:text-secondary transition-colors"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-mail w-4 h-4">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>info@fmea.org</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . "/../components/footer.php"; ?>