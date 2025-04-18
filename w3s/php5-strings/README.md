## PHP Strings

A string is a sequence of characters, like "Hello world!".

### Strings

Strings in PHP are surrounded by either double quotation marks, or single quotation marks.

```
Note There is a big difference between double quotes and single quotes in PHP.

Double quotes process special characters, single quotes does not.
```

### Double or Single Quotes?

You can use double or single quotes, but you should be aware of the differences between the two.

Double quoted strings perform action on special characters.

E.g. when there is a variable in the string, it returns the value of the variable:

Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:

### String Length

The PHP strlen() function returns the length of a string.

### Word Count

The PHP str_word_count() function counts the number of words in a string.

### Search For Text Within a String

The PHP strpos() function searches for a specific text within a string.

If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

Tip: The first character position in a string is 0 (not 1).

### Exercise: PHP Strings

```
What will be the output of the following code:
$x = 5;
echo 'The price is $x';

The price is 5
The price is
The price is $x
```

```
Get the length of the string "Hello World!".

echo 
("Hello World!");
```

```
What will be the output of the following code:
$fname = "Jenifer"
echo "Hello $fname";

Hello Jenifer
Hello
Hello $fname
```

## PHP - Modify Strings

PHP has a set of built-in functions that you can use to modify strings.

### Upper Case

The strtoupper() function returns the string in upper case:

```
$x = "Hello World!";
echo strtoupper($x);
```

### Lower Case
The strtolower() function returns the string in lower case:

```
$x = "Hello World!";
echo strtolower($x);
```

### Replace String

The PHP str_replace() function replaces some characters with some other characters in a string.

Replace the text "World" with "Dolly":

```
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
```

### Reverse a String

The PHP strrev() function reverses a string.

Reverse the string "Hello World!":

```
$x = "Hello World!";
echo strrev($x);
```

### Remove Whitespace

Whitespace is the space before and/or after the actual text, and very often you want to remove this space.

The trim() removes any whitespace from the beginning or the end:

```
$x = " Hello World! ";
echo trim($x);
```

### Convert String into Array

The PHP explode() function splits a string into an array.

The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.

```
Note: The separator is required.
```

### Exercise: PHP Modify Strings

```
What is a correct function to return a string as all upper case letters:

touppercase()
strtoupper()
ucase()
toupper()
```

```
Reverse the string "Hello World!".

echo 
("Hello World!");
```

```
Replace the word "World" with the word "Dolly".


$oldtxt = "Hello World!";
$newtxt = 
( , , );
```

## PHP - Concatenate Strings

### String Concatenation

To concatenate, or combine, two strings you can use the . operator:

The result of the example above is HelloWorld, without a space between the two words.

An easier and better way is by using the power of double quotes.

By surrounding the two variables in double quotes with a white space between them, the white space will also be present in the result:

### Exercise: PHP Concatenate Strings

```
What will be the result of $z in the following code example:
$x = 5;
$y = 10;
$z = "$x . $y";

5 . 10
15
5.10
```

```
What will be the result of $z in the following code example:
$x = 5;
$y = 10;
$z = "$x$y";

An error will be raised
510
$x$y
```

```
What will be the result of $z in the following code example:
$x = 5;
$y = 10;
$z = $x . $y;

510
15
5 10
5 . 10
```

## PHP - Slicing Strings

### Slicing

You can return a range of characters by using the substr() function.

Specify the start index and the number of characters you want to return.

```
Note The first character has index 0.
```

### Slice to the End

By leaving out the length parameter, the range will go to the end:

### Slice From the End

Use negative indexes to start the slice from the end of the string:

```
Note The last character has index -1.
```

### Negative Length

Use negative length to specify how many characters to omit, starting from the end of the string:

### Exercise: PHP Slice Strings

```
What will be the result of the following slice:
$x = "Hello World!";
echo substr($x, 3, 2);

ll
el
lo
```

```
What will be the result of the following slice:
$x = "Hello World!";
echo substr($x, 3);

l
lo World!
Hel
```

```
What will be the result of the following slice:
$x = "Hello World!";
echo substr($x, -5);

World!
orld!
Hello
```

## PHP - Escape Characters

### Escape Character

To insert characters that are illegal in a string, use an escape character.

An escape character is a backslash \ followed by the character you want to insert.

An example of an illegal character is a double quote inside a string that is surrounded by double quotes:

To fix this problem, use the escape character \":

### Escape Characters
Other escape characters used in PHP:

\'	Single Quote	
\"	Double Quote	
\$	PHP variables	
\n	New Line	
\r	Carriage Return	
\t	Tab	
\f	Form Feed	
\ooo	Octal value	
\xhh	Hex value
