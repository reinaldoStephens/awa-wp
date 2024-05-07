<?php

/**
 * Header Navigation Template
 * 
 * @package Awa
 */

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
    <ul id="menu-items" class="menu " aria-hidden="true" tabIndex="-1" role="menu" aria-labelledby="menubutton" aria-expanded="true">
        <small id="menubutton" aria-hidden="true" hidden>
            Awa Menu Links
        </small>
        <li>
            <a role="menuitem" href="" aria-selected="" aria-label="" rel="noopener noreferrer">
                Inicio
            </a>
        </li>
    </ul>
</nav>

<?php
// wp_nav_menu([
//     'theme_location' => 'awa-header-menu',
//     'container_class' => 'my_extra_menu_class',
// ]) 
?>