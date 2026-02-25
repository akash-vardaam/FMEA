import { motion } from "framer-motion";
import { Button } from "@/components/ui/button";
import { ArrowRight, Calendar, Clock, AlertCircle } from "lucide-react";

const newsItems = [
  {
    type: "announcement",
    date: "January 2, 2025",
    title: "2025 All-State Concert Schedule Announced",
    excerpt: "View the complete schedule for all All-State ensemble performances at the January conference in Tampa.",
    href: "/news/all-state-schedule",
    featured: true,
  },
  {
    type: "news",
    date: "December 15, 2024",
    title: "FMEA Welcomes New Executive Director",
    excerpt: "The FMEA Board of Directors is pleased to announce the appointment of Dr. Maria Santos as the organization's new Executive Director.",
    href: "/news/new-executive-director",
    featured: false,
  },
  {
    type: "news",
    date: "December 8, 2024",
    title: "2025 FMEA Award Recipients Named",
    excerpt: "Congratulations to this year's outstanding educators recognized for their contributions to music education in Florida.",
    href: "/news/award-recipients",
    featured: false,
  },
];

const deadlines = [
  {
    date: "January 5, 2025",
    title: "Conference Early Registration Ends",
    urgent: true,
  },
  {
    date: "January 15, 2025",
    title: "Solo & Ensemble MPA Registration Opens",
    urgent: false,
  },
  {
    date: "February 1, 2025",
    title: "Summer Workshop Proposals Due",
    urgent: false,
  },
  {
    date: "March 1, 2025",
    title: "2026 Conference Session Proposals Due",
    urgent: false,
  },
];

const NewsSection = () => {
  return (
    <section className="py-20 bg-background">
      <div className="container px-6">
        <div className="grid lg:grid-cols-3 gap-12">
          {/* News Column */}
          <div className="lg:col-span-2">
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ duration: 0.5 }}
              className="flex items-center justify-between mb-8"
            >
              <div>
                <span className="inline-flex items-center gap-2 text-sm font-body font-medium text-primary tracking-widest uppercase mb-2">
                  Latest Updates
                </span>
                <h2 className="text-3xl md:text-4xl font-display font-bold text-foreground tracking-tight">
                  News & Announcements
                </h2>
              </div>
              <Button variant="outline" className="hidden sm:flex font-body">
                View All News
                <ArrowRight className="ml-2 w-4 h-4" />
              </Button>
            </motion.div>

            <div className="space-y-6">
              {newsItems.map((item, index) => (
                <motion.a
                  key={item.title}
                  href={item.href}
                  initial={{ opacity: 0, y: 20 }}
                  whileInView={{ opacity: 1, y: 0 }}
                  viewport={{ once: true }}
                  transition={{ duration: 0.4, delay: index * 0.1 }}
                  className={`group block p-6 rounded-xl border border-border hover:border-primary/30 hover:shadow-md transition-all ${
                    item.featured ? "bg-muted" : "bg-card"
                  }`}
                >
                  <div className="flex items-center gap-2 mb-3">
                    <span className={`px-2 py-1 text-xs font-body font-semibold rounded ${
                      item.type === "announcement" 
                        ? "bg-primary text-primary-foreground" 
                        : "bg-secondary text-secondary-foreground"
                    }`}>
                      {item.type === "announcement" ? "Announcement" : "News"}
                    </span>
                    <span className="flex items-center gap-1 text-sm text-muted-foreground font-body">
                      <Calendar className="w-3 h-3" />
                      {item.date}
                    </span>
                  </div>
                  <h3 className="font-display font-semibold text-xl text-foreground group-hover:text-primary transition-colors mb-2">
                    {item.title}
                  </h3>
                  <p className="font-body text-muted-foreground">
                    {item.excerpt}
                  </p>
                  <span className="inline-flex items-center mt-4 text-sm font-body font-medium text-primary">
                    Read More
                    <ArrowRight className="ml-1 w-4 h-4 group-hover:translate-x-1 transition-transform" />
                  </span>
                </motion.a>
              ))}
            </div>

            <Button variant="outline" className="w-full mt-6 sm:hidden font-body">
              View All News
              <ArrowRight className="ml-2 w-4 h-4" />
            </Button>
          </div>

          {/* Deadlines Column */}
          <div>
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ duration: 0.5, delay: 0.2 }}
            >
              <div className="mb-8">
                <span className="inline-flex items-center gap-2 text-sm font-body font-medium text-primary tracking-widest uppercase mb-2">
                  <Clock className="w-4 h-4" />
                  Important Dates
                </span>
                <h2 className="text-2xl font-display font-bold text-foreground tracking-tight">
                  Upcoming Deadlines
                </h2>
              </div>

              <div className="bg-card rounded-xl border border-border overflow-hidden">
                <div className="divide-y divide-border">
                  {deadlines.map((deadline, index) => (
                    <motion.div
                      key={deadline.title}
                      initial={{ opacity: 0, x: 20 }}
                      whileInView={{ opacity: 1, x: 0 }}
                      viewport={{ once: true }}
                      transition={{ duration: 0.4, delay: 0.3 + index * 0.1 }}
                      className="p-4 hover:bg-muted/50 transition-colors"
                    >
                      <div className="flex items-start gap-3">
                        {deadline.urgent && (
                          <AlertCircle className="w-5 h-5 text-destructive flex-shrink-0 mt-0.5" />
                        )}
                        <div className={!deadline.urgent ? "pl-8" : ""}>
                          <span className={`block text-sm font-body font-semibold ${
                            deadline.urgent ? "text-destructive" : "text-primary"
                          }`}>
                            {deadline.date}
                          </span>
                          <span className="font-body text-foreground">
                            {deadline.title}
                          </span>
                        </div>
                      </div>
                    </motion.div>
                  ))}
                </div>
                <div className="p-4 bg-muted/50">
                  <Button variant="ghost" className="w-full font-body text-sm">
                    View Full Calendar
                    <ArrowRight className="ml-2 w-4 h-4" />
                  </Button>
                </div>
              </div>
            </motion.div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default NewsSection;
