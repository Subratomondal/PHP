<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    max-width: 80%;
    background-color: grey;
    margin: auto;
    padding: 23px;
}
</style>
<body>
    <div class ="container">
        <h1> Let's learn about php</h1>
        <p> Your party status is here:</p>
    <?php
    $age=34;
    if($age>18){
        echo "you can go to the party";
    }
    elseif($age==7){
        echo "you are 7 years old";
    }
    else{
        echo " you can not go to the party";
    }
    //Arrays in php
    $languages = array("Python" ,"C++","php","NodeJs");
    // echo $languages[0];
    // echo count($languages);

    //Loop in PHP
    $a=0;
    while($a <= 10){
        echo "<br>the values of a is: ";
        echo $a;
        $a++;
    }
    //Itereting arrays in PHP using while loop
    $a=0;
    while($a < count($languages)){
        echo "<br>the values of language is: ";
        echo $languages[$a];
        $a++;
    }

    //Do while loop
    $a=50;
    do{
        echo "<br>the values of a is: ";
        echo $a;
        $a++;
    }
    while($a <= 10);

    // For loop
    for ($i=0; $i < 10 ; $i++) {
        
        echo "<br> the value of a from the for loop is: ";
        echo $a;
    }

    foreach ($languages as $value ) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }

    function print5(){
        echo "<br> Five";
    }
    print5();

    function print_number($number){
        echo "<br> Your number is ";
        echo $number;
    }
    print_number(45);
    print_number(4);
    print_number(5);


    ?>
    

    </div>
</body>
</html>