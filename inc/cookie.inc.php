<?
	setlocale(LC_ALL, "");
	$visitCounter = 0;
	$lastVisit = "";

	if (isset($_COOKIE['visitCounter'])) {
		$visitCounter = $_COOKIE['visitCounter'];
	}
	$visitCounter++;

	if (isset($_COOKIE['lastVisit'])) {
		$lastVisit = date("d-m-Y H:i:s", $_COOKIE['lastVisit']);
		//$lastVisit = strftime("%d-%B-%Y %H:%M", $_COOKIE['lastVisit']);
	}

	if (date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
		setcookie('visitCounter', $visitCounter, 0x7FFFFFFF);
		setcookie('lastVisit', time(), 0x7FFFFFFF);
	}