<?php
session_start();
$_SESSION["role"] = "Guest";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login - Sewana Property Renters</title>
    <style>
        body {
            font-family: roboto;
            background: rgb(148, 187, 233);
            background: radial-gradient(circle, rgba(148, 187, 233, 1) 0%, rgba(186, 83, 255, 1) 100%);
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form action="panel.php" method="POST" class="border shadow p-3 rounded" style="width: 450px;background-color:white;">
            <select class="form-select mb-3" name="role" aria-label="Default select example">
                <option selected value="manager">Manager</option>
                <option value="supervisor">Supervisor</option>
                <option value="assistant">Assistant</option>
                <input type="submit" class="btn btn-primary" value="Login">
        </form>
    </div>
</body>

</html>