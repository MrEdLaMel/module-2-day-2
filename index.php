<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My great PHP work</title>
</head>

<body>
    <ul>
        <?php
        $students = ['amy', 'stoney', 'chris', 'me'];
        foreach ($students as $student) {
            echo "<li>$student</li>";
        }
        ?>
    </ul>
</body>

</html>