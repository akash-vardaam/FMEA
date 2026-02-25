import { motion } from "framer-motion";
import SectionHeader from "./SectionHeader";

const ColorCombinations = () => {
  const combinations = [
    {
      name: "Primary on Light",
      bg: "bg-brand-cream",
      text: "text-brand-burgundy",
      description: "Headlines and primary actions on light backgrounds",
    },
    {
      name: "Light on Primary",
      bg: "bg-brand-burgundy",
      text: "text-primary-foreground",
      description: "Hero sections and high-impact areas",
    },
    {
      name: "Primary on Champagne",
      bg: "bg-brand-champagne",
      text: "text-brand-burgundy-dark",
      description: "Callouts and featured content blocks",
    },
    {
      name: "Charcoal on Cream",
      bg: "bg-brand-cream",
      text: "text-brand-charcoal",
      description: "Body text and secondary content",
    },
    {
      name: "Champagne on Burgundy",
      bg: "bg-brand-burgundy-dark",
      text: "text-brand-champagne",
      description: "Elegant accents and subtle highlights",
    },
    {
      name: "Navy Accent",
      bg: "bg-accent",
      text: "text-brand-champagne",
      description: "Alternative dark backgrounds for variety",
    },
  ];

  return (
    <section className="py-24 px-6">
      <div className="container max-w-6xl">
        <SectionHeader
          number="03"
          title="Color Combinations"
          subtitle="Approved color pairings that maintain visual harmony and ensure accessibility across all brand applications."
        />

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {combinations.map((combo, index) => (
            <motion.div
              key={combo.name}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ duration: 0.5, delay: index * 0.1 }}
              className="group"
            >
              <div className={`${combo.bg} rounded-xl p-8 h-48 flex items-end transition-transform duration-300 group-hover:scale-[1.02] shadow-md`}>
                <div className={combo.text}>
                  <p className="text-2xl font-display font-semibold">Aa</p>
                  <p className="text-sm font-body mt-1 opacity-80">The quick brown fox</p>
                </div>
              </div>
              <div className="mt-4">
                <p className="font-display font-medium text-foreground">{combo.name}</p>
                <p className="text-sm font-body text-muted-foreground mt-1">{combo.description}</p>
              </div>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default ColorCombinations;
