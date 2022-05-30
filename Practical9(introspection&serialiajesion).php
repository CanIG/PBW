<html>
<body>
<?php
echo "<b>*introspection</b><br>";
class hello
{
//hello class code
}
if(class_exists('hello'))
{
$h1 = new hello();
echo "class hello exist<br>";
}
else
{
echo "class not exist<br>";
}
?>
<?php
echo "<b>*serialization</b><br>";
$a=array('Shiv','Radha','Pari');
$s=serialize($a);
print_r($s);
$s1=unserialize($s);
echo "<br>";
print_r($s1);
?>
</body>
</html>