<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$file = fopen("example.txt", "r");
$content = fread($file, filesize("example.txt"));
fclose($file);

echo "File content: $content\n";
?>

</body>
</html>