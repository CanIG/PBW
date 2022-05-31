<html>
    <body>
<?php
//Here is code for display user data but it not necessary 
    $host = "localhost";
    $user = "root";
    $pass = "1234";
    $dbname = "employees";
    $conn = mysqli_connect($host,$user,$pass,$dbname);
    if(!$conn)
    {
        die('Could Not Connect:'.mysqli_errort());
    }   
    echo "Connected Successfully: ";
    $sql = "Select * from emp";
    $retval = mysqli_query($conn,$sql);
    if(mysqli_num_rows($retval)>0)
    {
       while($row = mysqli_fetch_assoc($retval))
        {
            echo "-------------";
            echo "EmpID: {$row['id']} ";
            echo "Name: {$row['name']} ";
            echo "Salary: {$row['Salary']} ";
            echo "-------------";
        }
    }
    else 
    {
        echo "0 results";
    }
    mysqli_close($conn);   
?>
<?php 
//this code code for update data
//1) CREATE DATABASE EMPLOYEES;
//2) USE EMPLOYEES;
//3) CREATE table emp(id int PRIMARY KEY,name Varchar(20),Salary Integer);
$host = "localhost";
$user = "root";
$pass = "1234";
$dbname = "employees";
$conn = mysqli_connect($host,$user,$pass,$dbname);
if(!$conn)
{
    die('Could Not Connect:'.mysqli_errort());
}
echo "Connected Successfully: ";
$id = 1;
$salary = 20000;
$sql = "Update emp set Salary=$salary where id=$id";
if(mysqli_query($conn,$sql))  
{
    echo "Record Updated Successfull";
}
else
{
   echo "Could not update record: ".mysqli_error($conn);  
}
mysqli_close($conn);   
?>
<?php
//this code code for delete data
//1) CREATE DATABASE EMPLOYEES;
//2) USE EMPLOYEES;
//3) CREATE table emp(id int PRIMARY KEY,name Varchar(20),Salary Integer);
$host = "localhost";
$user = "root";
$pass = "1234";
$dbname = "employees";
$conn = mysqli_connect($host,$user,$pass,$dbname);
if(!$conn)
{
    die('Could Not Connect:'.mysqli_errort());
}
echo "Connected Successfully: ";
$id = 1;
$salary = 20000;
$sql = "DELETE FROM salary WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
</body>
</html>