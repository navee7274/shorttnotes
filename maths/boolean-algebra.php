<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("../includes/head_part.php"); ?>
  <link href="/stylesheets/indexes.css?v=<?php echo $refreshNum; ?>" rel="stylesheet" />

  <title>Maths Short Notes | THYSICS.ORG</title>
</head>

<body>
  <?php include '../includes/navigation.php'; ?>
  <section id="section-hero">
    <h1 class="sinhala">වීජ ගණිතය</h1>
    <div class="third-cover-wrapper">
      <img class="third-cover" src="/images/noindex/mathspage/halftone.svg" alt="">
    </div>
  </section>
  <section>
    <div class="section-container">
      <?php
      $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $segments = array_filter(explode('/', $path));

      echo '<ul class="navigations-on-page">';
      $link = '/';
      echo '<li><a href="/">Home</a></li>';

      foreach ($segments as $key => $segment) {
        $link .= $segment . '/';
        if ($key !== array_key_last($segments)) {
          echo '<li><a href="' . $link . '">' . ucfirst($segment) . '</a></li>';
        } else {
          echo '<li>' . ucfirst(str_replace(".php", "", $segment)) . '</li>';
        }
      }
      echo '</ul>';
      ?>
    </div>
  </section>
  <section id="inequalities">
    <div class="section-container">
      <h2>අසමානතා</h2>
    </div>
  </section>
  <section id="quadratic-equationss">
    <div class="section-container">
      <h2>වර්ගජ සමීකරණ හා වර්ගජ ප‍්‍රකාශන</h2>
    </div>
  </section>
  <section id="quadratic-equationss">
    <div class="section-container">
      <h2>බහුපද ප‍්‍රමේයය හා සාධක ප‍්‍රමේයය</h2>
    </div>
  </section>
  <section id="quadratic-equationss">
    <div class="section-container">
      <h2>පරිමේය ශ‍්‍රිත හා භින්න භාග</h2>
    </div>
  </section>
  <section id="quadratic-equationss">
    <div class="section-container">
      <h2>ද්විපද ප‍්‍රමේයය</h2>
    </div>
  </section>
  <section id="quadratic-equationss">
    <div class="section-container">
      <h2>ශ්‍රේණි සමාකලනය</h2>
    </div>
  </section>
  <section id="quadratic-equationss">
    <div class="section-container">
      <h2>සංකරණ හා සංයෝජන</h2>
    </div>
  </section>
  <section id="quadratic-equationss">
    <div class="section-container">
      <h2>සංකීර්ණ සංඛ්‍යා</h2>
    </div>
  </section>
  <section id="quadratic-equationss">
    <div class="section-container">
      <h2>න්‍යාස හා නිශ්චායක</h2>
    </div>
  </section>
  <?php include("../includes/footer.php"); ?>
</body>

</html>