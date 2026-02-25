import { motion } from "framer-motion";
import { Calendar, Music2, GraduationCap, Megaphone, ArrowRight } from "lucide-react";
import { Badge } from "@/components/ui/badge";
import studentsImage from "@/assets/students.jpg";
import plcImage from "@/assets/plc.png";
import capitalImage from "@/assets/capital.png";

type AudienceType = "Educators" | "Students" | "Collegiate" | "Administrators";

const audienceColors: Record<AudienceType, string> = {
  Educators: "bg-primary text-primary-foreground border-primary",
  Students: "bg-secondary-dark text-white border-secondary-dark",
  Collegiate: "bg-accent text-accent-foreground border-accent",
  Administrators: "bg-brand-charcoal text-white border-brand-charcoal",
};

const programs = [
  {
    icon: Calendar,
    title: "Professional Learning Conference",
    description: "Florida's largest gathering of music educators featuring world-class clinicians, hands-on workshops, and the celebrated All-State concerts.",
    href: "/conference",
    image: plcImage,
    tag: "January 8-11, 2025",
    audiences: ["Educators", "Collegiate", "Administrators"] as AudienceType[],
  },
  {
    icon: Music2,
    title: "All-State Ensembles",
    description: "Honor ensembles showcasing Florida's most talented student musicians in concert band, orchestra, chorus, and jazz. The pinnacle of student achievement.",
    href: "/all-state",
    image: "https://images.unsplash.com/photo-1465847899084-d164df4dedc6?w=600&h=400&fit=crop",
    tag: "Auditions Open",
    audiences: ["Students", "Educators"] as AudienceType[],
  },
  {
    icon: GraduationCap,
    title: "Student & Collegiate Programs",
    description: "From Solo & Ensemble MPA to collegiate scholarships and professional development for future educators. Supporting the next generation.",
    href: "/programs/collegiate",
    image: studentsImage,
    tag: "For Students",
    audiences: ["Students", "Collegiate"] as AudienceType[],
  },
  {
    icon: Megaphone,
    title: "Advocacy & Leadership",
    description: "Making the case for music education at the state and local level. Resources, research, and direct action to protect and expand music programs.",
    href: "/advocacy",
    image: capitalImage,
    tag: "Take Action",
    audiences: ["Educators", "Administrators"] as AudienceType[],
  },
];

const FeaturedPrograms = () => {
  return (
    <section className="py-20 bg-muted">
      <div className="container px-6">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          transition={{ duration: 0.5 }}
          className="text-center mb-16"
        >
          <span className="inline-flex items-center gap-2 text-sm font-body font-medium text-primary tracking-widest uppercase mb-4">
            What We Do
          </span>
          <h2 className="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-foreground tracking-tight">
            Programs & Initiatives
          </h2>
          <p className="mt-4 text-lg font-body text-muted-foreground max-w-2xl mx-auto">
            From professional development to student recognition, discover how FMEA supports 
            music education at every level.
          </p>
        </motion.div>

        <div className="grid md:grid-cols-2 gap-8">
          {programs.map((program, index) => (
            <motion.a
              key={program.title}
              href={program.href}
              initial={{ opacity: 0, y: 30 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ duration: 0.5, delay: index * 0.1 }}
              className="group bg-card rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all"
            >
              <div className="relative h-48 overflow-hidden">
                <img
                  src={program.image}
                  alt={program.title}
                  className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-foreground/60 to-transparent" />
                <span className="absolute bottom-4 left-4 px-3 py-1 bg-primary text-primary-foreground text-xs font-body font-semibold rounded-full">
                  {program.tag}
                </span>
              </div>
              <div className="p-6">
                <div className="flex items-center gap-3 mb-3">
                  <div className="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                    <program.icon className="w-5 h-5 text-primary" />
                  </div>
                  <h3 className="font-display font-semibold text-xl text-foreground group-hover:text-primary transition-colors">
                    {program.title}
                  </h3>
                </div>
                <p className="font-body text-muted-foreground mb-4">
                  {program.description}
                </p>
                
                {/* Audience Badges */}
                <div className="flex flex-wrap gap-2 mb-4">
                  {program.audiences.map((audience) => (
                    <Badge 
                      key={audience} 
                      variant="outline"
                      className={`text-xs font-body ${audienceColors[audience]}`}
                    >
                      {audience}
                    </Badge>
                  ))}
                </div>
                
                <span className="inline-flex items-center text-sm font-body font-medium text-primary group-hover:gap-2 transition-all">
                  Learn More
                  <ArrowRight className="ml-1 w-4 h-4 group-hover:translate-x-1 transition-transform" />
                </span>
              </div>
            </motion.a>
          ))}
        </div>
      </div>
    </section>
  );
};

export default FeaturedPrograms;
