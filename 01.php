<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php.practice</title>
</head>

<body>
    <div class="container">
        <h1>PHP Practice</h1>
        <p>This is a simple PHP practice page.</p>
        <?php
        // PHP code goes here
        echo "<h2>Hello, World!</h2>";
        echo "<p>This is a simple PHP script.</p>";
        $var1 = 27 ;
        
        $var2 = 36;


        echo $var1;
        echo "<br>";
         echo $var2;
        echo "<br>";
        //aritmatic operation
        echo $var1 + $var2;
        echo "<br>";
        echo $var1 - $var2;
        echo "<br>";
        echo $var1 * $var2;
        echo "<br>";
        echo $var1 / $var2;
        echo "<br>";
        echo $var1 % $var2;
        echo "<br>";

        //logical operation

        //comparison operation
        echo  "<h1>comparison</h1>";
        //assignment operation
        $newvar = $var1 ;
        $newvar=35;
        echo "the value of  is new var = $newvar";
        echo "<br>";
        echo $newvar;
        //increment and decrement operation

        ?>

    </div>


</body>

</html>