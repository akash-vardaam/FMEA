import { motion } from "framer-motion";
import { Mail, ShoppingCart, CalendarCheck } from "lucide-react";
import { Button } from "@/components/ui/button";
import { cn } from "@/lib/utils";
import PartnersScroll from "@/components/home/PartnersScroll";

const confBlue = "#032e7d";

const importantDates = [
  { date: "February 15, 2025", description: "Session Proposals and Performance Applications open" },
  { date: "May 9, 2025", description: "Deadline for Session Proposals and Performance Applications" },
  { date: "July 15, 2025", description: "Deadline for Product Showcase Applications" },
  { date: "September 12, 2025", description: "Early Registration Opens; Nominations open for Student Conference Experience and Tri-M Experience" },
  { date: "September 27, 2025", description: "Hotels begin taking reservations at 9:00 a.m." },
  { date: "October 1, 2025", description: "Presenters' deadline for editing session details and requesting A/V equipment" },
  { date: "October 23, 2025", description: "Popular Music Collective Submission Deadline" },
  { date: "October 30, 2025", description: "Student Conference Experience Nomination Deadline" },
  { date: "November 7, 2025", description: "Digital Music Showcase Submission Deadline" },
  { date: "November 8, 2025", description: "Hotel Room Cancellation Deadline 5:00 p.m." },
  { date: "November 11, 2025", description: "Hotels will charge a non-refundable deposit for the first night of each room not canceled by the deadline" },
  { date: "December 12, 2025", description: "Early Registration closes at 11:59:59 pm ET. Prices increase to regular rates. Postmark deadline for mailed checks." },
  { date: "December 15, 2025", description: "All school lodging checks due to hotels. Final deadline for discounted hotel blocks." },
];

const fadeIn = {
  initial: { opacity: 0, y: 20 },
  whileInView: { opacity: 1, y: 0 },
  viewport: { once: true },
  transition: { duration: 0.5 },
};

const ConferenceContent = () => {
  return (
    <div className="bg-background">
      {/* About Section */}
      <section className="container px-6 py-16">
        <motion.div {...fadeIn} className="max-w-4xl mx-auto">
          <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground mb-6">
            About the Conference
          </h2>
          <p className="font-body text-muted-foreground leading-relaxed mb-6">
            The FMEA Professional Learning Conference is one of the largest music education professional learning events in the United States. In addition to approximately 250 clinic sessions and concerts, it hosts 24 All-State Ensembles featuring Florida's top band, orchestra, chorus, guitar, orff, and popular music students, conducted by world-class conductors and teachers.
          </p>
          <p className="font-body text-muted-foreground leading-relaxed">
            It is attended by more than 10,000 people, including K-12 music teachers, school district music supervisors, college students, college music teachers & professors, school administrators, K-12 students performing in the All-State and Honors ensembles, professional musicians performing with invited performing ensembles, exhibitors, and parents and family members of performing students.
          </p>
        </motion.div>
      </section>

      {/* Partner Logos */}
      <div style={{ backgroundColor: '#f1f080' }}>
        <PartnersScroll />
      </div>

      {/* Callout Cards */}
      <section style={{ backgroundColor: '#032e7d' }}>
        <div className="container px-6 py-16">
          <div className="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
            {/* Session Proposals */}
            <motion.div {...fadeIn} className="bg-white/10 backdrop-blur-sm rounded-xl border border-white/20 p-6">
              <div className="w-10 h-10 rounded-lg bg-white/20 flex items-center justify-center mb-4">
                <Mail className="w-5 h-5 text-white" />
              </div>
              <h3 className="font-display font-bold text-lg text-white mb-2">
                Session Proposals & Performing Ensembles
              </h3>
              <p className="font-body text-sm text-white/80 leading-relaxed">
                If you proposed a session or applied to perform, you should have received an email on July 1 indicating your acceptance status. If you did not receive this email, please contact{" "}
                <a href="mailto:web@fmea.org" className="text-white underline hover:text-white/90">
                  web@fmea.org
                </a>.
              </p>
            </motion.div>

            {/* Exhibitors */}
            <motion.div {...fadeIn} className="bg-white/10 backdrop-blur-sm rounded-xl border border-white/20 p-6">
              <div className="w-10 h-10 rounded-lg bg-white/20 flex items-center justify-center mb-4">
                <ShoppingCart className="w-5 h-5 text-white" />
              </div>
              <h3 className="font-display font-bold text-lg text-white mb-2">
                Now Accepting Exhibitors for 2026
              </h3>
              <p className="font-body text-sm text-white/80 leading-relaxed mb-4">
                Reserve your booth by March 1 to maintain your same booth location or receive priority for moving to a different location.
              </p>
              <Button variant="outline" size="sm" className="font-body bg-white text-[#032e7d] border-white hover:bg-white/90 font-semibold">
                Exhibitor Information
              </Button>
            </motion.div>
          </div>
        </div>
      </section>

      {/* Important Dates */}
      <section className="container px-6 py-16">
        <motion.div {...fadeIn} className="text-center">
          <div className="flex items-center justify-center gap-3 mb-10">
            <CalendarCheck className="w-6 h-6" style={{ color: confBlue }} />
            <h2 className="text-2xl md:text-3xl font-display font-bold text-foreground">
              Important Dates
            </h2>
          </div>

          <div className="max-w-xl mx-auto relative">
            {/* Center timeline line */}
            <div className="absolute left-1/2 top-0 bottom-0 w-0.5 -translate-x-1/2" style={{ backgroundColor: `${confBlue}33` }} />

            <div className="flex flex-col gap-6">
              {importantDates.map((item, index) => (
                <motion.div
                  key={index}
                  initial={{ opacity: 0, y: 15 }}
                  whileInView={{ opacity: 1, y: 0 }}
                  viewport={{ once: true }}
                  transition={{ duration: 0.3, delay: index * 0.04 }}
                  className="relative bg-card rounded-xl border border-border p-5 shadow-sm text-left"
                >
                  {/* Timeline dot - hide on first item */}
                  {index > 0 && <div className="absolute left-1/2 -translate-x-1/2 -top-[18px] w-3 h-3 rounded-full border-2 border-background z-10" style={{ backgroundColor: confBlue }} />}
                  <p className="font-body font-bold text-sm mb-1" style={{ color: confBlue }}>
                    {item.date}
                  </p>
                  <p className="font-body text-sm text-muted-foreground leading-relaxed">
                    {item.description}
                  </p>
                </motion.div>
              ))}
            </div>
          </div>
        </motion.div>
      </section>
    </div>
  );
};

export default ConferenceContent;
