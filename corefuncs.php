<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Demonstration of variable scope</title>
</head>

<body>
<?php

function nukeMagicQuotes() {
if (get_magic_quotes_gpc()) {
function stripslashes_deep($value) {
$value = is_array($value) ? array_map('stripslashes_deep',
$value) : stripslashes($value);
return $value;
}
$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);

$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
}
}
?>
</body>
</html>
