<!DOCTYPE html>
<html>

<body>

<?php

//2-Use constant to display your website name which mustn’t change across your pages.
define('webName',"Nour's Website :)");
echo webName;
echo '<br>' ;

//3-Show your server name, address and port.
echo "Server Name is: ".$_SERVER['SERVER_NAME'];
echo '<br>';
echo "Server Address is: ".$_SERVER['SERVER_ADDR'];
echo '<br>';
echo "Server Port is: ".$_SERVER['SERVER_PORT'];
echo '<br>';

//also the filename and path of the currently executing script.
echo "File Name is: ".$_SERVER['PHP_SELF'];
echo '<br>';
echo "file path is: ";
echo __FILE__;
echo '<br>';

//4-switch
$brotherAge = 10;
switch($brotherAge){
	case $brotherAge < 5:
		echo "Stay at home";
		break;
	case 5:
		echo "Go to Kindergarden";
		break;
	case $brotherAge>6 && $brotherAge <12:
		echo "Go to grade ";
		echo $brotherAge;
		break;

}

// 1- Show your phpinfo on browser.
phpinfo();
?>

</body>
</html>
