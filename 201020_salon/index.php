
<?php get_header(); ?>

    <!--#mainimage　ここから-->  
    <div id="mainimage" class="box-shadow">
      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/mainimage2.gif" alt="メイン画像"><!-- src属性にphp bloginfo( 'stylesheet_directory' ); ?入力 -->
      <div id="base">
        <ul>
          <li id="base1">Reliability</li>
          <li id="base1">Quality</li>
          <li id="base1">Response</li>
        </ul>
      </div>
      <div id="clear"></div>

    </div>
    <!--#mainimage　ここまで-->  

    <!--#left　ここから-->  
    <div id="left" class="box-shadow">
      <h2>新着情報</h2>
      <ul>

      <?php
 $infoPosts = get_posts('numberposts=3&category=4');
 foreach($infoPosts as $post): 
?>

<li><a href="<?php the_permalink(); ?>">
<span><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>　
<?php the_time('Y-m-d'); ?></span>
<?php the_title(); ?>。</a></li>

<?php endforeach; ?>

      </ul>

    </div> 
    <!--#left　ここまで-->  

    <!--#right　ここから-->  

    <?php get_sidebar(); ?>    <!-- サイドバーを読み込む -->

    <!--#right　ここまで-->  

    <div id="clear"></div>

</div>
  <!--wrapper　ここまで-->  

    <!--#footer　ここから-->  

<?php get_footer(); ?>
<!-- フッターを読み込む -->

<!--#footer　ここまで-->  

