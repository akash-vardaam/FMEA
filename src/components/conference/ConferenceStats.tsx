import { motion } from "framer-motion";

const stats = [
  { value: "250+", label: "Clinic Sessions & Concerts" },
  { value: "24", label: "All-State Ensembles" },
  { value: "10,000+", label: "Total Attendees" },
  { value: "50+", label: "Exhibitors & Sponsors" },
  { value: "6", label: "Performance Genres" },
  { value: "67", label: "Florida Counties Represented" },
];

const ConferenceStats = () => {
  return (
    <section className="py-16" style={{ backgroundColor: '#fb9bf9' }}>
      <div className="container px-6">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          transition={{ duration: 0.5 }}
          className="text-center mb-10"
        >
          <h2 className="text-2xl md:text-3xl font-display font-bold" style={{ color: '#2E2427' }}>
            Conference Impact
          </h2>
          <p className="font-body mt-2" style={{ color: '#4a2a3a' }}>
            Florida's largest music education professional learning event
          </p>
        </motion.div>

        <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 max-w-5xl mx-auto">
          {stats.map((stat, index) => (
            <motion.div
              key={stat.label}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ duration: 0.4, delay: index * 0.08 }}
              className="text-center"
            >
              <span className="block text-3xl md:text-4xl font-display font-bold mb-1" style={{ color: '#032e7d' }}>
                {stat.value}
              </span>
              <span className="text-xs font-body font-medium uppercase tracking-wide" style={{ color: '#4a2a3a' }}>
                {stat.label}
              </span>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default ConferenceStats;
