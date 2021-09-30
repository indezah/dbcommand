<?php 
    session_start();
   
    if(isset($_POST["role"])){
        $_SESSION["role"] = $_POST["role"];  
    }
?>

<!DOCTYPE html>
<html lang="en">

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

        h1 {
            color: whitesmoke;
        }

        .btn {
            max-width: 150px; 
        }
        p {
            margin-bottom: 5px;
        }
        #user{
            background-color: white;
            width:auto;
            text-align: center;
            text-transform: capitalize;
        }
        .sect{
            padding-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1 class="h1 pt-4 pb-4" style="text-align:center">Sewana Property Renters</h1>
    
    <div class="container" >
    <div id="user" class="d-flex flex-column p-4 mb-4 rounded-3 shadow-sm align-items-start">Logged in as : <?= $_SESSION['role'] ?><a class="mt-1  btn btn-secondary" href="logout.php">Logout</a></div>
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
            <p>INSERT INTO USERS(role,username,pw,name) VALUES("admin","nis",1234,"Indes"); </p> <a class="btn btn-primary" href="insert.php?command=1">Click to execute</a>
            <p>INSERT INTO USERS (role,username,pw,name) VALUES('nis','niw',2134,'I45des'); </p> <a class="btn btn-primary" href="insert.php?command=2">Click to execute</a>
        </div>
        <div class="d-flex flex-column p-4 mb-4 rounded shadow-sm" style=" background-color:white;">
            <h4>Sample Update Statements</h4>
            <p>INSERT INTO USERS(role,username,pw,name) VALUES("admin","nis",1234,"Indes"); </p> <a class="btn btn-primary" href="insert.php?command=1">Click to execute</a>
            <p>INSERT INTO USERS (role,username,pw,name) VALUES('nis','niw',2134,'I45des'); </p> <a class="btn btn-primary" href="insert.php?command=2">Click to execute</a>
        </div>
        <div class="d-flex flex-column sec p-4 mb-4  rounded shadow-sm" style="background-color:white;">
            <h4>Sample Select Statements</h4>
            <p>INSERT INTO USERS(role,username,pw,name) VALUES("admin","nis",1234,"Indes"); </p> <a class="btn btn-primary" href="select.php?command=1">Click to execute</a>
            <p>INSERT INTO USERS (role,username,pw,name) VALUES('nis','niw',2134,'I45des'); </p> <a class="btn btn-primary" href="select.php?command=2">Click to execute</a>
        </div>
        <div class="d-flex flex-column sec p-4 mb-4  rounded shadow-sm" style="background-color:white ;">
            <h4>Sample Delete Statements</h4>
            <p>INSERT INTO USERS(role,username,pw,name) VALUES("admin","nis",1234,"Indes"); </p> <a class="btn btn-primary" href="insert.php?command=1&role=<?= $_GET['role'] ?>">Click to execute</a>
            <p>INSERT INTO USERS (role,username,pw,name) VALUES('nis','niw',2134,'I45des'); </p> <a class="btn btn-primary" href="insert.php?command=2&role=<?= $_GET['role'] ?>">Click to execute</a>
        </div>
    </div>
</body>

</html>