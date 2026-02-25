import { motion } from "framer-motion";
import { Check, X } from "lucide-react";

interface UsageExampleProps {
  type: "do" | "dont";
  title: string;
  description: string;
  children: React.ReactNode;
}

const UsageExample = ({ type, title, description, children }: UsageExampleProps) => {
  const isDo = type === "do";

  return (
    <motion.div
      initial={{ opacity: 0, y: 20 }}
      whileInView={{ opacity: 1, y: 0 }}
      viewport={{ once: true }}
      transition={{ duration: 0.5 }}
      className="space-y-4"
    >
      <div className="rounded-xl overflow-hidden border border-border bg-card">
        {children}
      </div>
      <div className="flex items-start gap-3">
        <div className={`flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center ${isDo ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600'}`}>
          {isDo ? <Check className="w-4 h-4" /> : <X className="w-4 h-4" />}
        </div>
        <div>
          <p className={`font-display font-semibold ${isDo ? 'text-green-700' : 'text-red-700'}`}>
            {title}
          </p>
          <p className="text-sm font-body text-muted-foreground mt-1">
            {description}
          </p>
        </div>
      </div>
    </motion.div>
  );
};

export default UsageExample;
