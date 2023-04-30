<!DOCTYPE html>
<html>
<head>
	<title>POST Request Display</title>
</head>
<body>
    <h1 align="center">POST Request Display</h1>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			foreach ($_POST as $key => $value) {
				echo "<p>$key: $value</p>";
			}
		} 
	?>
</body>
</html>
