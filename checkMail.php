<?php 
header('Content-Type: text/xml');
echo "<?xml version='1.0' encoding='UTF-8' standalone='yes'  ?>";

echo "<response>";

$mail= $_POST['mail'];

$mailArray = array( 'uno', 'due', 'tre' );
if (in_array($mail, $mailArray)) {
	echo "La mail è stata già utilizzata!";
else
	echo "La mail è disponibile";
}

echo "</response>";

?>