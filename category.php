<?php

get_header();

echo "<div>";
echo "<h1> Categorie </h1>";
echo "</div>";

echo "<section>";
while (have_posts()) :
    the_post();
    echo "<a href='" . get_permalink() . "'>";
    echo "<article>";
    if (has_post_thumbnail()) {
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'medium')[0];
        echo '<img src="' . $thumbnail_url . '" alt="' . get_the_title() . '" />';
    }
    the_title();
    the_content();
    echo "</article>";
    echo "</a>";
endwhile;
echo "</section>";
get_footer();
