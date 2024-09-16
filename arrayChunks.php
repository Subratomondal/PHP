<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // array definition
    $courses = array("php","cpp","java","javaScript","react","nodejs");

    //array_chunk to split the array into chunks of 2
    $chunkedCourses = array_chunk($courses,2);
    echo "The chunked array is: <br>";

    print_r($chunkedCourses);
    
    
    ?>
</body>
</html>