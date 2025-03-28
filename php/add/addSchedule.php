<?php

include("../connector.php");

$id = $_REQUEST["school-id"];
$surname = $_REQUEST["surname"];
$firstName = $_REQUEST["first-name"];
$middleName = $_REQUEST["middle-name"];
$course = $_REQUEST["course"];
$yearLvl = $_REQUEST["year"];

$sqlQuery = "INSERT INTO userschedule VALUES ('$id', '$surname', '$firstName', '$middleName', '$course', '$yearLvl')";

if (query(createConnection(), $sqlQuery)) {
    echo "<script>alert('Record has been added to the table!')</script>";
    echo "<script>window.location.href = '../../src/home/records/scheduleList.php';</script>";
} else {
    echo "<script>alert('An error has occured.')</script>";
    echo "<script>window.location.href = '../../src/home/records/scheduleList.php';</script>";
}
?>