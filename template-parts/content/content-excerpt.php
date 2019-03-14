<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

?>

<article id="post-<?php the_ID(); ?>" class="post-teaser mix <?php foreach((get_the_category()) as $category){ echo '' . $category->name . ' ';} ?>">
    <div class="post-teaser-img" style="background-image: url('<?php the_field('post_bild'); ?>');"></div>
    <header>
        <?php the_title('<h3>', '</h3>'); ?>
        <?php the_excerpt(); ?>
        
    </header>
    <a href="<?php the_permalink(); ?>"></a>
</article>