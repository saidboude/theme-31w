<?php get_header(); ?> 
<h1>Front-page.php Mon premier modèle Wordpress</h1>
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?><h2>
            

            <?php $lien= " ... <a class= 'bouton' href='"
            . get_permalink() 
            ."'>"
            . substr(get_the_title(),0,4)
            ."</a>"; ?>
            <p><?= wp_trim_words(get_the_content(),20,$lien,0,8)?></p>
           

    <?php endwhile; ?>
<?php endif; ?>    

<?php get_footer(); ?>