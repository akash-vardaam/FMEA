import { Facebook, Twitter, Instagram, Youtube, Mail, Phone, MapPin } from "lucide-react";
import fmeaLogoWhite from "@/assets/fmea-logo-white.png";

const footerLinks = {
  forEducators: {
    title: "For Educators",
    links: [
      { label: "Membership Benefits", href: "/membership/benefits" },
      { label: "Professional Development", href: "/programs/workshops" },
      { label: "Job Board", href: "/membership/jobs" },
      { label: "Publications", href: "/membership/publications" },
      { label: "Awards Program", href: "/about/awards" },
    ],
  },
  forStudents: {
    title: "For Students",
    links: [
      { label: "All-State Auditions", href: "/all-state/auditions" },
      { label: "Solo & Ensemble MPA", href: "/programs/solo-ensemble" },
      { label: "Collegiate Programs", href: "/programs/collegiate" },
      { label: "Scholarships", href: "/programs/scholarships" },
      { label: "Honor Societies", href: "/programs/honors" },
    ],
  },
  programs: {
    title: "Programs & Events",
    links: [
      { label: "Annual Conference", href: "/conference" },
      { label: "All-State Ensembles", href: "/all-state" },
      { label: "Regional Events", href: "/programs/regional" },
      { label: "Summer Workshops", href: "/programs/summer" },
      { label: "Advocacy Day", href: "/advocacy/day" },
    ],
  },
  about: {
    title: "About FMEA",
    links: [
      { label: "Our Mission", href: "/about/mission" },
      { label: "Leadership", href: "/about/leadership" },
      { label: "Contact Us", href: "/about/contact" },
      { label: "Careers", href: "/about/careers" },
      { label: "Privacy Policy", href: "/privacy" },
    ],
  },
};

const socialLinks = [
  { icon: Facebook, href: "https://facebook.com/floridamea", label: "Facebook" },
  { icon: Twitter, href: "https://twitter.com/floridamea", label: "Twitter" },
  { icon: Instagram, href: "https://instagram.com/floridamea", label: "Instagram" },
  { icon: Youtube, href: "https://youtube.com/floridamea", label: "YouTube" },
];

const Footer = () => {
  return (
    <footer className="bg-accent text-accent-foreground">
      {/* Main Footer */}
      <div className="container px-6 py-16">
        <div className="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8 lg:gap-12">
          {/* Logo & Contact */}
          <div className="col-span-2 md:col-span-4 lg:col-span-1">
            <div className="mb-6">
              <img src={fmeaLogoWhite} alt="Florida Music Education Association" className="h-16 w-auto" />
            </div>
            <div className="space-y-3 text-sm font-body text-accent-foreground/80">
              <div className="flex items-start gap-2">
                <MapPin className="w-4 h-4 mt-0.5 flex-shrink-0" />
                <span>402 Office Plaza Drive<br />Tallahassee, FL 32301</span>
              </div>
              <div className="flex items-center gap-2">
                <Phone className="w-4 h-4 flex-shrink-0" />
                <a href="tel:850-878-6844" className="hover:text-secondary transition-colors">(850) 878-6844</a>
              </div>
              <div className="flex items-center gap-2">
                <Mail className="w-4 h-4 flex-shrink-0" />
                <a href="mailto:info@fmea.org" className="hover:text-secondary transition-colors">info@fmea.org</a>
              </div>
            </div>

            {/* Social Links */}
            <div className="flex items-center gap-3 mt-6">
              {socialLinks.map((social) => (
                <a
                  key={social.label}
                  href={social.href}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="w-10 h-10 rounded-full bg-accent-foreground/10 flex items-center justify-center hover:bg-primary hover:text-primary-foreground transition-colors"
                  aria-label={social.label}
                >
                  <social.icon className="w-5 h-5" />
                </a>
              ))}
            </div>
          </div>

          {/* Link Columns */}
          {Object.values(footerLinks).map((section) => (
            <div key={section.title}>
              <h3 className="font-display font-semibold text-accent-foreground mb-4">
                {section.title}
              </h3>
              <ul className="space-y-2">
                {section.links.map((link) => (
                  <li key={link.label}>
                    <a
                      href={link.href}
                      className="text-sm font-body text-accent-foreground/70 hover:text-secondary transition-colors"
                    >
                      {link.label}
                    </a>
                  </li>
                ))}
              </ul>
            </div>
          ))}
        </div>
      </div>

      {/* Bottom Bar */}
      <div className="border-t border-accent-foreground/10">
        <div className="container px-6 py-6">
          <div className="flex flex-col md:flex-row items-center justify-between gap-4 text-sm font-body text-accent-foreground/60">
            <p>© {new Date().getFullYear()} Florida Music Education Association. All rights reserved.</p>
            <div className="flex items-center gap-6">
              <a href="/brand-guidelines" className="hover:text-secondary transition-colors">Brand Guidelines</a>
              <a href="/privacy" className="hover:text-secondary transition-colors">Privacy Policy</a>
              <a href="/terms" className="hover:text-secondary transition-colors">Terms of Use</a>
              <a href="/accessibility" className="hover:text-secondary transition-colors">Accessibility</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
