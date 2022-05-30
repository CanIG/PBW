<html>
    <head>
        <title>Practical 6</title>
    </head>
<body>
    
<?php
//First Code
function website($languages)
{
    echo "$languages.<br>";

}
website("HTML");
website("PHP");
website("CSS");
website("JAVASCRIPT");
echo "<br>";
?>
<?php
function sum($x,$y)
{
    $a = $x + $y;
    return $a;

}
echo ("sum of 10 and 15 is :".sum(10,15)."<br>");
?>
<?php
//If You Write first code u dont need to write second code
echo "<br><b>*functions</b><br>";
//simple function
function hello()
{
echo "Hello from simple function!!";
}

//parametrized function
function myfunction($a,$b)
{
	echo "<br>Hello from parametrized function!!";
	echo "<br>Addition is :",$a+$b;
}
//anonymous function

$a=function()
{
	echo "<br>Hello from anonymous function!!";
};

hello();
myfunction(5,10);
$a();
?>
</body>
<html>
    