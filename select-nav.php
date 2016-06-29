<?php
/*
  Plugin Name: Select Nav
  Description: Display a menu via a select nav
  Version: 0.0.1
  Author: Rohan Mitchell
  Author URI: https://github.com/RohanM
  Plugin URI: http://openfoodnetwork.org
*/
/*  Copyright 2016 Open Food Foundation

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/


require_once( __DIR__ . '/lib/walker.php' );


// [select_nav]
function select_nav_insert($atts) {
  $a = shortcode_atts( array('menu' => ''), $atts );

  return wp_nav_menu( array('menu'       => $a['menu'],
			    'walker'     => new Walker_Nav_Menu_Select(),
			    'items_wrap' => '<div class="select-nav"><form><select onchange="if(this.value) { window.location.href=this.value; }">%3$s</select></form></div>',
                'echo' => false,
			    ) );
}
add_shortcode('select_nav', 'select_nav_insert');
