<?php

// https://sridharkatakam.com/display-custom-menu-select-dropdown-wordpress/
class Walker_Nav_Menu_Select extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth); // don't output children opening tag (`<ul>`)
    }

    function end_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth); // don't output children closing tag
    }

    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */
    function start_el(&$output, $item, $depth, $args) {
        $url = '#' !== $item->url ? $item->url : '';
        $output .= '<option value="' . $url . '">' . $item->title;
    }

    function end_el(&$output, $item, $depth) {
        $output .= "</option>\n"; // replace closing </li> with the option tag
    }

}
