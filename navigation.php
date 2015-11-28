<header class="navigation" role="banner">
    <div class="navigation-wrapper">
        <a href="javascript:void(0)" class="logo">
        <?php
            if( get_theme_mod( 'socket_logo') ) :
                echo '<img src="'. esc_url(get_theme_mod( 'socket_logo' )) .'">';
            else : 
                ?>
                <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo Image">
                <?php
            endif;
        ?>
        </a>
        <nav role="navigation">
           <?php
                wp_nav_menu(array(
                    'theme_location' => 'socket_navigation',
                    'menu' => 'ul',
                    'menu_class' => 'socket-menu navigation-menu',
                    'container' => 'li',
                    'container_class' => 'nav-link',
                ));
            ?>
        </nav>
    </div>
</header>