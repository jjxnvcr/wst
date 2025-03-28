<?php

include("../connector.php");

$id = $_REQUEST["school-id"];
$surname = $_REQUEST["surname"];
$firstName = $_REQUEST["first-name"];
$middleName = $_REQUEST["middle-name"];
$birthdate = $_REQUEST["birthdate"];
$email = $_REQUEST["email"];

$sqlQuery = "INSERT INTO userprofile VALUES ('$id', '$surname', '$firstName', '$middleName', '$birthdate', '$email')";

if (query(createConnection(), $sqlQuery)) {
    echo "<script>alert('Record has been added to the table!')</script>";
    echo "<script>window.location.href = '../../src/home/records/profileList.php';</script>";
} else {
    echo "<script>alert('An error has occured.')</script>";
    echo "<script>window.location.href = '../../src/home/records/profileList.php';</script>";
}
?>