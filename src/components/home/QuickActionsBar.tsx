import { motion } from "framer-motion";
import { UserPlus, Calendar, Music, Megaphone, Award, Users } from "lucide-react";

type QuickAction = {
  icon: React.ElementType;
  label: string;
  href: string;
};

const audienceGroups = [
  {
    title: "Educators",
    color: "bg-primary hover:bg-primary/90 text-primary-foreground",
    titleColor: "text-primary",
    actions: [
      { icon: UserPlus, label: "Join / Renew", href: "/membership/join" },
      { icon: Calendar, label: "Conference", href: "/conference/register" },
      { icon: Megaphone, label: "Advocacy", href: "/advocacy" },
    ],
  },
  {
    title: "Students",
    color: "bg-[#E8DCC8] hover:bg-[#DED0B8] text-primary",
    titleColor: "text-primary",
    actions: [
      { icon: Music, label: "All-State", href: "/all-state" },
      { icon: Award, label: "Competitions", href: "/competitions" },
      { icon: Calendar, label: "Programs", href: "/programs" },
    ],
  },
  {
    title: "New to FMEA?",
    color: "bg-accent hover:bg-accent/90 text-accent-foreground",
    titleColor: "text-accent",
    actions: [
      { icon: Users, label: "Organization Information", href: "/about" },
      { icon: Award, label: "Membership Benefits", href: "/membership/benefits" },
      { icon: UserPlus, label: "Membership Application Process", href: "/membership/apply" },
    ],
  },
];

const QuickActionsBar = () => {
  return (
    <section className="py-6 bg-background -mt-8 relative z-20">
      <div className="container px-6">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          transition={{ duration: 0.5 }}
          className="grid grid-cols-1 md:grid-cols-3 gap-6"
        >
          {audienceGroups.map((group) => (
            <div key={group.title} className="bg-card rounded-xl p-5 shadow-sm border border-border">
              <h3 className={`font-display text-sm font-semibold uppercase tracking-wider mb-4 ${group.titleColor}`}>
                {group.title}
              </h3>
              <div className="flex flex-col gap-2">
                {group.actions.map((action) => (
                  <motion.a
                    key={action.label}
                    href={action.href}
                    whileHover={{ x: 4 }}
                    whileTap={{ scale: 0.98 }}
                    className={`${group.color} rounded-lg px-4 py-3 flex items-center gap-3 text-sm font-medium shadow-sm hover:shadow-md transition-all`}
                  >
                    <action.icon className="w-5 h-5" />
                    <span>{action.label}</span>
                  </motion.a>
                ))}
              </div>
            </div>
          ))}
        </motion.div>
      </div>
    </section>
  );
};

export default QuickActionsBar;
