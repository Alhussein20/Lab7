<?php
session_start();

if (!isset($_SESSION['matric'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Authentication Error</title>
</head>
<body>
    <h2>Authentication Error</h2>
    <?php
    // Display error message from the URL parameter
    if (isset($_GET["error"])) {
        echo "<p>" . htmlspecialchars($_GET["error"]) . "</p>";
    }
    ?>
    <p><a href="login.php">Go back to Login</a></p>
</body>
</html>
