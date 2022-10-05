<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div class="form-group"> 
            <label for="prodname">From :</label>
            <select id="selectin" class="form-select">
                <option value="thb">THB</option>
                <option value="jpy">JPY</option>
                <option value="cny">CNY</option>
                <option value="sgd">SGD</option>
                <option value="usd">USD</option>
            </select>
            <input type="text" class="form-control small" id="moneyin" name="moneyin" placeholder="Enter money" required/>
        <div>
        <div class="form-group"> 
            <label for="prodname">To :</label>
            <select id="selectout" class="form-select">
                <option value="thb">THB</option>
                <option value="jpy">JPY</option>
                <option value="cny">CNY</option>
                <option value="sgd">SGD</option>
                <option value="usd">USD</option>
            </select>
            <input type="text" class="form-control" id="moneyout" name="moneyout" required/>
        <div>
        <div class="form-group">
            <button type="button" class="btn btn-primary" name="submit">Convert</button>
        </div>
    </form>

    <?php
        $url = "http://10.0.15.20/lab8/restapis/currencyrate";    
        $response = file_get_contents($url);
        $result = json_decode($response);
    
        $ans = 0;
        // if ()  
        foreach ($result->rates as $rate) {  
            
            echo "$rate<br>";
            
        }
    ?>
</body>
</html>