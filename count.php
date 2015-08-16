<?php
	session_start();
	if ( !isset($_SESSION['count'] )) {
		$_SESSION['count'] = 1;
	}
	else {
		$_SESSION['count']++;
	}

	echo json_encode(["sid" => session_id(), "count" => $_SESSION['count']]);