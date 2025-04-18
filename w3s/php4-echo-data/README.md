## PHP echo and print Statements

With PHP, there are two basic ways to get output: echo and print.

### PHP echo and print Statements

echo and print are more or less the same. They are both used to output data to the screen.

The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

### The PHP echo Statement

The echo statement can be used with or without parentheses: echo or echo().

### Display Text

The following example shows how to output text with the echo command (notice that the text can contain HTML markup):

### Display Variables

The following example shows how to output text and variables with the echo statement:

### Using Single Quotes

Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.

When using double quotes, variables can be inserted to the string as in the example above.

When using single quotes, variables have to be inserted using the . operator, like this:

### The PHP print Statement

The print statement can be used with or without parentheses: print or print().

### Display Text

The following example shows how to output text with the print command (notice that the text can contain HTML markup):

### Display Variables

The following example shows how to output text and variables with the print statement:

### Using Single Quotes

Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.

When using double quotes, variables can be inserted to the string as in the example above.

When using single quotes, variables have to be inserted using the . operator, like this:

### Exercise: PHP Echo and Print

```
The two echo statements below will produce the same result:
$name = 'Linus';
echo '<h1>Hello $name</h1>';
echo "<h1>Hello $name</h1>";

True
False
```

```
The two print statements below will produce the same result:
$name = 'Linus';
print '<h1>Hello $name</h1>';
print "<h1>Hello " . $name . "</h1>";

True
False
```

```
Fill in the missing part to output "Welcome" to the screen:

 "Welcome";
```

## PHP Data Types

### PHP Data Types

Variables can store data of different types, and different data types can do different things.

PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource

### Getting the Data Type

You can get the data type of any object by using the var_dump() function.

### PHP String

A string is a sequence of characters, like "Hello world!".

A string can be any text inside quotes. You can use single or double quotes:

### PHP Integer

An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

Rules for integers:

An integer must have at least one digit
An integer must not have a decimal point
An integer can be either positive or negative
Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
In the following example $x is an integer. The PHP var_dump() function returns the data type and value:

### PHP Float

A float (floating point number) is a number with a decimal point or a number in exponential form.

In the following example $x is a float. The PHP var_dump() function returns the data type and value:

### PHP Boolean

A Boolean represents two possible states: TRUE or FALSE.

Booleans are often used in conditional testing.

### PHP Array

An array stores multiple values in one single variable.

In the following example $cars is an array. The PHP var_dump() function returns the data type and value:

### PHP Object

Classes and objects are the two main aspects of object-oriented programming.

A class is a template for objects, and an object is an instance of a class.

When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

Let's assume we have a class named Car that can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.

When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

### PHP NULL Value

Null is a special data type which can have only one value: NULL.

A variable of data type NULL is a variable that has no value assigned to it.

Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL:

### Change Data Type

If you assign an integer value to a variable, the type will automatically be an integer.

If you assign a string to the same variable, the type will change to a string:

If you want to change the data type of an existing variable, but not by changing the value, you can use casting.

Casting allows you to change data type on variables:

### Exercise: PHP Data Types

```
What data type is the $x variable below:
$x = true;

Integer
Boolean
Float
String
```

```
What data type is the $x variable below:
$x = "false";

Integer
Boolean
Float
String
```

```
What is a correct function for returning the data type of an object?

type()
typeof()
var_type()
var_dump()
```

