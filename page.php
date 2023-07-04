<?php

get_header();



while (have_posts()) :
    the_post();
    echo "<h1>" . get_the_title() . "</h1>";

    the_content();

endwhile;

get_footer();