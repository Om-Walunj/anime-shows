<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$file = fopen("example.txt", "w");
fwrite($file, "Hello, this is a test file.\n");
fclose($file);
?>

</body>
</html>