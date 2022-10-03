<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <title>Lab2_7</title>
    <style>
        table{
            border: 2px solid;
            width:50%;
            margin-left: 25%;
            background-color: black;
            font-family: 'Mitr', sans-serif;
        }
        tr,td{
            border: 2px solid pink;
            width:5rem;
            height:5rem;
            text-align: center;
            font-size: 2rem;
            color:pink;
        }
        
    </style>
</head>

<body>
<?php include 'calendar.php' ?>
    <table>
        <tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thur</th>
            <th>Fri</th>
            <th>Sat</th>

        </tr>
        <?php foreach ($weeks as $week) {
                    echo $week;
                } ?>
    </table>
</body>

</html>