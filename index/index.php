<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  require('../dbConnect.php');
  function h($value){
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
  }
  if(!empty($_POST)){
    if($_POST['name']==''){
      $error['name']='blank';
    }
    if($_POST['mail']==''){
      $error['mail']='blank';
    }
    if($_POST['message']==''){
      $error['message']='blank';
    }
    if(empty($error)){
    $_SESSION['join']=$_POST;
    header("Location: check.php");
    exit();
    }
  }
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../styles/style.css">
  <link rel="stylesheet" type="text/css" href="../styles/style@media.css">
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

  <div class="fixedMenu">
    <div class="container">
      <!-- div.fmenuCont>(div.fmenuLeft>a>h1+p)+(div.fmenuRight>ul.Flinklist>li*5>a.Flink) -->
      <div class="fmenuCont clearfix">
        <div class="fmenuLeft">
          <a href="#">
            <h1>花田 香</h1>
            <p>WEBコーダー＆WEBライター</p>
          </a>
        </div>
        <div class="fmenuRight">
          <ul class="Flinklist pc">
            <li><a href="#greet" class="Flink">自己紹介</a></li>
            <li><a href="#skills" class="Flink">スキル</a></li>
            <li><a href="#portfolio" class="Flink">ポートフォリオ</a></li>
            <li><a href="#pricesEts" class="Flink">価格・対応形態</a></li>
            <li><a href="#form" class="Flink">お問い合わせ</a></li>
          </ul>

          <div class="fRburg">
            <ul class="fRburgO">
              <!-- ↑ここにjQで「fRburgO」というクラスを
              クリックがあるごとに
              出したりしまったりさせること。 -->
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          </div>


        <!-- ↑リストを左方向に並べられない！
        「リスト自体」はpositionで出来た。
        ただし、縦に並べようとすると
        どうしてもfloatが必要になる。
        leftだとリストが左に、
        rightだとリストの順番が逆になってしまう。 -->
        <!-- 結局、flexを頼ってしまった。
        flexを使ったほうが綺麗にできる。 -->
      </div>
    </div>
    <ul class="Fburglist">
      <li><a href="#greet" class="Fburg">自己紹介</a></li>
      <li><a href="#skills" class="Fburg">スキル</a></li>
      <li><a href="#portfolio" class="Fburg">ポートフォリオ</a></li>
      <li><a href="#pricesEts" class="Fburg">価格・対応形態</a></li>
      <li><a href="#form" class="Fburg">お問い合わせ</a></li>
    </ul>

  </div>

  <section class="heroTop">
    <div class="container">
      <div class="HTcont">
        <div class="topTtlwrap QD Q2">
          <h1 class="topttl">花田 香</h1>
          <p class="topSubTtl">WEBコーダー<br class="brsp">＆WEBライター</p>
        </div>
        <div class="topBtnWrap">
          <!-- ↑課題:wrap出来ていないtopBtnWrap。
          小タグの高さを取得できず、親タグの高さが0になっている状態。
          ただし、コンテンツ全体の親タグでは小タグ全体の高さを
          認識できているので、動作上は問題はない。
        小タグが浮いているものと考えたいが…。-->
        <!-- ↑解決！
            clearfixを親タグにかけていなかった！
      -->
         <!-- ↑clearfixは、floatを設定した
        タグにかけてしまいがちだが誤りだ。
        clearfixは設定した要素の
        親タグにかけるのだ！  -->

          <div class="btnwrap clearfix QD Q2">
            <a href="#greet" class="toGreet">自己紹介</a>
            <a href="#form" class="toContactForm">相談する</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- div.greet>div.container>(div.h2wrap>(h2+p))+div.greetWrap>((div.faceIcon)+(div.greetContents>dl.greetDl*3>dt.greetDt+dd.greetDd)) -->
  <section id="greet" class="greet">
    <div class="container">
      <div class="h2wrap JQ Q2">
        <h2>自己紹介</h2>
        <p>How about me</p>
      </div>
      <div class="greetWrap clearfix">
        <div class="faceIcon JQ Q2">
          <div class="FiconWrap">
            <div class="FiconBorder">
              <i class="fas fa-male"></i>
            </div>
          </div>
        </div>
        <div class="greetContents">
          <dl class="greetDl clearfix JQ Q2">
            <dt class="greetDt">自己紹介</dt>
            <dd class="greetDd">
              <p>「花田香（はなだ　かおる）」と申します。現在「就労移行支援事業所TIO神保町」で、WEBエンジニア就職に向けてHTML/CSSを始めとしたプログラミングの勉強をしております。</p>
              <p>どうぞよろしくお願いいたします。</p>
            </dd>
          </dl>
          <dl class="greetDl clearfix JQ Q2">
            <dt class="greetDt">学歴</dt>
            <dd class="greetDd">
              <p>・共栄学園高校特進コース卒業</p>
              <p>・日本大学経済学部金融公共経済学科卒業</p>
              <p>・就労移行支援事業所「TIO神保町」入所</p>
            </dd>
          </dl>
          <dl class="greetDl clearfix JQ Q2">
            <dt class="greetDt">資格</dt>
            <dd class="greetDd">
              <p>Illustrator® クリエイター能力認定試験</p>
              <p>実用英語技能検定 4級</p>
            </dd>
          </dl>
          <dl class="greetDl clearfix JQ Q2">
            <dt class="greetDt">使用ツール</dt>
            <dd class="greetDd">
              <p>テキストエディタ</p>
              <p>・atom</p>
              <p>デザインツール</p>
              <p>・adobe photoshop・adobe Illustrator</p>
              <p>・adobe XD</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <!-- div.skills>div.container>(div.skillsBg(div.h2wrap>h2+p)>div.skillCont>(div.skillWrap*3>(h3.skillH3+(div.skillicon>div.iconBorder>div.icon)+div.skillDocs))) -->
  <section id="skills" class="skills">
    <div class="container">
      <div class="skillsBg JQ Q2">
        <div class="h2wrap JQ Q2">
          <h2>スキル</h2>
          <p>skills</p>
        </div>
        <div class="skillCont clearfix">
          <div class="skillWrap JQ Q2">
            <h3 class="skillH3">WEBコーディング</h3>
            <div class="skillicon">
              <div class="SiconBorder">
                <div class="Sicon">
                  <i class="fas fa-laptop-code"></i>
                </div>
              </div>
            </div>
            <div class="skillDocs">
              <p>私が主に請け負う業務はhtml/css/jqueryを用いたランディングページのコーディング案件です。</p>
              <p>提出したデザインデータを基に、インターネットで表示できるホームページに仕上げます。</p>
            </div>
          </div>
          <div class="skillWrap JQ Q2">
            <!-- skillwrapは、出現時にディレイがかかるようにしたい！ -->
            <h3 class="skillH3">レスポンシブ<br class="brpc">デザイン</h3>
            <div class="skillicon">
              <div class="SiconBorder">
                <div class="Sicon">
                  <i class="fas fa-mobile-alt"></i>
                </div>
              </div>
            </div>
            <div class="skillDocs">
              <p>今やほとんどのサイトがスマートフォンで閲覧される時代になりました。こうした時代には「レスポンシブデザイン」が必須です。</p>
              <p>スマートフォンでもきれいなデザインに仕上がるサイトを作成いたします。</p>
            </div>
          </div>
          <div class="skillWrap JQ Q2">
            <h3 class="skillH3">ライティング業務</h3>
            <div class="skillicon">
              <div class="SiconBorder">
                <div class="Sicon">
                  <i class="fas fa-pencil-alt"></i>
                </div>
              </div>
            </div>
            <div class="skillDocs">
              <p>ライティング業務も一部受け付けています。</p>
              <p>お気軽にご相談ください。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- div.portfolio>div.container>(div.h2wrap>(h2+p))+div.slider-nextAndprev+div.pfCont -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="h2wrap JQ Q2">
        <h2>ポートフォリオ</h2>
        <p>portfolio</p>
      </div>
      <div class="pfCont JQ Q2">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide clearfix">
              <!-- ↑「swiperのボタンをスライドから外に出したい！」
              というときには、swiper-slideの中にもう一つdivで囲いを作り、
              widthを100%以下にしてmargin:auto;で中央寄せすること。
              「swiper-container>swiper-wrapper>swiper-slide」
              この3つの中に囲いは作らない事。作動しなくなるぞ。 -->
              <div class="pfslide_inner clearfix">
                <h3 class="phh3">このサイトについて</h3>
                <div class="pfLeft clearfix">
                    <img src="../images/portfolio.png" alt="kuyou">
                </div>
                <div class="pfRight">
                  <!-- h3.phh3+dl.pfdl*4>(dt+dd) -->
                  <dl class="pfdl">
                    <dt>実装機能</dt>
                    <dd>fixedメニュー(HTML/CSS)</dd>
                    <dd>スクロールアップで出現するfixedメニュー(jQuery)</dd>
                    <dd>スクロールダウンで消滅するfixedメニュー(jQuery)</dd>
                    <dd>ハンバーガーメニュー(jQuery)</dd>
                    <dd>スクロールでのフェードイン(jQuery)</dd>
                    <dd>プラグイン「swiper」を用いたスライダー(jQuery)</dd>
                  </dl>
                  <dl class="pfdl">
                    <dt>制作期間</dt>
                    <dd>HTML/CSSコーディング(レスポンシブ含む): 3日(18h)</dd>
                    <dd>jQueryコーディング: 3日(18h)</dd>
                    <dd>内容の手直し: 1日(4h)</dd>
                    <dd>計:10日(40h)</dd>
                  </dl>
                  <div class="pfLinks">
                    <a href="https://drive.google.com/open?id=1qkwbu5IW1wtYf3mHBx9CXPQfeqiU_m5M" class="pfLink toGrive"><i class="fab fa-google-drive"></i><p>スクリーンショットを見る</p></a>
                    <a href="https://github.com/kaoru-drosera/portfolioSite" class="pfLink toGithub"><i class="fab fa-github"></i><p>コードを見る</p></a>
                  </div>

                </div>
              </div>
            </div>

            <div class="swiper-slide clearfix">
              <!-- ↑「swiperのボタンをスライドから外に出したい！」
              というときには、swiper-slideの中にもう一つdivで囲いを作り、
              widthを100%以下にしてmargin:auto;で中央寄せすること。
              「swiper-container>swiper-wrapper>swiper-slide」
              この3つの中に囲いは作らない事。作動しなくなるぞ。 -->
              <div class="pfslide_inner clearfix">
                <h3 class="phh3">ランディングページ<br>「omron お悩み別歯ブラシ診断」</h3>
                <div class="pfLeft clearfix">
                    <img src="../images/omron_pc-forpf2.jpg" alt="kuyou">
                </div>
                <div class="pfRight">
                  <!-- h3.phh3+dl.pfdl*4>(dt+dd) -->
                  <dl class="pfdl">
                    <dt>実装機能</dt>
                    <dd>スクロール時の出現アニメーション(jQuery)</dd>
                    <dd>トップページボタン(jQuery)</dd>
                    <dd>スムーズスクロール(jQuery)</dd>
                  </dl>
                  <dl class="pfdl">
                    <dt>制作期間</dt>
                    <dd>PCレイアウト(HTML/CSSコーディングのみ): 4日</dd>
                    <dd>スマートフォン・タブレットレイアウト: 2日</dd>
                    <dd>jQueryアニメーション: 2日</dd>
                    <dd>jQueryトップページボタン・スムーズスクロール: 1日</dd>
                    <dd>計:9日</dd>
                  </dl>
                  <div class="pfLinks">
                    <a href="https://drive.google.com/open?id=1EJiV2Fg_PxUzy7v-EZnIj97G_6v62Hjz" class="pfLink toGrive"><i class="fab fa-google-drive"></i><p>スクリーンショットを見る</p></a>
                    <a href="https://github.com/kaoru-drosera/LPrep-1.omron-electricToothbrush" class="pfLink toGithub"><i class="fab fa-github"></i><p>コードを見る</p></a>
                  </div>

                </div>
              </div>
            </div>
            <div class="swiper-slide clearfix">
              <!-- ↑「swiperのボタンをスライドから外に出したい！」
              というときには、swiper-slideの中にもう一つdivで囲いを作り、
              widthを100%以下にしてmargin:auto;で中央寄せすること。
              「swiper-container>swiper-wrapper>swiper-slide」
              この3つの中に囲いは作らない事。作動しなくなるぞ。 -->
              <div class="pfslide_inner clearfix">
                <h3 class="phh3">ランディングページ<br>「お部屋『モチコム』賃貸サービス　MOCHICOM」</h3>
                <div class="pfLeft clearfix">
                    <img src="../images/mckmpc-forpf2.jpg" alt="kuyou">
                </div>
                <div class="pfRight">
                  <!-- h3.phh3+dl.pfdl*4>(dt+dd) -->
                  <dl class="pfdl">
                    <dt>実装機能</dt>
                    <dd>お問い合わせフォーム(HTML/CSS)</dd>
                    <dd>フォームページへのスムーズスクロール(jQuery,hover機能未完成)</dd>
                    <dd>タブによるメニュー切り替え(jQuery)</dd>
                    <dd>アコーディオンメニュー(jQuery,未完成)</dd>
                  </dl>
                  <dl class="pfdl">
                    <dt>制作期間</dt>
                    <dd>約22日</dd>
                    <dd>制作時間:5h/日</dd>
                  </dl>
                  <div class="pfLinks">
                    <a href="https://drive.google.com/open?id=169E52qWYVWiio_1LneK9fgseDH21jFZg" class="pfLink toGrive"><i class="fab fa-google-drive"></i><p>スクリーンショットを見る</p></a>
                    <a href="https://github.com/kaoru-drosera/LPrep-1.mochicom" class="pfLink toGithub"><i class="fab fa-github"></i><p>コードを見る</p></a>
                  </div>

                </div>
              </div>
            </div>
            <div class="swiper-slide clearfix">
              <!-- ↑「swiperのボタンをスライドから外に出したい！」
              というときには、swiper-slideの中にもう一つdivで囲いを作り、
              widthを100%以下にしてmargin:auto;で中央寄せすること。
              「swiper-container>swiper-wrapper>swiper-slide」
              この3つの中に囲いは作らない事。作動しなくなるぞ。 -->
              <div class="pfslide_inner clearfix">
                <h3 class="phh3">ランディングページ<br>「0円スクール」</h3>
                <div class="pfLeft clearfix">
                    <img src="../images/0yenForpf.jpg" alt="kuyou">
                </div>
                <div class="pfRight">
                  <!-- h3.phh3+dl.pfdl*4>(dt+dd) -->
                  <dl class="pfdl">
                    <dt>実装機能</dt>
                    <dd>お問い合わせフォーム(HTML/CSS)</dd>
                    <dd>ページ内リンクスムーズスクロール(jQuery,hover機能未完成)</dd>
                    <dd>ハンバーガーメニュー(jQuery)</dd>
                    <dd>プラグイン「swiper」を使用したスライダーメニュー(jQuery)</dd>
                    <dd>fixedトップページボタン(jQuery,未完成)</dd>
                  </dl>
                  <dl class="pfdl">
                    <dt>制作期間</dt>
                    <dd>約18日</dd>
                    <dd>制作時間:6h/日</dd>
                  </dl>
                  <div class="pfLinks">
                    <a href="https://drive.google.com/open?id=1J8HLUzLPL2637aANx2pUL0UTl5Oz3huy" class="pfLink toGrive"><i class="fab fa-google-drive"></i><p>スクリーンショットを見る</p></a>
                    <a href="https://github.com/kaoru-drosera/lp-rep3.0yen_school" class="pfLink toGithub"><i class="fab fa-github"></i><p>コードを見る</p></a>
                  </div>

                </div>
              </div>
            </div>
            <div class="swiper-slide clearfix">
              <!-- ↑「swiperのボタンをスライドから外に出したい！」
              というときには、swiper-slideの中にもう一つdivで囲いを作り、
              widthを100%以下にしてmargin:auto;で中央寄せすること。
              「swiper-container>swiper-wrapper>swiper-slide」
              この3つの中に囲いは作らない事。作動しなくなるぞ。 -->
              <div class="pfslide_inner clearfix">
                <h3 class="phh3">ランディングページ<br>「interview maker」</h3>
                <div class="pfLeft clearfix">
                    <img src="../images/karipc-forpf2.jpg" alt="kuyou">
                </div>
                <div class="pfRight">
                  <!-- h3.phh3+dl.pfdl*4>(dt+dd) -->
                  <dl class="pfdl">
                    <dt>実装機能</dt>
                    <dd>fixedメニュー(HTML/CSS)</dd>
                    <dd>youtubeの埋め込み(HTML/CSS)</dd>
                    <dd>スクロールアップで出現するfixedメニュー(jQuery)</dd>
                    <dd>スクロールダウンで消滅するfixedメニュー(jQuery)</dd>
                    <dd>スライドダウン式ハンバーガーメニュー(jQuery)</dd>
                    <dd>スクロールでのフェードイン(jQuery)</dd>
                    <dd>プラグイン「swiper」を用いたスライダー(jQuery)</dd>
                  </dl>
                  <dl class="pfdl">
                    <dt>制作期間</dt>
                    <dd>HTML/CSSコーディング(レスポンシブ含む): 19日</dd>
                    <dd>jQueryコーディング: 4日</dd>
                    <dd>計:33日</dd>
                  </dl>
                  <div class="pfLinks">
                    <a href="https://drive.google.com/open?id=1vE0jA0kgukJSsM3FmzZCQQqQUXUa2wxJ" class="pfLink toGrive"><i class="fab fa-google-drive"></i><p>スクリーンショットを見る</p></a>
                    <a href="https://github.com/kaoru-drosera/LP_rep4.kari" class="pfLink toGithub"><i class="fab fa-github"></i><p>コードを見る</p></a>
                  </div>

                </div>
              </div>
            </div>
            <!-- <div class="swiper-slide">
              <div class="pfLeft"></div>
              <div class="pfRight"></div>
            </div>
            <div class="swiper-slide">
              <div class="pfLeft"></div>
              <div class="pfRight"></div>
            </div>
            <div class="swiper-slide">
              <div class="pfLeft"></div>
              <div class="pfRight"></div>
            </div> -->
          </div>
          <div class="swiper-pagination"></div>
          <!-- ↑ページネーションは「サムネイル付き」にしたい！
          調べて実装したいな！ -->
          <div class="Elwrap">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>
      </div>
      <div class="pfAle JQ Q2">
        <p class="pfAlert">※紹介したランディングページは</p>
        <p class="pfAlert">すべて模写になります。</p>
      </div>
    </div>
  </section>

  <!-- div.pricesEts>div.container>(div.h2wrap>(h2+p))+(table.prices>p.tableTtl+(tr*3>th+td))+(table.timeTable>p.tableTtl+(tr>tt+td)) -->
  <section id="pricesEts" class="pricesEts">
    <div class="container">
      <div class="h2wrap JQ Q2">
        <h2>価格・対応形態</h2>
        <p>price & workstyle</p>
      </div>
      <div class="tableCont">
        <div class="tableWrap">
          <table class="prices JQ Q2 clearfix" border="1">
            <caption class="tableTtl">価格</caption>
            <tr class="clearfix">
              <th>LP（ランディングページ）制作</th>
              <td>3000円</td>
            </tr>
            <tr class="clearfix">
              <th>レスポンシブLP制作</th>
              <td>6000円</td>
            </tr>
            <tr class="clearfix">
              <th>ライティング</th>
              <td>3000円/記事（5000字）</td>
            </tr>
          </table>
          <table class="timeTable JQ Q2 clearfix" border="1">
            <caption class="tableTtl">対応形態</caption>
            <tr class="clearfix">
              <th>連絡可能時間</th>
              <td>13:00~22:00</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- div.contactForm>div.container>(div.h2wrap>(h2+p))+div.C_FormWrap>(form.C_Form>(label[for=mes]>textarea#mes[name=message])+(label[for=subm]>input#subm[name=submit type=submit value=送信])) -->
  <section id="form" class="contactForm">
    <div class="container">
      <div class="h2wrap JQ Q2">
        <h2>お問い合わせ</h2>
        <p>contact</p>
      </div>
      <div class="C_FormWrap JQ Q2">
        <form action="" class="C_Form clearfix" method="post">
          <label for="name">
            <input type="text" id="name" name="name" value="<?php echo h($_SESSION['join']['name']) ?>" placeholder="名前">
          </label>
          <?php if(isset($error['name']) && $error['name'] == 'blank'): ?>
            <p class="error" style="color: red; text-align: left; margin-top: 5px;">*名前を入力してください。</p>
          <?php endif; ?><!--  .error -->

          <label for="mail">
            <input type="text" id="mail" name="mail" value="<?php echo h($_SESSION['join']['mail']) ?>" placeholder="メールアドレス">
          </label>
          <?php if(isset($error['mail']) && $error['mail'] == 'blank'): ?>
            <p class="error" style="color: red; text-align: left; margin-top: 5px;">*メールアドレスを入力してください。</p>
          <?php endif; ?><!--  .error -->

          <label for="mes">
            <textarea name="message" id="mes" cols="30" rows="7" placeholder="コメントは現在休止中です"><?php echo h($_SESSION['join']['message']) ?></textarea>
          </label>
          <?php if(isset($error['message']) && $error['message'] == 'blank'): ?>
            <p class="error" style="color: red; text-align: left; margin-top: 5px;">*メッセージを入力してください。</p>
          <?php endif; ?><!--  .error -->

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

<script src="../jQ/swiper.js"></script>
<script src="../jQ/kaoruPf+Q.js"></script>
</body>
</html>
