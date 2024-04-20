<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
        echo "Hello World and this is printed using php"; 
        //variable declaration
        $variable1=80;
        $variable2=45;
        echo $variable1+$variable2;
       //operators in php
       echo "<br>";
    // Arithmetic operators
    echo "The value of Add Two Number is: ";
    
    //add
    echo $variable1+$variable2;
    //for new line
    echo "<br>";
    //subtract
    echo "The value of subtract Two Number is: ";
    echo $variable1-$variable2;
    //multiplication
    //for new line
    echo "<br>";
    echo "The value of multiplication Two Number is: ";
    echo $variable1*$variable2;
    //division
    //for new line
    echo "<br>";
    echo "The value of division Two Number is: ";
    echo $variable1/$variable2;
    // Assignment operators
    // comparison operators
    // increment / decrement operator
    // Logical operators
       
        ?>
        <?php
         //for new line
    echo "<br>";
        echo "Hello World and this is printed using php again";
        ?>
    </div>
</body>
</html>