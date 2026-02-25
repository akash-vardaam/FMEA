import { motion } from "framer-motion";
import { Link } from "react-router-dom";
import { ChevronRight, Users, BookOpen, Music, Award, MapPin, Phone, Mail } from "lucide-react";
import conferencePhoto from "@/assets/conference-photo.jpg";
import aboutFeature from "@/assets/about-feature.jpg";
import plcImage from "@/assets/plc.png";
import studentsImage from "@/assets/students.jpg";
import capitalImage from "@/assets/capital.png";
import MegaMenu from "@/components/layout/MegaMenu";
import Footer from "@/components/layout/Footer";

const fadeIn = {
  initial: { opacity: 0, y: 20 },
  whileInView: { opacity: 1, y: 0 },
  viewport: { once: true },
  transition: { duration: 0.5 },
};

const divisions = [
  { name: "Band", icon: Music },
  { name: "Orchestra", icon: Music },
  { name: "Vocal/Choral", icon: Music },
  { name: "General Music", icon: BookOpen },
  { name: "College", icon: Award },
  { name: "Music Education Research", icon: BookOpen },
];

const highlights = [
  { value: "6,000+", label: "Active Members" },
  { value: "85+", label: "Years of Service" },
  { value: "67", label: "Florida Counties" },
  { value: "501(c)(3)", label: "Nonprofit Status" },
];

const AboutPage = () => {
  return (
    <div className="min-h-screen bg-background">
      <MegaMenu />

      {/* Hero Banner */}
      <section className="relative py-16 lg:py-20 overflow-hidden">
        <div
          className="absolute inset-0 bg-cover bg-top bg-no-repeat"
          style={{ backgroundImage: `url(${aboutFeature})` }}
        />
        <div className="absolute inset-0 bg-accent/90" />
        <div className="container relative z-10 px-6">
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6 }}
            className="max-w-4xl mx-auto"
          >
            <h1 className="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-accent-foreground mb-4">
              About FMEA
            </h1>
            <p className="text-lg font-body text-accent-foreground/80">
              The Florida Music Education Association
            </p>
          </motion.div>
        </div>
      </section>

      {/* Breadcrumbs */}
      <div className="bg-muted border-b border-border">
        <div className="container px-6">
          <nav className="flex items-center gap-1.5 py-3 text-sm font-body text-muted-foreground max-w-4xl mx-auto">
            <Link to="/" className="hover:text-primary transition-colors">Home</Link>
            <ChevronRight className="w-3.5 h-3.5" />
            <span className="text-foreground font-medium">About</span>
          </nav>
        </div>
      </div>

      <main className="bg-background">
      {/* Intro with Feature Photo */}
        <section className="container px-6 py-16">
          <motion.div {...fadeIn} className="max-w-4xl mx-auto">
            <div className="flex flex-col md:flex-row gap-8 items-start">
              <div className="w-full md:w-2/5 flex-shrink-0">
                <img
                  src={aboutFeature}
                  alt="Students playing instruments together in a music classroom"
                  className="w-full h-64 md:h-full object-cover rounded-xl"
                />
              </div>
              <div className="flex-1">
                <p className="font-body text-muted-foreground leading-relaxed mb-4">
                  FMEA is a not-for-profit 501(c)(3) organization dedicated to advancing music education across Florida. We publish the <em>Florida Music Director</em> magazine, organize professional development opportunities, and advocate for music education at the state and national level.
                </p>
                <p className="font-body text-muted-foreground leading-relaxed">
                  Founded in 1944, FMEA is the state affiliate of NAfME, representing educators from elementary general music through university programs.
                </p>
              </div>
            </div>
          </motion.div>
        </section>

        {/* Mission Statement */}
        <section className="container px-6 pb-16">
          <motion.div {...fadeIn} className="max-w-4xl mx-auto">
            <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">
              Our Mission
            </h2>
            <blockquote className="border-l-4 border-secondary pl-6">
              <p className="text-xl font-display italic text-foreground/90 leading-relaxed">
                The mission of the Florida Music Education Association is to promote quality, comprehensive music education in all Florida schools.
              </p>
            </blockquote>
          </motion.div>
        </section>

        {/* Highlights */}
        <section className="bg-muted">
          <div className="container px-6 py-16">
            <motion.div {...fadeIn} className="max-w-4xl mx-auto">
              <div className="grid grid-cols-2 md:grid-cols-4 gap-6">
                {highlights.map((stat) => (
                  <div key={stat.label} className="bg-card rounded-xl border border-border p-6 text-center">
                    <span className="block text-2xl font-display font-bold text-primary mb-1">
                      {stat.value}
                    </span>
                    <span className="text-sm font-body text-muted-foreground">
                      {stat.label}
                    </span>
                  </div>
                ))}
              </div>
            </motion.div>
          </div>
        </section>

        {/* What We Do */}
        <section className="container px-6 py-16">
          <motion.div {...fadeIn} className="max-w-4xl mx-auto">
            <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">
              What We Do
            </h2>
            <div className="grid md:grid-cols-2 gap-6">
              <div className="bg-card rounded-xl border border-border overflow-hidden">
                <img src={plcImage} alt="Professional Learning Conference" className="w-full h-40 object-cover" />
                <div className="p-6">
                  <h3 className="font-display font-bold text-lg text-foreground mb-2">Professional Development</h3>
                  <p className="font-body text-sm text-muted-foreground leading-relaxed">
                    FMEA organizes the annual Professional Learning Conference — one of the largest music education conferences in the nation — along with year-round workshops, webinars, and online learning opportunities.
                  </p>
                </div>
              </div>
              <div className="bg-card rounded-xl border border-border overflow-hidden">
                <img src="https://images.unsplash.com/photo-1465847899084-d164df4dedc6?w=600&h=400&fit=crop" alt="All-State Ensembles" className="w-full h-40 object-cover" />
                <div className="p-6">
                  <h3 className="font-display font-bold text-lg text-foreground mb-2">All-State Ensembles</h3>
                  <p className="font-body text-sm text-muted-foreground leading-relaxed">
                    Each year, FMEA coordinates auditions and performances for 24 All-State ensembles, giving Florida's finest student musicians the opportunity to perform under nationally renowned conductors.
                  </p>
                </div>
              </div>
              <div className="bg-card rounded-xl border border-border overflow-hidden">
                <img src={capitalImage} alt="Advocacy at the state capitol" className="w-full h-40 object-cover" />
                <div className="p-6">
                  <h3 className="font-display font-bold text-lg text-foreground mb-2">Advocacy</h3>
                  <p className="font-body text-sm text-muted-foreground leading-relaxed">
                    FMEA advocates for music education at the state and national levels, working with legislators and education leaders to ensure every Florida student has access to a quality music education.
                  </p>
                </div>
              </div>
              <div className="bg-card rounded-xl border border-border overflow-hidden">
                <img src={studentsImage} alt="Students and educators collaborating" className="w-full h-40 object-cover" />
                <div className="p-6">
                  <h3 className="font-display font-bold text-lg text-foreground mb-2">Publications & Research</h3>
                  <p className="font-body text-sm text-muted-foreground leading-relaxed">
                    FMEA publishes the <em>Florida Music Director</em> magazine and supports music education research, providing educators with resources and the latest developments in the field.
                  </p>
                </div>
              </div>
            </div>
          </motion.div>
        </section>

        {/* Divisions */}
        <section className="bg-muted">
          <div className="container px-6 py-16">
            <motion.div {...fadeIn} className="max-w-4xl mx-auto">
              <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground mb-4">
                Our Divisions
              </h2>
              <p className="font-body text-muted-foreground mb-8">
                FMEA is organized into six component divisions, each serving a specific area of music education.
              </p>
              <div className="grid grid-cols-2 md:grid-cols-3 gap-4">
                {divisions.map((division) => (
                  <motion.div
                    key={division.name}
                    {...fadeIn}
                    className="bg-card rounded-xl border border-border p-5 flex items-center gap-3"
                  >
                    <div className="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                      <division.icon className="w-4 h-4 text-primary" />
                    </div>
                    <span className="font-body font-medium text-foreground text-sm">{division.name}</span>
                  </motion.div>
                ))}
              </div>
            </motion.div>
          </div>
        </section>

        {/* Leadership */}
        <section className="container px-6 py-16">
          <motion.div {...fadeIn} className="max-w-4xl mx-auto">
            <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">
              Leadership
            </h2>
            <p className="font-body text-muted-foreground leading-relaxed mb-6">
              FMEA is governed by an elected Board of Directors composed of music educators from across the state. The organization is led by the Executive Director, Dr. Kathleen D. Sanz, and a team of dedicated staff based at the Hinckley Center for Fine Arts Education in Tallahassee.
            </p>
            <div className="bg-card rounded-xl border border-border p-6">
              <h3 className="font-display font-bold text-lg text-foreground mb-1">
                Dr. Kathleen D. Sanz
              </h3>
              <p className="text-sm font-body text-primary font-semibold mb-3">Executive Director</p>
              <p className="font-body text-sm text-muted-foreground leading-relaxed">
                Dr. Sanz has led the organization for over two decades, advancing FMEA's mission through strategic partnerships, advocacy efforts, and the expansion of professional development programs for Florida's music educators.
              </p>
            </div>
          </motion.div>
        </section>

        {/* Contact */}
        <section className="bg-primary">
          <div className="container px-6 py-16">
            <motion.div {...fadeIn} className="max-w-4xl mx-auto text-center">
              <h2 className="text-2xl md:text-3xl font-display font-bold text-primary-foreground mb-4">
                Get in Touch
              </h2>
              <p className="font-body text-primary-foreground/80 mb-8 max-w-2xl mx-auto">
                Have questions about FMEA or music education in Florida? We'd love to hear from you.
              </p>
              <div className="flex flex-wrap items-center justify-center gap-6 text-sm font-body text-primary-foreground/70 mb-4">
                <span className="flex items-center gap-2">
                  <MapPin className="w-4 h-4" />
                  402 Office Plaza Drive, Tallahassee, FL 32301
                </span>
              </div>
              <div className="flex flex-wrap items-center justify-center gap-6 text-sm font-body text-primary-foreground/70">
                <a href="tel:8508786844" className="flex items-center gap-2 hover:text-secondary transition-colors">
                  <Phone className="w-4 h-4" />
                  (850) 878-6844
                </a>
                <a href="mailto:info@fmea.org" className="flex items-center gap-2 hover:text-secondary transition-colors">
                  <Mail className="w-4 h-4" />
                  info@fmea.org
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

export default AboutPage;
