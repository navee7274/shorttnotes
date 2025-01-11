<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("../includes/head_part.php"); ?>
  <link href="/stylesheets/indexes.css?v=8" rel="stylesheet" />

  <title>Maths Short Notes | THYSICS.ORG</title>
</head>

<body>
  <?php include '../includes/navigation.php'; ?>
  <section id="section-hero">
    <h1>Maths</h1>
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
      <h2 class="sinhala">ශුද්ධ ගණිතය</h2>
      <a href="/maths/boolean-algebra.php">
        <h3>වීජ ගණිතය</h3>
      </a>
      <ul class="lesson-listing">
        <li><a href="">සංඛ්‍යා</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">අසමානතා</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">වර්ගජ සමීකරණ හා වර්ගජ ප‍්‍රකාශන</a>
          <div class="note-counter">3</div>
        </li>
        <li><a href="">බහුපද ප‍්‍රමේයය හා සාධක ප‍්‍රමේයය</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">පරිමේය ශ‍්‍රිත හා භින්න භාග</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ද්විපද ප‍්‍රමේයය</a>
          <div class="note-counter">3</div>
        </li>
        <li><a href="">ශ්‍රේණි සමාකලනය</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">ගතික</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">සංකරණ හා සංයෝජන</a>
          <div class="note-counter">3</div>
        </li>
        <li><a href="">සංකීර්ණ සංඛ්‍යා</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">න්‍යාස හා නිශ්චායක</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <a href="/maths/triginometry.php">
        <h3>ත්‍රිකෝණමිතිය</h3>
      </a>
      <ul class="lesson-listing">
        <li><a href="">මූලික ත්‍රිකෝණමිතිය</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">ත්‍රිකෝණමිතික සර්වසාම්‍යය හා ශ්‍රිතවල දළ ප‍්‍රස්තාර</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ත්‍රිකෝණයක දළ ලක්ෂණ</a>
          <div class="note-counter">3</div>
        </li>
        <li><a href="">ත්‍රිකෝණමිතික සමීකරණවල සාධාරණ විසදුම්</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">ප‍්‍රතිලෝම ති‍්‍රකෝණමිතික සමීකරණ විසඳීම හා බව පෙන්වීම</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <a href="/maths/geometry.php">
        <h3>ඛණ්ඩාංක ජ්‍යාමිතිය</h3>
      </a>
      <ul class="lesson-listing">
        <li><a href="">මූලික ඛණ්ඩාංක ජ්‍යාමිතය</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">සරල රේඛාව</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">අවකලනය</a>
          <div class="note-counter">3</div>
        </li>
        <li><a href="">අවකලනය භාවිතය</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">අනුකලනය</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h2 class="sinhala">ව්‍යවහාරික ගණිතය</h2>
      <h3>ගති විද්‍යාව</h3>
      <ul class="lesson-listing">
        <li><a href="">සරල රේඛීය චලිතය</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">සාපේක්‍ෂ චලිතය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ප‍්‍රක්‍ෂිප්තයන්හි චලිතය</a>
          <div class="note-counter">3</div>
        </li>
        <li><a href="">චලිතය පිළිබඳ නිවුටන් නියම</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">ආවේගය ගම්‍යතාව හා ප්‍රථ්‍යස්ථ ගැටුම්</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">කාර්යය හා ක්‍ෂමතාව</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">වෘත්ත චලිතය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">සරල අනුවර්තී චලිතය</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>දෙෙශික</h3>
      <h3>සම්භාවිතාව</h3>
      <h3>සංඛ්‍යානය</h3>
      <h3>ස්ථිති විද්‍යාව</h3>
      <ul class="lesson-listing">
        <li><a href="">ඒකතල බල පද්ධති</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">සුමට දෘඪ වස්තුවල සමතුලිතතාව</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">රළු දෘඪ වස්තුවල සමතුලිතතාව</a>
          <div class="note-counter">3</div>
        </li>
        <li><a href="">ලුහු දඬු රාමු සැකිලි</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">බර දඬු රාමු සැකිලි</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ගුරුත්ව කේන්ද්‍රය</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
    </div>
  </section>
  <?php include("../includes/footer.php"); ?>
</body>

</html>