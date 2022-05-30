<html>
<head>
    <title>
        Practical No 5
    </title>
</head>
<body>
<?php
echo (strlen("Kumud Patil")."<br>");

$day = "Hello World Programmer""<br>";
$count = str_word_count($day)
echo($count);
echo "<br>"
echo ("Using str_raplace".str_replace("world","peter","Hello","world")."<br>");
echo ("Using str_repeat".str_repeat("WOW",4)."<br>");
echo ("Using strtolower".strtolower("Kumud Patil")."<br>");
echo ("Using sttrtoupper".strtoupper("Kumud Patil")."<br>");
echo("Using ucwords() :".ucwords("Hello World")."<br>");
echo ("Using strcmp".strcmp("Kumud Patil","Kumud Patil1")."<br>");
echo("Using strpos() :".strpos("hello world","world")."<br>");

?>
</body>
</html>