<?php
$page_title = "404 – Page Not Found";
$rootPrefix = "..";

require_once __DIR__ . "/../components/header.php";
?>

<div class="flex min-h-screen items-center justify-center bg-muted">
  <div class="text-center">
    <h1 class="mb-4 text-4xl font-display font-bold">404</h1>
    <p class="mb-4 text-xl font-body text-muted-foreground">Oops! Page not found</p>
    <a href="home.php" class="text-primary underline hover:text-primary/90">
      Return to Home
    </a>
  </div>
</div>

<?php include __DIR__ . "/../components/footer.php"; ?>

