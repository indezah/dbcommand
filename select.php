<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: roboto;
            background: rgb(131, 58, 180);
            background: linear-gradient(232deg, rgba(131, 58, 180, 1) 0%, rgba(7, 0, 89, 1) 91%);
            background-attachment: fixed;
        }
        div {
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="container p-4 mt-4 mb-4 shadow rounded">
        <?php
        include "./dbconn.php";
        $command = $_GET['command'];

        if ($command == 1) {
            $sql = "SELECT * FROM employee";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

                echo ("<table class='table table-striped' style='border:1px solid black;'><tr><th scope='col'>Role</th><th>Username</th><th>Password</th><th>Name</th></tr>");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["employee_id"] . " </td><td>" . $row["name"] . "</td><td>" . $row["salary"] . "</td><td>" . $row["gender"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
        } else if ($command == 2) {
            $sql = "SELECT * FROM client";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

                echo ("<table class='table table-striped' style='border:1px solid black;'><tr><th scope='col'>Role</th><th>client</th><th>full_name</th><th>email</th><th>registered_date</th><th>branch_no</th><th>manager_name</th></tr>");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["client_no"] . " </td><td>" . $row["full_name"] . "</td><td>" . $row["nic"] . "</td><td>" . $row["email"] . "</td><td>" . $row["registered_date"] . "</td><td>" . $row["branch_no"] . "</td><td>" . $row["manager_name"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
        }
        mysqli_close($conn);
        ?>
        <a class="btn btn-primary" href="panel.php">Go Back</a>
    </div>
</body>

</html>