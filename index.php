<?php
/*
Template Name: Front Page
*/
get_header();
    $your_meta_title = "";
    $your_meta_description = "";
?>

<section id="intro">
    <div class="wrapper">
        <h1 id="fade" class="h1-mega"><?php the_field('intro_namn'); ?></h1>
        <h2 class="h2-large"><?php the_field('intro_rubrik'); ?></h2>
        <p class="preamble"><?php the_field('intro_brodtext'); ?></p>
    </div>

</section>
<div class="fade-in-start">
    <a href="#portfolio" class="scroll-down" address="true"></a>
</div>

<section id="portfolio" class="fade-in">
<h2 class="container"><?php the_field('portfolio_rubrik'); ?></h2>
    <header class="container">
        
        <div>    
            <p><?php the_field('portfolio_brodtext'); ?></p>
            <span class="mixCount"></span>
        </div>
        <aside>
            <button class="filterBtn active" type="button" data-filter="all">All</button>
            <?php foreach((get_categories()) as $category){
                echo '<button class="filterBtn" type="button" data-filter=".' . $category->name . '">' . $category->name . '</button>';
            } ?>
        </aside>
    </header>
     
    <main id="js-page-scroll">
        <?php
            $args = array( 'post_type' => 'post');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
        ?>
            <?php get_template_part( 'template-parts/content/content-excerpt' ); ?>
        <?php endwhile; ?>
    </main>
</section>

<?php get_footer(); ?>
