<?php

function calculateArea($width, $length) {
    return $width * $length;
}

$width = 4;
$length = 2;

$area = calculateArea($width, $length);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rectangle Area</title>
</head>
<body>

<p>The area of a rectangle with a width of <?php echo $width; ?> and <?php echo $length; ?> is <?php echo $area; ?></p>

</body>
</html>
