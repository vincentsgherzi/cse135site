<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_session'])) {
    session_unset();
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']); 
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Test</title>
</head>
<body>
    <h1 align="center">Session Test page 2</h1>
  
    <div>your given name is <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?></div>

    <li><a href="../index.html">Return to Home</a></li>
    <form action="" method="POST">
        <input type="hidden" name="delete_session" value="1">
        <button type="submit">Delete session</button>
    </form>
</body>
</html>
