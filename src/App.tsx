import { Toaster } from "@/components/ui/toaster";
import { Toaster as Sonner } from "@/components/ui/sonner";
import { TooltipProvider } from "@/components/ui/tooltip";
import { QueryClient, QueryClientProvider } from "@tanstack/react-query";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import FMEAHome from "./pages/FMEAHome";
import ConferencePage from "./pages/ConferencePage";
import ExhibitorInfoPage from "./pages/ExhibitorInfoPage";
import AboutPage from "./pages/AboutPage";
import MembershipBenefitsPage from "./pages/MembershipBenefitsPage";
import Index from "./pages/Index";
import NotFound from "./pages/NotFound";

const queryClient = new QueryClient();

const App = () => (
  <QueryClientProvider client={queryClient}>
    <TooltipProvider>
      <Toaster />
      <Sonner />
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<FMEAHome />} />
          <Route path="/conference/exhibitor-information" element={<ExhibitorInfoPage />} />
          <Route path="/conference" element={<ConferencePage />} />
          <Route path="/about" element={<AboutPage />} />
          <Route path="/membership/benefits" element={<MembershipBenefitsPage />} />
          <Route path="/brand-guidelines" element={<Index />} />
          {/* ADD ALL CUSTOM ROUTES ABOVE THE CATCH-ALL "*" ROUTE */}
          <Route path="*" element={<NotFound />} />
        </Routes>
      </BrowserRouter>
    </TooltipProvider>
  </QueryClientProvider>
);

export default App;
