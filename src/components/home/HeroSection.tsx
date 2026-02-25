import { motion } from "framer-motion";
import { Button } from "@/components/ui/button";
import heroBackground from "@/assets/hero-cellos.png";

const HeroSection = () => {
  return (
    <section className="relative min-h-[70vh] flex items-center overflow-hidden">
      {/* Background Image */}
      <div 
        className="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style={{ backgroundImage: `url(${heroBackground})` }}
      />
      {/* Blue Overlay */}
      <div className="absolute inset-0 bg-accent/85" />

      <div className="container relative z-10 px-6 py-20">
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, ease: "easeOut" }}
          className="max-w-3xl mx-auto text-center"
        >
          <h1 className="text-4xl md:text-5xl lg:text-6xl font-display font-bold text-primary-foreground tracking-tight leading-[1.1] mb-6">
            Advancing Music Education{" "}
            <span className="text-secondary italic">Across Florida</span>
          </h1>

          <p className="text-lg md:text-xl font-body text-primary-foreground/85 leading-relaxed mb-8 whitespace-nowrap">
            Connect, learn, and advocate for the future of music education in the Sunshine State.
          </p>

          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button 
              size="lg" 
              className="bg-secondary text-secondary-foreground hover:bg-secondary/90 font-body font-semibold text-base px-8"
            >
              Explore Programs
            </Button>
            <Button 
              size="lg" 
              className="bg-primary-foreground/15 text-primary-foreground border-2 border-primary-foreground/60 hover:bg-primary-foreground/25 font-body font-semibold text-base px-8 backdrop-blur-sm"
            >
              Donate
            </Button>
          </div>

          {/* Stats */}
          <div className="flex justify-center gap-8 mt-12 pt-8 border-t border-primary-foreground/20">
            <div>
              <span className="block text-3xl font-display font-bold text-primary-foreground">6,000+</span>
              <span className="text-sm font-body text-primary-foreground/70">Active Members</span>
            </div>
            <div>
              <span className="block text-3xl font-display font-bold text-primary-foreground">85+</span>
              <span className="text-sm font-body text-primary-foreground/70">Years of Excellence</span>
            </div>
            <div>
              <span className="block text-3xl font-display font-bold text-primary-foreground">67</span>
              <span className="text-sm font-body text-primary-foreground/70">Florida Counties</span>
            </div>
          </div>
        </motion.div>
      </div>

    </section>
  );
};

export default HeroSection;
