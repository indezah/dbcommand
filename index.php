<?php
session_start();
$_SESSION["role"] = "Guest";
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
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login - Sewana Property Renters</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: gray;
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