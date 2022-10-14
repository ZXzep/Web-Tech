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
        <h1>Employee Form</h1>
        <form method="POST">
            <div class="form-group">
                <label>ID :</label>
                <input name="ID" class="form-control" type="text" style="width: 10%;">
            </div>
            <div class="form-group">
                <label>Name :</label>
                <input name="Name" class="form-control" type="text" style="width: 40%;">
            </div>
            <div class="form-group">
                <label>Age :</label>
                <input name="Age" class="form-control" type="text" style="width: 5%;">
            </div>
            <div class="form-group">
                <label>Salary :</label>
                <input name="Salary" class="form-control" type="text" style="width: 10%;">
            </div>
            <div class="form-group">
                <label>Address :</label>
                <textarea name="Address" class="form-control" type="text" rows="4" style="width: 40%;"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
    <br><br><br>
    <div>
        <h1>List of Employee</h1>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Age</td>
                    <td>Address</td>
                    <td>Salary</td>
                </tr>
            </thead>
            <thead>
                <?php
                    class MyDB extends SQLite3
                    {
                        function __construct()
                        {
                            $this->open('company.db');
                        }
                    }
                    $db = new MyDB();
                    $sql = <<<EOF
              CREATE TABLE COMPANY
              (ID INT PRIMARY KEY     NOT NULL,
              NAME           TEXT    NOT NULL,
              AGE            INT     NOT NULL,
              ADDRESS        CHAR(50),
              SALARY         REAL);
            EOF;
                    if (isset($_POST['ID'])) {
                        $id = $_POST['ID'];
                    }
                    if (isset($_POST['Name'])) {
                        $name = $_POST['Name'];
                    }
                    if (isset($_POST['Age'])) {
                        $age = $_POST['Age'];
                    }
                    if (isset($_POST['Salary'])) {
                        $salary = $_POST['Salary'];
                    }
                    if (isset($_POST['Address'])) {
                        $address = $_POST['Address'];
                        $sql = <<<EOF
                        INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
                        VALUES ($id,'$name',$age,'$address',$salary);
                        EOF;
                        $ret = $db->exec($sql);
                    }
                    
                    $sql = "SELECT * from COMPANY";
        
                    $ret = $db->query($sql);
                    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                        echo "
                        <tr>
                        <td>" . $row['ID'] . "</td>
                        <td>" . $row['NAME'] . "</td>
                        <td>" . $row['AGE'] . "</td>
                        <td>" . $row['ADDRESS'] . "</td>
                        <td>" . $row['SALARY'] . "</td>
                        </tr>
                        ";
                    }
                ?>
            </thead>
        </table>
    </div>
</body>
<style>
    body{
        font-family: 'Kanit', sans-serif;
    }
    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }
    .form-control {
        display: inline-block;
    }
</style>
</html>