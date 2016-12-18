<?
	if (is_file('log/path.log')) {
		$logArr = file('log/path.log');
		foreach ($logArr as $str) {
			echo "<p>$str</p>";
		}
	}
	