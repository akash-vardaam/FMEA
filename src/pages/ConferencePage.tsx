import MegaMenu from "@/components/layout/MegaMenu";
import ConferenceNav from "@/components/conference/ConferenceNav";
import ConferenceHero from "@/components/conference/ConferenceHero";
import ConferenceContent from "@/components/conference/ConferenceContent";
import ConferenceStats from "@/components/conference/ConferenceStats";
import Footer from "@/components/layout/Footer";

const ConferencePage = () => {
  return (
    <div className="min-h-screen bg-background">
      <MegaMenu />
      <ConferenceHero />
      <ConferenceNav />
      <main>
        <ConferenceContent />
        <ConferenceStats />
      </main>
      <Footer />
    </div>
  );
};

export default ConferencePage;
