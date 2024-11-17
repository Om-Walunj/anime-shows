<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$json_string = '{"name":"John","age":25}';
$data = json_decode($json_string, true);
echo "Name: " . $data['name'] . ", Age: " . $data['age'];
?>

</body>
</html>