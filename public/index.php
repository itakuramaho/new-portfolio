<?php
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
require_once(ROOT . '/config.php');

$pageId = 'top';
$meta = array(
  'title'=> 'itakura_portfolio',
  'description'=> 'itakuramaho'
)
?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <?php require_once(ROOT . '/parts/_baseHead.php'); ?>
</head>

<body data-pageid="<?php echo $pageId; ?>">
  <div class="wrap wrap--<?php echo $pageId; ?>">
    <?php require_once(ROOT . '/parts/_header.php'); ?>

    <div class="contents contents--<?php echo $pageId; ?>">
      <main>
        <section class="mv">
          <div class="mv__img">
            <img src="./assets/images/top/mv.png" alt="">
              <div class="mv__wrap">
               <div class="mv__ttl-wrap">
                  <img src="./assets/images/top/ita_logo.png" alt="itakura_logo">
                  <p class="mv__ttl">Portfolio</p>
                </div>
               <p class="mv__txt">I work as a clerk at a web production company.</p>
              </div>
           </div>
        </section>
        <section class="about">
          <div class="about__wrap l-inner">
            <div class="about__txt-wrap">
              <h2 class="about__ttl">ABOUT ME</h2>
              <p class="about__en">I am Itakura Maho</p>
              <p class="about__en">Born in Osaka Prefecture in November 2001.
                 Graduated from the Department of Media Arts at Osaka University of Arts Junior College in March 2022.
                 Currently working at a web-related company while self-studying web design, HTML/CSS, and JavaScript.</p>
              <p class="about__txt">2001年11月、大阪府生まれ。2022年3月、大阪芸術大学短期大学部メディア芸術学科卒業。現在はWeb関連企業に勤務しながら、Webデザイン、HTML/CSS、JavaScriptを独学で勉強中。</p>
             </div>
            <div class="about__img">
              <img src="./assets/images/top/aboutme.png" alt="桜">
            </div>
          </div>
        </section>
      </main>
    </div>
    <?php require_once(ROOT . '/parts/_footer.php'); ?>
  </div>
</body>

</html>