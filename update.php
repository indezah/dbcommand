<?php
session_start();
include "./dbconn.php";
$command = $_GET['command'];

if ($command == 1) {
    $sql = "UPDATE assistant SET supervisor_no = 'S0002' WHERE employee_no = 'E0016';";
} else if ($command == 2) {
    $sql = "UPDATE branch SET contact_no = '0117463081', address = 'No. 201/5, Galle Road, Colombo 03'WHERE branch_no = 'BR100';";
} else if ($command == 3) {
    $sql = "UPDATE client SET nic = '198457094285' WHERE nic = '845709428V' and full_name = 'Kumari Ekanayake';";
} else if ($command == 4) {
    $sql = "UPDATE employee SET job_type = 'Supervisor' and salary = 70000 WHERE employee_id = 'E0016';";
} else if ($command == 5) {
    $sql = "UPDATE employee SET salary = salary * 0.1 WHERE start_date < '2010-01-01';";
} else if ($command == 6) {
    $sql = "UPDATE property SET proposed_rental = 70000 WHERE property_no = 'P0004';";
} else if ($command == 7) {
    $sql = "UPDATE property_requirement SET max_rent = 60000 WHERE requirement_no = 'R0003';";
}
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("Location: ./panel.php?gstatus=Sucessfully Executed");
} else {
    $er = mysqli_error($conn);
    mysqli_close($conn);
    header("Location: ./panel.php?bstatus=$er");
}
