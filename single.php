<?php get_header( 'blog-post' ); ?>

<?php
$categories = get_categories();
?>

<section class="hero">
    <div class="container">
        <div class="categories-container">
            <?php foreach ( $categories as $cat ) : ?>
                <a class="single-post__category-link" href="<?php echo get_category_link($cat->term_id) ?>"><?php echo $cat->name ?></a>
            <?php endforeach; ?>
        </div>
        <h1 class="main-headline"><?php the_title(); ?></h1>
    </div>
</section>

<div class="container">
    <section class="featured-image-section" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>)">
    </section>
</div>

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