<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="DesignReformの紹介サイトです。" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main-style.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <title>DesignReform</title>
</head>

<body>
  <header>
    <div class="logo">
      <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/logo (2).svg" alt="ロゴ" />
    </div>
    <div class="pc-link">
      <ul>
        <li><a href="<?php echo home_url(); ?>">HOME</a></li>
        <li><a href="<?php echo home_url(); ?>/service.html">サービス案内</a></li>
        <li><a href="<?php echo home_url(); ?>/news">お知らせ</a></li>
        <li><a href="<?php echo home_url(); ?>/#case">参考事例</a></li>
        <li><a href="<?php echo home_url(); ?>/company.html">会社概要</a></li>
        <li><a href="<?php echo home_url(); ?>/blog-category.html">ブログ</a></li>
        <li><a href="<?php echo home_url(); ?>/#content-title">お問い合わせ</a></li>
      </ul>
    </div>
    <?php wp_head(); ?>

  </header>