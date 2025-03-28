<?php

include("../connector.php");

$id = $_POST["id"];
$surname = $_POST["surname"];
$firstName = $_POST["first-name"];
$middleName = $_POST["middle-name"];
$username = $_POST["username"];
$password = $_POST["password"];

$sqlQuery = "UPDATE `useraccount` SET ";
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
if (!empty($username)) {
    $updates[] = "Username = '$username'";
}
if (!empty($password)) {
    $updates[] = "Password = '$password'";
}

if (!empty($updates)) {
    $sqlQuery .= implode(", ", $updates) . " WHERE SchoolID = '$id'";
    $conn = createConnection();
    $result = query($conn, $sqlQuery);

    if ($result) {
        echo "<script>alert('Record has been updated!')</script>";
        echo "<script>window.location.href = '../../src/home/records/accountList.php';</script>";
    } else {
        echo "<script>alert('An error has occured')</script>";
        echo "<script>window.location.href = '../../src/home/records/accountList.php';</script>";
    }
} else {
    echo "<script>alert('There's nothing to update')</script>";
    echo "<script>window.location.href = '../../src/home/records/accountList.php';</script>";
}
?>