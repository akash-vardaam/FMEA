import { motion } from "framer-motion";
import { Copy, Download } from "lucide-react";
import { Button } from "@/components/ui/button";
import { useState } from "react";

const DownloadSection = () => {
  const [copiedColor, setCopiedColor] = useState<string | null>(null);

  const colorTokens = [
    { name: "--brand-burgundy", value: "#962c3c" },
    { name: "--brand-burgundy-dark", value: "#5c1a24" },
    { name: "--brand-burgundy-light", value: "#c26a78" },
    { name: "--brand-champagne", value: "#e8dcc8" },
    { name: "--brand-champagne-dark", value: "#b39a6b" },
    { name: "--brand-cream", value: "#f9f6f0" },
    { name: "--brand-charcoal", value: "#2e2427" },
    { name: "--brand-blush", value: "#f0dfe1" },
  ];

  const handleCopy = async (name: string, value: string) => {
    await navigator.clipboard.writeText(`${name}: ${value};`);
    setCopiedColor(name);
    setTimeout(() => setCopiedColor(null), 2000);
  };

  const handleDownloadAll = () => {
    const cssContent = `:root {\n${colorTokens.map(c => `  ${c.name}: ${c.value};`).join('\n')}\n}`;
    const blob = new Blob([cssContent], { type: 'text/css' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'brand-colors.css';
    a.click();
    URL.revokeObjectURL(url);
  };

  return (
    <section className="py-24 px-6 bg-brand-burgundy">
      <div className="container max-w-6xl">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          className="text-center mb-12"
        >
          <h2 className="text-4xl md:text-5xl font-display font-bold text-primary-foreground">
            Ready to Use
          </h2>
          <p className="mt-4 text-lg font-body text-primary-foreground/80 max-w-xl mx-auto">
            Copy individual color tokens or download the complete CSS file for your project.
          </p>
        </motion.div>

        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          className="bg-card rounded-2xl p-8 shadow-2xl"
        >
          <div className="flex items-center justify-between mb-6">
            <h4 className="text-xl font-display font-semibold text-foreground">Color Tokens</h4>
            <Button 
              onClick={handleDownloadAll}
              className="bg-brand-burgundy hover:bg-brand-burgundy-dark text-primary-foreground font-body"
            >
              <Download className="w-4 h-4 mr-2" />
              Download CSS
            </Button>
          </div>

          <div className="grid gap-3">
            {colorTokens.map((token) => (
              <div
                key={token.name}
                className="flex items-center justify-between p-4 rounded-lg bg-muted hover:bg-muted/80 transition-colors cursor-pointer group"
                onClick={() => handleCopy(token.name, token.value)}
              >
                <div className="flex items-center gap-4">
                  <div 
                    className="w-10 h-10 rounded-lg shadow-inner border border-border"
                    style={{ backgroundColor: token.value }}
                  />
                  <div>
                    <code className="font-mono text-sm text-foreground">{token.name}</code>
                    <p className="text-xs font-body text-muted-foreground mt-1">{token.value}</p>
                  </div>
                </div>
                <div className={`flex items-center gap-2 text-sm font-body ${copiedColor === token.name ? 'text-green-600' : 'text-muted-foreground'}`}>
                  <Copy className="w-4 h-4" />
                  <span>{copiedColor === token.name ? 'Copied!' : 'Copy'}</span>
                </div>
              </div>
            ))}
          </div>
        </motion.div>

        <motion.p
          initial={{ opacity: 0 }}
          whileInView={{ opacity: 1 }}
          viewport={{ once: true }}
          transition={{ delay: 0.3 }}
          className="text-center mt-12 font-body text-primary-foreground/60 text-sm"
        >
          © 2026 Brand Guidelines. All colors optimized for web and print use.
        </motion.p>
      </div>
    </section>
  );
};

export default DownloadSection;
