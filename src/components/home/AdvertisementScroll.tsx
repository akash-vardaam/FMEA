import { useState, useRef } from "react";
import { ChevronLeft, ChevronRight } from "lucide-react";
import { Button } from "@/components/ui/button";

const advertisers = [
  { name: "Yamaha Music", tagline: "Performance. Passion. Purpose." },
  { name: "Jupiter Band Instruments", tagline: "Inspiring Musicians" },
  { name: "Conn-Selmer", tagline: "The Choice of Artists" },
  { name: "Hal Leonard", tagline: "Sheet Music & More" },
  { name: "J.W. Pepper", tagline: "World's Largest Sheet Music Store" },
  { name: "Music & Arts", tagline: "Rent. Buy. Play." },
  { name: "Wenger Corporation", tagline: "Performance Spaces" },
  { name: "QuaverEd", tagline: "Music Curriculum Solutions" },
];

const AdvertisementScroll = () => {
  const scrollRef = useRef<HTMLDivElement>(null);

  const scroll = (direction: "left" | "right") => {
    if (scrollRef.current) {
      // Scroll by 3 ads at a time (300px + 24px gap) * 3
      const scrollAmount = 972;
      scrollRef.current.scrollBy({
        left: direction === "left" ? -scrollAmount : scrollAmount,
        behavior: "smooth",
      });
    }
  };

  return (
    <section className="py-8 bg-secondary/30">
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
            className="flex gap-6 overflow-x-hidden scroll-smooth max-w-[948px] mx-auto"
          >
            {advertisers.map((ad, index) => (
              <a
                key={`${ad.name}-${index}`}
                href="#"
                className="flex-shrink-0 w-[300px] h-[250px] bg-card rounded-lg border border-border shadow-sm hover:shadow-md transition-shadow flex flex-col items-center justify-center gap-2"
              >
                <span className="text-lg font-display font-bold text-foreground text-center px-4">
                  {ad.name}
                </span>
                <span className="text-sm font-body text-muted-foreground text-center px-4">
                  {ad.tagline}
                </span>
                <span className="text-xs text-muted-foreground/50 mt-2">300×250 Ad</span>
              </a>
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

export default AdvertisementScroll;
