<?php

/**
 * Content template
 *
 * @package awa
 */

?>

<article id="post-<?php the_ID(); ?>">
    <?php
    get_template_part('template-parts/components/page/entry-header');
    ?>
    <a href="<?php echo esc_url(get_site_url()); ?>">
        Hola mundo
    </a>
    <?php
    the_content();

    ?>
</article>