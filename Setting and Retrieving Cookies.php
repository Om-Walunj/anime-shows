<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Set a cookie
setcookie("user", "John", time() + 3600);  // expires in 1 hour

// Retrieve the cookie
if(isset($_COOKIE["user"])) {
    echo "User: " . $_COOKIE["user"];
} else {
    echo "Cookie not set!";
}
?>

</body>
</html>