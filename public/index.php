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
              <p class="about__en about__pad">I am Itakura Maho</p>
              <p class="about__en about__pad">Born in Osaka Prefecture in November 2001.<br />
                 Graduated from the Department of Media Arts at Osaka University of Arts Junior College in March 2022.<br />
                 Currently working at a web-related company while self-studying web design, HTML/CSS, and JavaScript.</p>
              <p class="about__txt about__pad">2001年11月、大阪府生まれ。<br />
              2022年3月、大阪芸術大学短期大学部メディア芸術学科卒業。<br />
              現在はWeb関連企業に勤務しながら、Webデザイン、HTML/CSS、JavaScriptを独学で勉強中。</p>
             </div>
            <div class="about__img">
              <img src="./assets/images/top/aboutme.png" alt="moon">
            </div>
          </div>
        </section>
        <section class="practice">
          <div class="practice__wrap l-inner">
            <div class="practice__cont">
              <h2 class="practice__ttl">PRACTICE</h2>
              <p class="about__en">I like</p>
              <div class="practice__moon">
                 <img src="./assets/images/top/moon.png" alt="moon">
              </div>
            </div>
            <!-- スライダーの外枠 -->
             <div class="practice__swiper">
              <div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">🌟 Slide 1</div>
    <div class="swiper-slide">🎨 Slide 2</div>
    <div class="swiper-slide">🚀 Slide 3</div>
    <div class="swiper-slide">💡 Slide 4</div>
    <div class="swiper-slide">🎉 Slide 5</div>
  </div>
  <div class="swiper-pagination"></div>
</div>
             </div>

          </div>
        </section>
      </main>
    </div>
    <?php require_once(ROOT . '/parts/_footer.php'); ?>
  </div>
</body>

</html>