<?php

get_header();

echo "<section>";
while (have_posts()) :
    the_post();
    echo "<a href='" . get_permalink() . "'>";
    echo "<article>";
    the_title();
    the_content();
    echo "</article>";
    echo "</a>";
endwhile;
echo "</section>";
get_footer();
