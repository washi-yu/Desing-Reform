<footer>
  <div class="pc-link footer-div">
    <ul>
      <li><a href="<?php echo home_url(); ?>">HOME</a></li>
      <li><a href="<?php echo home_url(); ?>/service.html">サービス案内</a></li>
      <li><a href="<?php echo home_url(); ?>/news.html">お知らせ</a></li>
      <li><a href="<?php echo home_url(); ?>/#case">参考事例</a></li>
      <li><a href="<?php echo home_url(); ?>/company.html">会社概要</a></li>
      <li><a href="<?php echo home_url(); ?>/blog-category.html">ブログ</a></li>
      <li><a href="<?php echo home_url(); ?>/#content-title">お問い合わせ</a></li>
    </ul>
  </div>
  <span>&copy; DesignReform 2024</span>
</footer>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    once: true, // アニメーションを1回のみ実行
  });
</script>
<?php wp_footer(); ?>
</body>

</html>