<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        // $x = 5;
        $y = "Usama";
        echo $x;
        echo "<br>";
        echo $y; ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $txt = "W3Schools.com";
        echo "I love $txt!" ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $txt = "W3Schools.com";
        echo "I love " . $txt . "!"; ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        // $x = 4;
        $y = 5;
        echo $x + $y; ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        // $x = 5;  // $x is an integer
        $y = "Usama";  // $y is an string
        echo $x;
        echo $y; ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        // $x = 5;
        var_dump($x) ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        var_dump(5);
        var_dump("Usama");
        var_dump(3.14);
        var_dump(true);
        var_dump([2, 3, 56]);
        var_dump(NULL); ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        var_dump(5);
        var_dump("Usama");
        var_dump(3.14);
        var_dump(true);
        var_dump([2, 3, 56]);
        var_dump(NULL); ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        // $x = "Usama";
        echo $x; ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        // $x = $y = $z = "Fruit";
        // echo $x;
        // echo $y;
        // echo $z; ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        // $x = 5; // global scope
        
        // function myTest() {
        //     // using x inside this function will generate an error
        //     echo "<p>Variables x inside function is $x</p>";
        // }
        
        // myTest();
        
        // echo "Variable x outside function is $x"?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php
        // function myTest() {
        //     $x = 5;
        //     echo "<p>Variables x inside function is $x</p>";
        // }
        
        // myTest();
        
        // echo "Variable x outside function is $x"?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php
        // $x = 5;
        // $y = 10;

        // function myTest() {
        //     global $x, $y;
        //     $y = $x + $y;
        // }
        
        // myTest(); // run function
        
        // echo "Variable $y" // output the new value for variable $y?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php
        // $x = 5;
        // $y = 10;

        // function myTest() {
        //     $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        // }
        
        // myTest(); // run function
        
        // echo $y; // output the new value for variable $y?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php
        function myTest() {
            static $x = 0;
            echo $x;
            $x++;
        }
        
        myTest();
        echo "<br>";
        myTest();
        echo "<br>";
        myTest();
        ?>
    </body>
</html> -->

<!DOCTYPE html>

<html>
    <body>
        <?php
        ''
        ?>
    </body>
</html>