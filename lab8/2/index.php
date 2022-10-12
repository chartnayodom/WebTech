<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <title>Lab8_2</title>
    <style>
        * {
            font-family: 'Mitr', sans-serif;
        }

        body {
            width: 60%;
            margin-left: 20%;
        }
        table,tr{
            width:100%;
            text-align: center;
            
            
        }
        td,th{
            border-bottom: 1px solid grey;
        }
    </style>
</head>

<body>
    <?php
    $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-by-provinces";
    $response = file_get_contents($url);
    $result = json_decode($response);
    // echo $result[0]->province;
    $d = rand(1, 30);
    $date = "2022-01-$d";
    $i = 1;
    ?>
    <h1><?php echo "รายงานยอดผู้ป่วย Covid-19 ประจำวันที่ ".$d." กันยายน 2565"?></h1>
    <table>
        <tr>
            <th>ลำดับ</th>
            <th>จังหวัด</th>
            <th>ผู้ติดเชื้อ</th>
            <th>เสียชีวิต</th>
            <th>ยอดผู้ป่วยสะสม</th>
        </tr>
        <?php foreach ($result as $re) {
            // echo $re->province;
            if ($re->txn_date == $date) {
                echo "<tr>
                <td>$i</td>
                <td>$re->province</td>
                <td>$re->new_case</td>
                <td>$re->new_death</td>
                <td>$re->total_case</td>
                </tr>";
                $i++;
            }
        }; ?>
    </table>
</body>

</html>