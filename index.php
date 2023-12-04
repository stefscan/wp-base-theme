<?php get_header(); ?>

<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>

    <article>
        <h2 class="title"><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </article>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>