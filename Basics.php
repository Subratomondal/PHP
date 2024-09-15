<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <?php
    define('PI', 3.14);
    // Data types in php
    // 1. String
    // 2. Integer
    // 3. Float
    // 4. Boolean
    // 5. Array
    // 6. Object
    echo "Data types <br>";
    $var = "This is a string";
    echo var_dump($var);
    echo "<br>";

    $var =67;
    echo var_dump($var);
    echo "<br>";

    $var =67.1;
    echo var_dump($var);
    echo "<br>";

    $var =true;
    echo var_dump($var);
    echo "<br>";

    echo PI;


    ?>
</body>
</html>