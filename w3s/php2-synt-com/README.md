## PHP Syntax

A PHP script is executed on the server, and the plain HTML result is sent back to the browser.

### Basic PHP Syntax

A PHP script can be placed anywhere in the document.

A PHP script starts with <?php and ends with ?>:

```
<?php
// PHP code goes here
?>
```

The default file extension for PHP files is ".php".

A PHP file normally contains HTML tags, and some PHP scripting code.

Note: PHP statements end with a semicolon (;).

### PHP Case Sensitivity

In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.

```
Note: However; all variable names are case-sensitive!
```

```
A PHP script starts and ends with:

<?
//PHP code
?>

<?php
//PHP code
?>

<?php
//PHP code
?php>
```

```
Insert the missing part of the code below to output "Hello World".

<
 "Hello World";
```

```
Insert the missing part of the code below to output "Hello World".

echo
 "Hello World";
```

```
Write the correct opening tag and close tag for PHP scripts.


<

echo "This is PHP";
>
```

```
Single-line comments in PHP can be written using two different prefixes, write one of them.


 This is a single-line comment
```

```
Insert the correct characters to write a multi-line comment.


/*
 This is a
multi-line
comment
*/
```

```
Statements in PHP have to end with a special character, which one?


echo "Hello World"
;
```

## Comments in PHP

A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code.

Comments can be used to:

Let others understand your code
Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code
Leave out some parts of your code
PHP supports several ways of commenting:

### Single Line Comments

Single line comments start with //.

Any text between // and the end of the line will be ignored (will not be executed).

You can also use # for single line comments, but in this tutorial we will use //.

#### Comments to Ignore Code

We can use comments to prevent code lines from being executed:

#### Exercies

```
Which one is NOT a legal PHP comment:

# comment goes here
// comment goes here
'' comment goes here
/* comment goes here */
```

```
Insert the PHP comment syntax to make sure the following code line is not executed:

print("Hello World");
```

```
Use the PHP multi-line comment syntax to make sure the following code lines are not executed:

x = 5;
print(x);
```

### Multi-line Comments

Multi-line comments start with /* and end with */.

Any text between /* and */ will be ignored.

#### Multi-line Comments to Ignore Code

We can use multi-line comments to prevent blocks of code from being executed:

#### Comments in the Middle of the Code

The multi-line comment syntax can also be used to prevent execution of parts inside a code-line:
