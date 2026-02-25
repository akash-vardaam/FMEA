import { motion } from "framer-motion";
import { Link } from "react-router-dom";
import {
  ChevronRight,
  Users,
  GraduationCap,
  BookOpen,
  Briefcase,
  Music,
  Award,
  Calendar,
  FileText,
  Globe,
  Shield,
  Heart,
  Star,
  CheckCircle,
  ArrowRight,
  ExternalLink,
} from "lucide-react";
import membershipHero from "@/assets/membership-hero.png";
import conferencePhoto from "@/assets/conference-photo.jpg";
import membershipFeature from "@/assets/membership-feature.jpg";
import benefitConference from "@/assets/benefit-conference.jpg";
import benefitAllstate from "@/assets/benefit-allstate.jpg";
import benefitMagazine from "@/assets/benefit-magazine.jpg";
import benefitNational from "@/assets/benefit-national.jpg";
import benefitInsurance from "@/assets/benefit-insurance.jpg";
import benefitCareers from "@/assets/benefit-careers.jpg";
import MegaMenu from "@/components/layout/MegaMenu";
import Footer from "@/components/layout/Footer";
import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "@/components/ui/accordion";
import { Button } from "@/components/ui/button";

const fadeIn = {
  initial: { opacity: 0, y: 20 },
  whileInView: { opacity: 1, y: 0 },
  viewport: { once: true },
  transition: { duration: 0.5 },
};

const coreBenefits = [
  {
    icon: <Calendar className="w-6 h-6" />,
    title: "Annual Professional Development Conference",
    description:
      "Attend the largest music education conference in Florida with over 3,000 colleagues, featuring 300+ sessions, performances, and keynotes.",
    image: benefitConference,
  },
  {
    icon: <Music className="w-6 h-6" />,
    title: "All-State Ensemble Eligibility",
    description:
      "Your students become eligible to audition for Florida All-State ensembles — the most prestigious honor for student musicians in the state.",
    image: benefitAllstate,
  },
  {
    icon: <BookOpen className="w-6 h-6" />,
    title: "Florida Music Director Magazine",
    description:
      "Receive the award-winning Florida Music Director magazine, packed with pedagogical articles, advocacy updates, and member news.",
    image: benefitMagazine,
  },
  {
    icon: <Globe className="w-6 h-6" />,
    title: "NAfME National Membership",
    description:
      "Your FMEA membership includes National Association for Music Education (NAfME) membership, connecting you to a nationwide network.",
    image: benefitNational,
  },
  {
    icon: <Shield className="w-6 h-6" />,
    title: "Professional Liability Insurance",
    description:
      "Access to $1 million in professional liability insurance coverage through your NAfME membership at no additional cost.",
    image: benefitInsurance,
  },
  {
    icon: <Briefcase className="w-6 h-6" />,
    title: "Job Board & Career Resources",
    description:
      "Search music education job listings across Florida and access career development resources exclusively for members.",
    image: benefitCareers,
  },
];

const membershipTypes = [
  {
    id: "active",
    title: "Active Membership",
    subtitle: "For certified music educators currently teaching in Florida",
    icon: <Users className="w-5 h-5" />,
    price: "$130/year",
    color: "bg-primary",
    benefits: [
      "Full voting rights in FMEA elections",
      "Eligibility to serve on committees and the board of directors",
      "Student eligibility for All-State ensembles and MPAs",
      "Discounted conference registration",
      "Florida Music Director magazine subscription",
      "NAfME national membership included",
      "Professional liability insurance coverage",
      "Access to member-only resources and publications",
      "Professional development certificate tracking",
    ],
  },
  {
    id: "collegiate",
    title: "Collegiate Membership",
    subtitle: "For college students majoring in music education",
    icon: <GraduationCap className="w-5 h-5" />,
    price: "$43/year",
    color: "bg-secondary",
    benefits: [
      "Discounted conference registration",
      "Networking with active music educators",
      "Access to mentorship programs",
      "NAfME Collegiate membership included",
      "Florida Music Director magazine subscription",
      "Job board access for student teaching and first-year positions",
      "Eligibility for collegiate chapter events",
      "Professional development workshops",
    ],
  },
  {
    id: "retired",
    title: "Retired Membership",
    subtitle: "For retired music educators who wish to stay connected",
    icon: <Award className="w-5 h-5" />,
    price: "$75/year",
    color: "bg-accent",
    benefits: [
      "Continued access to conferences and events",
      "Florida Music Director magazine subscription",
      "NAfME membership included",
      "Networking with active and retired colleagues",
      "Eligibility to mentor new teachers",
      "Voting rights maintained",
    ],
  },
  {
    id: "associate",
    title: "Associate / Friend of Music",
    subtitle: "For supporters of music education who are not certified educators",
    icon: <Heart className="w-5 h-5" />,
    price: "$75/year",
    color: "bg-primary",
    benefits: [
      "Conference attendance eligibility",
      "Florida Music Director magazine subscription",
      "Support the mission of music education in Florida",
      "Networking with music education professionals",
      "Access to FMEA publications and resources",
    ],
  },
  {
    id: "corporate",
    title: "Corporate Partner Membership",
    subtitle: "For businesses and organizations supporting music education",
    icon: <Briefcase className="w-5 h-5" />,
    price: "Starting at $500/year",
    color: "bg-secondary",
    benefits: [
      "Exhibitor priority booth selection",
      "Logo placement on FMEA website and publications",
      "Product Showcase session opportunities at conference",
      "Complimentary conference registrations",
      "Advertising discounts in Florida Music Director",
      "Access to FMEA mailing list (one-time use)",
      "Recognition at conference events",
      "Direct connection to 5,000+ music educators",
    ],
  },
];

const MembershipBenefitsPage = () => {
  return (
    <div className="min-h-screen bg-background">
      <MegaMenu />

      {/* Hero Banner */}
      <section className="relative py-16 lg:py-20 overflow-hidden">
        <div
          className="absolute inset-0 bg-cover bg-top bg-no-repeat"
          style={{ backgroundImage: `url(${membershipHero})` }}
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
              Membership Benefits
            </h1>
            <p className="text-lg font-body text-accent-foreground/80 max-w-2xl whitespace-nowrap">
              Grow as a music educator while connecting with over 5,000 music teachers from across Florida.
            </p>
          </motion.div>
        </div>
      </section>

      {/* Breadcrumbs */}
      <div className="bg-muted border-b border-border">
        <div className="container px-6">
          <nav className="flex items-center gap-1.5 py-3 text-sm font-body text-muted-foreground max-w-4xl mx-auto">
            <Link to="/" className="hover:text-primary transition-colors">
              Home
            </Link>
            <ChevronRight className="w-3.5 h-3.5" />
            <span className="text-foreground font-medium">Membership Benefits</span>
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
                  src={membershipFeature}
                  alt="Music teachers collaborating at a professional development workshop"
                  className="w-full h-64 md:h-full object-cover rounded-xl"
                />
              </div>
              <div className="flex-1">
                <p className="font-body text-muted-foreground leading-relaxed mb-6">
                  The very core of FMEA is its membership. Membership in the association speaks volumes
                  about an individual's commitment toward music education and the association's
                  credibility in representing the music education profession.
                </p>
                <p className="font-body text-muted-foreground leading-relaxed">
                  Individual FMEA membership includes membership in the National Association for Music
                  Education (NAfME), providing access to national resources, advocacy, and professional
                  liability insurance. Here's what your membership unlocks.
                </p>
              </div>
            </div>
          </motion.div>
        </section>

        {/* Core Benefits Grid */}
        <section className="bg-muted">
          <div className="container px-6 py-16">
            <motion.div {...fadeIn} className="max-w-4xl mx-auto">
              <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground mb-3">
                Core Benefits
              </h2>
              <p className="font-body text-muted-foreground mb-10">
                Every FMEA member enjoys these benefits regardless of membership type.
              </p>
              <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                {coreBenefits.map((benefit, index) => (
                  <motion.div
                    key={benefit.title}
                    initial={{ opacity: 0, y: 20 }}
                    whileInView={{ opacity: 1, y: 0 }}
                    viewport={{ once: true }}
                    transition={{ duration: 0.4, delay: index * 0.06 }}
                    className="bg-card rounded-xl border border-border overflow-hidden group hover:shadow-md transition-shadow"
                  >
                    <img
                      src={benefit.image}
                      alt={benefit.title}
                      className="w-full h-40 object-cover"
                    />
                    <div className="p-6">
                      <div className="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                        {benefit.icon}
                      </div>
                      <h3 className="font-display font-bold text-foreground mb-2 text-sm">
                        {benefit.title}
                      </h3>
                      <p className="font-body text-sm text-muted-foreground leading-relaxed">
                        {benefit.description}
                      </p>
                    </div>
                  </motion.div>
                ))}
              </div>
            </motion.div>
          </div>
        </section>

        {/* Membership Types Accordion */}
        <section className="container px-6 py-16">
          <motion.div {...fadeIn} className="max-w-4xl mx-auto">
            <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground mb-3">
              Membership Types
            </h2>
            <p className="font-body text-muted-foreground mb-10">
              Choose the membership that fits your role in music education. Expand each type below
              to see specific benefits and pricing.
            </p>

            <Accordion type="single" collapsible className="space-y-4">
              {membershipTypes.map((type, index) => (
                <motion.div
                  key={type.id}
                  initial={{ opacity: 0, y: 15 }}
                  whileInView={{ opacity: 1, y: 0 }}
                  viewport={{ once: true }}
                  transition={{ duration: 0.3, delay: index * 0.06 }}
                >
                  <AccordionItem
                    value={type.id}
                    className="border border-border rounded-xl overflow-hidden bg-card data-[state=open]:shadow-md transition-shadow"
                  >
                    <AccordionTrigger className="px-6 py-5 hover:no-underline hover:bg-muted/50 transition-colors">
                      <div className="flex items-center gap-4 text-left">
                        <div
                          className={`w-10 h-10 rounded-lg ${type.color} text-primary-foreground flex items-center justify-center flex-shrink-0`}
                        >
                          {type.icon}
                        </div>
                        <div>
                          <h3 className="font-display font-bold text-foreground text-base">
                            {type.title}
                          </h3>
                          <p className="text-sm font-body text-muted-foreground mt-0.5">
                            {type.subtitle}
                          </p>
                        </div>
                        <span className="ml-auto mr-4 text-sm font-body font-semibold text-primary whitespace-nowrap hidden sm:block">
                          {type.price}
                        </span>
                      </div>
                    </AccordionTrigger>
                    <AccordionContent className="px-6 pb-6">
                      <div className="pt-2">
                        <p className="text-sm font-body font-semibold text-primary mb-4 sm:hidden">
                          {type.price}
                        </p>
                        <div className="grid gap-3">
                          {type.benefits.map((benefit, i) => (
                            <div key={i} className="flex items-start gap-3">
                              <CheckCircle className="w-4 h-4 text-primary mt-0.5 flex-shrink-0" />
                              <p className="font-body text-sm text-muted-foreground">{benefit}</p>
                            </div>
                          ))}
                        </div>
                      </div>
                    </AccordionContent>
                  </AccordionItem>
                </motion.div>
              ))}
            </Accordion>
          </motion.div>
        </section>

        {/* FAQ quick section */}
        <section className="bg-muted">
          <div className="container px-6 py-16">
            <motion.div {...fadeIn} className="max-w-4xl mx-auto">
              <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground mb-3">
                Frequently Asked Questions
              </h2>
              <p className="font-body text-muted-foreground mb-10">
                Common questions about FMEA membership.
              </p>
              <Accordion type="single" collapsible className="space-y-3">
                <AccordionItem value="faq-1" className="border border-border rounded-xl overflow-hidden bg-card">
                  <AccordionTrigger className="px-6 py-4 hover:no-underline hover:bg-muted/50 text-left font-display font-semibold text-foreground">
                    Does my FMEA membership include NAfME?
                  </AccordionTrigger>
                  <AccordionContent className="px-6 pb-5">
                    <p className="font-body text-sm text-muted-foreground leading-relaxed">
                      Yes! Individual FMEA membership automatically includes membership in the
                      National Association for Music Education (NAfME). This gives you access to
                      national resources, advocacy at the federal level, and professional liability
                      insurance coverage.
                    </p>
                  </AccordionContent>
                </AccordionItem>
                <AccordionItem value="faq-2" className="border border-border rounded-xl overflow-hidden bg-card">
                  <AccordionTrigger className="px-6 py-4 hover:no-underline hover:bg-muted/50 text-left font-display font-semibold text-foreground">
                    When does my membership expire?
                  </AccordionTrigger>
                  <AccordionContent className="px-6 pb-5">
                    <p className="font-body text-sm text-muted-foreground leading-relaxed">
                      FMEA memberships run on a fiscal year from July 1 through June 30. You can
                      renew your membership at any time through the member portal. If your
                      membership lapses, your students will lose eligibility for All-State and MPA
                      events.
                    </p>
                  </AccordionContent>
                </AccordionItem>
                <AccordionItem value="faq-3" className="border border-border rounded-xl overflow-hidden bg-card">
                  <AccordionTrigger className="px-6 py-4 hover:no-underline hover:bg-muted/50 text-left font-display font-semibold text-foreground">
                    I'm a student teacher — which membership should I choose?
                  </AccordionTrigger>
                  <AccordionContent className="px-6 pb-5">
                    <p className="font-body text-sm text-muted-foreground leading-relaxed">
                      If you are currently enrolled in a college or university music education
                      program, the Collegiate Membership is right for you. It offers a reduced rate
                      and includes access to mentorship programs, conference registration discounts,
                      and job board resources to help launch your career.
                    </p>
                  </AccordionContent>
                </AccordionItem>
                <AccordionItem value="faq-4" className="border border-border rounded-xl overflow-hidden bg-card">
                  <AccordionTrigger className="px-6 py-4 hover:no-underline hover:bg-muted/50 text-left font-display font-semibold text-foreground">
                    Can non-teachers join FMEA?
                  </AccordionTrigger>
                  <AccordionContent className="px-6 pb-5">
                    <p className="font-body text-sm text-muted-foreground leading-relaxed">
                      Absolutely. The Associate / Friend of Music membership is designed for parents,
                      administrators, community members, and other supporters of music education who
                      want to stay connected and support FMEA's mission.
                    </p>
                  </AccordionContent>
                </AccordionItem>
              </Accordion>
            </motion.div>
          </div>
        </section>

        {/* CTA */}
        <section className="bg-primary">
          <div className="container px-6 py-16">
            <motion.div {...fadeIn} className="max-w-4xl mx-auto text-center">
              <Star className="w-10 h-10 text-secondary mx-auto mb-4" />
              <h2 className="text-2xl md:text-3xl font-display font-bold text-primary-foreground mb-4">
                Ready to Join?
              </h2>
              <p className="font-body text-primary-foreground/80 mb-8 max-w-2xl mx-auto">
                Join over 5,000 music educators across Florida who rely on FMEA for professional
                development, student opportunities, and advocacy.
              </p>
              <div className="flex flex-wrap gap-4 justify-center">
                <Button
                  size="lg"
                  className="bg-secondary text-secondary-foreground hover:bg-secondary/90 font-body font-semibold"
                >
                  Join FMEA Today
                  <ArrowRight className="ml-2 w-4 h-4" />
                </Button>
                <Button
                  size="lg"
                  className="bg-primary-foreground/20 text-primary-foreground border border-primary-foreground/40 hover:bg-primary-foreground/30 font-body"
                >
                  Renew Membership
                  <ExternalLink className="ml-2 w-4 h-4" />
                </Button>
              </div>
            </motion.div>
          </div>
        </section>
      </main>

      <Footer />
    </div>
  );
};

export default MembershipBenefitsPage;
