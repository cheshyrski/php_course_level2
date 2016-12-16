<HTML>
<HEAD>
<TITLE>fopen</TITLE>
</HEAD>
<BODY>
<?
	//$f1 = fopen("data.txt", "r") or die("Невозможно открыть файл");
	//$f2 = fopen("data.html", "r") or die("Невозможно открыть файл");
	/*echo fread($f1, 5);
	echo fread($f1, 3);
	fpassthru($f1);*/

	/*$lines1 = [];
	while ($line = fgets($f1)) {
		$lines1[] = $line;
	}
	print_r($lines1);

	echo "<br>";

	$lines2 = [];
	while ($line = fgetss($f2, 1024, "<p><br>")) {
		$lines2[] = $line;
	}
	print_r($lines2);*/

	/*$bytes = [];
	while (!feof($f1)) {
		$bytes[] = fgetc($f1);
	}
	print_r($bytes);


	fclose($f1);*/

	$f = fopen("data.txt", "a+") or die("Невозможно открыть файл");

	fputs($f, "\nLine six");
	fclose($f);
?>
</BODY>
</HTML>