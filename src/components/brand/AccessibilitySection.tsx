import { motion } from "framer-motion";
import SectionHeader from "./SectionHeader";
import { Check, X } from "lucide-react";

const AccessibilitySection = () => {
  const contrastPairs = [
    { bg: "bg-brand-burgundy", text: "text-primary-foreground", label: "Burgundy + White", ratio: "7.2:1", pass: true },
    { bg: "bg-brand-burgundy-dark", text: "text-primary-foreground", label: "Dark Burgundy + White", ratio: "10.1:1", pass: true },
    { bg: "bg-brand-cream", text: "text-brand-charcoal", label: "Cream + Charcoal", ratio: "11.5:1", pass: true },
    { bg: "bg-brand-champagne", text: "text-brand-burgundy-dark", label: "Champagne + Dark Burgundy", ratio: "5.8:1", pass: true },
    { bg: "bg-brand-blush", text: "text-brand-burgundy", label: "Blush + Burgundy", ratio: "3.9:1", pass: false },
    { bg: "bg-accent", text: "text-brand-champagne", label: "Navy + Champagne", ratio: "8.4:1", pass: true },
  ];

  return (
    <section className="py-24 px-6 bg-muted">
      <div className="container max-w-6xl">
        <SectionHeader
          number="06"
          title="Accessibility"
          subtitle="Our color system is designed with WCAG 2.1 guidelines in mind. Always verify contrast ratios meet minimum requirements for text legibility."
        />

        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          className="bg-card rounded-2xl p-8 shadow-lg"
        >
          <h4 className="text-xl font-display font-semibold text-foreground mb-6">Contrast Ratios</h4>
          
          <div className="grid gap-4">
            {contrastPairs.map((pair, index) => (
              <motion.div
                key={pair.label}
                initial={{ opacity: 0, x: -20 }}
                whileInView={{ opacity: 1, x: 0 }}
                viewport={{ once: true }}
                transition={{ duration: 0.4, delay: index * 0.1 }}
                className="flex items-center gap-4 p-4 rounded-lg bg-muted"
              >
                <div className={`${pair.bg} ${pair.text} w-32 h-16 rounded-lg flex items-center justify-center font-body font-medium`}>
                  Aa
                </div>
                <div className="flex-1">
                  <p className="font-body font-medium text-foreground">{pair.label}</p>
                  <p className="text-sm font-body text-muted-foreground">Contrast ratio: {pair.ratio}</p>
                </div>
                <div className={`flex items-center gap-2 px-3 py-1 rounded-full ${pair.pass ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'}`}>
                  {pair.pass ? <Check className="w-4 h-4" /> : <X className="w-4 h-4" />}
                  <span className="text-sm font-body font-medium">{pair.pass ? 'AA Pass' : 'Fail'}</span>
                </div>
              </motion.div>
            ))}
          </div>

          <div className="mt-8 p-6 bg-brand-blush rounded-xl">
            <div className="flex items-start gap-4">
              <div className="w-10 h-10 rounded-full bg-brand-burgundy flex items-center justify-center flex-shrink-0">
                <span className="text-primary-foreground font-body font-bold">!</span>
              </div>
              <div>
                <p className="font-display font-semibold text-foreground">Important Note</p>
                <p className="font-body text-muted-foreground mt-1">
                  For text smaller than 18pt (or 14pt bold), ensure contrast ratio is at least 4.5:1 (AA) or 7:1 (AAA). 
                  Large text requires minimum 3:1 (AA) or 4.5:1 (AAA).
                </p>
              </div>
            </div>
          </div>
        </motion.div>
      </div>
    </section>
  );
};

export default AccessibilitySection;
