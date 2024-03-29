<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  require('../dbConnect.php');
  if(!$_SESSION){
    header('Location: index.php');
  }
  $add_header = "from:info@example.com"."<br />";
  $add_header = "Reply-to:";
  $add_header = "X-mailer: PHP".phpversion();
  // 自動返信メール本文
  $messageuser = sprintf('%s',$_SESSION['name']);
  $messageuser = "様<br /><br />";
  $messageuser = "この度はお問い合わせ頂き誠ににありがとうございます。";
  $messageuser = "下記の内容でお問い合わせを承りました。";
  $messageuser = "===============================";
  $messageuser = sprintf('お名前:%s</br>',$_SESSION['name']);
  $messageuser = sprintf('お問い合わせ内容:%s</br>',$_SESSION['message']);
  $messageuser = sprintf('</br></br>',$_SESSION['message']);

  // 管理者用確認メール本文
  $messageadmin = "コンタクトフォームより下記の内容でお問い合わせがありました。";
  $messageadmin = "===============================";
  $messageadmin = sprintf('お名前:%s</br>',$_SESSION['name']);
  $messageadmin = sprintf('お問い合わせ内容:%s</br>',$_SESSION['message']);
  $messageadmin = sprintf('</br></br>',$_SESSION['message']);

  // メール設定
  mb_language('ja');
  mb_internal_encoding("UTF-8");

  // 自動返信メール送信設定
  mb_send_mail($_SESSION['email'],"【コンタクトフォーム】お問い合わせありがとうございます",$messageuser,$add_header);

  // 管理者確認用メール送信設定
  mb_send_mail("info@example.com","【コンタクトフォーム】お問い合わせありがとうございます",$messageuser,$add_header);
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../styles/check.css">
  <link rel="stylesheet" type="text/css" href="../styles/check@media.css">
  <link rel="stylesheet" type="text/css" href="../styles/reset.css">
  <link rel="stylesheet" type="text/css" href="../styles/swiper.css">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="../jQ/jquery-3.3.1.min.js"></script>
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
  <section id="form" class="contactForm clearfix">
    <div class="container">
      <div class="h2wrap JQ Q2">
        <h2>送信完了</h2>
        <p>contact compleated</p>
      </div>
      <div class="C_FormWrap JQ Q2 clearfix">
        <form action="" class="C_Form C_Comp clearfix">
          <p>お問い合わせありがとうございました。</p>
          <a href="index.php" class="quit">戻る</a>
        </form>
      </div>
    </div>
  </section>

  <!-- div.copyright>div.container>p.copyright -->
  <section class="copyright clearfix">
    <!-- copyrightがスクロールできないため
    表示されないままになってしまった。 -->
    <div class="container">
      <p class="copyright">images: freepik</p>
      <p class="copyright">&copy;kaoru-hanada 2019</p>
    </div>
  </section>

<script src="../jQ/swiper.js"></script>
<script src="../jQ/kaoruPf+Q.js"></script>
</body>
</html>
