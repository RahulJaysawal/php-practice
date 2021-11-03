<?php
// echo 2+5+58; 
// "<br>"
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbmsrahul";
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "CREATE TABLE `book`( `sno` INT(20) NOT NULL , `name` VARCHAR(28) NOT NULL , `age` INT(30) NOT NULL , PRIMARY KEY (`sno`))";
$sql = "CREATE TABLE `student`( `sno` INT(20) NOT NULL , `name` VARCHAR(28) NOT NULL , `age` INT(30) NOT NULL , PRIMARY KEY (`sno`))";
$sql = "CREATE TABLE `employee`( `sno` INT(20) NOT NULL , `name` VARCHAR(28) NOT NULL , `age` INT(30) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);
$name = "pawan";
$agges = "24";
// // echo "<br>";
// echo var_dump($result);
if (!$result) {
    ("connection is failed" . mysqli_connect_error());
} else {
    echo "connection was succesfully and table created";
}
//$result =  "INSERT INTO `book` (`name`, `age`) VALUES ('shubham', '30')";
// $sql = "INSERT INTO `book` (`name`, `age`) VALUES ('rohandas', '19')";
$sql = "INSERT INTO `book` (`sno`, `name`, `age`) VALUES ('5', '$name', '$agges')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    ("insertion is failed" . mysqli_connect_error());
} else {
    echo "insertion is succesfully in the table";
}
