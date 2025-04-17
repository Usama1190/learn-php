## PHP Variables

Variables are "containers" for storing information.

### Creating (Declaring) PHP Variables

In PHP, a variable starts with the $ sign, followed by the name of the variable:

In the example above, the variable $x will hold the value 5, and the variable $y will hold the value "John".

Note: When you assign a text value to a variable, put quotes around the value.

Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.

```
Think of variables as containers for storing data.
```

### PHP Variables

A variable can have a short name (like $x and $y) or a more descriptive name ($age, $carname, $total_volume).

Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)

```
Remember that PHP variable names are case-sensitive!
```

### Output Variables

The PHP echo statement is often used to output data to the screen.

### PHP is a Loosely Typed Language

In the example above, notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

### Variable Types

PHP has no command for declaring a variable, and the data type depends on the value of the variable.

### PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource

### Get the Type

To get the data type of a variable, use the var_dump() function.

The var_dump() function returns the data type and the value:

### Assign String to a Variable

Assigning a string to a variable is done with the variable name followed by an equal sign and the string:

String variables can be declared either by using double or single quotes, but you should be aware of the differences.

### Assign Multiple Values

You can assign the same value to multiple variables in one line:

#### Exercise

```
Which one is NOT a legal PHP variable name:

myVar = 3
my_Var = 3
myvar = 3
my-var = 3
```

```
Create a variable named txt and assign the value "Hello".

 = "";
```

```
Create one variable named x, and one variable named y, then use the echo statement to output the sum of x and y.

 = 5;

 = 7;

 + ;
```

### PHP Variables Scope

In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

local
global
static

### Global and Local Scope

A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:

```
You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.
```

### PHP The global Keyword

The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):

PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

### PHP The static Keyword

Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable:

Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.

Note: The variable is still local to the function.

#### Exercise

```
Consider the following code:
$name = 'Linus';
function myTest() {
  $name = 'Tobias';
}
myTest();
echo $name;
What will be the output?


Linus
Tobias
```

```
Consider the following code:
$name = 'Linus';
function myTest() {
  global $name;
  $name = 'Tobias';
}
myTest();
echo $name;
What will be the output?

Linus
Tobias
```

```
Consider the following code:
$name = 'Linus';
function myTest() {
  $GLOBALS['name'] = 'Tobias';
}
myTest();
echo $name;
What will be the output?

Linus
Tobias
An error will be raised
```
