import { motion } from "framer-motion";
import { Button } from "@/components/ui/button";
import { ArrowRight } from "lucide-react";

// Placeholder sponsor data - in production these would come from a CMS
const sponsors = [
  { name: "Yamaha", tier: "platinum" },
  { name: "J.W. Pepper", tier: "platinum" },
  { name: "Music & Arts", tier: "gold" },
  { name: "Hal Leonard", tier: "gold" },
  { name: "Conn-Selmer", tier: "gold" },
  { name: "Alfred Music", tier: "silver" },
  { name: "Quaver Music", tier: "silver" },
  { name: "SmartMusic", tier: "silver" },
];

const SponsorsSection = () => {
  return (
    <section className="py-16 bg-muted">
      <div className="container px-6">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          transition={{ duration: 0.5 }}
          className="text-center mb-12"
        >
          <span className="inline-flex items-center gap-2 text-sm font-body font-medium text-primary tracking-widest uppercase mb-4">
            Our Partners
          </span>
          <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground tracking-tight">
            Thank You to Our Sponsors
          </h2>
          <p className="mt-3 text-base font-body text-muted-foreground max-w-xl mx-auto">
            FMEA is grateful for the generous support of our corporate partners who share 
            our commitment to music education.
          </p>
        </motion.div>

        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          transition={{ duration: 0.5, delay: 0.2 }}
          className="flex flex-wrap items-center justify-center gap-8 mb-12"
        >
          {sponsors.map((sponsor, index) => (
            <motion.div
              key={sponsor.name}
              initial={{ opacity: 0, scale: 0.9 }}
              whileInView={{ opacity: 1, scale: 1 }}
              viewport={{ once: true }}
              transition={{ duration: 0.3, delay: 0.3 + index * 0.05 }}
              className={`
                flex items-center justify-center bg-card rounded-lg border border-border
                hover:shadow-md transition-shadow cursor-pointer
                ${sponsor.tier === "platinum" ? "w-40 h-20 p-4" : sponsor.tier === "gold" ? "w-32 h-16 p-3" : "w-28 h-14 p-2"}
              `}
            >
              <span className={`font-display font-semibold text-foreground/80 ${
                sponsor.tier === "platinum" ? "text-lg" : sponsor.tier === "gold" ? "text-base" : "text-sm"
              }`}>
                {sponsor.name}
              </span>
            </motion.div>
          ))}
        </motion.div>

        <motion.div
          initial={{ opacity: 0 }}
          whileInView={{ opacity: 1 }}
          viewport={{ once: true }}
          transition={{ duration: 0.5, delay: 0.4 }}
          className="text-center"
        >
          <Button variant="outline" className="font-body">
            Become a Partner
            <ArrowRight className="ml-2 w-4 h-4" />
          </Button>
        </motion.div>
      </div>
    </section>
  );
};

export default SponsorsSection;
