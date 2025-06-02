<!DOCTYPE html>
<html lang="en">
<head>
    <title> My Profile</title>
</head>
<body>

<?php  
    $name = "Qamarina Hanani binti Ajma'in";
    $matric = "AI230163";
    $course = "Bachelor of Information Technology";
    $year = "Year 3";
    $address = "Taman Manis, Parit Raja";
?>

<table border="1">
    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
    <tr><td>Matric Number</td><td><?php echo $matric; ?></td></tr>
    <tr><td>Course</td><td><?php echo $course; ?></td></tr>
    <tr><td>Year of Study</td><td><?php echo $year; ?></td></tr>
    <tr><td>Address</td><td><?php echo $address; ?></td></tr>
</table>

</body>
</html>