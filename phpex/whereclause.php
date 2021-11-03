<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbms";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    ("connection is failed" . mysqli_connect_error());
} else {
    echo "connection was succesfully";
}
$sql = "SELECT * FROM student WHERE password = 'bbrj' ";
$result = mysqli_query($conn , $sql);
$num = mysqli_num_rows($result);
echo $num;
// $result = mysqli_query($conn , $sql);
echo "<br>";

 //$num = mysqli_fetch_assoc($result);
//  echo var_dump($num);
$no = 1;
if($num>0){
    while($num = mysqli_fetch_assoc($result)){
        echo $no . "- hello " . $num['name'] . " password is " . $num['password'];
        echo "<br>";
        $no = $no+1;
    }
}
$ad = "UPDATE `student` SET `name` = 'bccb@gmail.com' WHERE `student`.`sno` = 3";
$result = mysqli_query($conn , $ad);
$cc = "DELETE FROM `student` WHERE `student`.`sno` = 3";
$result = mysqli_query($conn , $cc);
?>