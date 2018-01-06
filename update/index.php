<?php
if (!extension_loaded('zip')) {
    echo "You need enable zip extension to can upgrade script";
    exit(0);
}

set_time_limit(180);
require_once "../app/config.php";
//Step 1: Extract source
extractZip();

//Step 2: Update database
update_database();

//Step 3: Delete file update
@unlink('update.zip');
@unlink('update.sql');

function update_database(){
	if (file_exists("update.sql")) {
		$mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		//Update SQL
		$sql = file_get_contents("update.sql");
	    $mysqli->multi_query($sql);
	    do {} while (mysqli_more_results($mysqli) && mysqli_next_result($mysqli));
	    $mysqli->close();
	}
}

function extractZip(){
	$zip = new ZipArchive;
	if ($zip->open('update.zip') === TRUE) {
	    $zip->extractTo('../');
	    $zip->close();
	    echo 'ok';
	} else {
	    echo 'failed';
	}
}
?>