<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="DesignReformの紹介サイトです。" />
  <link rel="stylesheet" href="css/reset.css" />

  <link rel="stylesheet" href="css/main-style.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <title>DesignReform</title>
</head>

<body>
  <header>
    <div class="logo">
      <img class="logo-img" src="img/logo (2).svg" alt="ロゴ" />
    </div>
    <div class="pc-link">
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="service.html">サービス案内</a></li>
        <li><a href="news.html">お知らせ</a></li>
        <li><a href="#case">参考事例</a></li>
        <li><a href="company.html">会社概要</a></li>
        <li><a href="blog-category.html">ブログ</a></li>
        <li><a href="#content-title">お問い合わせ</a></li>
      </ul>
    </div>
  </header>
  <main>
    <h1>index.php</h1>

    <!-- hum -->
    <div id="nav-wrapper" class="nav-wrapper">
      <div class="hamburger" id="js-hamburger">
        <span class="hamburger__line hamburger__line--1"></span>
        <span class="hamburger__line hamburger__line--2"></span>
        <span class="hamburger__line hamburger__line--3"></span>
      </div>
      <nav class="sp-nav">
        <div class="navi">
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="service.html">サービス案内</a></li>
            <li><a href="news.html">お知らせ</a></li>
            <li><a href="#case">参考事例</a></li>
            <li><a href="company.html">会社概要</a></li>
            <li><a href="blog-category.html">ブログ</a></li>
            <li><a href="index.html">お問い合わせ</a></li>
          </ul>
        </div>
      </nav>
      <div class="black-bg" id="js-black-bg"></div>
    </div>
    <!-- topボタン -->
    <a class="top-btn" id="top-btn" href="#"></a>
    <!--  -->
    <div class="fv">
      <img src="img/company.jpg" alt="FV" />
    </div>
    <section data-aos="fade-up" class="service-introduction">
      <a class="service-introduction-img" href="service.html">
        <div>
          <img src="img/service.jpg" alt="#" />
        </div>
      </a>
      <a class="service-introduction-title" href="service.html">サービス紹介</a>
    </section>

    <section data-aos="fade-up" class="news-section">
      <div>
        <h2 class="content-title">お知らせ</h2>
        <div class="news-section-div">
          <a href="#">
            <p>2024.10.28</p>
            <p>Webサイトをリニューアルしました。</p>
          </a>
          <hr />
        </div>
        <div class="news-section-div">
          <a href="#">
            <p>2024.10.19</p>
            <p>B様邸改装工事を開始しました。</p>
          </a>
          <hr />
        </div>
        <div class="news-section-div">
          <a href="#">
            <p>2024.10.14</p>
            <p>「あなたの街のリフォーム屋さん」に掲載されました。</p>
          </a>
          <hr />
        </div>
      </div>
      <a class="readmore" href="news.html">read-more</a>
    </section>
    <section data-aos="fade-up" class="case" id="case">
      <h2 class="content-title">参考事例</h2>
      <div class="case-flex">
        <a href="case1.html">
          <div>
            <img src="img/case01.jpg" alt="case1" />
          </div>
          <p>A様改装工事</p>
        </a>

        <a href="#">
          <div>
            <img src="img/case02.jpg" alt="case2" />
          </div>
          <p>B様改装工事</p>
        </a>

        <a href="#">
          <div>
            <img src="img/case03.jpg" alt="case3" />
          </div>
          <p>C様改装工事</p>
        </a>

        <a href="#">
          <div>
            <img src="img/case04.jpg" alt="case4" />
          </div>
          <p>D様改装工事</p>
        </a>
      </div>
    </section>
    <section data-aos="fade-up" class="blog-section">
      <div>
        <h2 class="content-title">スタッフブログ</h2>
        <div>
          <a href="#">
            <p>2024.10.28</p>
            <p>A様邸改装工事完了。</p>
          </a>
          <hr />
        </div>
        <div>
          <a href="#">
            <p>2024.07.30</p>
            <p>B様邸改のタイル張替え。</p>
          </a>
          <hr />
        </div>
        <div>
          <a href="#">
            <p>2024.07.27</p>
            <p>C様邸のバスルーム改装。</p>
          </a>
          <hr />
        </div>
      </div>

      <a class="readmore" href="blog-category.html">read-more</a>
    </section>
    <section data-aos="fade-up" class="contect">
      <form action="#">
        <h2 class="content-title" id="content-title">お問い合わせ</h2>
        <div>
          <div class="label-content">
            <label for="name">名前<span>必須</span></label>
          </div>
          <div class="input-div">
            <input
              id="name"
              type="text"
              name="name"
              placeholder="お名前を入力してください" />
          </div>
        </div>
        <div>
          <div class="label-content">
            <label for="furigana">フリガナ<span>必須</span></label>
          </div>
          <div class="input-div">
            <input
              id="furigana"
              type="text"
              name="furigana"
              placeholder="フリガナを入力してください" />
          </div>
        </div>
        <div>
          <div class="label-content">
            <label name="email" for="email">email<span>必須</span></label>
          </div>
          <div class="input-div">
            <input
              id="email"
              type="text"
              placeholder="メールアドレスを入力してください" />
          </div>
        </div>
        <div>
          <div class="label-content">
            <label for="message">お問い合わせ内容<span>必須</span></label>
          </div>
          <div class="input-div">
            <textarea
              name="message"
              id="message"
              placeholder="お問い合わせ内容を入力してください"></textarea>
          </div>
        </div>

        <div class="date-flex">
          <div>
            <div class="label-content">
              <label name="date" for="date">来店日時<span>必須</span></label>
            </div>
            <div class="date-div-content">
              <div class="date-div">
                <input class="date" id="date" type="date" />
              </div>
              <div class="select-div">
                <select name="time" id="time">
                  <option>時間を選択してください</option>
                  <option>9:00~10:00</option>
                  <option>10:00~11:00</option>
                  <option>11:00~12:00</option>
                  <option>13:00~14:00</option>
                  <option>15:00~16:00</option>
                  <option>16:00~17:00</option>
                  <option>17:00~18:00</option>
                  <option>18:00~19:00</option>
                </select>
              </div>
            </div>
          </div>

          <!-- <div class="label-content">
                <label name="time" for="time">来店日時<span>必須</span></label>
              </div> -->
        </div>

        <input
          class="submit"
          type="submit"
          value="送信
          " />
      </form>
    </section>
  </main>
  <footer>
    <div class="pc-link footer-div">
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="service.html">サービス案内</a></li>
        <li><a href="news.html">お知らせ</a></li>
        <li><a href="#case">参考事例</a></li>
        <li><a href="company.html">会社概要</a></li>
        <li><a href="blog-category.html">ブログ</a></li>
        <li><a href="#content-title">お問い合わせ</a></li>
      </ul>
    </div>
    <span>&copy; DesignReform 2024</span>
  </footer>
  <script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
  <script src="main.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true, // アニメーションを1回のみ実行
    });
  </script>
</body>

</html>