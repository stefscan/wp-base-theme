<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>

    <article>
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
    </article>

    <?php endwhile; ?>

<?php endif; ?>