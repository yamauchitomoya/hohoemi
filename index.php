<!DOCTYPE html>
<html lang=ja>
<head>
  <?php wp_get_header(); ?>
</head>

<body class="text-center">
  <?php include("nav.php"); ?>
  <!-- /header -->
  <?php include("movie.php"); ?>
  <div class="section-parallax h-100" style="background-image: url('<?php bloginfo('template_url'); ?>/images/1.jpg');">
    <h1 class="text-dark">施設外観</h1>
  </div>
  <div class="py-5 bg-light" id="about">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h3 class="text-orange">「与えられる人」から「与える人」へ。 <br>
          世の価値観をちょっとだけ変える本気の挑戦。</h3>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-6 my-5"> <img src="<?php bloginfo('template_url'); ?>/images/1.jpg" alt="" class="rounded shadowed w-50"> </div>
        <div class="col-md-6 mb-3">
          <p class="lead text-orange"></p>
          <p class="lead">ご高齢の方も小さなお子さんも <br>
            障がいのある方もそうでない方も <br>
            ○も☓も含めてまるごと受け入れていくこと <br>
            <br>
            受け入れることで喜びを与えることができる <br>
            <br>
            「過去＝与えられる人」から「現在＝与える人」へ <br>
            そしてより良い「未来＝社会」へと共に歩んでいきたい <br>
            <br>
          それが私たちの本気の挑戦です </p>
          <button type="button" class="btn btn-lg mt-5 mx-1 btn-outline-dark" data-toggle="modal" data-target="#aboutus">ほほえみについて<span class="ml-2">&gt;</span></button>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 section-parallax h-100" style="background-image: url('<?php bloginfo('template_url'); ?>/images/2.jpg');">
    <h1 class="text-dark">職員と利用者さんのふれあい写真</h1>
  </div>
  <div class="py-5 bg-light" id="message">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h3 class="text-orange">今井 隆太</h3>
          <p>社会福祉法人 ほほえみ 代表</p>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-6 my-5"> <img src="<?php bloginfo('template_url'); ?>/images/3.jpg" class="rounded shadowed w-50"> </div>
        <div class="col-md-6">
          <p class="lead">社会福祉法人ほほえみは知的障がい者専門の入所施設として <br>
            〇〇年青森県平川市に産声をあげました。 <br>
            <br>
            一般企業への就労が難しい知的障がいをお持ちの方に <br>
            入所もしくは通所をしてもらいながら <br>
            <br>
            「働く場」、「訓練の場」、「交流の場」、「生活の場」の <br>
          サービス提供を行っています。 </p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 section-parallax h-100" style="background-image: url('<?php bloginfo('template_url'); ?>/images/4.jpg');">
    <h1 class="text-dark">職員と利用者さんのふれあい写真2</h1>
  </div>
  <?php include("facility.php"); ?>
  <?php include("slider.php"); ?>
  <div class="py-5 section-parallax h-100 section-light" style="background-image: url('images/5.jpg');">
    <h1 class="text-dark">集合写真</h1>
  </div>
  <?php wp_footer(); ?>
  <?php include("modal.php"); ?>
  <?php include("js.php"); ?>

</body>
</html>