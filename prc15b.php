<?php

$hn="localhost:7882";
$un="root";
$pw="";
$db="student";

$conn = mysqli_connect($hn,$un,$pw,$db);

if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
else{
    echo "Connetion successfull";
}

$sql = "INSERT INTO info ('name', 'rollno') VALUES ('Swaraj','3361')";
$query = mysqli_query($conn,$sql);
if($query == true){
    echo "Data inserted successfully";
}else{
    echo "Error occured !";
}
?>