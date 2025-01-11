<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("../includes/head_part.php"); ?>
  <link href="/stylesheets/indexes.css?v=8" rel="stylesheet" />

  <title>Physics Short Notes | THYSICS.ORG</title>
</head>

<body>
  <?php include '../includes/navigation.php'; ?>
  <section id="section-hero">
    <h1>Physics</h1>
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
      <h3>මිනුම</h3>
      <ul class="lesson-listing">
        <li><a href="">ඒකක හා මාන</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">මිනුම් උපකරණ</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>යාන්ත්‍ර විද්‍යාව</h3>
      <ul class="lesson-listing">
        <li><a href="">චලිතය හා චලිත ප්‍රස්තාර</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">බල සමතුලිතතාව</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ගුරුත්ව කේන්ද්‍රය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">නිවුටන් නියම හා ගම්‍යතාව</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ඝර්ෂණය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">කාර්යය හා ශක්තිය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">භ්‍රමණ චලිතය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">වෘත්ත චලිතය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ද්‍රවස්ථිති විද්‍යාව</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ද්‍රව ගති විද්‍යාව</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>දෝලන හා තරංග</h3>
      <ul class="lesson-listing">
        <li><a href="">සරල අනුවර්තී චලිතය</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">තරංග ගුණ</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">තීරයක් තරංග</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">නිවුටන් නියම හා ගම්‍යතාව</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ධ්වනි ප්‍රවේගය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">අන්වායාම තරංග</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ඩොප්ලර් ආචරණය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ධ්වනි ත්‍රීව්‍රතාව</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">වර්තනය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ප්‍රිස්ම</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">කාච</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">මිනිස් ඇස</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ප්‍රකාශ උපකරණ</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>තාප භෞතිකය</h3>
      <ul class="lesson-listing">
        <li><a href="">උෂ්ණත්වමිතිය</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">ඝන ප්‍රසාරණය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ද්‍රව ප්‍රසාරණය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">වායු ප්‍රසාරණය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">තාපමිතිය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">තාපගති විද්‍යාව</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">වාෂ්ප හා ආර්ද්‍රතාවය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">තාප සන්නයනය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">තාප සංවහනය</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>ගුරුත්වාකර්ෂණ ක්‍ෂේත්‍ර</h3>
      <h3>විද්‍යුත් ක්‍ෂේත්‍ර</h3>
      <ul class="lesson-listing">
        <li><a href="">විද්‍යුත් ක්‍ෂේත්‍ර ත්‍රීව්‍රතාව</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">ගවුස් ප්‍රමේය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ස්ථිති විද්‍යුත් විභවය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ධාරිතාව හා ධාරිත්‍රක</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>චුම්භක ක්‍ෂේත්‍ර</h3>
      <ul class="lesson-listing">
        <li><a href="">චුම්භක</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">විද්‍යුත් ධාරාවේ චුම්භක ඵලය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">ආරෝපණ මත බලය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">විද්‍යුත් චුම්භක ප්‍රේරණය</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>ධාරා විද්‍යුතය</h3>
      <ul class="lesson-listing">
        <li><a href="">ඔම් නියමය හා ප්‍රතිරෝධ පද්ධති</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">විද්‍යුත් ක්‍ෂමතාව හා තාපන ඵලය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">කර්චොප් නියම හා කෝෂ පද්ධති</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">වින්ස්ටන් සේතු හා මීටර් සේතු</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">සරළ දඟර මීටර</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">විභවමානය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">විද්‍යුත් චුම්භක ප්‍රේරණය</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>ඉලෙක්ට්‍රොනික විද්‍යාව</h3>
      <ul class="lesson-listing">
        <li><a href="">අර්ධ සන්නායක සන්ධි දියෝඩ</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">ට්‍රාන්සිස්ටර</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">සංගෘහිත පරිපථ</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">තාර්කික ද්වාර</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>පදාර්ථයේ යාන්ත්‍රික ගුණ</h3>
      <ul class="lesson-listing">
        <li><a href="">ප්‍රත්‍යස්ථතාව</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">පෘෂ්ඨික ආතතිය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">දුස්ස්‍රාවීතාව</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
      <h3>පදාර්ථ හා විකිරණ</h3>
      <ul class="lesson-listing">
        <li><a href="">තාප විකිරණය</a>
          <div class="note-counter">1</div>
        </li>
        <li><a href="">ප්‍රකාශ විද්‍යුත් ආචරණය</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">අංශු හා තරංග</a>
          <div class="note-counter">2</div>
        </li>
        <li><a href="">විකිරණශීලීතාව</a>
          <div class="note-counter">2</div>
        </li>
      </ul>
    </div>
  </section>
  <?php include("../includes/footer.php"); ?>
</body>

</html>