import MegaMenu from "@/components/layout/MegaMenu";
import HeroSection from "@/components/home/HeroSection";
import QuickActionsBar from "@/components/home/QuickActionsBar";
import MissionSection from "@/components/home/MissionSection";
import FeaturedPrograms from "@/components/home/FeaturedPrograms";
import AdvertisementScroll from "@/components/home/AdvertisementScroll";
import ConferenceBanner from "@/components/home/ConferenceBanner";
import MembershipValue from "@/components/home/MembershipValue";
import NewsSection from "@/components/home/NewsSection";
import TestimonialsSection from "@/components/home/TestimonialsSection";
import PartnersScroll from "@/components/home/PartnersScroll";
import Footer from "@/components/layout/Footer";

const FMEAHome = () => {
  return (
    <div className="min-h-screen bg-background">
      <MegaMenu />
      <main>
        <HeroSection />
        <QuickActionsBar />
        <MissionSection />
        <FeaturedPrograms />
        <AdvertisementScroll />
        <ConferenceBanner />
        <MembershipValue />
        <NewsSection />
        <TestimonialsSection />
        <PartnersScroll />
      </main>
      <Footer />
    </div>
  );
};

export default FMEAHome;
