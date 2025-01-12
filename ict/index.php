<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("../includes/head_part.php"); ?>
  <link href="/stylesheets/indexes.css?v=<?php echo $refreshNum; ?>" rel="stylesheet" />

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
      <ul class="lesson-listing">
        <li><a href="">දත්ත ජීවන චක්‍රය</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">දත්ත හා තොරතුරු</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">වලාකුළු පරිගණනය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">පරිගණකයේ දායකත්වය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">දත්ත සැකසුම් ජීවන චක්‍රය තවදුරටත්</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">තොරතුරු සන්නිවේදන තාක්ෂණය හා සමාජය</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>පරිගණක පරිණාමය</h3>
      <ul class="lesson-listing">
        <li><a href="">පරිගණක ඉතිහාසය</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">පරිගණක පරම්පරා</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">පරිගණක වර්ගීකරණය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">පරිගණක දෘඪාංග</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">වෝන් නියුමාන් ආකෘතිය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">පරිගණක මතක</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>පරිගණකයේ දත්ත නිරූපණය</h3>
      <ul class="lesson-listing">
        <li><a href="">පරිගණකය තුළ දත්ත නිරූපණ ක්‍රම</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">ද්විමය සංඛ්‍යවල දශමස්ථාන</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">එකෙහි අනුපූරකය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">දෙකෙහි අනුපූරකය</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>තාර්කික ද්වාර හා බූලීය වීජ ගණිතය</h3>
      <ul class="lesson-listing">
        <li><a href="">තාර්කික ද්වාර</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">බූලීය වීජ ගණිතයේ නීති</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">කානෝ සිතියම්</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">සම්මත තාර්කික ප්‍රකාශන</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">අර්ධ ආකලකය හා පූර්ණ ආකලකය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ප්‍රතිපෝෂණ ලූපය හා පිළිපොල</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>මෙහෙයුම් පද්ධති</h3>
      <ul class="lesson-listing">
        <li><a href="">මෙහෙයුම් පද්ධතියේ කාර්යයන් හා වර්ගීකරණය</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">ගොනු කළමණාකරණය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ක්‍රියායන කළමණාකරණය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">මතක කළමණාකරණය</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>පරිගණක ජාලකරණය</h3>
      <h3>පද්ධති සංවර්ධනය</h3>
      <h3>දත්ත සමුදාය පද්ධති</h3>
      <h3>ක්‍රමලේඛනය</h3>
      <h3>වෙබ් අඩවි නිර්මාණකරණය</h3>
      <h3>සාර්ව ද්‍රව්‍ය අන්තර්ජාලය</h3>
      <h3>e-වාණිජ්‍ය</h3>
      <h3>තොරතුරු සන්නිවේදන තාක්ෂණයේ අනාගතය</h3>
    </div>
  </section>
  <?php include("../includes/footer.php"); ?>
</body>

</html>