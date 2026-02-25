import { motion } from "framer-motion";
import { Button } from "@/components/ui/button";
import { ArrowRight } from "lucide-react";
import { Link } from "react-router-dom";
import conferencePhoto from "@/assets/conference-photo.jpg";

const stats = [
  { value: "250+", label: "Clinic Sessions" },
  { value: "50+", label: "Exhibitors" },
  { value: "24", label: "All-State Ensembles" },
];

const ConferenceBanner = () => {
  return (
    <section className="bg-accent overflow-hidden">
      <div className="flex flex-col lg:flex-row">
        {/* Left - Photo */}
        <div className="lg:w-1/2 h-64 lg:h-auto">
          <img 
            src={conferencePhoto} 
            alt="FMEA Professional Learning Conference" 
            className="w-full h-full object-cover"
          />
        </div>

        {/* Right - Content */}
        <div className="lg:w-1/2 px-8 py-12 lg:px-12 lg:py-16 flex items-center">
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 0.5 }}
            className="w-full"
          >
            {/* Title */}
            <span className="inline-block px-3 py-1 text-xs font-body font-semibold uppercase tracking-wider text-secondary bg-accent-foreground/10 rounded-full mb-4">
              Featured Event
            </span>
            <h2 className="text-2xl md:text-3xl font-display font-bold text-accent-foreground">
              2026 Professional Learning Conference
            </h2>
            <p className="text-accent-foreground/80 font-body mt-2 mb-8">
              January 14–17, 2026 • Tampa Convention Center
            </p>

            {/* Stats Row */}
            <div className="flex flex-wrap gap-6 mb-8">
              {stats.map((stat) => (
                <div key={stat.label} className="flex items-center gap-3">
                  <div className="w-12 h-12 rounded-full bg-accent-foreground/10 flex items-center justify-center flex-shrink-0">
                    <span className="text-secondary font-display font-bold text-sm">{stat.value}</span>
                  </div>
                  <span className="font-body font-medium text-accent-foreground text-sm">{stat.label}</span>
                </div>
              ))}
            </div>

            {/* CTA */}
            <Button 
              asChild
              size="lg"
              className="bg-secondary text-secondary-foreground hover:bg-secondary/90 font-body font-semibold"
            >
              <Link to="/conference">
                Learn More & Register
                <ArrowRight className="ml-2 w-4 h-4" />
              </Link>
            </Button>
          </motion.div>
        </div>
      </div>
    </section>
  );
};

export default ConferenceBanner;
