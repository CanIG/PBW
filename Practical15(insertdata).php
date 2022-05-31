<html>
    <body>

<?php
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
    $sql = "Insert into emp values(1,'Caniget',10000)";
    if(mysqli_query($conn,$sql))
    {
        echo "Record Inserted Succefully";
    }
    else
    {
        echo "Could not insert record:".mysqli_error($conn);
    }
    mysqli_close($conn);   
?>
</body>
</html>
