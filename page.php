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

<?php get_footer(); ?>