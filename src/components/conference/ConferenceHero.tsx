import { motion } from "framer-motion";
import conferenceHeroBg from "@/assets/conference-hero-bg.jpg";
import conferenceLogo from "@/assets/conference-logo.png";
import musicNote from "@/assets/music-note.png";

const ConferenceHero = () => {
  return (
    <section className="relative min-h-[60vh] flex items-center overflow-hidden">
      <div
        className="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style={{ backgroundImage: `url(${conferenceHeroBg})` }}
      />

      {/* Music note graphic - right side */}
      <img
        src={musicNote}
        alt=""
        className="absolute right-4 md:right-12 lg:right-24 top-1/2 -translate-y-1/2 w-40 md:w-56 lg:w-72 opacity-90 pointer-events-none z-10"
      />

      <div className="container relative z-10 px-6 py-16 lg:py-24">
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.7 }}
          className="max-w-4xl mx-auto text-center"
        >
          <img
            src={conferenceLogo}
            alt="The Power in our Profession — Music Education for Collective Impact"
            className="w-full max-w-3xl mx-auto"
          />
          <p className="mt-4 text-xl md:text-2xl lg:text-3xl font-display font-bold text-white tracking-wide">
            The FMEA Professional Learning Conference
          </p>
        </motion.div>
      </div>
    </section>
  );
};

export default ConferenceHero;
