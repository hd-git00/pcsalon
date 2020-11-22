<?php get_header(); ?>


    <!--header　ここまで-->  

    <!--#中見出し　ここから-->  
    <h2 id="heading" class="box-shadow">
    <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
      </h2>
    <!--#中見出し　ここまで-->  

    <!--#left　ここから-->  
    <div id="left" class="box-shadow">


    <?php if (in_category(array('5'))) {?>

      <ul>

<?php
$infoPosts = get_posts('numberposts=3&category=5');
foreach($infoPosts as $post): 
?>

<li><a href="<?php the_permalink(); ?>">
<span>
<?php the_time('Y-m-d'); ?></span>
<?php the_title(); ?>。</a></li>

<?php endforeach; ?>

</ul>


<?php } elseif(in_category(array('4'))){ ?>

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


<?php }else{ ?>

  <ul>

<?php
$infoPosts = get_posts('numberposts=3&category=3');
foreach($infoPosts as $post): 
?>

<li><a href="<?php the_permalink(); ?>">
<span><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>　
<?php the_time('Y-m-d'); ?></span>
<?php the_title(); ?>。</a></li>

<?php endforeach; ?>

</ul>


<?php } ?>



    </div> 
    <!--#left　ここまで-->  

    <!--#right　ここから-->  

    <?php get_sidebar(); ?>    <!-- サイドバーを読み込む -->

    <!--#right　ここまで-->  

    <div id="clear"></div>

</div>
  <!--wrapper　ここまで-->  

    <!--#footer　ここから-->  

<?php get_footer(); ?><!-- フッターを読み込む -->

<!--#footer　ここまで-->  