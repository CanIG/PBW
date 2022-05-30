<html>  
<head>
<style>
.error {color: #FF0000;}
</style>
</head>  
<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";         
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
    $nameErr = "Name is required";
}else {
	$name = test_input($_POST["name"]);
}            
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
}else {
    $email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format"; 
    }
}            
            
if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
}else {
    $gender = test_input($_POST["gender"]);
    }
}        
function test_input($data) {
	$data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>    
<h2>Enter Details</h2>     
<p><span class = "error">* required field.</span></p>    
<form method = "post" action = "<?php 
echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<tr>
    <td>Name:</td>
    <td><input type = "text" name = "name">
     <span class = "error">* <?php echo $nameErr;?></span>
    </td>
</tr>           
<tr>
    <td>E-mail: </td>
    <td><input type = "text" name = "email">
      <span class = "error">* <?php echo $emailErr;?></span>
    </td>
</tr>
<tr>
    <td>Gender:</td>
    <td>
    <input type = "radio" name = "gender" value = "female">Female
    <input type = "radio" name = "gender" value = "male">Male
    <span class = "error">* <?php echo $genderErr;?></span>
    </td>
</tr>				
    <td>
      <input type = "submit" name = "submit" value = "Submit"> 
    </td>				
</table>			
</form>      
<?php
    echo "<h2>Your Data:</h2>";
    echo $name,"<br>";
    echo $email,"<br>";      
    echo $gender;
?>
</body>
</html>