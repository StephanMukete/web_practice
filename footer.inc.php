<div id="footer">
    <p>&copy;
    <?php
    ini_set('date.timezone', 'Europe/London');
    $startYear = 2015;
	$thisYear = date('Y');
	if ($startYear == $thisYear) {
		echo $startYear;
	}
	else {
		echo "{$startYear}-{$thisYear}";
	}
    ?>
    Stephan Mukete</p>
</div>
