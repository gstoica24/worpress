<?php

get_header();

?>

<section class="header">
    <h1>L'Association pour la Défense de l'Environnement à Grenoble (ADEG)</h1>
    <h3>"Agissons ensemble pour un avenir durable !”</h3>
    <p>L'Association pour la Défense de l'Environnement à Grenoble (ADEG) est un collectif
        engagé qui œuvre à la préservation de l'environnement local,
        en sensibilisant la population, en protégeant les écosystèmes et en plaidant pour des politiques durables,
        afin de construire un avenir harmonieux pour notre région.</p>
</section>
<h4>Nos actus</h4>
<section class="content">
    <?php
    while (have_posts()) :
        the_post();
        echo "<a href='" . get_permalink() . "'>";
        echo "<article class='preview'>";
        the_title("<h4>", "</h4>");
        if (has_post_thumbnail()) {
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'medium')[0];
            echo '<img src="' . $thumbnail_url . '" alt="' . get_the_title() . '" />';
        }
        echo "</article>";
        echo "</a>";
    endwhile;
    ?>
</section>
<?php

get_footer();
?>