import { motion } from "framer-motion";

interface SectionHeaderProps {
  number: string;
  title: string;
  subtitle?: string;
}

const SectionHeader = ({ number, title, subtitle }: SectionHeaderProps) => {
  return (
    <motion.div
      initial={{ opacity: 0, x: -20 }}
      whileInView={{ opacity: 1, x: 0 }}
      viewport={{ once: true }}
      transition={{ duration: 0.6 }}
      className="mb-12"
    >
      <div className="flex items-baseline gap-4 mb-2">
        <span className="text-sm font-body font-medium text-primary tracking-widest uppercase">
          {number}
        </span>
        <div className="h-px flex-1 bg-border max-w-24" />
      </div>
      <h2 className="text-4xl md:text-5xl font-display font-semibold text-foreground tracking-tight">
        {title}
      </h2>
      {subtitle && (
        <p className="mt-4 text-lg font-body text-muted-foreground max-w-2xl">
          {subtitle}
        </p>
      )}
    </motion.div>
  );
};

export default SectionHeader;
