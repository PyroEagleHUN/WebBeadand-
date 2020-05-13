<?php
	include('./includes/fc-config.inc.php');
	if (isset($_GET['oldal'])) {
		$oldal = $_GET['oldal'];
		if (isset($oldalak[$oldal]) && file_exists("./pages/{$oldalak[$oldal]['fajl']}.php")) {
			$keres = $oldalak[$oldal];
		}
		else {
			$keres = $hiba_oldal;
			header("HTTP/1.0 404 Not Found");
		}
	}
	else $keres = $oldalak['main'];
        include('./pages/' . $keres['fajl'] . '.php');
?>
