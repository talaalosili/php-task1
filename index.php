<!-- //tasks1 -->
<?php
$fruits = array("Apple", "Banana", "Orange","Mango", "Pineapple");
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>
<hr>
<?php

$fruits = array("Apple", "Banana", "Orange","Mango", "Pineapple");


array_push($fruits,"Grapes");
var_dump($fruits);
?>
<hr>
<?php
$fruits = array("Apple", "Banana", "Orange","Mango", "Pineapple");

array_pop($fruits); 
var_dump($fruits);
?>
<hr>
<?php
$fruits = array("Apple", "Banana", "Orange","Mango", "Pineapple");

if (in_array("Apple", $fruits)) {
    echo "Apple is in the array.";
}
?>
<!--**************************************************************************************************************** -->
<hr>
<!-- //tasks2 -->
<?php
$people = array("ahmed" => 35, "ali" => 37, "omer" => 43);

foreach ($people as $name => $age) {
    echo $name . " ". $age. "<br>";
}
?>
<hr>
<?php
$array = array("ahmed" => 35, "ali" => 37, "omer" => 43);
$array["malik"] = 40;
foreach ($array as $name => $age) {
    echo $name . "  " . $age . " <br>";
}
?>
<hr>
<?php
$people= array("ahmed" => 35, "ali" => 37, "omer" => 43);

unset($people["ali"]);
foreach ($people as $name => $age) {
    echo $name . "  " . $age . "<br>";
}

?>
<hr>
<?php
$people= array("ahmed" => 35, "ali" => 37, "omer" => 43);
$key = "Sara";
if (array_key_exists($key, $people)) {
    echo $key . " is in the array.<br>";
} else {
    echo $key . " is not in the array.<br>";
}
?>
<!--**************************************************************************************************************** -->

<!-- //task3 -->
 <hr>
 <?php
 $students = array(
    array("name" => "Ali", "age" => 20, "grade" => "A"),
    array("name" => "Sara", "age" => 22, "grade" => "B"),
    array("name" => "ahmed", "age" => 21, "grade" => "C")
);
foreach($students as $student){
    echo  $student["name"] . " => " . $student["age"] . " =>" . $student["grade"] . "<br>";
};

?>
<hr>
<?php
$students = array(
   array("name" => "Ali", "age" => 20, "grade" => "A"),
   array("name" => "Sara", "age" => 22, "grade" => "B"),
   array("name" => "ahmed", "age" => 21, "grade" => "C")
);
$new_student = array("name" => "Maram", "age" => 23, "grade" => "A");
$students[]= $new_student;
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}

?>
<hr>
<?php
$students = array(
    array("name" => "Ali", "age" => 20, "grade" => "A"),
    array("name" => "Sara", "age" => 22, "grade" => "B"),
    array("name" => "ahmed", "age" => 21, "grade" => "C")
 );
$studentupdate = "Sara";
foreach ($students as $student) {
    if ($student["name"] == $studentupdate) {
        $student["grade"] = "D";
    }
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";

}
?>
<hr>
<?php
$students = array(
    array("name" => "Ali", "age" => 20, "grade" => "A"),
    array("name" => "Sara", "age" => 22, "grade" => "B"),
    array("name" => "ahmed", "age" => 21, "grade" => "C")
 );
$studentremove = "ahmed";
foreach ($students as $key => $student) {
    if ($student["name"] == $studentremove) {
        unset($students[$key]);
    }
    $students = array_values($students);
}
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}
?>
<!--**************************************************************************************************************** -->

<!-- ///task4 -->
<hr>
<?php
$fruits = array("Apple", "Banana", "Orange");
array_push($fruits, "Mango");
print_r($fruits);
?>
<hr>
<?php
$fruits = array("Apple", "Banana", "Orange");
array_pop($fruits);
print_r($fruits);
?>
<hr>
<?php
 $student=array("name" => "ahmed", "age" => 21, "grade" => "C");
$name=array_keys($student);
print_r($name);
?>
<hr>
<?php
 $student=array("name" => "ahmed", "age" => 21, "grade" => "C");
$values = array_values($student);
print_r($values);
?>
<hr>
<?php
 $student=array("name" => "ahmed", "age" => 21, "grade" => "C");
$number_of_students = count($student);
echo $number_of_students; 
?>
<hr>
<?php
$array1 = array("red", "green");
$array2 = array("blue", "yellow");
$merged_array = array_merge($array1, $array2);
print_r($merged_array);
?>
<hr>
<?php
$array1 = array("red", "green");
$array2 = array("blue", "yellow");
$merged_array = array_merge($array1, $array2);
$position = array_search("blue", $merged_array);
echo $position;
?>
<hr>
<?php
$numbers = array(4, 2, 8, 6);
sort($numbers);
print_r($numbers);
?>
<hr>
<?php
$numbers = array(4, 2, 8, 6);
sort($numbers);
print_r($numbers);
?>
<hr>
<?php
$student = array("name" => "Ali", "age" => 20, "grade" => "A");
ksort($student);
print_r($student);

?>
<hr>
<?php
$student = array("name" => "Ali", "age" => 20, "grade" => "A");
asort($student);
print_r($student);
?>
<hr>
<?php



$salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");    
echo "Sonoo salary: ".$salary["Sonoo"]."
"; 
?>
<!--**************************************************************************************************************** -->
