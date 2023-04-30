<!DOCTYPE html>
<html>
<head>
	<title>Hello, PHP</title>
</head>

<body>
    <?php
    $message = "Hello World from PHP!";

    $date = date("Y-m-d");
    $ip_address = $_SERVER['REMOTE_ADDR'];

    $response = array(
        "message" => $message,
        "date" => "Today's date is " . $date,
        "ipAddress" => $ip_address
    );

    // Create a div and concatenate the key-value pairs inside it
    echo '<div>';
    foreach($response as $key => $value) {
        echo "<p>$key: $value</p>";
    }
    echo '</div>';
    ?>
</body>
</html>
