<?php 
/*
Template Name: Post
*/
get_header();
    $your_meta_title = "";
    $your_meta_description = "";
?>

<?php 
    //Loop
    /* Start the Loop */
    while ( have_posts() ) :
        the_post();
?>

<section id="post">
    <div class="container fade-in-start">
    <main>
        <?php the_title( '<h1>', '</h1>' ); ?>
        <p class="meta-details"><strong><?php the_field('post_meta'); ?></strong></p>
        <?php the_content(); ?> 
        <p class="year"><?php the_field('post_ar'); ?></p>
        <a class="back" href="/#portfolio"><strong>Back</strong></a>
    </main>
    <aside>
        <a class="post-img" data-fancybox="gallery" href="<?php the_field('post_bild'); ?>">
            <img src="<?php the_field('post_bild'); ?>">    
        </a>
    </aside>
</div>
</section>
<?php
    endwhile; // End of the loop.
?>

<?php get_footer(); ?>