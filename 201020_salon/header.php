

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title><!-- タイトルに入力 -->
  
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">  <!-- スタイルシートを読み込む -->
  
  <!--responsive-->

  <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/responsive.css" rel="stylesheet"><!-- スタイルシート以外のcssを読み込む際に ?php bloginfo( 'stylesheet_directory' ); ?を入力 -->

  <?php wp_head(); ?><!-- headを閉じる前に入力 -->

</head>



<body>
    <!--wrapper　ここから-->  
  <div id="wrapper">

    <!--header　ここから-->  
    <header>
      <h1>Web制作のご依頼なら<br>
      <a href="<?php bloginfo('url'); ?>"><span>PC Salon</span></a>
      </h1>

      <nav>
        <ul>
        <?php wp_nav_menu( array(
   'theme_location'=>'place_global', 
            'container'     =>'', 
            'menu_class'    =>'',
            'items_wrap' => '%3$s',//<ul>を出力しない
          ));
    ?>
        </ul>

      </nav>
      <div id="clear"></div>


    </header>
    <!--header　ここまで-->  
