<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewana Property Renters</title>
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
            $sql = "SELECT employee_id, supervisor_no FROM assistant WHERE employee_id = 'E0015';";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo ("$sql<br/>");
                echo ("<table class='table table-striped' style='border:1px solid black;'><tr><th scope='col'>Employee_ID</th><th>Supervisor_ID</th></tr>");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["employee_id"] . " </td><td>" . $row["supervisor_no"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
        } else if ($command == 2) {
            $sql = "SELECT contact_no, email, address FROM branch WHERE branch_no = 'BR100';";
            $result = mysqli_query($conn, $sql);
            echo ("$sql<br/>");
            if (mysqli_num_rows($result) > 0) {
                echo ("<table class='table table-striped' style='border:1px solid black;'><tr><th>CONTACT_NO</th><th>EMAIL</th></tr>");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["contact_no"] . " </td><td>" . $row["email"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
        } else if ($command == 3) {
            $sql = "SELECT * FROM branch WHERE address = 'No. 71A, Matara Road, Ahangama.';";
            $result = mysqli_query($conn, $sql);
            echo ("$sql<br/>");
            if (mysqli_num_rows($result) > 0) {
                echo ("<table class='table table-striped' style='border:1px solid black;'><tr><th>branch_no</th><th>contact_no</th><th>address</th><th>email</th></tr>");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["branch_no"] . " </td><td>" . $row["contact_no"] . " </td><td>" . $row["address"] . " </td><td>" . $row["email"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
        } else if ($command == 4) {
            $sql = "SELECT * FROM client WHERE registered_date LIKE '2020-%-%';";
            $result = mysqli_query($conn, $sql);
            echo ("$sql<br/>");
            if (mysqli_num_rows($result) > 0) {

                echo ("<table class='table table-striped' style='border:1px solid black;'><tr><th>client_no</th><th>full_name</th><th>nic</th><th>email</th><th>registered_date</th><th>branch_no</th><th>manager_no</th></tr>");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["client_no"] . " </td><td>" . $row["full_name"] . " </td><td>" . $row["nic"] . " </td><td>" . $row["email"] . " </td><td>" . $row["registered_date"] . " </td><td>" . $row["branch_no"] . " </td><td>" . $row["manager_name"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
        } else if ($command == 5) {
            $sql = "SELECT client_no, full_name, email FROM client;";
            $result = mysqli_query($conn, $sql);
            echo ("$sql<br/>");
            if (mysqli_num_rows($result) > 0) {
                echo ("<table class='table table-striped' style='border:1px solid black;'><tr><th>client_no</th><th>full_name</th><th>email</th></tr>");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["client_no"] . " </td><td>" . $row["full_name"] . " </td><td>" . $row["email"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
        } else if ($command == 6) {
            $sql = "SELECT employee_id, name, salary, job_type FROM employee WHERE salary > 50000 ORDER BY salary DESC;";
            $result = mysqli_query($conn, $sql);
            echo ("$sql<br/>");
            if (mysqli_num_rows($result) > 0) {

                echo ("<table class='table table-striped' style='border:1px solid black;'><tr><th>Employee_ID</th><th>Name</th><th>Salary</th><th>Job Type</th> </tr>");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["employee_id"] . " </td><td>" . $row["name"] . " </td><td> " . $row["salary"] . " </td><td>" .  $row["job_type"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
        }
        mysqli_close($conn);
        ?>
        <a class="btn btn-primary" href="panel.php#select">Go Back</a>
    </div>
</body>

</html>