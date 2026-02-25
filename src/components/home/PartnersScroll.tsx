import { useRef } from "react";
import { ChevronLeft, ChevronRight } from "lucide-react";
import { Button } from "@/components/ui/button";

const partners = [
  { name: "NAfME", logo: "NAfME" },
  { name: "Florida Department of Education", logo: "FL DOE" },
  { name: "Yamaha", logo: "Yamaha" },
  { name: "Jupiter", logo: "Jupiter" },
  { name: "Conn-Selmer", logo: "Conn-Selmer" },
  { name: "Hal Leonard", logo: "Hal Leonard" },
  { name: "J.W. Pepper", logo: "J.W. Pepper" },
  { name: "Music & Arts", logo: "Music & Arts" },
];

const PartnersScroll = () => {
  const scrollRef = useRef<HTMLDivElement>(null);

  const scroll = (direction: "left" | "right") => {
    if (scrollRef.current) {
      // Scroll by 5 partners at a time (160px + 24px gap) * 5
      const scrollAmount = 920;
      scrollRef.current.scrollBy({
        left: direction === "left" ? -scrollAmount : scrollAmount,
        behavior: "smooth",
      });
    }
  };

  return (
    <section className="py-12 border-t border-border">
      <div className="container px-6 mb-6">
        <p className="text-center text-sm font-body text-muted-foreground uppercase tracking-wider">
          Our Partners & Sponsors
        </p>
      </div>
      
      <div className="container px-6">
        <div className="relative flex items-center gap-4">
          <Button
            variant="outline"
            size="icon"
            onClick={() => scroll("left")}
            className="flex-shrink-0 bg-card hover:bg-muted"
          >
            <ChevronLeft className="w-5 h-5" />
          </Button>

          <div
            ref={scrollRef}
            className="flex gap-6 overflow-x-hidden scroll-smooth max-w-[896px] mx-auto"
          >
            {partners.map((partner, index) => (
              <div
                key={`${partner.name}-${index}`}
                className="flex-shrink-0 w-[160px] h-[80px] bg-card rounded-lg border border-border shadow-sm flex items-center justify-center"
              >
                <span className="text-base font-display font-semibold text-muted-foreground text-center px-2">
                  {partner.logo}
                </span>
              </div>
            ))}
          </div>

          <Button
            variant="outline"
            size="icon"
            onClick={() => scroll("right")}
            className="flex-shrink-0 bg-card hover:bg-muted"
          >
            <ChevronRight className="w-5 h-5" />
          </Button>
        </div>
      </div>
    </section>
  );
};

export default PartnersScroll;
