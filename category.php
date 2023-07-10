<?php

get_header();

echo "<div class='category'>";
echo "<h1>";
echo  single_cat_title();
echo "</h1>";
echo "</div>";

echo "<section class='category-content'>";
while (have_posts()) :
    the_post();
    echo "<a href='" . get_permalink() . "'>";
    echo "<article class='category-post'>";
    if (has_post_thumbnail()) {
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'medium')[0];
        echo '<img src="' . $thumbnail_url . '" alt="' . get_the_title() . '" />';
    }
    the_title("<h4>", "</h4>");
    the_content("<p>", "</p>");
    echo "</article>";
    echo "</a>";
endwhile;
echo "</section>";
get_footer();
