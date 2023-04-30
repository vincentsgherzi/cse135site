<!DOCTYPE html>
<html>
<head>
	<title>GET Request Echo</title>
</head>
<body>
    <h1 align="center">GET Request Echo</h1>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "GET") {
			echo "<p>Query String: " . $_SERVER["QUERY_STRING"] . "</p>";
			foreach ($_GET as $key => $value) {
				echo "<p>$key: $value</p>";
			}
		}
	?>
</body>
</html>
