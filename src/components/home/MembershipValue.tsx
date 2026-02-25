import { motion } from "framer-motion";
import { Button } from "@/components/ui/button";
import { Check, ArrowRight, BookOpen, Users, Award, Briefcase, Shield, Calendar } from "lucide-react";

const benefits = [
  {
    icon: BookOpen,
    title: "Professional Development",
    description: "Access to workshops, webinars, and the annual conference at member rates",
  },
  {
    icon: Users,
    title: "Statewide Network",
    description: "Connect with 6,000+ music educators across all disciplines and grade levels",
  },
  {
    icon: Award,
    title: "Recognition Programs",
    description: "Nominate colleagues and students for state and national awards",
  },
  {
    icon: Briefcase,
    title: "Career Resources",
    description: "Job board access, mentorship programs, and professional advancement support",
  },
  {
    icon: Shield,
    title: "Advocacy Support",
    description: "Legislative updates, advocacy tools, and a unified voice for music education",
  },
  {
    icon: Calendar,
    title: "Exclusive Events",
    description: "Member-only sessions, networking events, and leadership opportunities",
  },
];

const MembershipValue = () => {
  return (
    <section className="py-20 bg-primary relative overflow-hidden">
      {/* Decorative elements */}
      <div className="absolute inset-0 opacity-10">
        <div className="absolute top-20 right-20 w-96 h-96 rounded-full bg-secondary blur-3xl" />
        <div className="absolute bottom-20 left-20 w-64 h-64 rounded-full bg-primary-light blur-3xl" />
      </div>

      <div className="container px-6 relative z-10">
        <div className="max-w-4xl mx-auto">
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 0.6 }}
            className="text-center mb-12"
          >
            <span className="inline-flex items-center gap-2 text-sm font-body font-medium text-secondary tracking-widest uppercase mb-4">
              <div className="w-8 h-px bg-secondary" />
              Membership
              <div className="w-8 h-px bg-secondary" />
            </span>

            <h2 className="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-primary-foreground tracking-tight leading-tight mb-6">
              Your Investment in{" "}
              <span className="text-secondary italic">Music Education</span>
            </h2>

            <p className="text-lg font-body text-primary-foreground/85 leading-relaxed max-w-2xl mx-auto">
              Join the largest community of music educators in Florida. Your membership supports 
              advocacy efforts, funds student programs, and gives you access to resources that 
              elevate your teaching.
            </p>
          </motion.div>

          <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
            {benefits.map((benefit, index) => (
              <motion.div
                key={benefit.title}
                initial={{ opacity: 0, y: 20 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true }}
                transition={{ duration: 0.4, delay: index * 0.1 }}
                className="flex items-start gap-3 bg-primary-foreground/10 rounded-lg p-4"
              >
                <div className="w-10 h-10 rounded-full bg-primary-foreground/20 flex items-center justify-center flex-shrink-0">
                  <benefit.icon className="w-5 h-5 text-secondary" />
                </div>
                <div>
                  <h4 className="font-body font-semibold text-primary-foreground text-sm">
                    {benefit.title}
                  </h4>
                  <p className="text-xs font-body text-primary-foreground/70 mt-1">
                    {benefit.description}
                  </p>
                </div>
              </motion.div>
            ))}
          </div>

          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 0.5, delay: 0.6 }}
            className="text-center"
          >
            <Button
              size="lg"
              className="bg-secondary text-secondary-foreground hover:bg-secondary/90 font-body font-semibold px-8"
            >
              Join or Renew
              <ArrowRight className="w-4 h-4 ml-2" />
            </Button>
          </motion.div>
        </div>
      </div>
    </section>
  );
};

export default MembershipValue;
