<!DOCTYPE html>
<html>
<head>
    <title>General Request Echo</title>
</head>
<body>
    <h1 align="center">General Request Echo</h1>
    <p>Request Method: <?php echo $_SERVER["REQUEST_METHOD"]; ?></p>
    <p>Protocol: <?php echo $_SERVER["SERVER_PROTOCOL"]; ?></p>

    <p>Query:</p>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            foreach ($_GET as $key => $value) {
                echo "<p>$key: $value</p>";
            }
        }
    ?>

    <p>Message Body:</p>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            foreach ($_POST as $key => $value) {
                echo "<p>$key: $value</p>";
            }
        }
    ?>
</body>
</html>