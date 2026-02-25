import { motion } from "framer-motion";
import { Button } from "@/components/ui/button";
import { ArrowRight, Target, Users, Award } from "lucide-react";

const MissionSection = () => {
  return (
    <section className="py-20 bg-background">
      <div className="container px-6">
        <div className="grid lg:grid-cols-2 gap-16 items-center">
          {/* Left - Mission Content */}
          <motion.div
            initial={{ opacity: 0, x: -30 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 0.6 }}
          >
            <span className="inline-flex items-center gap-2 text-sm font-body font-medium text-primary tracking-widest uppercase mb-4">
              <div className="w-8 h-px bg-primary" />
              About FMEA
            </span>

            <h2 className="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-foreground tracking-tight leading-tight mb-6">
              Championing Music Education for{" "}
              <span className="text-primary italic">Every Student</span>
            </h2>

            <p className="text-lg font-body text-muted-foreground leading-relaxed mb-6">
              The Florida Music Education Association serves as the unified voice for music educators 
              throughout Florida. We provide professional development, advocacy, and community to ensure 
              every student has access to quality music instruction.
            </p>

            <p className="text-base font-body text-muted-foreground leading-relaxed mb-8">
              From elementary general music to high school marching bands, from college theory classes 
              to community orchestras—FMEA supports music educators at every level and in every discipline.
            </p>

            <Button variant="outline" className="font-body group">
              Learn More About FMEA
              <ArrowRight className="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" />
            </Button>
          </motion.div>

          {/* Right - Core Values */}
          <motion.div
            initial={{ opacity: 0, x: 30 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 0.6, delay: 0.2 }}
            className="space-y-6"
          >
            <div className="bg-card rounded-xl p-6 border border-border shadow-sm hover:shadow-md transition-shadow">
              <div className="flex items-start gap-4">
                <div className="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                  <Target className="w-7 h-7 text-primary" />
                </div>
                <div>
                  <h3 className="font-display font-semibold text-xl text-foreground mb-2">Our Mission</h3>
                  <p className="font-body text-muted-foreground">
                    To advance comprehensive music education for all students in Florida schools 
                    through advocacy, professional development, and collaborative support.
                  </p>
                </div>
              </div>
            </div>

            <div className="bg-card rounded-xl p-6 border border-border shadow-sm hover:shadow-md transition-shadow">
              <div className="flex items-start gap-4">
                <div className="w-14 h-14 rounded-full bg-secondary/50 flex items-center justify-center flex-shrink-0">
                  <Users className="w-7 h-7 text-secondary-foreground" />
                </div>
                <div>
                  <h3 className="font-display font-semibold text-xl text-foreground mb-2">Our Community</h3>
                  <p className="font-body text-muted-foreground">
                    A network of over 6,000 music educators, administrators, college faculty, 
                    students, and industry partners working together across all 67 Florida counties.
                  </p>
                </div>
              </div>
            </div>

            <div className="bg-card rounded-xl p-6 border border-border shadow-sm hover:shadow-md transition-shadow">
              <div className="flex items-start gap-4">
                <div className="w-14 h-14 rounded-full bg-accent/10 flex items-center justify-center flex-shrink-0">
                  <Award className="w-7 h-7 text-accent" />
                </div>
                <div>
                  <h3 className="font-display font-semibold text-xl text-foreground mb-2">Our Impact</h3>
                  <p className="font-body text-muted-foreground">
                    For over 85 years, FMEA has shaped music education policy, recognized 
                    excellence through awards, and celebrated student achievement through All-State programs.
                  </p>
                </div>
              </div>
            </div>
          </motion.div>
        </div>
      </div>
    </section>
  );
};

export default MissionSection;
