<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        echo "Hello";
        print "Hello"; ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Usama";
        echo "Hello $x";
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Usama";
        echo 'Hello $x';
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        echo strlen("Hello Usama!");
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        echo str_word_count("Hello Usama");
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        echo strpos("Hello Usama", "Usama");
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello Usama";
        echo strtoupper($x);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello Usama";
        echo str_replace("Hello", "Welcome", $x);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello Usama";
        echo strrev($x);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "  Hello Usama    ";
        echo trim($x);
        ?>

        <p>The whitespaces are invisible in plain HTML, <br>but check out the difference in two input fields.</p>

        <?php 
        echo "<input value='" . $x . "'>";
        echo "<br>";
        echo "<input value='" . trim($x) . "'>";
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        echo "<input value='" . $x . "'>";
        echo "<br>";
        echo "<input value='" . trim($x) . "'>";
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello Usama!";
        $y = explode(" ", $x);

        print_r($y);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello";
        $y = "Usama!";
        
        $z = $x . $y;

        echo $z;
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello";
        $y = "Usama!";
        
        $z = $x . " " . $y;

        echo $z;
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello";
        $y = "Usama!";
        
        $z = "$x $y";

        echo $z;
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello Usama!";
        echo substr($x, 6, 5);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello Usama!";
        echo substr($x, 3);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello Usama!";
        echo substr($x, -5, 4);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello Usama!";
        echo substr($x, 2, -4);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        $x = "Hello Usama!";
        echo substr($x, 2, -4);
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <?php 
        // PHP will raise an error when executed this statement.

        // $x = "We are the so-called "Viking" from the north.";
        // echo $x;
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
    <?php 
        $x = "We are the so-called \"Vikings\" from the north.";
        echo $x;
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
    <?php 
        $x = 'We are the so-called \'Vikings\' from the north.';
        echo $x;
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
    <?php 
        $x = "We are the so-called \"Vikings\" from the north.";
        echo $x;
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
    <?php 
        $x = 'Escape PHP variable name \$myvar';
        echo $x;
         ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <pre>
            <?php 
            $x = "Hello \nUsama";
            echo $x;
            ?>
        </pre>

        <p>To preserve any whitespace and line breaks, We have wrapped the result in PRE element.</p>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <pre>
            <?php 
            $x = "Hello \rUsama";
            echo $x;
            ?>
        </pre>

        <p>To preserve any whitespace and line breaks, We have wrapped the result in PRE element.</p>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <p>A backslash followed by three integers will result in a octal value.</p>

        <?php 
        $x = "\110\145\154\154\157";
        echo $x; ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>

<html>
    <body>
        <p>A backslash followed by an x and a hex number represent a hex value.</p>

        <?php 
        $x = "\x48\x65\x6c\x6c\x6f";
        echo $x; ?>
    </body>
</html> -->