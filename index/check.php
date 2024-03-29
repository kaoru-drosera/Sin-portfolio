<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL & ~E_NOTICE);
  require('../dbConnect.php');
  session_start();
  if(!isset($_SESSION['join'])){
    header("Location:index.php");
    exit();
  }
  if(!empty($_POST)){
    $statement=$db->prepare('INSERT INTO comments SET
    name = ?,
    mail = ?,
    message = ?,
    created = NOW()
    ');
    echo $ret=$statement->execute(array(
    $_SESSION['join']['name'],
    $_SESSION['join']['mail'],
    $_SESSION['join']['message']
    ));
    unset($_SESSION['join']);
    header("Location:Receive.php");
    exit();
  }

  function h($value){
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
  }
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
        <h2>内容確認</h2>
        <p>Confirmation of contact</p>
      </div>
      <div class="C_FormWrap JQ Q2 clearfix">
        <form action="Receive.php" class="C_Form clearfix" method="post">
          <input type="hidden" name="action" value="submit">
          <p class="post">名前：<?php echo h($_SESSION['join']['name']); ?></p>
          <p class="post">メールアドレス：<?php echo h($_SESSION['join']['mail']); ?></p>
          <p class="post">コメント：<?php echo h($_SESSION['join']['message']); ?></p>
          <label for=""><a class="retry" href="index.php">やり直す</a></label>
          <label for="subm"><input type="submit" id="subm" name="submit" value="送信"></label>
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
