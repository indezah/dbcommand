<?php
session_start();
include "./dbconn.php";
$command = $_GET['command'];

if ($command == 1) {
    $sql = "DELETE FROM assistant WHERE employee_id = 'E0012';";
} else if ($command == 2) {
    $sql = "DELETE FROM branch WHERE branch_no = 'BR400';";
} else if ($command == 3) {
    $sql = "DELETE FROM client WHERE branch_no = 'BR300';";
} else if ($command == 4) {
    $sql = "DELETE FROM employee WHERE employee_id = 'E0017';";
} else if ($command == 5) {
    $sql = "DELETE FROM property WHERE proposed_rental = 40000;";
} else if ($command == 6) {
    $sql = "DELETE FROM property_requirement WHERE client_no = 'C0003' and property_type = 'commercial';";
}

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("Location: ./panel.php?gstatus=Sucessfully Executed");
} else {
    $er = mysqli_error($conn);
    mysqli_close($conn);
    header("Location: ./panel.php?bstatus=$er");
}
