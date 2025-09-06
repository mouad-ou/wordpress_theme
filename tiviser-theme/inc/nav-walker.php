<?php
/**
 * Custom Navigation Walker for Bootstrap 5
 */

class Tiviser_Nav_Walker extends Walker_Nav_Menu {
    
    // Start Level - ul
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    // End Level - /ul
    public function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    // Start Element - li
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';

        if (in_array('menu-item-has-children', $classes)) {
            $classes[] = 'dropdown';
        }

        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $link_classes = array('nav-link');
        
        if (in_array('menu-item-has-children', $classes)) {
            $link_classes[] = 'dropdown-toggle';
        }

        if ($item->title === 'Réduction de 75%') {
            $link_classes[] = 'nav-brd';
        }

        $link_class = ' class="' . implode(' ', $link_classes) . '"';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        
        // Special handling for modal trigger
        if ($item->title === 'Réduction de 75%') {
            $attributes .= ' data-bs-toggle="modal" data-bs-target="#popupAbo"';
            $item->url = '#';
        } else {
            $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        }

        if (in_array('menu-item-has-children', $classes)) {
            $attributes .= ' data-bs-toggle="dropdown" aria-expanded="false"';
        }

        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a' . $link_class . $attributes . '>';
        $item_output .= (isset($args->link_before) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (isset($args->link_after) ? $args->link_after : '');
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    // End Element - /li
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}

// Fallback menu function
function tiviser_fallback_menu() {
    echo '<ul class="navbar-nav">';
    echo '<li class="nav-item active"><a class="nav-link" href="' . home_url('/') . '">Accueil</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . home_url('/channels') . '">Chaines</a></li>';
    echo '<li class="nav-item nav-brd"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#popupAbo">Réduction de 75%</a></li>';
    echo '</ul>';
}
