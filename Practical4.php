<html>
    <head>
        <title>
            Practical No 4 
        </title>
    </head>
    <body>
        <?php
        echo "INDEXED ARRAY <br><br>";
        $a1 = array (10,20,30,40,50,60,70,80,90,100);
        foreach($a1 as $key => $value)
        {
            echo" [$key] = $value<br>";

        }
        echo "<br> Associative Array <br>";
        $a2 = array("a" => 23 , "b" => 34, "c" => 56);
        foreach($a2 as $key => $value){
            echo "[$key]= $value<br>"; 
        }
        echo "<br> Multi-Dimensional array<br>";
        $a3=array (array(1,2,3),array (4,5,6),array(7,8,9));
        for($i=0;$i<count($a3);$i++){
            for($j=0;$j<count($a3[$i]);$j++){
                
                echo $a3[$i][$j]." ";

            }

        }
        
        ?>
    </body>
    </html>