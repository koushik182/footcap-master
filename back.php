<?php

$firstname = $_post["firstname"];
$lastname = $_post["lastname"];
$email = $_post["email"];
$Phone = $_post["Phone"];
$massage = $_post["massage"];

$conn = mysqli_connect("localhost", "root", "", "customerinfo") or die("connection failed");

$sql = "INSERT INTO ctable(First_Name, Last_Name, Email, Phone, Massage) VALUES('{firstname}', '{lastname}', '{email}', '{Phone}', '{massage}')";

$result = mysqli_query($conn, $sql) or die("Query Faield!!!!");

mysqli_close($conn);

?>