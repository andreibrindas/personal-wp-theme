<?php get_header(); ?>

<section class="hero">
    <div class="container">
        <h1 class="main-headline"><?php the_title(); ?></h1>
    </div>
</section>

<section class="content">
    <div class="container">
        <?php the_content(); ?>
    </div>
</section>

<section class="bottom-nav">
    <div class="container flex justify-between align-center mt-5">
        <div class="previous">
            <?php previous_post_link( '<strong>Previous: %link</strong>' ); ?>
        </div>
        <div class="next">
            <?php next_post_link( '<strong>Next: %link</strong>' ); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>