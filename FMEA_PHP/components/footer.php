<?php
// Global footer reused across all pages.
if (!isset($rootPrefix)) {
    $rootPrefix = ".";
}
?>

    <footer class="bg-accent text-accent-foreground">
      <div class="container px-6 py-16">
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8 lg:gap-12">
          <!-- Logo & Contact -->
          <div class="col-span-2 md:col-span-4 lg:col-span-1">
            <div class="mb-6">
              <img src="../assets/images/fmea-logo-white.png" alt="Florida Music Education Association" class="h-16 w-auto">
            </div>
            <div class="space-y-3 text-sm font-body text-accent-foreground/80">
              <div class="flex items-start gap-2">
                <?php icon_map_pin("w-4 h-4 mt-0.5 flex-shrink-0"); ?>
                <span>402 Office Plaza Drive<br />Tallahassee, FL 32301</span>
              </div>
              <div class="flex items-center gap-2">
                <?php icon_phone("w-4 h-4 flex-shrink-0"); ?>
                <a href="tel:850-878-6844" class="hover:text-secondary transition-colors">(850) 878-6844</a>
              </div>
              <div class="flex items-center gap-2">
                <?php icon_mail("w-4 h-4 flex-shrink-0"); ?>
                <a href="mailto:info@fmea.org" class="hover:text-secondary transition-colors">info@fmea.org</a>
              </div>
            </div>

            <!-- Social Links -->
            <div class="flex items-center gap-3 mt-6">
              <?php
              $socialLinks = [
                  ["label" => "Facebook", "href" => "https://facebook.com/floridamea", "icon" => "facebook"],
                  ["label" => "Twitter",  "href" => "https://twitter.com/floridamea",  "icon" => "twitter"],
                  ["label" => "Instagram","href" => "https://instagram.com/floridamea","icon" => "instagram"],
                  ["label" => "YouTube",  "href" => "https://youtube.com/floridamea",  "icon" => "youtube"],
              ];
              foreach ($socialLinks as $social): ?>
                <a
                  href="<?php echo htmlspecialchars($social['href'], ENT_QUOTES, 'UTF-8'); ?>"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="w-10 h-10 rounded-full bg-accent-foreground/10 flex items-center justify-center hover:bg-primary hover:text-primary-foreground transition-colors"
                  aria-label="<?php echo htmlspecialchars($social['label'], ENT_QUOTES, 'UTF-8'); ?>"
                >
                  <?php
                  switch ($social['icon']) {
                      case 'facebook':
                          icon_facebook();
                          break;
                      case 'twitter':
                          icon_twitter();
                          break;
                      case 'instagram':
                          icon_instagram();
                          break;
                      case 'youtube':
                          icon_youtube();
                          break;
                  }
                  ?>
                </a>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Link Columns -->
          <?php
          $footerLinks = [
              "For Educators" => [
                  ["label" => "Membership Benefits", "href" => $rootPrefix . "/pages/membership-benefits.php"],
                  ["label" => "Professional Development", "href" => "#"],
                  ["label" => "Job Board", "href" => "#"],
                  ["label" => "Publications", "href" => "#"],
                  ["label" => "Awards Program", "href" => "#"],
              ],
              "For Students" => [
                  ["label" => "All-State Auditions", "href" => "#"],
                  ["label" => "Solo & Ensemble MPA", "href" => "#"],
                  ["label" => "Collegiate Programs", "href" => "#"],
                  ["label" => "Scholarships", "href" => "#"],
                  ["label" => "Honor Societies", "href" => "#"],
              ],
              "Programs & Events" => [
                  ["label" => "Annual Conference", "href" => $rootPrefix . "/pages/conference.php"],
                  ["label" => "All-State Ensembles", "href" => "#"],
                  ["label" => "Regional Events", "href" => "#"],
                  ["label" => "Summer Workshops", "href" => "#"],
                  ["label" => "Advocacy Day", "href" => "#"],
              ],
              "About FMEA" => [
                  ["label" => "Our Mission", "href" => $rootPrefix . "/pages/about.php"],
                  ["label" => "Leadership", "href" => $rootPrefix . "/pages/about.php"],
                  ["label" => "Contact Us", "href" => $rootPrefix . "/pages/about.php#contact"],
                  ["label" => "Careers", "href" => "#"],
                  ["label" => "Privacy Policy", "href" => "#"],
              ],
          ];
          foreach ($footerLinks as $sectionTitle => $links): ?>
            <div>
              <h3 class="font-display font-semibold text-accent-foreground mb-4 text-sm uppercase tracking-wide">
                <?php echo htmlspecialchars($sectionTitle, ENT_QUOTES, 'UTF-8'); ?>
              </h3>
              <ul class="space-y-2">
                <?php foreach ($links as $link): ?>
                  <li>
                    <a
                      href="<?php echo htmlspecialchars($link['href'], ENT_QUOTES, 'UTF-8'); ?>"
                      class="text-sm font-body text-accent-foreground/70 hover:text-secondary transition-colors"
                    >
                      <?php echo htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="border-t border-accent-foreground/10">
        <div class="container px-6 py-6">
          <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-sm font-body text-accent-foreground/60">
            <p>© <?php echo date("Y"); ?> Florida Music Education Association. All rights reserved.</p>
            <div class="flex flex-wrap items-center gap-4">
              <a href="<?php echo $rootPrefix; ?>/pages/brand-guidelines.php" class="hover:text-secondary transition-colors">Brand Guidelines</a>
              <a href="#" class="hover:text-secondary transition-colors">Privacy Policy</a>
              <a href="#" class="hover:text-secondary transition-colors">Terms of Use</a>
              <a href="#" class="hover:text-secondary transition-colors">Accessibility</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Local jQuery-style helper + main JS -->
    <script src="<?php echo $rootPrefix; ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo $rootPrefix; ?>/assets/js/main.js"></script>
  </body>
</html>

