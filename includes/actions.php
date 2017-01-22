<?php

/* Add Viaplay Import menu item to the Tools menu */
add_action('admin_menu', function() {

	add_submenu_page('tools.php', __('Viaplay Import'), __('Viaplay Import'), 'manage_options', 'viaplay', 'viaplay_admin');

});

/* Import file */
add_action('init', function() {

	if(!empty($_FILES['viaplay_file']['name'])) {

		// if no errors
		if(!$_FILES['viaplay_file']['error']) {

			$new_file_name = 'viaplay_import.csv';
			move_uploaded_file($_FILES['viaplay_file']['tmp_name'], VI_DIR . '/' . $new_file_name);
			viaplay_import(VI_DIR . '/viaplay_import.csv');
			unlink(VI_DIR . '/viaplay_import.csv');

		} else {

			var_dump($_FILES['viaplay_file']['error']);

		}

	}

});
