<?php
session_start();

if (isset($_POST["role"])) {
    $_SESSION["role"] = $_POST["role"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewana Property Renters</title>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: rgb(131, 58, 180);
            background: linear-gradient(232deg, rgba(131, 58, 180, 1) 0%, rgba(7, 0, 89, 1) 91%);
            background-attachment: fixed;
        }

        h1 {
            color: whitesmoke;
        }

        .btn {
            max-width: 150px;
            margin-bottom: 20px;
        }

        p {

            margin-bottom: 10px;
        }

        #user {
            background-color: white;
            width: auto;
            text-align: center;
            text-transform: capitalize;
        }

        .sect {
            padding-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1 class="h1 pt-4 pb-4" style="text-align:center">Sewana Property Renters</h1>

    <div class="container">
        <div id="user" class="d-flex justify-content-center align-items-center p-4 mb-4 rounded-3 shadow-sm " style="background-color:rgba(0, 0, 0, 0.3); color:white;">
            <p style="margin: 0px 0px 0px 0px">Logged in as : <?= $_SESSION['role'] ?></p><a style="margin-bottom: 0px; margin-left: 30px; " class="mt-1  btn btn-danger" href="logout.php">Logout</a>
        </div>
        <?php if (isset($_GET['bstatus'])) { ?>
            <div class="sticky-top mb-4 container alert alert-danger shadow" role="alert">
                <?= $_GET['bstatus'] ?>
            </div>
        <?php } ?>
        <?php if (isset($_GET['gstatus'])) { ?>
            <div class="sticky-top mb-4 container alert alert-success shadow" role="alert">
                <?= $_GET['gstatus'] ?>
            </div>
        <?php } ?>
        <div class="d-flex flex-column p-4 mb-4 rounded shadow-sm" style="background-color:white;">
            <h4>Sample Insert Statements</h4>
            <p>[1] INSERT INTO branch(branch_no, contact_no, addreass, email) VALUES(‘BR500’, ‘0352109468’, ‘No. 15/B, Ranwala Junction, Kegalle’, ‘sewanabr500@gmail.com’);</p> <a class="btn btn-primary" href="insert.php?command=1">Click to execute</a>
            <p>[2] INSERT INTO employee(employee_id, name, salary, gender, dob, nic, contact_no, start_date, branch_no, job_type) VALUES(‘E0030’, ‘Ruwani Karunanayaka’, 37000, ‘F’, 1998-12-05, ‘199865240482’, ‘0719402855’, 2021-05-13, ‘BR400’, ‘Assistant’);</p> <a class="btn btn-primary" href="insert.php?command=2">Click to execute</a>
            <p>[3] INSERT INTO property_owner(owner_id, contact_no, email, address) VALUES(‘O2127’, ‘0720485375’, ‘mdnwansapura7834@gmail.com’, ‘No. 24, Balana Road, Kadugannawa’);</p> <a class="btn btn-primary" href="insert.php?command=3">Click to execute</a>
            <p>[4] INSERT INTO property(property_no, proposed_rental, type, number_of_rooms, address, owner_id) VALUES(‘P0025’, ‘45000’, ‘flat’, ‘3’, ‘No. 469/1, Temple Road, Kandy’, ‘O2127’);</p> <a class="btn btn-primary" href="insert.php?command=4">Click to execute</a>
            <p>[5] INSERT INTO client(client_no, full_name, nic, email, registered_date, branch_no, manager_name) VALUES(‘C0175’, ‘Subhani Galigamuwa’, ‘944529441V’, ‘subhaniama94g@gmail.com’, 2020-10-21, ‘BR500’, ‘Kumara Silva’);</p> <a class="btn btn-primary" href="insert.php?command=5">Click to execute</a>
            <p>[6] INSERT INTO lease(lease_no, client_no, property_no, rent_start, rent_finish, monthly_rent, payment_method) VALUES('L0010', ‘C0175’, ‘P0017’, '2021-03-15', '2021-10-16', 5000, 'cash');</p> <a class="btn btn-primary" href="insert.php?command=6">Click to execute</a>
        </div>
        <div class="d-flex flex-column p-4 mb-4 rounded shadow-sm" style=" background-color:white;">
            <h4>Sample Update Statements</h4>
            <p>[1] UPDATE assistant SET supervisor_no = 'S0002' WHERE employee_no = 'E0016';</p> <a class="btn btn-primary" href="update.php?command=1">Click to execute</a>
            <p>[2] UPDATE branch SET contact_no = '0117463081', address = 'No. 201/5, Galle Road, Colombo 03' WHERE branch_no = 'BR100'; </p> <a class="btn btn-primary" href="update.php?command=2">Click to execute</a>
            <p>[3] UPDATE client SET nic = '198457094285' WHERE nic = '845709428V' and full_name = 'Kumari Ekanayake';</p> <a class="btn btn-primary" href="update.php?command=3">Click to execute</a>
            <p>[4] UPDATE employee SET job_type = 'Supervisor' and salary = 70000 WHERE employee_id = 'E0016';</p> <a class="btn btn-primary" href="update.php?command=4">Click to execute</a>
            <p>[5] UPDATE employee SET salary = salary * 0.1 WHERE start_date < '2010-01-01' ;</p> <a class="btn btn-primary" href="update.php?command=5">Click to execute</a>
                    <p>[6] UPDATE property SET proposed_rental = 70000 WHERE property_no = 'P0004';</p> <a class="btn btn-primary" href="update.php?command=6">Click to execute</a>
                    <p>[7] UPDATE property_requirement SET max_rent = 60000 WHERE requirement_no = 'R0003';</p> <a class="btn btn-primary" href="update.php?command=7">Click to execute</a>
        </div>
        <div id="select" class="d-flex flex-column sec p-4 mb-4  rounded shadow-sm" style="background-color:white;">
            <h4>Sample Select Statements</h4>
            <p>[1] SELECT employee_id, supervisor_no FROM assistant WHERE employee_id = 'E0015';</p> <a class="btn btn-primary" href="select.php?command=1">Click to execute</a>
            <p>[2] SELECT contact_no, email, address FROM branch WHERE branch_no = 'BR100';</p> <a class="btn btn-primary" href="select.php?command=2">Click to execute</a>
            <p>[3] SELECT * FROM branch WHERE address = 'No. 71A, Matara Road, Ahangama.';</p> <a class="btn btn-primary" href="select.php?command=3">Click to execute</a>
            <p>[4] SELECT * FROM client WHERE registered_date = '2019-%-%';</p> <a class="btn btn-primary" href="select.php?command=4">Click to execute</a>
            <p>[5] SELECT client_no, full_name, email FROM client;</p> <a class="btn btn-primary" href="select.php?command=5">Click to execute</a>
            <p>[6] SELECT employee_id, name, salary, job_type FROM employee WHERE salary > 50000 ORDER BY salary DESC;</p> <a class="btn btn-primary" href="select.php?command=6">Click to execute</a>

        </div>
        <div class="d-flex flex-column sec p-4 mb-4  rounded shadow-sm" style="background-color:white ;">
            <h4>Sample Delete Statements</h4>
            <p>[1] DELETE FROM assistant WHERE employee_no = 'E0012';</p> <a class="btn btn-primary" href="delete.php?command=1">Click to execute</a>
            <p>[2] DELETE FROM branch WHERE branch_no = 'BR400';</p> <a class="btn btn-primary" href="delete.php?command=2">Click to execute</a>
            <p>[3] DELETE FROM client WHERE branch_no = 'BR300';</p> <a class="btn btn-primary" href="delete.php?command=3">Click to execute</a>
            <p>[4] DELETE FROM employee WHERE employee_id = 'E0017';</p> <a class="btn btn-primary" href="delete.php?command=4">Click to execute</a>
            <p>[5] DELETE FROM property WHERE proposed_rental = 40000;</p> <a class="btn btn-primary" href="delete.php?command=5">Click to execute</a>
            <p>[6] DELETE FROM property_requirement WHERE client_no = 'C0003' and property_type = 'commercial';</p><a class="btn btn-primary" href="delete.php?command=6">Click to execute</a>
        </div>
    </div>
</body>

</html>