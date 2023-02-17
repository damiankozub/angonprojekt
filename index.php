<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <div class="title">
            <?php the_title(); ?>
        </div>

        <div class="policy-privacy-text">
            <div class="container">
            <?php the_content(); ?>
            </div>
        </div>

    <?php endwhile; ?>
<?php else : ?>
    No result
<?php endif; ?>
<?php get_footer(); ?>



