<!DOCTYPE html>
<html>

    <head>
        <title>PHP TEST</title>
    </head>

    <body>
        <h1>File index.php</h1>
        <?php
        echo "hello world";
        echo "<br>";
        print ("Hello world");
        echo "<br>";
        print_r("Hello world");
        echo "<br>";
        printf("Hello world");
        echo "<br>";
        var_dump("Hello world");
        echo "<br>";
        $myvar = "Hello world";
        ?>
        <h1><?php echo $myvar; ?></h1>
        <?php
        echo "<h1>".$myvar."</h1>";
        ?>
        <?php
        $x = 1;
        function myfunction($myparam){
            global $x;
            $x = "Hello";
            return $myparam;
        }
        echo "<p>".MYFUNCTION("Hello World")."</p>";
        ?>
        <h1><?php echo $x; ?></h1>
        <h1><?php echo "1" + '1' ?></h1>
        <?php
        $mychar = "a";
        ?>
        <h1><?php echo ++$mychar; ?></h1>
        <?php
        if( 1 == '1'){
            echo "1 == \"1\"";
        }else
        if (true){
            echo "1 != \"1\"";
        }
        if (true){
            echo "true";
        }else {
            echo "false";
        }

        $my_arry = array(1,2,3,4,5);
        for( $i = 0; $i < count($my_arry);$i++){
            echo $my_arry[$i];
        }
        echo "<br>";
        foreach($my_arry as $index => $value){
            echo $value;
        }
        echo "<br>";
        $my_arry2[] = [0=>1,2,3];
        $my_arry2[] = 2;
        $my_arry2[4] = 3;
        $my_arry2[] = 4;
        $my_arry2[] = 5;
        print_r($my_arry2);
        $my_arry3 = array(1,2,3);
        $my_arry3["myindex"] = 1;
        print_r($my_arry3);
        foreach($my_arry3 as $value){
            echo $value;
        }
        ?>
    </body>

</html> 