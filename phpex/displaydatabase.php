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
$sql = "SELECT * FROM student";
$result = mysqli_query($conn , $sql);
$num =  mysqli_num_rows($result);
echo $num;
echo "<br>";
if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($result);
        echo $row['sno'] ." hello my name is " . $row['name'] . " and my password is " . $row['password']; 
        echo "<br>";
    }

}



?> 