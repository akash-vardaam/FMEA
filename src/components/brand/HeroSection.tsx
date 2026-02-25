import { motion } from "framer-motion";

const HeroSection = () => {
  return (
    <section className="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-primary">
      {/* Decorative elements */}
      <div className="absolute inset-0 opacity-10">
        <div className="absolute top-20 right-20 w-96 h-96 rounded-full bg-primary-light blur-3xl" />
        <div className="absolute bottom-20 left-20 w-64 h-64 rounded-full bg-secondary blur-3xl" />
      </div>

      <div className="container relative z-10 px-6 py-20 text-center">
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, ease: "easeOut" }}
        >
          <span className="inline-block px-4 py-2 mb-8 text-sm font-body font-medium tracking-widest uppercase text-primary-foreground/70 border border-primary-foreground/20 rounded-full">
            Brand Guidelines
          </span>
        </motion.div>

        <motion.h1
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, delay: 0.1, ease: "easeOut" }}
          className="text-5xl md:text-7xl lg:text-8xl font-display font-bold text-primary-foreground tracking-tight leading-[0.9]"
        >
          Color
          <br />
          <span className="text-secondary italic">System</span>
        </motion.h1>

        <motion.p
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, delay: 0.2, ease: "easeOut" }}
          className="mt-8 max-w-xl mx-auto text-lg md:text-xl font-body text-primary-foreground/80 leading-relaxed"
        >
          A comprehensive guide to our brand color palette, built around a sophisticated burgundy foundation that evokes luxury, elegance, and timeless refinement.
        </motion.p>

        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, delay: 0.3, ease: "easeOut" }}
          className="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4"
        >
          <div className="flex items-center gap-3 px-6 py-3 bg-primary-foreground/10 backdrop-blur-sm rounded-full border border-primary-foreground/20">
            <div className="w-4 h-4 rounded-full bg-primary-foreground" />
            <span className="font-body font-medium text-primary-foreground">Primary: #962c3c</span>
          </div>
          <div className="flex items-center gap-3 px-6 py-3 bg-primary-foreground/10 backdrop-blur-sm rounded-full border border-primary-foreground/20">
            <div className="w-4 h-4 rounded-full bg-secondary" />
            <span className="font-body font-medium text-primary-foreground">Secondary: Champagne</span>
          </div>
        </motion.div>
      </div>

    </section>
  );
};

export default HeroSection;
