## PHP Numbers

In this chapter we will look in depth into Integers, Floats, and Number Strings.

### PHP Numbers

There are three main numeric types in PHP:

Integer
Float
Number Strings

In addition, PHP has two more data types used for numbers:

Infinity
NaN

Variables of numeric types are created when you assign a value to them:

Example
```
$a = 5;
$b = 5.34;
$c = "25";
```

To verify the type of any object in PHP, use the var_dump() function:

### PHP Integers

2, 256, -256, 10358, -179567 are all integers.

An integer is a number without any decimal part.

An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).

Here are some rules for integers:

An integer must have at least one digit
An integer must NOT have a decimal point
An integer can be either positive or negative
Integers can be specified in three formats: decimal (base 10), hexadecimal (base 16 - prefixed with 0x), octal (base 8 - prefixed with 0) or binary (base 2 - prefixed with 0b)
PHP has the following predefined constants for integers:

PHP_INT_MAX - The largest integer supported
PHP_INT_MIN - The smallest integer supported
PHP_INT_SIZE -  The size of an integer in bytes
PHP has the following functions to check if the type of a variable is integer:

is_int()
is_integer() - alias of is_int()
is_long() - alias of is_int()

### PHP Floats

A float is a number with a decimal point or a number in exponential form.

2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.

The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.

PHP has the following predefined constants for floats (from PHP 7.2):

PHP_FLOAT_MAX - The largest representable floating point number
PHP_FLOAT_MIN - The smallest representable positive floating point number
PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
PHP has the following functions to check if the type of a variable is float:

is_float()
is_double() - alias of is_float()

### PHP Infinity

A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

is_finite()
is_infinite()

However, the PHP var_dump() function returns the data type and value:

### PHP NaN

NaN stands for Not a Number.

NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

is_nan()

However, the PHP var_dump() function returns the data type and value:

### PHP Numerical Strings

The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.

Note: From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal form (e.g. 0xf4c3b00c), as they are no longer considered as numeric strings.

### PHP Casting Strings and Floats to Integers

Sometimes you need to cast a numerical value into another data type.

The (int), (integer), and intval() functions are often used to convert a value to an integer.

### Exercise: PHP Numbers

```
What is a correct function to use to check if a variable is an integer?

isnumeric()
typeisint()
is_int()
```

```
Which one of these numbers is a float number:

5
5.6
-6
all of the above
```

```
What is a correct syntax to force (cast) a float into an integer?

$x = (int)5.6;
$x = (5.6).toint();
$x = int(5.6);
```
## PHP Casting

Sometimes you need to change a variable from one data type into another, and sometimes you want a variable to have a specific data type. This can be done with casting.

### Change Data Type

Casting in PHP is done with these statements:

(string) - Converts to data type String
(int) - Converts to data type Integer
(float) - Converts to data type Float
(bool) - Converts to data type Boolean
(array) - Converts to data type Array
(object) - Converts to data type Object
(unset) - Converts to data type NULL

### Cast to String

To cast to string, use the (string) statement:

### Cast to Integer

To cast to integer, use the (int) statement:

### Cast to Float

To cast to float, use the (float) statement:

### Cast to Boolean

To cast to boolean, use the (bool) statement:

If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true.

Even -1 converts to true.

### Cast to Array

To cast to array, use the (array) statement:

When converting into arrays, most data types converts into an indexed array with one element.

NULL values converts to an empty array object.

Objects converts into associative arrays where the property names becomes the keys and the property values becomes the values:

### Cast to Object

To cast to object, use the (object) statement:

When converting into objects, most data types converts into a object with one property, named "scalar", with the corresponding value.

NULL values converts to an empty object.

Indexed arrays converts into objects with the index number as property name and the value as property value.

Associative arrays converts into objects with the keys as property names and values as property values.

### Cast to NULL

To cast to NULL, use the (unset) statement:

### Exercise

```
What is a correct syntax to cast a float into a string?

$ = (string) 5.6;
$ = tostring(5.6);
$ = (5.6).tostr()
```

```
What is a correct syntax to cast a string into NULL

$ = (NULL) "hello";
$ = (unset) "hello";
$ = "hello".toNull()
```

```
Fill in the missing part to cast $x into a Boolean value:

$x = ___ $x;
```