<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <table class="table w-50">
        <tr>
            <th>ลำดับ</th>
            <th>จังหวัด</th>
            <th>ผู้ติดเชื้อ</th>
            <th>เสียชีวิต</th>
            <th>ยอดผู้ป่วยสะสม</th>
        </tr>
    <?php
        $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-by-provinces";
        $response = file_get_contents($url);
        $result = json_decode($response, true);

        $date = array_filter($result, function ($item) {
            return $item['txn_date'] == '2022-09-' . rand(1, 31);
        });

        $i = 0;
        foreach ($date as $result){
            $i++;
            echo "<tr>";
            echo "<td>" . $i. "</td>";
            echo "<td>" . $result["province"] . "</td>";
            echo "<td>" . $result["new_case"] . "</td>";
            echo "<td>" . $result["new_death"] . "</td>";
            echo "<td>" . $result["total_case"] . "</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
<Style>
    body{
        font-family: 'Prompt', sans-serif;

    }
</Style>
</html>