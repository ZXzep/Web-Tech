<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    table {
        border: 1px solid black;
        text-align: center;
        height: 100px;

    }

    table th,
    td {
        border: 1px solid black;
        font-size: 30px;
        padding: 10px;
        width: 10px;
    }

    .head {
        display: flex;
        justify-content: center;
    }
</style>
<body>
<div>
        <div class="head">
            <h1>February 2022</h1>
        </div>
        <div>
            <table>
                <tr>
                    <th>Su</th>
                    <th>Mo</th>
                    <th>Tu</th>
                    <th>We</th>
                    <th>Th</th>
                    <th>Fr</th>
                    <th>Sa</th>
                </tr>
                <?php
                $k = -1;
                for ($i = 0; $i < 5; $i++) {
                    for ($j = 0; $j < 7; $j++) {
                        if ($k > 0 && $k <= 30) {
                            echo "<td>$k</td>";
                        } else {
                            echo "<td></td>";
                        }
                        $k++;
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>