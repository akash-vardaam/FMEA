import ColorSwatch from "./ColorSwatch";
import SectionHeader from "./SectionHeader";
import { motion } from "framer-motion";

const SecondaryPalette = () => {
  const secondaryColors = [
    { name: "Champagne", colorClass: "bg-brand-champagne", hex: "#e8dcc8", hsl: "HSL 38° 45% 85%", isLight: true },
    { name: "Cream", colorClass: "bg-brand-cream", hex: "#f9f6f0", hsl: "HSL 40° 40% 96%", isLight: true },
  ];

  const neutralColors = [
    { name: "Charcoal", colorClass: "bg-brand-charcoal", hex: "#2e2427", hsl: "HSL 351° 15% 20%", isLight: false },
    { name: "Warm Gray", colorClass: "bg-brand-warm-gray", hex: "#9a908e", hsl: "HSL 30° 10% 60%", isLight: false },
  ];

  const accentColors = [
    { name: "Navy", colorClass: "bg-accent", hex: "#232d3d", hsl: "HSL 220° 35% 20%", isLight: false },
  ];

  return (
    <section className="py-24 px-6 bg-muted">
      <div className="container max-w-6xl">
        <SectionHeader
          number="02"
          title="Supporting Colors"
          subtitle="Complementary colors that harmonize with burgundy, providing balance and versatility across different applications and contexts."
        />

        {/* Secondary colors */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          className="mb-16"
        >
          <h3 className="text-xl font-display font-semibold text-foreground mb-6">Secondary — Champagne</h3>
          <div className="grid grid-cols-2 md:grid-cols-4 gap-6">
            {secondaryColors.map((color) => (
              <ColorSwatch
                key={color.name}
                name={color.name}
                colorClass={color.colorClass}
                hex={color.hex}
                hsl={color.hsl}
                isLight={color.isLight}
                size="md"
              />
            ))}
          </div>
        </motion.div>

        {/* Neutral colors */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          className="mb-16"
        >
          <h3 className="text-xl font-display font-semibold text-foreground mb-6">Neutrals</h3>
          <div className="grid grid-cols-2 md:grid-cols-4 gap-6">
            {neutralColors.map((color) => (
              <ColorSwatch
                key={color.name}
                name={color.name}
                colorClass={color.colorClass}
                hex={color.hex}
                hsl={color.hsl}
                isLight={color.isLight}
                size="md"
              />
            ))}
          </div>
        </motion.div>

        {/* Accent colors */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
        >
          <h3 className="text-xl font-display font-semibold text-foreground mb-6">Accent — Navy</h3>
          <div className="grid grid-cols-2 md:grid-cols-4 gap-6">
            {accentColors.map((color) => (
              <ColorSwatch
                key={color.name}
                name={color.name}
                colorClass={color.colorClass}
                hex={color.hex}
                hsl={color.hsl}
                isLight={color.isLight}
                size="md"
              />
            ))}
          </div>
        </motion.div>
      </div>
    </section>
  );
};

export default SecondaryPalette;
