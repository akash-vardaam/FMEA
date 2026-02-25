import ColorSwatch from "./ColorSwatch";
import SectionHeader from "./SectionHeader";

const PrimaryPalette = () => {
  const primaryColors = [
    { name: "Burgundy Dark", colorClass: "bg-brand-burgundy-dark", hex: "#5c1a24", hsl: "HSL 351° 60% 25%", isLight: false },
    { name: "Burgundy", colorClass: "bg-brand-burgundy", hex: "#962c3c", hsl: "HSL 351° 55% 38%", isLight: false },
    { name: "Burgundy Light", colorClass: "bg-brand-burgundy-light", hex: "#c26a78", hsl: "HSL 351° 45% 55%", isLight: false },
    { name: "Blush", colorClass: "bg-brand-blush", hex: "#f0dfe1", hsl: "HSL 351° 40% 92%", isLight: true },
  ];

  return (
    <section className="py-24 px-6">
      <div className="container max-w-6xl">
        <SectionHeader
          number="01"
          title="Primary Palette"
          subtitle="Our signature burgundy anchors the brand identity, representing sophistication, warmth, and premium quality. Use these shades as the dominant colors in key brand touchpoints."
        />

        {/* Main hero swatch */}
        <div className="mb-12">
          <div className="relative h-64 md:h-80 rounded-2xl bg-brand-burgundy overflow-hidden shadow-2xl">
            <div className="absolute inset-0 flex items-end p-8">
              <div className="text-primary-foreground">
                <p className="text-sm font-body font-medium tracking-widest uppercase opacity-70">Primary Brand Color</p>
                <h3 className="text-4xl md:text-5xl font-display font-bold mt-2">Burgundy</h3>
                <p className="font-body mt-2 opacity-80">#962c3c · HSL 351° 55% 38% · RGB 150, 44, 60</p>
              </div>
            </div>
            <div className="absolute top-8 right-8 w-32 h-32 rounded-full bg-secondary opacity-30 blur-2xl" />
          </div>
        </div>

        {/* Color swatches grid */}
        <div className="grid grid-cols-2 md:grid-cols-4 gap-6">
          {primaryColors.map((color) => (
            <ColorSwatch
              key={color.name}
              name={color.name}
              colorClass={color.colorClass}
              hex={color.hex}
              hsl={color.hsl}
              isLight={color.isLight}
              size="md"
            />
          ))}
        </div>
      </div>
    </section>
  );
};

export default PrimaryPalette;
