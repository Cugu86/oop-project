<?php 

header("Content-Type: xml/text");
echo "<?xml version='1.0' encoding='UTF-8' standalone='yes' ?>";

echo "<response>";
$mail = htmlspecialchars($_GET['mail']);

$arrayMail = array('uno','due','tre');
if(in_array($mail, $arrayMail))
{
	echo "La Mail esiste gia";

}elseif ($mail='') {
	echo "Insert the mail";
}else
	echo "You can you this mail!";


echo "</response>";

?>