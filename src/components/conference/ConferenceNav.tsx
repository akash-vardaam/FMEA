import { useState } from "react";
import { useNavigate } from "react-router-dom";
import { ChevronDown } from "lucide-react";
import { cn } from "@/lib/utils";

interface SubItem {
  label: string;
  id: string;
  href?: string;
}

interface NavCategory {
  label: string;
  items: SubItem[];
}

const navCategories: NavCategory[] = [
  {
    label: "Attending",
    items: [
      { label: "Registration", id: "registration" },
      { label: "Schedule", id: "attending-schedule" },
      { label: "Hotels", id: "hotels" },
      { label: "Administrator Support Letter", id: "admin-letter" },
      { label: "Policies", id: "attending-policies" },
    ],
  },
  {
    label: "Clinics",
    items: [
      { label: "Schedule", id: "clinics-schedule" },
      { label: "Pre-Conference Workshop", id: "pre-conference" },
      { label: "Presenter Information", id: "presenter-info" },
      { label: "Proposals", id: "proposals" },
      { label: "Call for Research Posters", id: "research-posters" },
      { label: "Presenters", id: "presenters" },
      { label: "Session Attendance Report", id: "session-report" },
      { label: "Session Coordinators", id: "session-coordinators" },
    ],
  },
  {
    label: "Students",
    items: [
      { label: "All-State Information", id: "all-state-info" },
      { label: "All-State Concert Program", id: "concert-program" },
      { label: "All-State Concert Recordings", id: "concert-recordings" },
      { label: "All-State Merchandise", id: "merchandise" },
      { label: "All-State Rehearsals", id: "rehearsals" },
      { label: "Tickets / Ticket Policy", id: "tickets" },
    ],
  },
  {
    label: "Policies",
    items: [
      { label: "Invited Ensembles & Demonstration Groups", id: "invited-ensembles" },
      { label: "Student Conference Experience", id: "student-experience" },
      { label: "Tri-M Conference Experience", id: "tri-m" },
      { label: "Student Leadership Workshop", id: "leadership-workshop" },
      { label: "College Night", id: "college-night-policies" },
    ],
  },
  {
    label: "Exhibitors & Sponsors",
    items: [
      { label: "Exhibitor Information", id: "exhibitor-info", href: "/conference/exhibitor-information" },
      { label: "Exhibit Hall Floor Plan", id: "floor-plan" },
      { label: "College Night", id: "college-night" },
      { label: "Product Showcases", id: "product-showcases" },
      { label: "Sponsors", id: "sponsors" },
      { label: "Corporate & Academic Partners", id: "partners" },
    ],
  },
  {
    label: "Plan Your Visit",
    items: [
      { label: "Mobile App", id: "mobile-app" },
      { label: "Program", id: "program" },
      { label: "Schedule", id: "visit-schedule" },
      { label: "Concert Tickets", id: "concert-tickets" },
      { label: "Hotels", id: "visit-hotels" },
      { label: "Food", id: "food" },
      { label: "Maps", id: "maps" },
      { label: "Parking & Downtown Tampa", id: "parking" },
      { label: "WiFi", id: "wifi" },
    ],
  },
];

const ConferenceNav = () => {
  const [openCategory, setOpenCategory] = useState<string | null>(null);
  const navigate = useNavigate();

  return (
    <nav className="sticky top-[73px] z-40 shadow-md" style={{ backgroundColor: '#032e7d' }}>
      <div className="container">
        {/* Desktop: horizontal bar */}
        <div className="hidden lg:flex items-center justify-center gap-0 relative">
          {navCategories.map((cat) => (
            <div
              key={cat.label}
              className="relative"
              onMouseEnter={() => setOpenCategory(cat.label)}
              onMouseLeave={() => setOpenCategory(null)}
            >
              <button
                className={cn(
                  "flex items-center gap-1.5 px-5 py-3.5 text-sm font-body font-semibold tracking-wide uppercase transition-all duration-200 border-b-2",
                  openCategory === cat.label
                    ? "text-secondary border-secondary bg-white/10"
                    : "text-white/90 border-transparent hover:text-secondary hover:border-secondary/50 hover:bg-white/10"
                )}
              >
                {cat.label}
                <ChevronDown
                  className={cn(
                    "w-3.5 h-3.5 transition-transform duration-200",
                    openCategory === cat.label && "rotate-180"
                  )}
                />
              </button>

              {openCategory === cat.label && (
                <div className="absolute top-full left-0 min-w-[280px] bg-card border border-border rounded-b-lg shadow-2xl z-50 overflow-hidden">
                  <div className="py-1">
                    {cat.items.map((item) => (
                      <a
                        key={item.id}
                        href={item.href || `#${item.id}`}
                        onClick={(e) => {
                          if (item.href) {
                            e.preventDefault();
                            navigate(item.href);
                            setOpenCategory(null);
                          }
                        }}
                        className="block px-5 py-3 text-sm font-body text-foreground hover:bg-[#032e7d]/5 hover:text-[#032e7d] border-l-2 border-transparent hover:border-[#032e7d] transition-all"
                      >
                        {item.label}
                      </a>
                    ))}
                  </div>
                </div>
              )}
            </div>
          ))}
        </div>

        {/* Mobile: accordion */}
        <div className="lg:hidden">
          <div className="flex flex-wrap gap-1 py-2">
            {navCategories.map((cat) => (
              <div key={cat.label} className="w-full">
                <button
                  onClick={() =>
                    setOpenCategory(openCategory === cat.label ? null : cat.label)
                  }
                  className="flex items-center justify-between w-full px-3 py-2.5 text-sm font-body font-semibold uppercase tracking-wide text-primary-foreground/90"
                >
                  {cat.label}
                  <ChevronDown
                    className={cn(
                      "w-4 h-4 transition-transform",
                      openCategory === cat.label && "rotate-180"
                    )}
                  />
                </button>
                {openCategory === cat.label && (
                  <div className="pl-4 pb-2 space-y-1">
                    {cat.items.map((item) => (
                      <a
                        key={item.id}
                        href={item.href || `#${item.id}`}
                        onClick={(e) => {
                          if (item.href) {
                            e.preventDefault();
                            navigate(item.href);
                            setOpenCategory(null);
                          }
                        }}
                        className="block py-1.5 text-sm text-primary-foreground/70 hover:text-secondary transition-colors"
                      >
                        {item.label}
                      </a>
                    ))}
                  </div>
                )}
              </div>
            ))}
          </div>
        </div>
      </div>
    </nav>
  );
};

export default ConferenceNav;
