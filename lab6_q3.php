<?php
// Define the function to calculate the area
function calculateArea($width, $length) {
    return $width * $length;
}

// Example values
$width = 4;
$length = 2;

// Call the function and store the result
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
