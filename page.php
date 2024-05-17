<?php

/**
 * Page template
 *
 * @package Awa
 */

get_header();

?>

<div class="primary">
    <main id="main" class="site-main" role="main">
        <?php
        if (have_posts()) :
        ?>
            <div class="container">
                <?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', 'page');
                endwhile; // End of the loop.

                ?>
            </div>
        <?php
        else :
            get_template_part('template-parts/content-none');

        endif; ?>
    </main>
</div>

<?php
get_footer();
?>