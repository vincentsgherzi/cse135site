<!DOCTYPE html>
<html>
<head>
	<title>Hello, PHP</title>
</head>

<body>
    <h1 align="center">Environment Variables</h1>
    
    <h2>Environment Variables:</h2>
        <ul>
            <?php
                foreach ($_ENV as $key => $value) {
                    echo "<li>$key: $value</li>";
                }
            ?>
        </ul>

    <h2>Server Variables:</h2>
        <ul>
            <?php
                foreach ($_SERVER as $key => $value) {
                    echo "<li>$key: $value</li>";
                }
            ?>
        </ul>
</body>
</html>