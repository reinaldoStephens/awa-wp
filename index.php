<?php

/**
 * Main template file
 * 
 * @package Awa
 */

get_header();

?>

<div id="primary">
    <?php
    if (have_posts()) :
    ?>
        <h1>Hola post</h1>
    <?php
    else :
        get_template_part('template-parts/content-none');

    endif; ?>
</div>

<?php
get_footer(); ?>