<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab8_2</title>
</head>
<body>
    <?php
    $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-by-provinces";
    $response = file_get_contents($url);
    $result = json_decode($response);
    echo $result[0]->province;
    // foreach($result as $date){
    //     echo $date[];
    // }
    ?>
    <table>
        <tr>
            <th>ลำดับ</th>
            <th>จังหวัด</th>
            <th>ผู้ติดเชื้อ</th>
            <th>เสียชีวิต</th>
            <th>ยอดผู้ป่วยสะสม</th>
        </tr>
        <?php echo "";?>
    </table>
</body>
</html>