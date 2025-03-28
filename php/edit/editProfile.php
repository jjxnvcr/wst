<?php

include("../connector.php");

$id = $_POST["id"] ?? null;
$surname = $_POST["surname"] ?? null;
$firstName = $_POST["first-name"] ?? null;
$middleName = $_POST["middle-name"] ?? null;
$birthdate = $_POST["birthdate"] ?? null;
$email = $_POST["email"] ?? null;

$sqlQuery = "UPDATE `userprofile` SET ";
$updates = [];

if (!empty($surname)) {
    $updates[] = "Surname = '$surname'";
}
if (!empty($firstName)) {
    $updates[] = "FirstName = '$firstName'";
}
if (!empty($middleName)) {
    $updates[] = "MiddleName = '$middleName'";
}
if (!empty($birthdate)) {
    $updates[] = "Birthdate = '$birthdate'";
}
if (!empty($email)) {
    $updates[] = "Email = '$email'";
}

if (!empty($updates)) {
    $sqlQuery .= implode(", ", $updates) . " WHERE SchoolID = '$id'";
    $conn = createConnection();
    $result = query($conn, $sqlQuery);

    if ($result) {
        echo "<script>alert('Record has been updated!')</script>";
        echo "<script>window.location.href = '../../src/home/records/profileList.php';</script>";
    } else {
        echo "<script>alert('An error has occured')</script>";
        echo "<script>window.location.href = '../../src/home/records/profileList.php';</script>";
    }
} else {
    echo "<script>alert('There's nothing to update')</script>";
    echo "<script>window.location.href = '../../src/home/records/profileList.php';</script>";
}
?>
