<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Function to calculate sum
function sum($a, $b) {
    return $a + $b;
}

$result = sum(10, 20);
echo "Sum: " . $result . "\n";

// Function with default parameter
function greet($name = "Guest") {
    echo "Hello, $name!\n";
}

greet("Alice");
greet();
?>

</body>
</html>