import { useState } from "react";
import { motion, AnimatePresence } from "framer-motion";
import { ChevronDown, Menu, X, User, LogIn, ArrowRight, Calendar, Users, Music, Award, Search, Heart } from "lucide-react";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import fmeaLogo from "@/assets/fmea-logo.png";

interface MenuItem {
  label: string;
  href: string;
  description?: string;
}

interface MenuSection {
  title: string;
  items: MenuItem[];
}

interface FeatureHighlight {
  title: string;
  description: string;
  href: string;
  ctaText: string;
  icon: React.ReactNode;
  bgColor: string;
}

interface NavItem {
  label: string;
  href?: string;
  sections?: MenuSection[];
  feature?: FeatureHighlight;
}

const navigationItems: NavItem[] = [
  {
    label: "About",
    feature: {
      title: "Our 80+ Year Legacy",
      description: "FMEA has been advancing music education across Florida since 1939, supporting thousands of educators and students.",
      href: "/about/history",
      ctaText: "Explore Our History",
      icon: <Award className="w-8 h-8" />,
      bgColor: "bg-primary",
    },
    sections: [
      {
        title: "Who We Are",
        items: [
          { label: "Our Mission", href: "/about", description: "Advancing music education across Florida" },
          { label: "Leadership", href: "/about", description: "Meet our board and staff" },
          { label: "History", href: "/about", description: "Over 80 years of excellence" },
          { label: "Contact Us", href: "/about", description: "Get in touch with FMEA" },
        ],
      },
      {
        title: "Get Involved",
        items: [
          { label: "Committees", href: "/about/committees", description: "Serve on a committee" },
          { label: "Awards Program", href: "/about/awards", description: "Recognize excellence" },
          { label: "Careers", href: "/about/careers", description: "Join our team" },
        ],
      },
    ],
  },
  {
    label: "Membership",
    feature: {
      title: "Join 5,000+ Music Educators",
      description: "Become part of Florida's largest community of music education professionals. Access exclusive resources and professional development.",
      href: "/membership/join",
      ctaText: "Become a Member",
      icon: <Users className="w-8 h-8" />,
      bgColor: "bg-secondary",
    },
    sections: [
      {
        title: "Join FMEA",
        items: [
          { label: "Membership Benefits", href: "/membership/benefits", description: "See what you get as a member" },
          { label: "Join Now", href: "/membership/join", description: "Become a member today" },
          { label: "Renew Membership", href: "/membership/renew", description: "Continue your membership" },
          { label: "Membership Types", href: "/membership/types", description: "Find the right membership for you" },
        ],
      },
      {
        title: "Member Resources",
        items: [
          { label: "Member Portal", href: "/membership/portal", description: "Access exclusive content" },
          { label: "Publications", href: "/membership/publications", description: "Florida Music Director magazine" },
          { label: "Job Board", href: "/membership/jobs", description: "Find music education positions" },
        ],
      },
    ],
  },
  {
    label: "Conference",
    feature: {
      title: "2026 Professional Learning Conference",
      description: "January 14-17, 2026 in Tampa. Join thousands of music educators for sessions, performances, and networking.",
      href: "/conference",
      ctaText: "Learn More",
      icon: <Calendar className="w-8 h-8" />,
      bgColor: "bg-accent",
    },
    sections: [
      {
        title: "2026 Conference",
        items: [
          { label: "Conference Overview", href: "/conference", description: "January 14-17, 2026 in Tampa" },
          { label: "Register Now", href: "/conference#registration", description: "Secure your spot" },
          { label: "Schedule", href: "/conference#attending-schedule", description: "Sessions and events" },
          { label: "Exhibitors", href: "/conference#exhibitor-info", description: "Browse our partners" },
        ],
      },
      {
        title: "Conference Resources",
        items: [
          { label: "Hotel & Travel", href: "/conference#hotels", description: "Plan your trip" },
          { label: "Presenter Information", href: "/conference#presenter-info", description: "Session guidelines" },
          { label: "Past Conferences", href: "/conference/archive", description: "Previous programs" },
        ],
      },
    ],
  },
  {
    label: "All-State",
    feature: {
      title: "Florida All-State Ensembles",
      description: "The most prestigious honor for Florida's student musicians. Audition to perform with the best in the state.",
      href: "/all-state/auditions",
      ctaText: "View Audition Info",
      icon: <Music className="w-8 h-8" />,
      bgColor: "bg-primary",
    },
    sections: [
      {
        title: "All-State Ensembles",
        items: [
          { label: "About All-State", href: "/all-state", description: "Florida's finest student musicians" },
          { label: "Audition Information", href: "/all-state/auditions", description: "Requirements and dates" },
          { label: "Repertoire", href: "/all-state/repertoire", description: "2025 audition music" },
          { label: "Results", href: "/all-state/results", description: "View ensemble rosters" },
        ],
      },
      {
        title: "Ensembles",
        items: [
          { label: "Concert Band", href: "/all-state/band", description: "Wind and percussion" },
          { label: "Orchestra", href: "/all-state/orchestra", description: "Strings and full orchestra" },
          { label: "Chorus", href: "/all-state/chorus", description: "Mixed and treble choirs" },
          { label: "Jazz Band", href: "/all-state/jazz", description: "Jazz ensemble" },
        ],
      },
    ],
  },
  {
    label: "Programs",
    feature: {
      title: "Professional Development",
      description: "Grow your skills with workshops, certifications, and mentorship programs designed for music educators at every stage.",
      href: "/programs/workshops",
      ctaText: "Explore Programs",
      icon: <Award className="w-8 h-8" />,
      bgColor: "bg-secondary",
    },
    sections: [
      {
        title: "Student Programs",
        items: [
          { label: "All-State Ensembles", href: "/programs/all-state", description: "Honor ensembles" },
          { label: "Solo & Ensemble MPA", href: "/programs/solo-ensemble", description: "Performance assessments" },
          { label: "Collegiate Programs", href: "/programs/collegiate", description: "College student resources" },
        ],
      },
      {
        title: "Professional Development",
        items: [
          { label: "Workshops", href: "/programs/workshops", description: "Regional learning opportunities" },
          { label: "Certification", href: "/programs/certification", description: "Maintain your credentials" },
          { label: "Mentorship", href: "/programs/mentorship", description: "New teacher support" },
        ],
      },
    ],
  },
  {
    label: "Advocacy",
    feature: {
      title: "Stand Up for Music Education",
      description: "Your voice matters. Join fellow educators in advocating for music education funding and policy at the state level.",
      href: "/advocacy/contact",
      ctaText: "Take Action",
      icon: <Users className="w-8 h-8" />,
      bgColor: "bg-accent",
    },
    sections: [
      {
        title: "Advocacy Resources",
        items: [
          { label: "Why Advocate", href: "/advocacy", description: "The importance of music education" },
          { label: "Legislative Updates", href: "/advocacy/legislative", description: "Policy news and alerts" },
          { label: "Toolkit", href: "/advocacy/toolkit", description: "Resources for advocacy" },
          { label: "Research", href: "/advocacy/research", description: "Data supporting music education" },
        ],
      },
      {
        title: "Take Action",
        items: [
          { label: "Contact Legislators", href: "/advocacy/contact", description: "Make your voice heard" },
          { label: "Advocacy Day", href: "/advocacy/day", description: "Annual advocacy event" },
        ],
      },
    ],
  },
];

const MegaMenu = () => {
  const [activeMenu, setActiveMenu] = useState<string | null>(null);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

  return (
    <header className="sticky top-0 z-50 bg-card border-b border-border">
      {/* Top Bar */}
      <div className="bg-primary text-primary-foreground">
        <div className="container flex items-center justify-between py-2 text-sm">
          <div className="flex items-center gap-6">
            <span className="font-body">Florida Music Education Association</span>
          </div>
          <div className="flex items-center gap-4">
            <a href="/membership/join" className="hidden sm:flex items-center gap-2 hover:text-secondary transition-colors font-medium">
              <User className="w-4 h-4" />
              Join or Renew
            </a>
            <a href="/login" className="flex items-center gap-2 hover:text-secondary transition-colors font-medium">
              <LogIn className="w-4 h-4" />
              Member Login
            </a>
            <a href="/donate" className="flex items-center gap-2 hover:text-secondary transition-colors font-medium">
              <Heart className="w-4 h-4" />
              Donate
            </a>
          </div>
        </div>
      </div>

      {/* Main Navigation */}
      <nav className="relative">
        <div className="container">
          <div className="flex items-center justify-between py-4">
            {/* Logo */}
            <a href="/" className="flex items-center">
              <img src={fmeaLogo} alt="Florida Music Education Association" className="h-14 w-auto" />
            </a>

            {/* Desktop Navigation */}
            <div className="hidden lg:flex items-center gap-1">
              {navigationItems.map((item) => (
                <div
                  key={item.label}
                  className="relative"
                  onMouseEnter={() => setActiveMenu(item.label)}
                  onMouseLeave={() => setActiveMenu(null)}
                >
                  <button 
                    className={`flex items-center gap-1 px-4 py-2 text-sm font-body font-medium transition-colors ${
                      activeMenu === item.label ? "text-primary" : "text-foreground hover:text-primary"
                    }`}
                  >
                    {item.label}
                    {item.sections && (
                      <ChevronDown 
                        className={`w-4 h-4 transition-transform duration-200 ${
                          activeMenu === item.label ? "rotate-180" : ""
                        }`} 
                      />
                    )}
                  </button>
                </div>
              ))}
            </div>

            {/* Search Box */}
            <div className="hidden lg:flex items-center">
              <div className="relative">
                <Search className="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-muted-foreground" />
                <Input 
                  type="search" 
                  placeholder="Search..." 
                  className="pl-9 w-48 h-9 font-body text-sm"
                />
              </div>
            </div>

            {/* Mobile Menu Toggle */}
            <button
              className="lg:hidden p-2 text-foreground"
              onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
            >
              {mobileMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
            </button>
          </div>
        </div>

        {/* Full-Width Mega Menu Dropdown */}
        <AnimatePresence>
          {activeMenu && (
            <motion.div
              initial={{ opacity: 0, y: -10 }}
              animate={{ opacity: 1, y: 0 }}
              exit={{ opacity: 0, y: -10 }}
              transition={{ duration: 0.2 }}
              className="absolute left-0 right-0 top-full w-full bg-card border-t border-b border-border shadow-xl z-50"
              onMouseEnter={() => setActiveMenu(activeMenu)}
              onMouseLeave={() => setActiveMenu(null)}
            >
              {navigationItems.map((item) => (
                item.label === activeMenu && item.sections && (
                  <div key={item.label} className="container py-8">
                    <div className="grid grid-cols-12 gap-8">
                      {/* Navigation Sections */}
                      <div className="col-span-8 grid grid-cols-2 gap-8">
                        {item.sections.map((section) => (
                          <div key={section.title}>
                            <h3 className="font-display font-semibold text-sm text-primary mb-4 uppercase tracking-wide border-b border-border pb-2">
                              {section.title}
                            </h3>
                            <ul className="space-y-1">
                              {section.items.map((menuItem) => (
                                <li key={menuItem.label}>
                                  <a
                                    href={menuItem.href}
                                    className="group flex items-start gap-3 p-3 -mx-3 rounded-lg hover:bg-muted transition-colors"
                                  >
                                    <div className="flex-1">
                                      <span className="font-body font-medium text-foreground group-hover:text-primary transition-colors block">
                                        {menuItem.label}
                                      </span>
                                      {menuItem.description && (
                                        <p className="text-sm text-muted-foreground mt-0.5">
                                          {menuItem.description}
                                        </p>
                                      )}
                                    </div>
                                    <ArrowRight className="w-4 h-4 text-muted-foreground opacity-0 group-hover:opacity-100 group-hover:text-primary transition-all mt-1" />
                                  </a>
                                </li>
                              ))}
                            </ul>
                          </div>
                        ))}
                      </div>

                      {/* Feature Highlight */}
                      {item.feature && (
                        <div className="col-span-4">
                          <div className={`${item.feature.bgColor} rounded-xl p-6 h-full flex flex-col ${item.feature.bgColor === 'bg-secondary' ? 'text-secondary-foreground' : 'text-primary-foreground'}`}>
                            <div className="mb-4 opacity-90">
                              {item.feature.icon}
                            </div>
                            <h4 className="font-display font-bold text-xl mb-2">
                              {item.feature.title}
                            </h4>
                            <p className={`text-sm mb-6 flex-1 ${item.feature.bgColor === 'bg-secondary' ? 'text-secondary-foreground/80' : 'opacity-90'}`}>
                              {item.feature.description}
                            </p>
                            <a 
                              href={item.feature.href}
                              className={`inline-flex items-center gap-2 font-body font-medium px-4 py-2 rounded-lg transition-colors w-fit ${item.feature.bgColor === 'bg-secondary' ? 'bg-primary text-primary-foreground hover:bg-primary/90' : 'bg-card text-foreground hover:bg-muted'}`}
                            >
                              {item.feature.ctaText}
                              <ArrowRight className="w-4 h-4" />
                            </a>
                          </div>
                        </div>
                      )}
                    </div>
                  </div>
                )
              ))}
            </motion.div>
          )}
        </AnimatePresence>

        {/* Mobile Navigation */}
        <AnimatePresence>
          {mobileMenuOpen && (
            <motion.div
              initial={{ opacity: 0, height: 0 }}
              animate={{ opacity: 1, height: "auto" }}
              exit={{ opacity: 0, height: 0 }}
              className="lg:hidden border-t border-border bg-card"
            >
              <div className="container py-4 space-y-4">
                {navigationItems.map((item) => (
                  <div key={item.label} className="space-y-2">
                    <button className="flex items-center justify-between w-full px-2 py-2 font-body font-medium text-foreground">
                      {item.label}
                      {item.sections && <ChevronDown className="w-4 h-4" />}
                    </button>
                    {item.sections && (
                      <div className="pl-4 space-y-1">
                        {item.sections.flatMap((section) =>
                          section.items.map((menuItem) => (
                            <a
                              key={menuItem.label}
                              href={menuItem.href}
                              className="block py-2 text-sm text-muted-foreground hover:text-primary transition-colors"
                            >
                              {menuItem.label}
                            </a>
                          ))
                        )}
                      </div>
                    )}
                  </div>
                ))}
                <div className="flex flex-col gap-2 pt-4 border-t border-border">
                  <Button variant="outline" className="w-full font-body">
                    Find an Event
                  </Button>
                  <Button className="w-full font-body">
                    Join FMEA
                  </Button>
                </div>
              </div>
            </motion.div>
          )}
        </AnimatePresence>
      </nav>
    </header>
  );
};

export default MegaMenu;
