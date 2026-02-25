import SectionHeader from "./SectionHeader";
import UsageExample from "./UsageExample";

const UsageGuidelines = () => {
  return (
    <section className="py-24 px-6">
      <div className="container max-w-6xl">
        <SectionHeader
          number="05"
          title="Usage Guidelines"
          subtitle="Follow these principles to maintain brand consistency and ensure our colors are used effectively across all touchpoints."
        />

        <div className="grid md:grid-cols-2 gap-8">
          <UsageExample
            type="do"
            title="Use sufficient contrast"
            description="Ensure text is legible by using light text on dark backgrounds and dark text on light backgrounds."
          >
            <div className="bg-brand-burgundy p-8">
              <h3 className="text-2xl font-display font-bold text-primary-foreground">Elegant Headline</h3>
              <p className="font-body text-primary-foreground/80 mt-2">Supporting text with proper contrast.</p>
            </div>
          </UsageExample>

          <UsageExample
            type="dont"
            title="Avoid low contrast pairings"
            description="Don't use similar tones together as they reduce readability and accessibility."
          >
            <div className="bg-brand-burgundy-light p-8">
              <h3 className="text-2xl font-display font-bold text-brand-burgundy">Hard to Read</h3>
              <p className="font-body text-brand-burgundy/70 mt-2">This text lacks sufficient contrast.</p>
            </div>
          </UsageExample>

          <UsageExample
            type="do"
            title="Use burgundy for key elements"
            description="Reserve the primary burgundy for important actions, headlines, and focal points."
          >
            <div className="bg-brand-cream p-8 flex items-center justify-between">
              <span className="font-display text-xl text-brand-charcoal">Subscribe Today</span>
              <button className="px-6 py-3 bg-brand-burgundy text-primary-foreground font-body font-medium rounded-lg">
                Get Started
              </button>
            </div>
          </UsageExample>

          <UsageExample
            type="dont"
            title="Don't overuse primary color"
            description="Using burgundy for everything dilutes its impact and creates visual fatigue."
          >
            <div className="bg-brand-burgundy p-8">
              <span className="font-display text-xl text-brand-burgundy-light">Everything Burgundy</span>
              <button className="mt-4 block px-6 py-3 bg-brand-burgundy-dark text-brand-burgundy-light font-body font-medium rounded-lg border border-brand-burgundy-light">
                No Contrast
              </button>
            </div>
          </UsageExample>

          <UsageExample
            type="do"
            title="Maintain brand hierarchy"
            description="Use champagne and cream for backgrounds to let burgundy elements stand out."
          >
            <div className="bg-brand-champagne p-8">
              <div className="bg-card rounded-lg p-4 shadow-sm">
                <span className="text-xs font-body font-medium text-brand-burgundy tracking-widest uppercase">Featured</span>
                <h3 className="text-xl font-display font-semibold text-foreground mt-2">Premium Content</h3>
              </div>
            </div>
          </UsageExample>

          <UsageExample
            type="dont"
            title="Don't mix competing colors"
            description="Avoid introducing off-brand colors that clash with the burgundy palette."
          >
            <div className="bg-blue-500 p-8">
              <div className="bg-green-200 rounded-lg p-4">
                <span className="text-xs font-body font-medium text-orange-600 tracking-widest uppercase">Featured</span>
                <h3 className="text-xl font-display font-semibold text-purple-800 mt-2">Off Brand</h3>
              </div>
            </div>
          </UsageExample>
        </div>
      </div>
    </section>
  );
};

export default UsageGuidelines;
