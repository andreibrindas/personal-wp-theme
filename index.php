<?php get_header(); ?>

<section class="hero">
    <div class="container">
        <h1 class="main-headline">Articles I've Written</h1>
    </div>
</section>

<section class="content">
    <div class="container">
        <?php if ( have_posts() ) :  ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <article class="article article--archive">
                    <a href="<?php the_permalink() ?>" class="headline">
                        <?php the_title('<h2 >', '</h2>') ?>
                    </a>
                    <p>
                        <?php echo wp_trim_words( get_the_content(), 25, " [ . . . ]" ) ?>
                    </p>
                    <a href="<?php the_permalink(  ) ?>">Read the article</a>
                </article>
                
            <?php endwhile; ?>
        <?php else : ?>
            <h3>Nothing to show yet</h3>
        <?php endif; ?>
    </div>
</section>

<section class="pagination-section">

    <div class="container flex">
        <?php echo paginate_links([
            "prev_text" => "<span>&ldca;</span>",
            "next_text" => "<span>&rdca;</span>"
        ]) ?>
    </div>

</section>


<?php get_footer(); ?>