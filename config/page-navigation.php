<?php 

$components = get_components_navigation_items();

echo '<ul>';
foreach ( $components as $component_file ) {

	// Get file data 
	$link_data = get_file_data($component_file['location'], 'component');

	// Get variables
	$link_title = (array_key_exists('title', $link_data)) ? $link_data['title'] : '';
	$link_slug = (array_key_exists('slug', $link_data)) ? $link_data['slug'] : '';

	// Return list item
	echo ($link_title) ? '<li><a href="/?guide=' . $component_file['location'] . '">' . $link_title . '</a></li>': '';
}

echo '</ul>';