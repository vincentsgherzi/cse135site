<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    header('Location: php-state-demo-two.php'); 
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Test</title>
</head>
<body>
    <h1 align="center">Session Test</h1>
  
    <form action="/cgi-bin/php-state-demo.php" method="POST">
        <label for="name-input">What is your name?</label>
        <input type="text" id="name-input" name="name">
        <button type="submit">Submit</button>
    </form>

    <li><a href="/cgi-bin/php-state-demo-two.php">Link to page 2</a></li>

</body>
</html>