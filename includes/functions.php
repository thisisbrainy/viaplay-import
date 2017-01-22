<?php

function viaplay_import($file) {

	$reader = new \EasyCSV\Reader($file);
	$items = [];

	while($row = $reader->getRow()) {

		$items[] = (object) [
			'id' => $row['id'],
			'pealkiri' => $row['title'],
			'pakett' => $row['pakett'],
			'code' => $row['code'],
			'state' => $row['state'],
			'userId' => $row['userId'],
			'validityStart' => $row['validityStart'],
			'validityEnd' => $row['validityEnd'],
			'price' => $row['price']
		];

	}

	var_dump($items);
	die();

}
