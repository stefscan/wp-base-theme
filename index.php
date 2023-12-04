<?php get_header(); ?>

<section>

    <h2>Nouvelles</h2>

    <?php if(have_posts()): ?>

        <?php while(have_posts()): the_post(); ?>

        <article>
            <h3 class="title"><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
        </article>

        <?php endwhile; ?>

    <?php endif; ?>

</section>
<?php get_footer(); ?>