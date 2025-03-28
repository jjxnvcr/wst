<?php

include("../connector.php");

$id = $_REQUEST["id"];
$surname = $_REQUEST["surname"];
$firstName = $_REQUEST["first-name"];
$middleName = $_REQUEST["middle-name"];
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

$sqlQuery = "INSERT INTO useraccount VALUES ('$id', '$surname', '$firstName', '$middleName', '$username', '$password')";

if (query(createConnection(), $sqlQuery)) {
    echo "<script>alert('Record has been added to the table!')</script>";
    echo "<script>window.location.href = '../../src/home/records/accountList.php';</script>";
} else {
    echo "<script>alert('An error has occured.')</script>";
    echo "<script>window.location.href = '../../src/home/records/accountList.php';</script>";
}
?>