<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("../includes/head_part.php"); ?>
  <link href="/stylesheets/indexes.css?v=8" rel="stylesheet" />

  <title>ICT Short Notes | THYSICS.ORG</title>
</head>

<body>
  <?php include '../includes/navigation.php'; ?>
  <section id="section-hero">
    <h1>ICT</h1>
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
  <section id="lessons-index">
    <div class="section-container">
      <h3>තොරතුරු සන්නිවේදන තාක්ෂණයේ මූලික සංකල්ප</h3>
      <h3>පරිගණක පරිණාමය</h3>
      <h3>පරිගණකයේ දත්ත නිරූපණය</h3>
      <h3>තාර්කික ද්වාර</h3>
      <h3>මතක කළමණාකරණය</h3>
      <h3>මෙහෙයුම් පද්ධති</h3>
      <h3>ක්‍රමලේඛනය</h3>
      <h3>පරිගණක ජාලකරණය</h3>
      <h3>දත්ත සමුදාය පද්ධති</h3>
      <h3>වෙබ් අඩවි නිර්මාණකරණය</h3>
      <h3>පද්ධති සංවර්ධනය</h3>
      <h3>e-වාණිජ්‍ය</h3>
      <h3>තොරතුරු සන්නිවේදන තාක්ෂණයේ අනාගතය</h3>
    </div>
  </section>
  <?php include("../includes/footer.php"); ?>
</body>

</html>