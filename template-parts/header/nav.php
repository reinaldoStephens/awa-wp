<?php

/**
 * Header Navigation Template
 * 
 * @package Awa
 */

$menu_class = \Awa_Theme\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('awa-header-menu');
$header_menus = wp_get_nav_menu_items($header_menu_id);
?>

<nav class="navbar" role="navigation">
    <div class="navbar-brand-container">
        <a class="navbar-brand" href="/" aria-label="Awa Boots Logo link" rel="noopener noreferrer">
            <h1>
                Awa<span class="text-gradient">Boots</span>
            </h1>
        </a>

        <div id="menu-button" class="open-menu" role="button" aria-label="Open menu button" onclick="handleShowCollapsedMenu()" aria-controls="menu-items">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </div>
    </div>
    <?php
    if (!empty($header_menus) && is_array($header_menus)) {
    ?>
        <ul id="menu-items" class="menu " aria-hidden="true" tabIndex="-1" role="menu" aria-labelledby="menubutton" aria-expanded="true">
            <small id="menubutton" aria-hidden="true" hidden>
                Awa Menu Links
            </small>
            <?php
            foreach ($header_menus as $menu_item) {
                if (!$menu_item->menu_item_parent) {
                    $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
                    $has_children = !empty($child_menu_items) && is_array($child_menu_items);
                    if (!$has_children) {
            ?>
                        <li class="nav-item">
                            <a class="" role="menuitem" href="<?php echo esc_url($menu_item->url); ?>" aria-selected="" aria-label="" rel="noopener noreferrer">
                                <?php echo esc_html($menu_item->title); ?>
                            </a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" href="<?php echo esc_url($menu_item->url); ?>">
                                <?php echo esc_html($menu_item->title); ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php
                                foreach ($child_menu_items as $child_menu_item) {
                                ?>
                                    <a href="<?php echo esc_url($child_menu_item->url); ?>">
                                        <?php echo esc_html($child_menu_item->title); ?>
                                    </a>
                                <?php } ?>

                            </div>
                        </li>
                    <?php } ?>
                <?php } ?>
            <?php } ?>


        </ul>
    <?php } ?>
</nav>

<?php
// wp_nav_menu([
//     'theme_location' => 'awa-header-menu',
//     'container_class' => 'my_extra_menu_class',
// ]) 
?>