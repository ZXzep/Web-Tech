<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="POST">
        <label for="prodname">Name :</label>
        <input type="text" id="prodname" name="prodname" placeholder="Enter Product Name" required/>
        <button type="submit" name="submit">Submit</button>
    </form> -->
    <?php
    //     $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-all";
    //     $response = file_get_contents($url);
    //     $result = json_decode($response);
    
    //    foreach ($result as $case) {      
    //         echo "ข้อมูลวันที่ : $case->txn_date ";    
    //         echo "จำนวนผู้ติดเชื้อ : $case->new_case "; 
    //         echo "ผู้ติดเชื้อทั้งหมด : $case->total_case ";
    //         echo "คนตาย : $case->new_death ";
    //         echo "<br>";            
    //     } 
        $url = "http://10.0.15.20/lab8/restapis/superheroes";    
        $response = file_get_contents($url);
        $result = json_decode($response);
    
        echo "Squad Name : $result->squadName<br>";
        echo "Home Town : $result->homeTown<br>";    
        foreach ($result->members as $member) {  
            echo "$member->name ( $member->age )<br>";
            foreach ($member->powers as $power){
                echo "<t>-- $power<br>";
            }     
        }
    ?>
</body>
</html>