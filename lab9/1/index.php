<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <thead>
                <?php
                    // Connect to Database 
                    class MyDB extends SQLite3
                    {
                        function __construct()
                        {
                            $this->open('customers.db');
                        }
                    }

                    // Open Database 
                    $db = new MyDB();

                    // SQL SELECT 
                    $sql ="SELECT * from customers";

                    $ret = $db->query($sql);
                    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                        echo "<tr>";
                        echo "<td>".$row['CustomerId']."</td>";
                        echo "<td>".$row['FirstName']." ".$row['LastName']."</td>";
                        echo "<td>".$row['Address']."</td>";
                        echo "<td>".$row['Phone']."</td>";
                        echo "<td>".$row['Email']."</td>";
                        echo "</tr>";
                    }

                    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                        $last = $row['CustomerId'];
                    }
                    $sql = "DELETE from customers where CustomerId = $last";
                    $ret = $db->exec($sql);

                    // Close database
                    $db->close();
                ?>
            </thead>
        </table>
        <form action="index.php">
            <button type="submit" class="btn btn-primary mb-5">Delete last row</button>
        </form>
    </div>
</body>
<style>
    body {
        font-family: 'Kanit', sans-serif;
    }
</style>

=======
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<?php

class MyDB extends SQLite3 {
   function __construct() {
      $this->open('customers.db');
   }
}
$db = new MyDB();
$sql ="SELECT * from CUSTOMERS";
$ret = $db->query($sql);
echo '<table class="table"><thead><tr><th scope="col">ID</th><th scope="col">Name</th><th scope="col">Address</th><th scope="col">Phone</th><th scope="col">Email</th></tr></thead><tbody><tr>';
while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
   echo '<tr><td>'.$row['CustomerId'].'</td><td>'.$row['FirstName'].' '.$row['LastName'].'</td><td>'.$row['Address'].' '.$row['City'].' '.$row['State'].$row['Country'].' '.$row['PostalCode'].'</td>'.'<td>'.$row['Phone'].' '.$row['Fax'].'</td>'.'<td>'.$row['Email'].'</td>';
}
echo '</table>';
if ($_GET) {
   $em_id = $db->querySingle("SELECT * FROM CUSTOMERS ORDER BY CustomerId DESC LIMIT 1;");
   $sql = "DELETE from CUSTOMERS where CustomerId = $em_id;";
   $ret = $db->exec($sql);
}
$db->close();
?>
<form action="index.php" method="get">
<input type="submit" name="insert" value="Delete last row"/>
</form>
</body>
>>>>>>> 34b3d57d259d272dd8c13e3bf5c6c6bbf9cd3c70
</html>