<?php

function viaplay_import($file) {

	// get items
	$reader = new \EasyCSV\Reader($file);
	$items = [];

	while($row = $reader->getRow()) {

		$items[] = [
			'id' => $row['id'],
			'pealkiri' => $row['pealkiri'],
			'pakett' => $row['pakett'],
			'code' => $row['code'],
			'state' => $row['state'],
			'userId' => $row['userId'],
			'validityStart' => $row['validityStart'],
			'validityEnd' => $row['validityEnd'],
			'price' => $row['price']
		];

	}

	// configure ORM
	ORM::configure('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME);
	ORM::configure('username', DB_USER);
	ORM::configure('password', DB_PASSWORD);
	ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

	foreach($items as $item) {

		$voucher = ORM::for_table('vouchers')->create();
		$voucher->voucher_id = $item['id'];
		$voucher->voucher_pealkiri = $item['pealkiri'];
		$voucher->voucher_pakett = $item['pakett'];
		$voucher->voucher_code = $item['code'];
		$voucher->voucher_state = $item['state'];
		$voucher->voucher_userId = $item['userId'];
		$voucher->voucher_validityStart = $item['validityStart'];
		$voucher->voucher_validityEnd = $item['validityEnd'];
		$voucher->voucher_price = $item['price'];
		$voucher->save();

	}

}

function viaplay_admin() {

	require_once VI_DIR . '/admin.php';

}
