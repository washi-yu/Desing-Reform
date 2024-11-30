<?php get_header(); ?>
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
        <li><a href="#content-title">お問い合わせ</a></li>
      </ul>
    </div>
  </nav>
  <div class="black-bg" id="js-black-bg"></div>
</div>
<!-- hum -->
<main class="news-main">
  <div>
    <h2 class="content-title">お知らせ</h2>


    <div>

      <div>






        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <p class="news-title">
              <?php echo post_custom('date'); ?><br /><span><?php the_title(); ?></span>
            </p>

            <p>
              <?php echo get_the_content(); ?>
            </p>

            <hr />

          <?php endwhile; ?>


          <div class="pagination">
            <?php
            echo paginate_links(array(
              'total' => $wp_query->max_num_pages, // 総ページ数
              'current' => max(1, get_query_var('paged')), // 現在のページ
              'format' => '?paged=%#%', // ページ番号のフォーマット
              'prev_text' => '&laquo; 前へ', // 「前へ」リンクのテキスト
              'next_text' => '次へ &raquo;', // 「次へ」リンクのテキスト
            ));
            ?>
          </div>

        <?php else : ?>
          <p>投稿が見つかりませんでした。</p>



        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

      </div>

      <!-- <div>
      <p class="news-title">
        2024.10.19<br /><span>B様邸改装工事を開始しました。</span>
      </p>

      <p>
        このたび、B様邸の改装工事が無事完了いたしましたことをご報告させていただきます。長期間にわたるプロジェクトでしたが、お客様のご協力とスタッフ一同の努力により、予定通りの工期で素晴らしい仕上がりとなりました。
        今回の改装では、B様のライフスタイルに合わせた機能的な空間づくりを心がけました。キッチンは最新の設備を導入し、使い勝手を大幅に向上させました。リビングルームは明るく開放的な雰囲気に生まれ変わり、家族団らんの時間がより楽しくなることでしょう。
        また、エネルギー効率を考慮し、断熱性能の高い窓や省エネ型の照明を採用しました。これにより、快適性が向上するだけでなく、長期的には光熱費の削減にもつながります。
        B様からは「想像以上の出来栄えで大満足です」とのお言葉をいただき、私たちスタッフ一同、大変嬉しく思っております。これからもB様のご家族が快適に過ごせる空間となることを願っています。
        最後になりましたが、工事期間中、ご近隣の皆様にはご迷惑をおかけしましたことをお詫び申し上げます。今後も、お客様のニーズに寄り添った質の高いリフォームサービスを提供してまいります。ご興味のある方は、ぜひお気軽にお問い合わせください。
      </p>

      <hr />
    </div>
    <div>
      <p class="news-title">
        2024.10.14<br /><span>C様宅のリフォームを開始しました。</span>
      </p>

      <p>
        このたび、B様邸の改装工事が無事完了いたしましたことをご報告させていただきます。長期間にわたるプロジェクトでしたが、お客様のご協力とスタッフ一同の努力により、予定通りの工期で素晴らしい仕上がりとなりました。
        今回の改装では、B様のライフスタイルに合わせた機能的な空間づくりを心がけました。キッチンは最新の設備を導入し、使い勝手を大幅に向上させました。リビングルームは明るく開放的な雰囲気に生まれ変わり、家族団らんの時間がより楽しくなることでしょう。
        また、エネルギー効率を考慮し、断熱性能の高い窓や省エネ型の照明を採用しました。これにより、快適性が向上するだけでなく、長期的には光熱費の削減にもつながります。
        B様からは「想像以上の出来栄えで大満足です」とのお言葉をいただき、私たちスタッフ一同、大変嬉しく思っております。これからもB様のご家族が快適に過ごせる空間となることを願っています。
        最後になりましたが、工事期間中、ご近隣の皆様にはご迷惑をおかけしましたことをお詫び申し上げます。今後も、お客様のニーズに寄り添った質の高いリフォームサービスを提供してまいります。ご興味のある方は、ぜひお気軽にお問い合わせください。
      </p>

      <hr />
    </div>
    <div>
      <p class="news-title">
        2024.10.13 <br />
        <span>「あなたの街のリフォーム屋さん」に掲載されました。</span>
      </p>

      <p>
        本日、C様宅のリフォーム工事を正式に開始いたしました。長年お住まいのC様邸を、より快適で機能的な空間へと生まれ変わらせるプロジェクトがついに始動です。
        C様ご家族のご要望を丁寧にお伺いし、設計段階から何度も打ち合わせを重ねてまいりました。キッチンの拡張、リビングの明るさ改善、そして省エネ性能の向上など、様々な目標を掲げています。
        工事期間中はC様にはご不便をおかけしますが、できる限り日常生活への影響を最小限に抑えながら作業を進めてまいります。安全第一で、かつ迅速に工事を完了させ、C様の理想の住まいを実現させることをお約束いたします。
        リフォーム完了後の素敵な空間で、C様ご家族が幸せな時間を過ごされることを想像すると、私たちスタッフ一同、身が引き締まる思いです。これからの工事の進捗状況や、リフォームのビフォーアフターなども、このブログでご紹介していく予定ですので、どうぞお楽しみに。
        C様、そして読者の皆様、これからのC様邸リフォームプロジェクトにご期待ください。
      </p>

      <hr />
    </div>
    <div>
      <p class="news-title">
        2024.10.12<br /><span>「本日は、D様宅のリビング増築プロジェクトについてご報告いたします。このたび、D様のご要望に応じて、より広々としたくつろぎの空間を実現するため、リビングの増築工事を無事完了いたしました</span>
      </p>

      <p>
        増築前のリビングは、ご家族の団らんには少し手狭に感じられていましたが、今回の工事により、約10畳分のスペースを追加することができました。新しく設けた大きな窓からは、庭の緑が美しく眺められ、自然光が室内に豊かに差し込むようになりました。
        内装には、D様のお好みに合わせて、温かみのある木目調の床材を使用し、壁面には落ち着いた色合いのクロスを採用しました。これにより、モダンでありながらも居心地の良い空間が生まれました。また、照明計画にも特にこだわり、間接照明を効果的に配置することで、夜間でも柔らかな雰囲気を演出しています。
        増築に伴い、既存の家具の配置も見直し、より機能的で快適な空間づくりをご提案させていただきました。新たに設けたコーナーには、D様こだわりの書棚を設置し、読書や趣味の時間を楽しむためのスペースも確保しています。
        工事期間中は、ご家族の皆様にご不便をおかけしましたが、完成後のD様の笑顔を拝見し、私たちも大変嬉しく思います。新しくなったリビングで、さらに充実した家族の時間をお過ごしいただけることを願っています。
        これからも、お客様一人ひとりのライフスタイルに寄り添った住空間づくりに励んでまいります。D様、この度は弊社をご利用いただき、誠にありがとうございました。
      </p>

      <hr />
    </div>
    <div>
      <p class="news-title">
        2024.9.12<br /><span>A様邸改装工事が完了しました。 </span>
      </p>

      <p>
        この度、A様邸の改装工事が無事完了いたしましたことをご報告させていただきます。長期間にわたるプロジェクトでしたが、お客様のご協力と当社スタッフの努力により、予定通りに工事を終えることができました。
        A様のご要望に沿って、リビングルームの拡張、キッチンの最新設備への更新、そして外壁の塗り替えなど、多岐にわたる改装を行いました。特に、自然光を取り入れるための大きな窓の設置は、室内の雰囲気を一新し、明るく開放的な空間を生み出すことに成功しました。
        また、エネルギー効率を考慮し、断熱材の強化や高効率の空調システムの導入も行いました。これにより、A様邸の快適性が大幅に向上すると同時に、光熱費の削減にも貢献できると確信しております。
        工事期間中は、近隣の皆様にもご迷惑をおかけしましたが、ご理解とご協力をいただき、スムーズに作業を進めることができました。心より感謝申し上げます。
        最後に、A様には新しくなったお住まいでの生活を心からお楽しみいただけますよう願っております。今後も、お客様のニーズに寄り添い、快適な住空間の創造に努めてまいります。今回の改装工事にご満足いただけましたら、ぜひ周りの方々にもお勧めいただければ幸いです。
        これからも当社をよろしくお願いいたします。
      </p>

      <hr />
    </div> -->
    </div>
</main>
<?php get_footer(); ?>