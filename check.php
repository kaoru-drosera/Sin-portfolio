<?php
  int_set('display_errors',1);
  error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  require('dbconnect.php')
  if(!$_POST){
    header('Location: index.php');
  }
  $_SESSION = $_POST;


 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <link rel="stylesheet" type="text/css" href="styles/style@media.css">
  <link rel="stylesheet" type="text/css" href="styles/reset.css">
  <link rel="stylesheet" type="text/css" href="styles/swiper.css">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="jQ/jquery-3.3.1.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>花田香ポートフォリオサイト</title>
</head>
<body>

  <!--
  <p>制作開始:20190430</p>
  <p>HTML/CSSコーディング(portfolio以外):2019/05/01(2日/推定16h)</p>
  <p>HTML/CSSコーディング(portfolio。内容、仕上げがまだ。):2019/05/03(1日/推定2h)</p>
  <p>jQueryコーディング:2019/05/10(3日/推定18h)</p>
  <p>内容の手直し:2019/05/10(1日/推定4h)</p>



 -->

  <!--
  アイコン集
  自己紹介
  <i class="fas fa-male"></i>

  webコーディング
  <i class="fas fa-laptop-code"></i>

  レスポンシブ
  <i class="fas fa-mobile-alt"></i>

  ライティング
  <i class="fas fa-pencil-alt"></i>
 -->


  <!-- div.contactForm>div.container>(div.h2wrap>(h2+p))+div.C_FormWrap>(form.C_Form>(label[for=mes]>textarea#mes[name=message])+(label[for=subm]>input#subm[name=submit type=submit value=送信])) -->
  <section id="form" class="contactForm">
    <div class="container">
      <div class="h2wrap JQ Q2">
        <h2>お問い合わせ</h2>
        <p>contact</p>
      </div>
      <div class="C_FormWrap JQ Q2">
        <form action="" class="C_Form clearfix">
          <label for="name"><input type="text" id="name" name="name" placeholder="名前"></label>
          <label for="mail"><input type="text" id="mail" name="mail" placeholder="メールアドレス"></label>
          <label for="mes"><textarea name="message" id="mes" cols="30" rows="7" placeholder="コメントは現在休止中です"></textarea></label>
          <label for="retry"><button type="reset" id="retry" name="retry">やり直す</button></label>
          <label for="subm"><input type="submit" id="subm" name="submit" value="送信"></label>
        </form>
      </div>
    </div>
  </section>

  <!-- div.copyright>div.container>p.copyright -->
  <section class="copyright">
    <!-- copyrightがスクロールできないため
    表示されないままになってしまった。 -->
    <div class="container">
      <p class="copyright">images: freepik</p>
      <p class="copyright">&copy;kaoru-hanada 2019</p>
    </div>
  </section>

<script src="jQ/swiper.js"></script>
<script src="jQ/kaoruPf+Q.js"></script>
</body>
</html>
