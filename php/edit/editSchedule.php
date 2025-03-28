<?php

include("../connector.php");

$id = $_POST["id"];
$surname = $_POST["surname"];
$firstName = $_POST["first-name"];
$middleName = $_POST["middle-name"];
$course = $_POST["course"];
$yearLvl = $_POST["year"];

$sqlQuery = "UPDATE `userschedule` SET ";
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
if (!empty($course)) {
    $updates[] = "Course = '$course'";
}
if (!empty($yearLvl)) {
    $updates[] = "YearLevel = '$yearLvl'";
}

if (!empty($updates)) {
    $sqlQuery .= implode(", ", $updates) . " WHERE SchoolID = '$id'";
    $conn = createConnection();
    $result = query($conn, $sqlQuery);

    if ($result) {
        echo "<script>alert('Record has been updated!')</script>";
        echo "<script>window.location.href = '../../src/home/records/scheduleList.php';</script>";
    } else {
        echo "<script>alert('An error has occured')</script>";
        echo "<script>window.location.href = '../../src/home/records/scheduleList.php';</script>";
    }
} else {
    echo "<script>alert('There's nothing to update')</script>";
    echo "<script>window.location.href = '../../src/home/records/scheduleList.php';</script>";
}
?>