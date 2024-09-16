<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
</head>
<body>
<?php

//Multidimensional Array
$people = [["Ram","Grocery","Ghaziabad"],
    ["Shyam","Garments","Noida"],
    ["Mahesh","Grocery","Lucknow"]
];

echo "Detalis of people: <br>";
foreach($people as $person){
    echo "Name: ".$person[0]. ", Category: ".$person[1]. ", City: ".$person[2]. "<br>" ;
}

//Associative array
$courses = [
    "Mathematics"=>30,
    "Physics"=>25,
    "Chemistry"=>28,
    "Biology"=>22
];
echo "Course Names and Counts: <br>";
foreach($courses as $courseName=>$counts){
    echo "Course: ".$courseName. ", Count: ".$counts. "<br>" ;
}

$employee = [
    101 => "Alice",
    102 => "Bob",
    103 => "Charlie",
    104 => "Diana",
    105 => "Edward",

];
echo "Employee ID and Names: <br>";
foreach($employee as $empID=>$empName){
    echo "Employee ID: ".$empID.", Name: ".$empName."<br>";
}


// Two-dimensional array to store data
$data = [
    ["Manoj", 7.8, "pass"],
    ["Aditya", 8.5, "pass"],
    ["Anuj", 4.9, "fail"]
];

// Iterate through each row of the array
for ($row = 0; $row < count($data); $row++) {
    echo "Row number " . $row . ":<br>";
    // Iterate through each column in the current row
    for ($col = 0; $col < count($data[$row]); $col++) {
        echo $data[$row][$col] . " ";
    }
    echo "<br>"; // New line after each row's data
}

//nested associative array
$display= [
    "C++"=> ["name"=>"Begining with C","copies"=>8],
    "PHP"=>["name"=>"Basics of PHP","copies"=>10],
    "Lavavel"=> ["name"=>"MVC","copies"=>3],
]
;
foreach($display as $category=>$details){
    echo "<h1>".$category."</h1>";
    echo "name = ".$details['name']."<br>";
    echo "copies = ".$details['copies']."<br><br>";
}
?>

</body>
</html>