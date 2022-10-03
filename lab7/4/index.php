<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab7/4</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        display: grid;
        grid-template-columns: 24% 24% 24% 24%;
        grid-gap: 1%;
        background-color: black;
    }

    img {
        width: 100%;
        border-radius: 10px;
        margin: 2%;
    }
</style>

<body>
    <?php
    echo "
    <div>
        <img src=\"img/1_1.png\">
        <img src=\"img/1_2.png\">
        <img src=\"img/1_3.png\">
        <img src=\"img/1_4.png\">
        <img src=\"img/1_5.png\">
    </div>
    <div>
        <img src=\"img/2_1_1.png\">
        <img src=\"img/2_2.png\">
        <img src=\"img/2_3.png\">
        <img src=\"img/2_4.png\">
        <img src=\"img/2_5.png\">
        <img src=\"img/2_1_2.png\">
    </div>
    <div>
        <img src=\"img/3_1.png\">
        <img src=\"img/3_2.png\">
        <img src=\"img/3_3.png\">
        <img src=\"img/3_4.png\">
        <img src=\"img/3_5.png\">
    </div>
    <div>
        <img src=\"img/4_1_1.png\">
        <img src=\"img/4_2.png\">
        <img src=\"img/4_3.png\">
        <img src=\"img/4_4.png\">
        <img src=\"img/4_5.png\">
        <img src=\"img/4_1_2.png\">
    </div>
    "
    ?>
</body>

</html>