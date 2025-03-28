<?php

include("../connector.php");

$id = $_POST["id"];

$sqlQuery = "DELETE FROM `useraccount` WHERE SchoolID = '$id'";
$conn = createConnection();   
$result = safe_query($conn, $sqlQuery);

if ($result) {
    mysqli_commit($conn);
    echo "<script>alert('Record has been deleted!')</script>";
    echo "<script>window.location.href = '../../src/home/records/accountList.php';</script>";
} else {
    echo "<script>alert('An error has occured')</script>";
    echo "<script>window.location.href = '../../src/home/records/accountList.php';</script>";
}