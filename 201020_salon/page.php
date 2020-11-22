<?php get_header(); ?>


    <!--header　ここまで-->  

    <!--#中見出し　ここから-->  
    <h2 id="heading" class="box-shadow">
    <?php the_title(); ?>
    </h2>
    <!--#中見出し　ここまで-->  

    <!--#left　ここから-->  
    <?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content(); ?>

<?php endwhile; endif; ?>
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
