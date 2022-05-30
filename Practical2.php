<html>
<head>
    <title>Practical 2 </title>
</head>
<body>
<?php
$a = 20;
echo "IF STATEMENT<br><br> ";  
if($a>0)
echo "$a is greater than zero<br><br>";
echo "IF ELSE STATEMENT<br><br>";
if($a%2==0)
echo "$a is Even Number<br><br>";
else
echo "$a is Odd Number<br><br>";
echo "SWITCH STATEMENT<br><br>";
$day = 5;
switch($day){
    case 1 :
        echo "Monday";
        break;
    case 2 :
        echo "Tuesday";
        break;
    case 3 :
        echo "Wednesday";
        break;
    case 4 :
        echo "Thursday";
        break;
    case 5 :
        echo "Friday";
        break;
    case 6 :
        echo "Saturday";
        break;
    case 7 :
        echo "Sunday";
        break;
}

?>
</body>
</html>
