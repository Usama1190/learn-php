<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        echo "Hello";
        // same as
        echo("Hello"); ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with parameters."
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        echo "<h2>$txt1</h2>";
        echo "Study PHP at $txt2"
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        echo '<h2>' . $txt1 . '</h2>';
        echo '<p>Study PHP at ' . $txt2 . '</p>';
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        print "Hello";
        // same as
        print("Hello");
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        print "<h2>Learn PHP</h2>";
        print "Hello World!<br>";
        print "I'm about to learn PHP.";
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        print "<h2>$txt1</h2>";
        print "<p>Study PHP at $txt2</p>";
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        print '<h2>' . $txt1 . '</h2>';
        print '<p>Study PHP at ' . $txt2 . '</p>';
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = 5;
        var_dump($x);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello World!";
        $y = "Hello World!";

        var_dump($x);
        echo "<br>";
        var_dump($y);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = 4366;
        var_dump($x);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = 10.345;
        var_dump($x);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = true;
        var_dump($x);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $cars = array("Volvo", "BMW", "Toyota");
        var_dump($cars);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        class Car {
            public $color;
            public $modal;

            public function __construct($color, $modal)
            {
                $this -> color = $color;
                $this -> modal = $modal;
            }

            public function message($color, $modal) {
                return "My car is a " . $this -> $color . " " . $this -> $modal . "!"; 
            }
        }

        $myCar = new Car("gray", "BMW");
        var_dump($myCar);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello";
        $x = null;

        var_dump($x);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = 5;
        var_dump($x);

        echo "<br>";

        $x = "Hello";
        var_dump($x);
         ?>

        <p>Line breaks were added for better readibility.</p>
    </body>
</html> -->

<!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = 5;
        $x = (string) $x;
        var_dump($x);
         ?>
    </body>
</html>
