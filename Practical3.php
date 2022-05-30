<html>
<head>
    <title>Practical No 3</title>
</head>
<body>
    <?php

    echo "WHILE LOOP<br>";
    $a = 0;
    while($a<=10){
        echo "Value of a is".$a,"<br>";
        $a+=2;
    }

    echo "<br>DO-WHILE LOOP<br>";
    $j=10;
    do{
        echo "Value of : $j is ";
        $j-=2;
    }while($j>=1);

    echo("<br> FOR LOOP <br>");
    $x=4;
    for($n=1;$n<11;$n++)
    {
        echo $x."x".$n."=".$x*$n."<br>";

    }
    echo "<br> FOR EACH LOOP<br>";
    $arr = array(10,20,30,40,50);
    foreach($arr as $value)
    {
        echo $value." ";

    }


    ?>
</body>
</html>