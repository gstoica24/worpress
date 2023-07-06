<?php
get_header();


while (have_posts()) :
    the_post(); ?>
    <main class="posts">
        <div class="post">
            <h1 class="post-title">
                <?php the_title(); ?>
            </h1>
            <div class="thumb">
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>
    </main>
<?php endwhile;

get_footer();
