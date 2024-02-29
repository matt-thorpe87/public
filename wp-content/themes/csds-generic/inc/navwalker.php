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


class walker_mega_nav extends Walker_Nav_menu{  

    private $curItem;
    function start_lvl(&$output, $depth = 0, $args = array() ){ //ul
        $menuID = $this->curItem->ID;
        $menuTitle = $this->curItem->title;
        $menuUrl = $this->curItem->url;  
        $menuDesc = $this->curItem->description;      
        // var_dump($this->curItem);
        $indent = str_repeat("\t",$depth); /* indent the html elements generated */
        $submenu = ($depth = 0) ? ' sub-menu ' : ''; /* if  */
          if($depth = 1 ){
            $output .= "\n$indent<div class=\"qld__main-nav__menu-sub qld__accordion--closed qld__accordion__body depth$depth\" id=\"mega-nav-$menuID\" style=\"display: none;\">
            <div class=\"qld__main-nav__menu-sub-inner\">\n";
            $output .= "\n$indent<div class=\"qld__main-nav__sub-head\">
            <a class=\"qld__main-nav__sub-heading\" href=\"$menuUrl\">
                <span class=\"qld__main-nav__sub-item-text qld__display-lg\">$menuTitle</span>
                <svg class=\"qld__icon qld__icon--lg\"><use href=\"/mysource_files/img/svg-icons.svg#qld__icon__arrow-right\"></use></svg>
            </a>
            <p class=\"qld__main-nav__item-desc\">$menuDesc</p>
            </div><hr class=\"qld__horizontal-rule qld__horizontal-rule--lg\">\n";
            
            $output .= "\n$indent<ul class=\"qld__link-columns qld__link-columns--3-col qld__link-list dropdown-menu_$submenu depth_$depth\">
            \n";
    
          } 
          elseif($depth = 1 && $args->walker->has_children){
            $output .= "\n$indent<ul class=\"qld__main-nav__sub-item-text test__item depth$depth\">$menuTitle\n";
        
          }
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) //li a span
        {
        $this->curItem = $item;
        $indent = ( $depth ) ? str_repeat("\t",$depth) : '';   
        $li_attributes = '';
        $class_names = $value = '';
        // if($depth < 1){
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
            $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
            $classes[] = 'qld__main-nav__item'; 
            $classes[] = "depth$depth";
            if( $depth && $args->walker->has_children ){
                $classes[] = 'dropdown-submenu'; // unnecessary?
            }
            
            $class_names = join( ' ', apply_filters('', array_filter($classes), $item, $args ) );
            $class_names = 'class="' . esc_attr($class_names) . '"';

            $output .= $indent . '<li ' . $value . $class_names . $li_attributes . '>';

            $attributes = ! empty( $item->attr_title ) ? 'title="' . esc_attr($item->attr_title). '"' : '';
            $attributes .= ! empty( $item->target ) ? 'target="' . esc_attr($item->target). '"' : '';
            $attributes .= ! empty( $item->xfn ) ? 'rel="' . esc_attr($item->xfn). '"' : '';
            $attributes .= ! empty( $item->url ) ? 'href="' . esc_attr($item->url). '"' : '';

            $item_output = $args->before;
            $item_output .= '<div class="qld__main-nav__item-title">';

            // for dropdown megamenu
            $item_output .= ( $depth == 0 && $args->walker->has_children ) ? '
            <a class="qld__main-nav__item-link qld__main-nav__item-link--desktop-hide" ' . $attributes . '>' . $item->title . '</a>  <button class="qld__main-nav__item-toggle qld__accordion--closed" aria-controls="mega-nav-'. $item->ID .'" aria-expanded="false" aria-selected="false" aria-label="Toggle navigation, Components">
            <span class="qld__main-nav__item-toggle-text" data-name="'. $item->title . '">' . $item->title . '</span>
                <svg class="qld__icon qld__icon--md">
                <use href=""></use>
                <use href="/wp-content/qh-design-system/mysource_files/img/svg-icons.svg#qld__icon__chevron-up"></use>
                </svg>
            </button><a/></div>' : '<a class="qld__main-nav__item-link" ' . $attributes . '>' . $item->title . '</a></div> ';
            $item_output .= $args->after;

            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

        }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";

        
    }
    function end_lvl(&$output, $depth=0, $args = null){
        // add View all link to megamenu footer
        // $urlfooter = $this->curItem->url;
        $output .= "\n</ul>";
        $output .= "\n<div class=\"qld__main-nav__sub-footer\">
        <hr class=\"qld__horizontal-rule qld__horizontal-rule--lg\">
        <a class=\"qld__cta-link qld__cta-link--view-all\" href=\"#\">View all</a>
    </div>";
    }
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