<?php
/*
Template Name: Gabarit Nouvelles
*/
?>

<?php get_header();?>

<?php
    // Déclarer les arguments de requête
    $args = array(
        'category_name' => 'Nouvelle',
        'post-type' => 'post'
    );

    // Créer une nouvelle requête utilisant les arguments
    $query = new WP_Query($args);

?>

<!-- Vérifier si la reqêuête a retourné des résultats --> 
<?php if($query->have_posts()) : ?>

    <section>
    <h2>Nouvelles</h2>
    <!-- Parcourir chacun des résultats et en afficher les informations -->
    <?php while($query->have_posts()) : $query->the_post() ?>

        <article>
            <h3><?php the_title();?></h3>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>">Consulter l'article complet</a>
        </article>

    <?php endwhile ?>


    </section>

<?php endif; ?>

<?php wp_reset_postdata(); ?>


<?php get_footer();?>