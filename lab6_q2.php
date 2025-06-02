<?php
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21,
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20,
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22,
    ],
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Table</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        th {
            font-weight: bold;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>
    <?php foreach ($students as $student): ?>
    <tr>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['program']; ?></td>
        <td><?php echo $student['age']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>

