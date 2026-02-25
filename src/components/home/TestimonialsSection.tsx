import { motion } from "framer-motion";
import { Quote } from "lucide-react";

const testimonials = [
  {
    quote: "FMEA has been instrumental in my growth as a music educator. The professional development opportunities and networking have transformed my teaching.",
    name: "Sarah Mitchell",
    role: "Band Director",
    school: "Orange County High School",
  },
  {
    quote: "The annual conference is the highlight of my year. I always leave inspired with new ideas and resources to bring back to my classroom.",
    name: "Marcus Johnson",
    role: "Choral Director",
    school: "Miami-Dade Middle School",
  },
  {
    quote: "Being part of this community has connected me with mentors who have shaped my career. FMEA truly supports educators at every stage.",
    name: "Emily Chen",
    role: "Orchestra Teacher",
    school: "Hillsborough Elementary",
  },
];

const TestimonialsSection = () => {
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
            Member Voices
          </span>
          <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground tracking-tight">
            What Our Members Say
          </h2>
          <p className="mt-3 text-base font-body text-muted-foreground max-w-xl mx-auto">
            Hear from music educators across Florida about the impact of FMEA membership.
          </p>
        </motion.div>

        <div className="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
          {testimonials.map((testimonial, index) => (
            <motion.div
              key={testimonial.name}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ duration: 0.4, delay: 0.1 + index * 0.1 }}
              className="bg-card rounded-xl p-6 border border-border shadow-sm"
            >
              <Quote className="w-8 h-8 text-primary/30 mb-4" />
              <blockquote className="text-foreground font-body text-base leading-relaxed mb-6">
                "{testimonial.quote}"
              </blockquote>
              <div className="border-t border-border pt-4">
                <p className="font-display font-semibold text-foreground">
                  {testimonial.name}
                </p>
                <p className="text-sm font-body text-muted-foreground">
                  {testimonial.role}
                </p>
                <p className="text-sm font-body text-muted-foreground">
                  {testimonial.school}
                </p>
              </div>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default TestimonialsSection;
