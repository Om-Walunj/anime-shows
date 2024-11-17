<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$users = array(
    array("name" => "John", "email" => "john@example.com"),
    array("name" => "Jane", "email" => "jane@example.com")
);

foreach ($users as $user) {
    echo "Name: " . $user['name'] . ", Email: " . $user['email'] . "\n";
}
?>

</body>
</html>