<!DOCTYPE html>
<html>
<head>
	<title>Hello, PHP</title>
</head>

<body>
    <h1 align="center">Hello PHP World</h1>
    
	<?php
		echo "<p>Hello World</p>";
		echo "<p>This page was generated with the PHP programming language</p>";
		echo "<p>This program was run at: " . date("Y-m-d") . "</p>";
		echo "<p>Your current IP address is: " . $_SERVER['REMOTE_ADDR'] . "</p>";
	?>
</body>
</html>
