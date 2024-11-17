<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$data = array("name" => "John", "age" => 25);
$json_data = json_encode($data);
echo $json_data;
?>

</body>
</html>