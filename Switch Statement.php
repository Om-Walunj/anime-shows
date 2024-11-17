<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of the week!";
        break;
    case "Friday":
        echo "Weekend is near!";
        break;
    default:
        echo "Midweek!";
}
?>

</body>
</html>