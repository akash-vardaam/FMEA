import { motion } from "framer-motion";
import { Link } from "react-router-dom";
import { ArrowLeft, CheckCircle, Calendar, MapPin, Users, Mail, Phone, ExternalLink, ChevronRight } from "lucide-react";
import conferencePhoto from "@/assets/conference-photo.jpg";
import { Button } from "@/components/ui/button";
import MegaMenu from "@/components/layout/MegaMenu";
import ConferenceNav from "@/components/conference/ConferenceNav";
import Footer from "@/components/layout/Footer";

const fadeIn = {
  initial: { opacity: 0, y: 20 },
  whileInView: { opacity: 1, y: 0 },
  viewport: { once: true },
  transition: { duration: 0.5 },
};

const boothTypes = [
  {
    name: "Standard Booth",
    size: "10' x 10'",
    description: "Includes pipe & drape, one 6' skirted table, two chairs, company ID sign, and one electrical outlet.",
  },
  {
    name: "Double Booth",
    size: "10' x 20'",
    description: "Two standard booths combined for greater visibility and display space.",
  },
  {
    name: "Island Booth",
    size: "20' x 20'",
    description: "Premium open-floor display area with exposure from all sides.",
  },
];

const exhibitSchedule = [
  { day: "Wednesday, January 14", time: "12:00 PM – 6:00 PM", event: "Exhibitor Move-In" },
  { day: "Thursday, January 15", time: "9:00 AM – 5:00 PM", event: "Exhibit Hall Open" },
  { day: "Friday, January 16", time: "9:00 AM – 5:00 PM", event: "Exhibit Hall Open" },
  { day: "Saturday, January 17", time: "9:00 AM – 1:00 PM", event: "Exhibit Hall Open & Move-Out" },
];

const whyExhibit = [
  "Access to over 10,000 attendees including music educators, college students, and administrators",
  "Network with K-12 music teachers and college music professors from across Florida",
  "Showcase your products and services to key decision-makers in music education",
  "Participate in Product Showcase sessions to demonstrate your offerings",
  "Visibility throughout the 4-day conference at the Tampa Convention Center",
  "Complimentary exhibitor badges for booth staff",
];

const keyDates = [
  { date: "March 1, 2025", description: "Priority booth selection deadline for returning exhibitors" },
  { date: "July 15, 2025", description: "Product Showcase application deadline" },
  { date: "October 1, 2025", description: "Exhibitor service kit available online" },
  { date: "December 12, 2025", description: "Early registration deadline" },
  { date: "January 14, 2026", description: "Exhibitor move-in begins" },
];

const ExhibitorInfoPage = () => {
  return (
    <div className="min-h-screen bg-background">
      <MegaMenu />

      {/* Hero Banner */}
      <section className="relative py-16 lg:py-20 overflow-hidden">
        <div
          className="absolute inset-0 bg-cover bg-center bg-no-repeat"
          style={{ backgroundImage: `url(${conferencePhoto})` }}
        />
        <div className="absolute inset-0 bg-accent/90" />
        <div className="container relative z-10 px-6">
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6 }}
            className="max-w-4xl mx-auto"
          >
            <Link
              to="/conference"
              className="inline-flex items-center gap-2 text-sm font-body text-accent-foreground/70 hover:text-secondary transition-colors mb-6"
            >
              <ArrowLeft className="w-4 h-4" />
              Back to Conference
            </Link>
            <h1 className="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-accent-foreground mb-4">
              Exhibitor Information
            </h1>
            <p className="text-lg font-body text-accent-foreground/80 mb-2">
              FMEA 2026 Professional Learning Conference
            </p>
            <div className="flex flex-wrap items-center gap-4 text-sm font-body text-accent-foreground/60">
              <span className="flex items-center gap-1.5">
                <Calendar className="w-4 h-4" />
                January 14–17, 2026
              </span>
              <span className="flex items-center gap-1.5">
                <MapPin className="w-4 h-4" />
                Tampa Convention Center
              </span>
            </div>
          </motion.div>
        </div>
      </section>

      <ConferenceNav />

      {/* Breadcrumbs */}
      <div className="bg-muted border-b border-border">
        <div className="container px-6">
          <nav className="flex items-center gap-1.5 py-3 text-sm font-body text-muted-foreground max-w-4xl mx-auto">
            <Link to="/" className="hover:text-primary transition-colors">Home</Link>
            <ChevronRight className="w-3.5 h-3.5" />
            <Link to="/conference" className="hover:text-primary transition-colors">Conference</Link>
            <ChevronRight className="w-3.5 h-3.5" />
            <span className="text-foreground font-medium">Exhibitor Information</span>
          </nav>
        </div>
      </div>

      <main className="bg-background">
        {/* Intro */}
        <section className="container px-6 py-16">
          <motion.div {...fadeIn} className="max-w-4xl mx-auto">
            <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">
              Exhibit at the FMEA Conference
            </h2>
            <p className="font-body text-muted-foreground leading-relaxed mb-6">
              The FMEA Conference is host to over 10,000 attendees, including music educators, music education majors, professors, music supervisors, professional musicians, school administrators, K-12 students, and their parents and chaperones. More than 300 events will include professional learning clinic sessions, keynote speakers, meetings, and performances by world-class musicians and Florida's finest student musicians.
            </p>
            <p className="font-body text-muted-foreground leading-relaxed">
              The exhibit hall is a key feature of the conference experience, providing attendees with the opportunity to explore the latest products, services, and innovations in music education.
            </p>
          </motion.div>
        </section>

        {/* Why Exhibit */}
        <section className="bg-muted">
          <div className="container px-6 py-16">
            <motion.div {...fadeIn} className="max-w-4xl mx-auto">
              <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground mb-8">
                Why Exhibit?
              </h2>
              <div className="grid gap-4">
                {whyExhibit.map((reason, index) => (
                  <motion.div
                    key={index}
                    initial={{ opacity: 0, x: -15 }}
                    whileInView={{ opacity: 1, x: 0 }}
                    viewport={{ once: true }}
                    transition={{ duration: 0.3, delay: index * 0.05 }}
                    className="flex items-start gap-3"
                  >
                    <CheckCircle className="w-5 h-5 text-primary mt-0.5 flex-shrink-0" />
                    <p className="font-body text-muted-foreground">{reason}</p>
                  </motion.div>
                ))}
              </div>
            </motion.div>
          </div>
        </section>

        {/* Booth Types */}
        <section className="container px-6 py-16">
          <motion.div {...fadeIn} className="max-w-4xl mx-auto">
            <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground mb-8">
              Booth Options
            </h2>
            <div className="grid md:grid-cols-3 gap-6">
              {boothTypes.map((booth) => (
                <motion.div
                  key={booth.name}
                  {...fadeIn}
                  className="bg-card rounded-xl border border-border p-6"
                >
                  <h3 className="font-display font-bold text-lg text-foreground mb-1">
                    {booth.name}
                  </h3>
                  <p className="text-sm font-body font-semibold text-primary mb-3">
                    {booth.size}
                  </p>
                  <p className="font-body text-sm text-muted-foreground leading-relaxed">
                    {booth.description}
                  </p>
                </motion.div>
              ))}
            </div>
          </motion.div>
        </section>

        {/* Exhibit Hall Schedule */}
        <section className="bg-muted">
          <div className="container px-6 py-16">
            <motion.div {...fadeIn} className="max-w-4xl mx-auto">
              <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground mb-8">
                Exhibit Hall Schedule
              </h2>
              <div className="space-y-3">
                {exhibitSchedule.map((item, index) => (
                  <motion.div
                    key={index}
                    initial={{ opacity: 0, y: 10 }}
                    whileInView={{ opacity: 1, y: 0 }}
                    viewport={{ once: true }}
                    transition={{ duration: 0.3, delay: index * 0.05 }}
                    className="bg-card rounded-xl border border-border p-5 flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6"
                  >
                    <div className="sm:w-48 flex-shrink-0">
                      <p className="font-body font-bold text-sm text-primary">{item.day}</p>
                    </div>
                    <p className="font-body text-sm text-muted-foreground">
                      {item.time} — {item.event}
                    </p>
                  </motion.div>
                ))}
              </div>
            </motion.div>
          </div>
        </section>

        {/* Key Dates */}
        <section className="container px-6 py-16">
          <motion.div {...fadeIn} className="text-center">
            <div className="flex items-center justify-center gap-3 mb-10">
              <Calendar className="w-6 h-6 text-primary" />
              <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground">
                Key Dates for Exhibitors
              </h2>
            </div>

            <div className="max-w-xl mx-auto relative">
              {/* Center timeline line */}
              <div className="absolute left-1/2 top-0 bottom-0 w-0.5 bg-primary/20 -translate-x-1/2" />

              <div className="flex flex-col gap-6">
                {keyDates.map((item, index) => (
                  <motion.div
                    key={index}
                    initial={{ opacity: 0, y: 15 }}
                    whileInView={{ opacity: 1, y: 0 }}
                    viewport={{ once: true }}
                    transition={{ duration: 0.3, delay: index * 0.04 }}
                    className="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                  >
                    {/* Timeline dot - hide on first item */}
                    {index > 0 && <div className="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full bg-primary border-2 border-background z-10" />}
                    <p className="font-body font-bold text-sm text-primary mb-1">
                      {item.date}
                    </p>
                    <p className="font-body text-sm text-muted-foreground leading-relaxed">
                      {item.description}
                    </p>
                  </motion.div>
                ))}
              </div>
            </div>
          </motion.div>
        </section>

        {/* Contact / CTA */}
        <section className="bg-primary">
          <div className="container px-6 py-16">
            <motion.div {...fadeIn} className="max-w-4xl mx-auto text-center">
              <h2 className="text-2xl md:text-3xl font-display font-bold text-primary-foreground mb-4">
                Ready to Exhibit?
              </h2>
              <p className="font-body text-primary-foreground/80 mb-8 max-w-2xl mx-auto">
                Reserve your booth today to secure your preferred location. Returning exhibitors receive priority placement when reserving by March 1.
              </p>
              <div className="flex flex-wrap gap-4 justify-center mb-8">
                <Button
                  size="lg"
                  className="bg-secondary text-secondary-foreground hover:bg-secondary/90 font-body font-semibold"
                >
                  Reserve Your Booth
                  <ExternalLink className="ml-2 w-4 h-4" />
                </Button>
                <Button
                  size="lg"
                  className="bg-primary-foreground/20 text-primary-foreground border border-primary-foreground/40 hover:bg-primary-foreground/30 font-body"
                >
                  Download Exhibitor Kit
                </Button>
              </div>
              <div className="flex flex-wrap items-center justify-center gap-6 text-sm font-body text-primary-foreground/70">
                <a href="mailto:exhibits@fmea.org" className="flex items-center gap-2 hover:text-secondary transition-colors">
                  <Mail className="w-4 h-4" />
                  exhibits@fmea.org
                </a>
                <a href="tel:8005057220" className="flex items-center gap-2 hover:text-secondary transition-colors">
                  <Phone className="w-4 h-4" />
                  (800) 505-7220
                </a>
              </div>
            </motion.div>
          </div>
        </section>
      </main>

      <Footer />
    </div>
  );
};

export default ExhibitorInfoPage;
