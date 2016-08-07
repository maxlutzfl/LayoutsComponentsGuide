<?php
/**
 * 
 */

DEFINE('APP_DIRECTORY', dirname(__DIR__) . '/');
DEFINE('DEBUG', true);

/**
 * Debug mode
 */

if ( DEBUG === true ) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}

/**
 * Functions
 */

function get_components_navigation_items() {

	// Loop through the directory and return the file
	// @todo - add argument for 'type', so this function works for both components & layouts
	$files = glob('guides/*.php');
	$menu_items = array();
	foreach ( $files as $file ) {
		$menu_items[] = array(
			'location' => $file
		);
	}
	return $menu_items;
}

function get_file_comments_for_data($file) {

	// Get comments from file
	$comments = array_filter(
		token_get_all(file_get_contents($file)), function($entry) {
			return $entry[0] == T_DOC_COMMENT;
		}
	);

	// Return the comments in a string
	$comments_string = array_shift($comments);
	return $comments_string;
}

function get_file_data($file) {

	// Run the function to grab comments from file
	$file = APP_DIRECTORY . $file;
	$file_comments = get_file_comments_for_data($file);

	// Split the comments string by line
	$file_comments_array = preg_split('/\R/', $file_comments[1]);

	// Loop through each line and search for data
	// @todo - add argument to search for title or slug, etc
	// @todo - add comment data for type - so layouts/components can live in 1 directory 
	$file_data = array();
	foreach ( $file_comments_array as $comment_line ) {
		if (strpos($comment_line, '@title') !== false) {
			$file_data['title'] = str_replace(' * @title ', '', $comment_line);
		}

		if (strpos($comment_line, '@slug') !== false) {
			$file_data['slug'] = str_replace(' * @slug ', '', $comment_line);
		}

		if (strpos($comment_line, '@type') !== false) {
			$file_data['type'] = str_replace(' * @type ', '', $comment_line);
		}
	}

	// Return data
	return $file_data;
}

function display_file_contents_by_query_string() {
	if ( !isset($_GET['guide']) ) {
		return;
	}

	$guide_to_show = $_GET['guide'];

	include $guide_to_show;
}


