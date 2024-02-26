<?php


class walker_top_right_menu extends Walker_Nav_menu{

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $output .= "<a href='#' class='qld__header__cta-link'><span>" .$item->title;
        // var_dump($depth);
    }

    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</span></a>";
    }
}


/* ====   Guide how WP normally generates a menu and where walker functions are defined === */

// wp_nav_menu()

// <div class="menu-container">
//     <ul>// start_lvl()
//         <li><a><span>// start_el()
        
//         </span></a></li>// end_el()
//         <li><a>link</a></li>
//         <li><a>link</a></li>
//     </ul> //end_lvl()
// </div>


class walker_main_nav extends Walker_Nav_menu{  
    function start_lvl(&$output, $depth = 0, $args = array()){ //ul
        $indent = str_repeat("\t",$depth); /* indent the html elements generated */
        $submenu = ($depth > 0) ? ' sub-menu ' : ''; /* if  */

        // Do we actually need this?
        // if($depth > 0) {
        //     $output .= '<div class="qld__main-nav__menu-sub qld__accordion--closed qld__accordion__body" id="mega-nav-/components.html" style="display: none;">
        //                     <div class="qld__main-nav__menu-sub-inner">
        //                     <div class="qld__main-nav__sub-head">
        //                     <a class="qld__main-nav__sub-heading " href="/components.html">
        //                     <span class="qld__main-nav__sub-item-text qld__display-lg">' . $item->title . '</span>
        //                     <svg class="qld__icon qld__icon--lg"><use href="/mysource_files/img/svg-icons.svg#qld__icon__arrow-right"></use></svg>
        //                     </a>
        //                     <p class="qld__main-nav__item-desc">This is level one short description</p>
        //                     </div>
                
        //                     <hr class="qld__horizontal-rule qld__horizontal-rule--lg">';
        // }
        // ------------------------------------------------------------------------ 

        $output .= "\n$indent<ul class=\"qld__link-columns qld__link-columns--3-col qld__link-list dropdown-menu$submenu depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) //li a span
        {
        $indent = ( $depth ) ? str_repeat("\t",$depth) : '';   

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
        $classes[] = 'qld__main-nav__item'; 
        if( $depth && $args->walker->has_children ){
            $classes[] = 'dropdown-submenu'; // unnecessary?
        }

        // $class_names = join( ' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args ) );
        $class_names = join( ' ', apply_filters('', array_filter($classes), $item, $args ) );
        $class_names = 'class="' . esc_attr($class_names) . '"';

        // $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        // $id = strlen( $id ) ? 'id="' . esc_attr( $id ) . '"' : '';

        // $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';
        $output .= $indent . '<li ' . $value . $class_names . $li_attributes . '>';

        $attributes = ! empty( $item->attr_title ) ? 'title="' . esc_attr($item->attr_title). '"' : '';
        $attributes .= ! empty( $item->target ) ? 'target="' . esc_attr($item->target). '"' : '';
        $attributes .= ! empty( $item->xfn ) ? 'rel="' . esc_attr($item->xfn). '"' : '';
        $attributes .= ! empty( $item->url ) ? 'href="' . esc_attr($item->url). '"' : '';

        // $attributes .= ($args->walker->has_children) ? 'data-toggle="dropdown"' : '';
        $item_output = $args->before;
        $item_output .= '<div class="qld__main-nav__item-title">';
        // $item_output .= '<a class="qld__main-nav__item-link ' . (($args->walker->has_children) ? 'qld__main-nav__item-link--desktop-hide ' : '' . '"') . $attributes . '>';
        $item_output .= '<a class="qld__main-nav__item-link ' . $attributes . '>';
        // $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        
        // if($item->menu_order == 1) { /to add a home icon on the menu */
            //     $item_output .= '<a class="qld__main-nav__item-home qld__main-nav__item-link" href="/home.html">
            //     <span class="qld__main-nav__item-icon">
            //     <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" class="qld__icon qld__icon--md ">
            //       <!-- <use href="/mysource_files/img/svg-icons.svg#qld__icon__home"></use> -->
            //       <use href="http://csds-custom-theme.local/wp-content/qh-design-system/mysource_files/img/svg-icons.svg#qld__icon__home"></use>
            //     </svg></span><span class="qld__main-nav__item-text" data-name="">Home</span></a>';
            // }
            $item_output .= '  <button class="qld__main-nav__item-toggle qld__accordion--closed" aria-controls="mega-nav-/components.html" aria-expanded="false" aria-selected="false" aria-label="Toggle navigation, Components">
            <span class="qld__main-nav__item-toggle-text" data-name="'. $item->title . '">' . $item->title . '</span>';

            $item_output .= ( $depth == 0 && $args->walker->has_children ) ? '
                <svg class="qld__icon qld__icon--md">
                <use href=""></use>
                <use href="http://csds-custom-theme.local/wp-content/qh-design-system/mysource_files/img/svg-icons.svg#qld__icon__chevron-up"></use>
                </svg>
            </button><a/></div>' : '</a></div> ';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

        }


    // function end el(){
        
    // }

    
    // function end lvl(){

    // }
}




class Walker_Sidebar_Menu extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"qld__link-list\">\n";
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $output .= $indent . '<li class="' . implode( ' ', $classes ) . '">';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters( 'the_title', $item->title, $item->ID );

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}


?>