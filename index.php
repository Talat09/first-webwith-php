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
    $newVar = $variable1;
    $newVar += 1;
    $newVar -= 1;
    $newVar *= 1;
    $newVar /= 1;
    //for new line
    echo "<br>";
    echo " The value of new Variable is: ";
    echo $newVar;
    // comparison operators return boolean
    echo "<br>";
    echo "<h1>Comparison Operator</h1>";
    //equal to
    echo " The value of 1==4 is :";
    echo var_dump(1==4);
    echo "<br>";
    //Not equal to
    echo " The value of 1!=4 is :";
    echo var_dump(1!=4);
    echo "<br>";
    //greater than equal to
    echo " The value of 1>=4 is :";
    echo var_dump(1>=4);
    echo "<br>";
    //less than equal to
    echo " The value of 1<=4 is :";
    echo var_dump(1<=4);
    echo "<br>";
    echo "<h1>increment / decrement operator</h1>";
    // increment / decrement operator
    $number = 10;
    $number++;
    echo "<br>";
    echo "Double ++ sign after variable is: $number";
    $number--;
    echo "<br>";
    echo "Double -- sign after variable is: $number";
    ++$number;
    echo "<br>";
    echo "Double ++ sign before variable is: $number";
    --$number;
    echo "<br>";
    echo "Double -- sign before variable is: $number";
    // Logical operators
    echo "<br>";
    echo "<h1>Logical operators</h1>";
    // and ( &&)
    // or ( ||)
    // xor
    // not (!)
    echo "<br>";
    // $var3=(true and true);//true
    // $var3=(true and false);//false
    // $var3=(false and true); //false
    $var3=(false and false); //false
    echo "The value of var3 is: ";
    echo var_dump($var3);
    echo "<br>";
    //or operator
    $var4=(true or true);//true
    // $var4=(true or false);//true
    // $var4=(false or true); //true
    // $var4=(false or false); //false
    echo "The value of var4 is: ";
    echo var_dump($var4);
    //xor operator
    echo "<br>";
    // $var5=(true xor true);//false
    // $var5=(true xor false);//true
    // $var5=(false xor true); //true
    $var5=(false xor false); //false
    echo "The value of var5 is: ";
    echo var_dump($var5);
        ?>
        
    </div>
</body>
</html>