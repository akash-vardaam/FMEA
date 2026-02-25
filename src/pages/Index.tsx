import HeroSection from "@/components/brand/HeroSection";
import PrimaryPalette from "@/components/brand/PrimaryPalette";
import SecondaryPalette from "@/components/brand/SecondaryPalette";
import ColorCombinations from "@/components/brand/ColorCombinations";
import Typography from "@/components/brand/Typography";
import UsageGuidelines from "@/components/brand/UsageGuidelines";
import AccessibilitySection from "@/components/brand/AccessibilitySection";
import DownloadSection from "@/components/brand/DownloadSection";

const Index = () => {
  return (
    <main className="min-h-screen">
      <HeroSection />
      <PrimaryPalette />
      <SecondaryPalette />
      <ColorCombinations />
      <Typography />
      <UsageGuidelines />
      <AccessibilitySection />
      <DownloadSection />
    </main>
  );
};

export default Index;
