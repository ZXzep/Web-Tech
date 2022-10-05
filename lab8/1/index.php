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
            <label>From :</label>
            <select id="select_from">
                <option value="thb" selected>THB</option>
                <option value="jpy">JPY</option>
                <option value="cny">CNY</option>
                <option value="sgd">SGD</option>
                <option value="usd">USD</option>
            </select>
            <input type="text" id="money_from" name="moneyin" placeholder="Enter money" required/>
        </div>

        <div class="form-group">
            <label for="prodname">To :</label>
            <select id="select_to">
                <option value="thb">THB</option>
                <option value="jpy">JPY</option>
                <option value="cny">CNY</option>
                <option value="sgd" selected>SGD</option>
                <option value="usd">USD</option>
            </select>
            <input type="text" id="money_to" name="moneyout" required/>
        </div>
        
        <div class="form-group">
            <button type="button" class="btn btn-primary" name="submit">Convert</button>
        </div>
    </form>

    <?php
        $url = "http://10.0.15.20/lab8/restapis/currencyrate";    
        $response = file_get_contents($url);
        $result = json_decode($response);
        $rate = $result->rates;
    
        $ans = 0;
        if (isset($_POST['select_from'])) {
            $money_from = $_POST['select_from'];
            $from = $rate->$money_from;
    
            $money = $_POST['money_from'];
    
            $money_to = $_POST['select_to'];
            $to = $rate->$money_to;
        }
    ?>
    <script>
        document.getElementById("money_to").innerHTML = "<?php echo round($money / $from * $to, 2) ?>";
        document.getElementById("select_from").value = "<?php echo $money_from ?>"
        document.getElementById("select_to").value = "<?php echo $money_to ?>"
        document.getElementById("money_from").value = "<?php echo $money ?>"
    </script>
</body>
</html>