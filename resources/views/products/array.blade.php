<?php

$emp = [
    [1, "Tafsirul", "manager", 50000],
    [2, "Ahsan", "Computer Engineer", 20000],
    [3, "Jhone", "Sales Man", 12000],
    [4, "Doe", "Driver", 5000]
];

$fruit = [
    [5, "Banana", "mango", 200],
    
];

echo $emp[0][0] . " ";
echo $emp[0][1] . " ";
echo $emp[1][0] . " ";
echo $emp[1][1] . " ";

echo array_search('Tafsirul', $emp);
echo "<br>";



for($row = 0; $row < 4; $row++){
    for($col =  0; $col < 4; $col++){
        echo $emp[$row][$col] . " ";
    }
}

echo "<br>";

echo "<table border='2px' cellpadding='5px' cellspacing= '0'>";
foreach ($emp as $key => $value) {
    echo "<tr>
        <td>$key</td>";
    foreach ($value as $v1) {
        echo "<td> $v1 </td>";
    }
    echo "</tr>";
}


echo "</table>";

//list
echo "<br> List Data Table" . "<br>" . "Total Array Items Have" . " ";
echo count($emp);
echo "<table border='1px' cellpadding='5px' cellspacing ='0'>";
foreach ($emp as list($id, $name, $designation,  $salary)) {
    echo "<tr><td>$id</td> <td>$name</td>  <td>$designation</td> <td>$salary</td><tr>    <br>";
}

echo "</table>";







$food = array('orange', 'banana', 'apple');
$foods = array('orange', 'banana', 'apple');

array_splice($food, 1, -1);
echo "<pre>";
    print_r($emp);
    print_r($food);
    print_r(array_count_values($food));
echo "</pre>";

$newArray = array_replace($emp, $fruit);
array_push($fruit, "Apple", "lemon", "guava");
$new = array_key_last($emp);

echo "<pre>";
    print_r($newArray);
    print_r($fruit);
    print_r($new);
    echo "</pre>";

if(in_array('banana', $food)){
    echo "Find Successfully.";
}else{
    echo "Can't Find.";
}

$newArray = key_exists("mango", $fruit);
if($newArray){
    echo "key exists!";
}else{
    echo "Key does not exits";
}
$food = array('orange', 'banana', 'apple');
$foods = array('orange', 'banana', 'apple');
$newArray = array_intersect($food, $foods);
echo "<pre>";
    print_r($newArray);
    echo "</pre>";

$newArray = array(
    "Bill" => 10,
    "joe" => 20,
    "peter" => 30
);

$newarray = array_flip($newArray);
echo "<pre>";
    print_r($newarray);
echo "</pre>";

$newArray = array_fill(3, 4,  "Testing");
echo "<pre>";
    print_r($newArray);
echo "</pre>";

$newArray = array(
    "Bill" => 10,
    "joe" => 20,
    "peter" => 30
);
array_walk($newArray, "myFunction");
function myFunction($value, $key){
    echo "$key  : $value<br>";
}

function square($n, $m){
    return [$n => $m];
}

$b = ['alu', 'potol', 'banana', 'jinge', 'koi'];
$a = [1, 2, 3, 4, 5];
$newArray = array_map('square', $a, $b);
echo "<pre>";
    print_r($newArray);
echo "</pre>";