import { motion } from "framer-motion";
import SectionHeader from "./SectionHeader";

const Typography = () => {
  return (
    <section className="py-24 px-6 bg-brand-cream">
      <div className="container max-w-6xl">
        <SectionHeader
          number="04"
          title="Typography"
          subtitle="Our type system pairs an elegant serif display font with a modern sans-serif for body text, creating a refined yet readable hierarchy."
        />

        <div className="grid md:grid-cols-2 gap-12">
          {/* Display Font */}
          <motion.div
            initial={{ opacity: 0, x: -20 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 0.6 }}
            className="bg-card rounded-2xl p-8 shadow-lg"
          >
            <span className="text-sm font-body font-medium text-primary tracking-widest uppercase">
              Display Font
            </span>
            <h3 className="text-6xl md:text-7xl font-display font-bold text-foreground mt-4 leading-[0.9]">
              Playfair
              <br />
              <span className="italic">Display</span>
            </h3>
            <p className="text-muted-foreground font-body mt-6 leading-relaxed">
              Used for headlines, titles, and high-impact messaging. The elegant serifs and refined details convey luxury and sophistication.
            </p>
            <div className="mt-8 space-y-2">
              <p className="font-display text-4xl text-foreground">Aa Bb Cc Dd</p>
              <p className="font-display text-2xl text-muted-foreground">1234567890</p>
            </div>
          </motion.div>

          {/* Body Font */}
          <motion.div
            initial={{ opacity: 0, x: 20 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 0.6 }}
            className="bg-card rounded-2xl p-8 shadow-lg"
          >
            <span className="text-sm font-body font-medium text-primary tracking-widest uppercase">
              Body Font
            </span>
            <h3 className="text-6xl md:text-7xl font-body font-bold text-foreground mt-4 leading-[0.9]">
              Inter
            </h3>
            <p className="text-muted-foreground font-body mt-6 leading-relaxed">
              Used for body text, UI elements, and supporting content. Clean and highly legible at all sizes, ensuring excellent readability.
            </p>
            <div className="mt-8 space-y-2">
              <p className="font-body text-4xl text-foreground">Aa Bb Cc Dd</p>
              <p className="font-body text-2xl text-muted-foreground">1234567890</p>
            </div>
          </motion.div>
        </div>

        {/* Type Scale */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          transition={{ duration: 0.6 }}
          className="mt-16 bg-card rounded-2xl p-8 shadow-lg"
        >
          <h4 className="text-xl font-display font-semibold text-foreground mb-8">Type Scale</h4>
          <div className="space-y-6">
            <div className="flex items-baseline gap-6 border-b border-border pb-4">
              <span className="text-sm font-body text-muted-foreground w-20">H1</span>
              <p className="text-5xl md:text-6xl font-display font-bold text-foreground">Display Heading</p>
            </div>
            <div className="flex items-baseline gap-6 border-b border-border pb-4">
              <span className="text-sm font-body text-muted-foreground w-20">H2</span>
              <p className="text-4xl font-display font-semibold text-foreground">Section Title</p>
            </div>
            <div className="flex items-baseline gap-6 border-b border-border pb-4">
              <span className="text-sm font-body text-muted-foreground w-20">H3</span>
              <p className="text-2xl font-display font-medium text-foreground">Subsection Heading</p>
            </div>
            <div className="flex items-baseline gap-6 border-b border-border pb-4">
              <span className="text-sm font-body text-muted-foreground w-20">Body</span>
              <p className="text-base font-body text-foreground">The quick brown fox jumps over the lazy dog.</p>
            </div>
            <div className="flex items-baseline gap-6">
              <span className="text-sm font-body text-muted-foreground w-20">Caption</span>
              <p className="text-sm font-body text-muted-foreground">Supporting text and labels</p>
            </div>
          </div>
        </motion.div>
      </div>
    </section>
  );
};

export default Typography;
