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
    <title>お問い合わせフォーム｜吉祥寺のヘアサロンalotta【アロッタ】</title>
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <meta content="吉祥寺のヘアサロンalotta【アロッタ】へのご相談、ご質問等がございましたら、こちらのお問い合わせ専用フォームをご利用ください。美容室に関することはもちろん、併設するショップへのご質問もお気軽にどうぞ。" name="description">
    <meta content="吉祥寺 アロッタ,ヘアサロン アロッタ,アロッタ お問い合わせ,アロッタ 電話" name="keywords">
    <meta property="og:url" content="https://www.alotta-hair.com/contact/form.php">
    <meta property="og:site_name" content="alotta【アロッタ】｜吉祥寺の完全個室型ヘアサロンとショップ">
    <meta property="og:title" content="お問い合わせフォーム｜吉祥寺のヘアサロンalotta【アロッタ】">
    <meta property="og:description" content="吉祥寺のヘアサロンalotta【アロッタ】へのご相談、ご質問等がございましたら、こちらのお問い合わせ専用フォームをご利用ください。美容室に関することはもちろん、併設するショップへのご質問もお気軽にどうぞ。">
    <meta property="og:image" content="https://www.alotta-hair.com/assets/images/ogp.jpg">
    <meta content="website" property="og:type">
    <meta content="ja_JP" property="og:locale">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="お問い合わせフォーム｜吉祥寺のヘアサロンalotta【アロッタ】">
    <meta name="twitter:description" content="吉祥寺のヘアサロンalotta【アロッタ】へのご相談、ご質問等がございましたら、こちらのお問い合わせ専用フォームをご利用ください。美容室に関することはもちろん、併設するショップへのご質問もお気軽にどうぞ。">
    <meta name="twitter:image" content="https://www.alotta-hair.com/assets/images/ogp.jpg">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/core.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/inner.css">
    <link rel="stylesheet" href="../assets/css/anime.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/lity.js"></script>
    <script type="text/javascript" src="../assets/js/scripts.js"></script>
    <script type="text/javascript" src="../assets/js/desvg.js"></script>
    <script type="text/javascript" src="../assets/js/inner.js"></script>
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
                  <li><a href="../salon.html"><span class="jp">サロン</span><span class="en">SALON</span></a></li>
                  <li><a href="../shop.html"><span class="jp">ショップ</span><span class="en">SHOP</span></a></li>
                  <li><a href="../staff/"><span class="jp">スタッフ</span><span class="en">STAFF</span></a></li>
                  <li><a href="../recruit/"><span class="jp">採用</span><span class="en">RECRUITE</span></a></li>
                  <li><a href="../topics.html"><span class="jp">トピックス</span><span class="en">TOPICS</span></a></li>
                  <li><a href="../access.html"><span class="jp">アクセス</span><span class="en">ACCESS</span></a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="link_reserve"><a href="https://beauty.hotpepper.jp/CSP/bt/reserve/?storeId=H000346915" target="_blank"><span class="jp">予約</span><span class="en">RESERVE</span></a></div>
          <div id="nav_btn">
            <button type="button"><span></span><span></span><span></span></button>
          </div>
        </div>
      </header>
      <main id="main">
        <section id="contact_form">
          <div class="inner">
            <div class="formHead">
              <h1 class="title">CONTACT FORM</h1>
            </div>
            <div class="formContent">
              <form method="post" action="">
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
                  <dt><span class="requre">必須</span>
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
                    <p>電話番号（携帯可）</p>
                  </dt>
                  <dd>
                    <input class="fm phone" type="text" name="phone" size="60" value="" placeholder="例：090-1234-5678">
                  </dd>
                </dl>
                <dl>
                  <dt>
                    <p> 連絡希望日時</p>
                  </dt>
                  <dd>
                    <div class="input">
                      <input class="fm date" type="text" name="date" size="60" value="" placeholder="例：1月1日 午後1時以降">
                    </div>
                    <p class="note">電話での連絡をご希望の方は希望日時をご記入ください。</p>
                  </dd>
                </dl>
                <dl>
                  <dt><span class="requre">必須</span>
                    <p>ご質問内容</p>
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
                <p>営業時間 10:00～19:30</p>
              </div>
              <p>年末年始休業・夏季休業あり</p>
              <div class="ftLine"><a href="http://line.naver.jp/ti/p/d4uUfsc6Pf" target="_blank"><img src="../assets/images/common/ftLine.png" alt="LINEに会員登録するとショップでのお買い物が５％ＯＦＦに！"></a></div>
            </div>
          </div>
          <ul class="ftLinks">
            <li><a href="../contact/">お問い合わせ</a></li>
            <li><a href="../privacy.html">個人情報保護方針</a></li>
            <li><a href="../sitemap.html">サイトマップ</a></li>
            <li><a href="../company.html">運営会社</a></li>
            <li><a href="../faq.html">よくあるご質問</a></li>
          </ul>
          <p class="copy">Copyright&amp;copy alotta-hair.com　All Rights Reserved.</p>
        </div>
      </footer>
    </div>
  </body>
</html>
