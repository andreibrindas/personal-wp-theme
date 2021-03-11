<?php get_header(); ?>



<section class="hero">
    <div class="container">
        <h1 class="main-headline">Hey 👋 I'm Andrei</h1>
        <p class="headline-caption">Christian, husband, software developer, theologian, musician, marketeer, writer, builder</p>
        <small class="headline-caption--auxiliary">- and a few things that have not been invented yet</small>
    </div>
</section>

<section class="about">
    <div class="container">
        <h2 class="headline">Some stuff written by me </h2>
    </div>
</section>

<section class="blog-posts-section">
    <div class="container">
        <?php $latest_posts = new WP_Query( 'posts_per_page=5' ); ?>
        <?php if ($latest_posts->have_posts()): ?>
            <?php while ( $latest_posts->have_posts() ): $latest_posts->the_post(); ?>
                <div class="blog-post">
                    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                    
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>


<?php get_footer(); ?>