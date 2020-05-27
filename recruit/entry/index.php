<?php
  error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  require_once(dirname(__FILE__) . '/pg/function.php');
  if($_SERVER['REQUEST_METHOD'] != "POST"){
    setToken();
  }
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>エントリーフォーム｜吉祥寺の完全個室型ヘアサロンalotta【アロッタ】</title>
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <meta name="description" content="吉祥寺のヘアサロンalotta【アロッタ】の求人募集に応募される方は、専用のエントリーフォームをご利用ください。求人のご応募の他、ご質問などもお気軽にお問い合わせいただけます。">
    <meta name="keywords" content="吉祥寺 ヘアサロン 募集,アロッタ 吉祥寺,吉祥寺 美容師 募集">
    <meta property="og:url" content="https://www.alotta-hair.com/enrty/">
    <meta property="og:site_name" content="alotta【アロッタ】求人サイト｜吉祥寺の完全個室型ヘアサロンとショップ">
    <meta property="og:title" content="エントリーフォーム｜吉祥寺の完全個室型ヘアサロンalotta【アロッタ】">
    <meta property="og:description" content="吉祥寺のヘアサロンalotta【アロッタ】の求人募集に応募される方は、専用のエントリーフォームをご利用ください。求人のご応募の他、ご質問などもお気軽にお問い合わせいただけます。">
    <meta property="og:image" content="https://www.alotta-hair.com/recruit/assets/images/ogp.jpg">
    <meta content="website" property="og:type">
    <meta content="ja_JP" property="og:locale">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="エントリーフォーム｜吉祥寺の完全個室型ヘアサロンalotta【アロッタ】">
    <meta name="twitter:description" content="吉祥寺のヘアサロンalotta【アロッタ】の求人募集に応募される方は、専用のエントリーフォームをご利用ください。求人のご応募の他、ご質問などもお気軽にお問い合わせいただけます。">
    <meta name="twitter:image" content="https://www.alotta-hair.com/recruit/assets/images/ogp.jpg">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/anime.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="../assets/js/scripts.js"></script>
    <script type="text/javascript" src="../assets/js/desvg.js"></script>
    <script type="text/javascript" src="../assets/js/slick.min.js"></script>
    <script src="//ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script type="text/javascript" src="./js/form.js"></script>
    <script type="text/javascript" src="../assets/js/anime/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="../assets/js/anime/anime.js"></script>
    <script>
      window.addEventListener('load', function(){
      	deSVG('.svg', true);
      });

    </script>
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PGPPGN5');
    </script>
    <!-- End Google Tag Manager-->
  </head>
  <body id="form_page">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGPPGN5" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript)-->
    <div id="wrap">
      <header id="header">
        <div class="header_row">
          <h1 class="logo"><a href="../"><img src="../assets/images/logo.png" srcset="../assets/images/logo.png 1x,../assets/images/logo@2x.png 2x" alt="個室型ヘアサロンとショップ アロッタ - alotta -"></a></h1>
          <div class="navigation">
            <div class="inner">
              <nav>
                <ul class="gnav">
                  <li><a href="../works.html"><span class="jp">alottaの働き方</span><span class="en">WORK STYLE</span></a></li>
                  <li><a href="../recruit.html"><span class="jp">募集要項</span><span class="en">RECRUIT</span></a></li>
                  <li><a href="../voice/"><span class="jp">スタッフの声</span><span class="en">STAFF VOICE</span></a></li>
                  <li><a href="../faq.html"><span class="jp">よくあるご質問</span><span class="en">FAQ</span></a></li>
                </ul>
                <div class="spBtn sp"><a href="/"><span class="jp">お客様向けサイト</span><span class="en">SALON &amp; SHOP</span></a></div>
              </nav>
            </div>
          </div>
          <div class="link_salon pc"><a href="/"><span class="jp">お客様向けサイト</span><span class="en">SALON &amp; SHOP</span></a></div>
          <div class="link_entry"><a href="../entry/"><span class="jp">エントリー</span><span class="en">ENTRY</span></a></div>
          <div id="nav_btn">
            <button type="button"><span></span><span></span><span></span></button>
          </div>
        </div>
      </header>
      <main id="main">
        <section id="contact_form">
          <div class="inner">
            <div class="formHead">
              <h1 class="title">ENTRY FORM</h1>
              <div class="headText">
                <p>ご入力いただいた内容にお間違いがなければ、「送信する」ボタンを押してください。</p>
              </div>
            </div>
            <div class="formContent">
              <form method="post" action="">
                <dl>
                  <dt><span class="requre">必須</span>
                    <p>希望職種</p>
                  </dt>
                  <dd>
                    <div class="radioGroup">
                      <div class="horizontal-item">
                        <label>
                          <input class="fm hope_contact" type="radio" name="hope_contact" value="スタイリスト"><span class="radio-field-text">スタイリスト</span>
                        </label>
                      </div>
                      <div class="horizontal-item">
                        <label>
                          <input class="fm hope_contact" type="radio" name="hope_contact" value="スタイリスト兼アシスタント（パート）"><span class="radio-field-text">スタイリスト兼 <br>アシスタント（パート）</span>
                        </label>
                      </div>
                    </div>
                  </dd>
                </dl>
                <dl>
                  <dt><span class="requre">必須</span>
                    <p>お名前</p>
                  </dt>
                  <dd>
                    <div class="col col01">
                      <div class="input">
                        <input class="fm name1" type="text" name="name1" size="60" value="" placeholder="例：山田">
                      </div>
                      <div class="input">
                        <input class="fm name2" type="text" name="name2" size="60" value="" placeholder="例：花子">
                      </div>
                    </div>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    <p>ふりがな</p>
                  </dt>
                  <dd>
                    <div class="col col02">
                      <div class="input">
                        <input class="fm kana1" type="text" name="kana1" size="60" value="" placeholder="例：やまだ">
                      </div>
                      <div class="input">
                        <input class="fm kana2" type="text" name="kana2" size="60" value="" placeholder="例：はなこ">
                      </div>
                    </div>
                  </dd>
                </dl>
                <dl>
                  <dt><span class="requre">必須</span>
                    <p>年齢</p>
                  </dt>
                  <dd>
                    <div class="valueWrap vl02">
                      <div class="input">
                        <input class="fm years" type="text" name="years" size="60" value="" placeholder="25">
                      </div>
                      <p class="text">歳</p>
                    </div>
                  </dd>
                </dl>
                <dl>
                  <dt><span class="requre">必須</span>
                    <p>美容師歴</p>
                  </dt>
                  <dd>
                    <div class="valueWrap vl01">
                      <div class="input">
                        <input class="fm history" type="text" name="history" size="60" value="" placeholder="5">
                      </div>
                      <p class="text">年</p>
                    </div>
                  </dd>
                </dl>
                <dl>
                  <dt><span class="requre">必須</span>
                    <p>メールアドレス</p>
                  </dt>
                  <dd>
                    <input class="fm mail" type="text" name="mail" size="60" value="" placeholder="例：info@alotta-hair.com">
                  </dd>
                </dl>
                <dl>
                  <dt><span class="requre">必須</span>
                    <p>メールアドレス(確認)</p>
                  </dt>
                  <dd>
                    <input class="fm remail" type="text" name="remail" size="60" value="" placeholder="例：info@alotta-hair.com">
                  </dd>
                </dl>
                <dl>
                  <dt><span class="requre">必須</span>
                    <p>電話番号（携帯可）</p>
                  </dt>
                  <dd>
                    <input class="fm phone" type="text" name="phone" size="60" value="" placeholder="例：090-1234-5678">
                  </dd>
                </dl>
                <dl>
                  <dt>
                    <p>郵便番号</p>
                  </dt>
                  <dd>
                    <div class="addressWrap">
                      <div class="input">
                        <input class="fm number" type="text" name="number" size="60" value="" placeholder="例：184-0004">
                      </div>
                      <div class="btnaddress">住所検索</div>
                    </div>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    <p>住所</p>
                  </dt>
                  <dd>
                    <div class="row">
                      <div class="input">
                        <input class="fm address1" type="text" name="address1" size="60" value="" placeholder="例：東京都武蔵野市吉祥寺本町2-17-7">
                      </div>
                      <div class="input">
                        <input class="fm address2" type="text" name="address2" size="60" value="" placeholder="">
                      </div>
                    </div>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    <p> 連絡希望日時</p>
                  </dt>
                  <dd>
                    <p class="note top">電話での連絡をご希望の方は希望日時をご記入ください。</p>
                    <div class="dateWrap">
                      <div class="date">
                        <p class="text">第1希望</p>
                        <div class="input">
                          <input class="fm date" type="text" name="date1" size="60" value="" placeholder="例：1月1日 午後1時以降">
                        </div>
                      </div>
                      <div class="date">
                        <p class="text">第2希望</p>
                        <div class="input">
                          <input class="fm date" type="text" name="date2" size="60" value="" placeholder="例：1月1日 午後1時以降">
                        </div>
                      </div>
                      <div class="date">
                        <p class="text">第3希望</p>
                        <div class="input">
                          <input class="fm date" type="text" name="date3" size="60" value="" placeholder="例：1月1日 午後1時以降">
                        </div>
                      </div>
                    </div>
                  </dd>
                </dl>
                <dl>
                  <dt class="row">
                    <p>備考</p>
                    <p class="note">※パートご希望の方は勤務可能な<br class="pc">日数や曜日をご記入ください。<br>（例：火〜土曜日の内で週4日）</p>
                  </dt>
                  <dd>
                    <textarea class="fm textarea" name="textarea" cols="50" rows="5" placeholder="例：ご質問内容を入力してください。"></textarea>
                  </dd>
                </dl>
                <div class="btnArea">
                  <input type="hidden" name="token" value="<?PHP echo $_SESSION['token']; ?>">
                  <button class="btnStyle02 btnBack gray back" type="submit" name="submitConfirm" value=""><span><span>入力画面に戻る</span></span></button>
                  <button class="btnStyle02 btnConfirm" type="submit" name="submitConfirm" value=""><span><span>内容を確認する</span></span></button>
                  <button class="btnStyle02 btnSend" type="submit" name="submitConfirm" value=""><span><span>上記内容で送信する</span></span></button>
                </div>
              </form>
            </div>
          </div>
        </section>
      </main>
      <footer id="footer">
        <div class="inner">
          <p class="ftlogo"><a href="../"><img src="../assets/images/logo_f_w.png" srcset="../assets/images/logo_f_w.png 1x,../assets/images/logo_f_w@2x.png 2x" alt="個室型ヘアサロンとショップ アロッタ - alotta -"></a></p>
          <ul class="snsLinks">
            <li><a href="https://twitter.com/alotta_hair" target="_blank"><img class="svg" src="../assets/images/icon-03.svg"></a></li>
            <li><a href="https://www.facebook.com/HAIR-SALON-alotta-167313416984433/" target="_blank"><img class="svg" src="../assets/images/icon-01.svg"></a></li>
            <li><a href="https://www.instagram.com/alotta_hair/" target="_blank"><img class="svg" src="../assets/images/icon-02.svg"></a></li>
            <li><a href="http://line.naver.jp/ti/p/d4uUfsc6Pf" target="_blank"><img class="svg" src="../assets/images/icon-04.svg"></a></li>
          </ul>
          <div class="flex">
            <div class="ft_salon">
              <p class="ttl"><span class="en">SALON</span><span class="jp">サロン</span></p>
              <p class="tel"><a class="phone" href="tel:0422275321"><span class="icon"><img class="svg" src="../assets/images/icon-phone.svg"></span><span>0422-27-5321</span></a></p>
              <div class="info">
                <p class="sub">受付時間</p>
                <div class="flex">
                  <div class="box">
                    <p class="bg"><span>平日・土曜日</span></p>
                    <table>
                      <tr>
                        <th>カット</th>
                        <td>10:00〜19:00</td>
                      </tr>
                      <tr>
                        <th>＋パーマorカラー </th>
                        <td>10:00〜18:00</td>
                      </tr>
                      <tr>
                        <th>＋カラー＋パーマ</th>
                        <td>10:00〜17:00</td>
                      </tr>
                    </table>
                  </div>
                  <div class="box">
                    <p class="bg"><span>日曜日・祝日</span></p>
                    <table>
                      <tr>
                        <th>カット</th>
                        <td>10:00〜18:00</td>
                      </tr>
                      <tr>
                        <th>＋パーマorカラー </th>
                        <td>10:00〜17:00</td>
                      </tr>
                      <tr>
                        <th>＋カラー＋パーマ</th>
                        <td>10:00〜16:00</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <p>月曜日定休（当社指定日を除く）</p>
            </div>
            <div class="ft_shop">
              <p class="ttl"><span class="en">SHOP</span><span class="jp">サロン専売品販売ショップ</span></p>
              <p class="tel"><a class="phone" href="tel:0422275091"><span class="icon"><img class="svg" src="../assets/images/icon-phone.svg"></span><span>0422-27-5091</span></a></p>
              <div class="info">
                <p>営業時間 11:00～19:30</p>
              </div>
              <p>月曜日定休（当社指定日を除く）</p>
              <div class="ftLine"><a href="http://line.naver.jp/ti/p/d4uUfsc6Pf" target="_blank"><img src="../assets/images/common/ftLine.png" alt="LINEに会員登録するとショップでのお買い物が５％ＯＦＦに！"></a></div>
            </div>
          </div>
          <ul class="ftLinks">
            <li><a href="/contact/">お問い合わせ</a></li>
            <li><a href="/privacy.html">個人情報保護方針</a></li>
            <li><a href="/sitemap.html">サイトマップ</a></li>
            <li><a href="/company.html">運営会社</a></li>
            <li><a href="/faq.html">よくあるご質問</a></li>
          </ul>
          <p class="copy">Copyright&amp;copy alotta-hair.com　All Rights Reserved.</p>
        </div>
      </footer>
    </div>
  </body>
</html>
