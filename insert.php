<?php
session_start();
include "./dbconn.php";
$command = $_GET['command'];

if ($command == 1) {
    $sql = "INSERT INTO employee(employee_id, name, salary, gender, dob, nic, contact_no, start_date, branch_no, job_type)
    VALUES('E0012', 'Nimal Rathnayaka', 50000, 'M', '1968-10-21', '689103453V', '0702845672', '2009-05-13', 'BR100', 'Assistant');";
} else if ($command == 2) {
    $sql = "INSERT INTO branch(branch_no, contact_no, addreass, email) VALUES('BR100', '0112345678', 'No. 147/A', 'Galle Road', 'Colombo 03', 'sewanabr100@gmail.com');";
}

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("Location: ./panel.php?gstatus=Sucessfully Executed");
} else {
    $er = mysqli_error($conn);
    mysqli_close($conn);
    header("Location: ./panel.php?bstatus=$er");
}
