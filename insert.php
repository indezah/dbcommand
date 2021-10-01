<?php
session_start();
include "./dbconn.php";
$command = $_GET['command'];

if ($command == 1) {
    $sql = "INSERT INTO branch(branch_no, contact_no, address, email) VALUES('BR500', '0352109468', 'No. 15/B, Ranwala Junction, Kegalle', 'sewanabr500@gmail.com');";
} else if ($command == 2) {
    $sql = "INSERT INTO employee(employee_id, name, salary, gender, dob, nic, contact_no, start_date, branch_no, job_type) VALUES('E0030', 'Ruwani Karunanayaka', 37000, 'F', 1998-12-05, '199865240482', '0719402855', 2021-05-13, 'BR400', 'Assistant');";
} else if ($command == 3) {
    $sql = "INSERT INTO property_owner(owner_id, contact_no, email, address) VALUES('O2127', '0720485375', 'mdnwansapura7834@gmail.com', 'No. 24, Balana Road, Kadugannawa');";
} else if ($command == 4) {
    $sql = "INSERT INTO property(property_no, proposed_rental, property_type, number_of_rooms, address, owner_id) VALUES('P0025', '45000', 'flat', '3', 'No. 469/1, Temple Road, Kandy', 'O2127');";
} else if ($command == 5) {
    $sql = "INSERT INTO client(client_no, full_name, nic, email, registered_date, branch_no, manager_name) VALUES('C0175', 'Subhani Galigamuwa', '944529441V', 'subhaniama94g@gmail.com', 2020-10-21, 'BR500', 'Kumara Silva');";
} else if ($command == 6) {
    $sql = "INSERT INTO lease(lease_no, client_no, property_no, rent_start, rent_finish, monthly_rent, payment_method) VALUES('L0010', 'C0175', 'P0017', '2021-03-15', '2021-10-16', 5000, 'cash');";
}

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("Location: ./panel.php?gstatus=Sucessfully Executed");
} else {
    $er = mysqli_error($conn);
    mysqli_close($conn);
    header("Location: ./panel.php?bstatus=$er");
}
