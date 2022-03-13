<?php

/**
 * Plugin Name: CasualBen Reusable Blocks Menu
 * Plugin URI: https://github.com/DasBen/CasualBen-Reusable-Blocks-Menu
 * Description: Adds a Menu Item for the Reusable Blocks
 * Version: 1.0.0
 * Author: Benjamin Pahl - CasualBen
 * Author URI: https://www.casual-ben.com
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

function casualben_reusable_blocks_menu() {
    add_menu_page( 'Reusable Blocks', 'Reusable Blocks', 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-text-page', 6 );
}
add_action( 'admin_menu', 'casualben_reusable_blocks_menu' );