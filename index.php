<?php

get_header();

?>

<section class="header">
    <h1>Titre</h1>
    <h3>Sous titre</h3>
</section>
<h4>Nos actus</h4>
<section class="content">
    <?php
    while (have_posts()) :
        the_post();
        echo "<a href='" . get_permalink() . "'>";
        echo "<article class='preview'>";
        the_title();
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