<!DOCTYPE html>

<html>

<body>
    <?php
    // $a = 3;                 // Integer
    // $b = 5.25;              // Float
    // $c = "hello";           // String
    // $d = true;              // Boolean
    // $e = NULL;              // NULL

    // $a = (unset) $a;
    // $b = (unset) $b;
    // $c = (unset) $c;
    // $d = (unset) $d;
    // $e = (unset) $e;

    // To verify the type of any object in PHP, use the var_dump function:

    // var_dump($a);
    // var_dump($b);
    // var_dump($c);
    // var_dump($d);
    // var_dump($e);
    ?>

</body>

<!-- <!DOCTYPE html>

<html>

<body>
<?php
$a = array("Volvo", "BMW", "Toyota");                         // indexed array
$b = array("Peter" => "35", "Ben" => "37", "Joe" => "43");    // associative array

$a = (object) $a;
$b = (object) $b;

var_dump($a);
var_dump($b);
?>

    <p>Indexed arrays converts into objects with index the number as property name and the value as property value.</p>
    <p>Associative arrays converts into objects with the keys as property names and values as property values.</p>
</body> -->

<!-- <!DOCTYPE html>

<html>

<body>
<?php
$a = 3;                 // Integer
$b = 5.25;              // Float
$c = "hello";           // String
$d = true;              // Boolean
$e = NULL;              // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

// To verify the type of any object in PHP, use the var_dump function:

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

?>

    <p>When converting into objects most data types converts into a object with one property, named "scalar", with the corresponding value.</p>
    <p>Null values converts into an empty object.</p>
</body> -->

<!-- <!DOCTYPE html>

<html>

<body>
    <?php
    class Car
    {
        public $color;
        public $modal;

        public function __construct($color, $modal)
        {
            $this->color = $color;
            $this->modal = $modal;
        }

        public function message()
        {
            return "My car is a " . $this->color . " " . $this->modal . '!';
        }
    }

    $myCar = new Car("red", "Volvo");

    $myCar = (array) $myCar;

    var_dump($myCar);
    ?>

    <p>Objects convert into associative arrays where the property names becomes the keys or the property values becomes the values.</p>
    <p>Null values converts into an empty array object.</p>
</body> -->

<!-- <!DOCTYPE html>

<html>

<body>
    <?php
    $a = 3;                 // Integer
    $b = 5.25;              // Float
    $c = "hello";           // String
    $d = true;              // Boolean
    $e = NULL;              // NULL

    $a = (array) $a;
    $b = (array) $b;
    $c = (array) $c;
    $d = (array) $d;
    $e = (array) $e;

    // To verify the type of any object in PHP, use the var_dump function:

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);

    ?>

    <p>When converting into arrays most data types converts into an indexed array with one element.</p>
    <p>Null values converts into an empty array object.</p>
</body> -->


<!-- <!DOCTYPE html>

<html>

<body>
    <?php
    $a = 3;                 // Integer
    $b = 5.25;              // Float
    $c = 0;                 // Integer
    $d = -1;                // Integer
    $e = 0.1;               // Float
    $f = "hello";           // String
    $g = "";                // String
    $h = true;              // Boolean
    $i = NULL;              // NULL

    $a = (bool) $a;
    $b = (bool) $b;
    $c = (bool) $c;
    $d = (bool) $d;
    $e = (bool) $e;
    $f = (bool) $f;
    $g = (bool) $g;
    $h = (bool) $h;
    $i = (bool) $i;

    // To verify the type of any object in PHP, use the var_dump function:

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    var_dump($f);
    var_dump($g);
    var_dump($h);
    var_dump($i);

    ?>

    <p>If a value is 0, null, false, or empty, the (bool) converts into false, otherwise true. Even -1 converts to true.</p>
</body> -->

</html>

<!-- <!DOCTYPE html>

<html>

<body>
    <?php
    $a = 3;                 // Integer
    $b = 5.25;              // Float
    $c = 'Usama';           // String
    $d = '45 Kilometer';    // String
    $e = 'kilometers 25';   // String
    $f = true;              // Boolean
    $g = NULL;              // NULL

    $a = (int) $a;
    $b = (int) $b;
    $c = (int) $c;
    $d = (int) $d;
    $e = (int) $e;
    $f = (int) $f;
    $g = (int) $g;

    // To verify the type of any object in PHP, use the var_dump function:

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    var_dump($f);
    var_dump($g);

    ?>

    <p>Note that when casting a string that starts with a number, the (int) function uses that number. If it does not start with a number, the (int) function converts string into the number 0.</p>
</body>

</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
    <?php
    $a = 3;        // Integer
    $b = 5.25;     // Float
    $c = 'Usama';  // String
    $d = true;     // Boolean
    $e = NULL;     // NULL

    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;

    // To verify the type of any object in PHP, use the var_dump function:

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);

    ?>

        <p>Note that when casting a Boolean into String it gets the value "1", and when casting NULL into string it is converting into an empty string.</p>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php
        // $a = 34.3;
        // $b = 45;
        // $c = "24";

        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c); 
        ?>

        <p>Line breaks were added for better readibility.</p>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php
        // Check if the type of a variable is integer
        // $x = 3473;
        // var_dump(is_int($x));

        // echo "<br>";

        // Check again
        // $x = 45.76;
        // var_dump(is_int($x));
        ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php
        // Check if the type of a variable is float
        // $x = 45.345;
        // var_dump(is_float($x));
        ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php
        // Check if the numeric value is finite or infinite
        // $x = 1.9e411;
        // var_dump($x);
        ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php
        // Check if the variable is numeric
        // $x = 5834;
        // var_dump(is_numeric($x));

        // echo "<br>";

        // $x = "5834";
        // var_dump(is_numeric($x));

        // echo "<br>";

        // $x = "583" + 100;
        // var_dump(is_numeric($x));

        // echo "<br>";

        // $x = "Hello";
        // var_dump(is_numeric($x));
        ?>
    </body>
</html> -->

<!DOCTYPE html>

<html>

<body>
    <?php
    // Check if the numeric value is finite or infinite
    // $x = 1.9e411;
    // var_dump($x);
    ?>
</body>

</html>