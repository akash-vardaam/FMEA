import { motion } from "framer-motion";
import { Check, Copy } from "lucide-react";
import { useState } from "react";

interface ColorSwatchProps {
  name: string;
  colorClass: string;
  hex: string;
  hsl: string;
  isLight?: boolean;
  size?: "sm" | "md" | "lg";
}

const ColorSwatch = ({ name, colorClass, hex, hsl, isLight = false, size = "md" }: ColorSwatchProps) => {
  const [copied, setCopied] = useState(false);

  const handleCopy = async () => {
    await navigator.clipboard.writeText(hex);
    setCopied(true);
    setTimeout(() => setCopied(false), 2000);
  };

  const sizeClasses = {
    sm: "h-20 w-full",
    md: "h-32 w-full",
    lg: "h-48 w-full",
  };

  return (
    <motion.div
      initial={{ opacity: 0, y: 20 }}
      whileInView={{ opacity: 1, y: 0 }}
      viewport={{ once: true }}
      transition={{ duration: 0.5 }}
      className="group"
    >
      <div
        className={`${sizeClasses[size]} ${colorClass} rounded-lg shadow-md cursor-pointer transition-all duration-300 hover:shadow-xl hover:scale-[1.02] relative overflow-hidden`}
        onClick={handleCopy}
      >
        <div className={`absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity ${isLight ? 'text-brand-charcoal' : 'text-white'}`}>
          {copied ? <Check className="w-6 h-6" /> : <Copy className="w-5 h-5" />}
        </div>
      </div>
      <div className="mt-3 space-y-1">
        <p className="font-display font-medium text-foreground">{name}</p>
        <p className="text-sm font-body text-muted-foreground uppercase tracking-wide">{hex}</p>
        <p className="text-xs font-body text-muted-foreground">{hsl}</p>
      </div>
    </motion.div>
  );
};

export default ColorSwatch;
