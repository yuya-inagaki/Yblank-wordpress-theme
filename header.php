<!DOCTYPE html><!--htmlで書かれていることを宣言-->
<html lang="ja"><!--日本語のサイトであることを指定-->
<head>
  <?php $SITE_NAME="サイトタイトル" ?>
  <meta charset="utf-8"><!--エンコードがUTF-8であることを指定-->
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes, viewport-fit=cover">
  <?php if ( is_home() && !is_paged() ): ?>
    <title><?php echo $SITE_NAME ?></title>
  <?php else: ?>
    <title><?php the_title(); ?> | <?php echo $SITE_NAME ?></title>
  <?php endif; ?>
  <meta name="description" content="ディスクリプション">
  <!-- bootstrap4 -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap4/bootstrap-grid.min.css">
  <!-- style.css -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!-- Vue.js -->
  <?php $url = esc_url( home_url() ); if(strstr($url,'localhost')==true): ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vue/vue.js"></script>
  <?php else: ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vue/vue.min.js"></script>
  <?php endif; ?>
  <!--システム・プラグイン用-->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="header-inner">
      【ヘッダーメニュー】
    </div><!--end header-inner-->
  </header>