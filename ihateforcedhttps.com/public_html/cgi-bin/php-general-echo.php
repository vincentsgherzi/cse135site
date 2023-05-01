<!DOCTYPE html>
<html>
<head>
    <title>General Request Echo</title>
</head>
<body>
    <h1 align="center">General Request Echo</h1>
    <p>Request Method: <?php echo $_SERVER["REQUEST_METHOD"]; ?></p>
    <p>Protocol: <?php echo $_SERVER["SERVER_PROTOCOL"]; ?></p>
    <p>Query: <?php echo json_encode($_GET); ?></p>
    <p>Message Body: <?php echo json_encode($_POST); ?></p>
</body>
</html>
