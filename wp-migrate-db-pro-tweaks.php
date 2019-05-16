<?php
/*
Plugin Name: WP Migrate DB Pro Tweaks
Plugin URI: https://github.com/lukecav/wp-migrate-db-pro-tweaks/
Description: Examples of using WP Migrate DB Pro's filters
Author: Delicious Brains
Version: 0.3.0
Author URI: http://deliciousbrains.com
*/

// Copyright (c) 2019 Delicious Brains. All rights reserved.
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************

        /**
	 * Alters the number of table rows stored in memory while the table is being processed.
	 * Reduce this number if you're running into memory problems.
	 * Default is 100
	 */
	function rows_per_segment( $rows ) {
		return 50;
	}

	/**
	 * Defines a timeout that is used when making the first initial request to the remote server.
	 * It occurs when the user pastes the remote connection information into the local machines connection box.
	 * Value in seconds.
	 * Default is 10
	 */
	function prepare_remote_connection_timeout( $timeout ) {
		return 20;
	}

	/**
	 * Increase the number of records per request to 5,000
	 * Default is 100
	 */
	add_filter( 'wpmdb_rows_per_segment', function () {
            return 5000;
        } );
