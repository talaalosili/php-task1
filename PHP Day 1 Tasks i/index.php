<?php
$cities = ["New York", "London", "Paris", "Tokyo", "Sydney", "Berlin", "Moscow", "Dubai", "Rome", "Toronto"];
echo "cities :";
foreach($cities as $city){
    echo $city . " , ";
}
echo "<br>";

$reverse = array_reverse($cities);
echo "reverse cities :";
foreach($reverse as $city){
    echo $city . " , ";
}
echo "<br>";

echo "index of Sydney :" . array_search("Sydney", $cities);
echo "<br>";

echo "remove sydney: ";
if (($find = array_search("Sydney", $cities)) !== false) {
    unset($cities[$find]);
}
foreach($cities as $city){
    echo $city . " , ";
}
echo "<br>";

echo "Slice the first three cities: ";
$slice = array_slice($cities, 0, 3);
foreach($slice as $city){
    echo $city . " , ";
}
echo "<br><hr>";
?>
<!-- ////////task2 -->
<?php
$products = array(
    "Apple" => 2.99,
    "Banana" => 1.49,
    "Orange" => 3.25,
    "Mango" => 6.00,
    "Pineapple" => 5.99
);

ksort($products);
foreach($products as $product => $price) {
    echo $product . " , ";
}
echo "<br>";

asort($products);
foreach($products as $product => $price) {
    echo "price: " . $price . " , ";
}
echo "<br>";

$total = array_sum($products);
$count = count($products);
$average_price = $total / $count;
echo "Average price: " . $average_price . "<br>";

$max_price = max($products);
$most_expensive_product = array_search($max_price, $products);
echo "Most expensive product: " . $most_expensive_product . " with a price of " . $max_price . "<br>";
echo "<hr>";
?>
<!-- /////////task3 -->
 <?php
$books = array(
    array(
        "title" => "1984",
        "author" => "George Orwell",
        "year" => 1949
    ),
    array(
        "title" => "To Kill a Mockingbird",
        "author" => "Harper Lee",
        "year" => 2015
    ),
    array(
        "title" => "The Great Gatsby",
        "author" => "F. Scott Fitzgerald",
        "year" => 2020
    ),
    array(
        "title" => "The Catcher in the Rye",
        "author" => "J.D. Salinger",
        "year" => 2222
    )
);
foreach($books as $book) {
    if($book["year"] > 2010) {
        foreach($book as $b) {
            echo $b . ",";
        }
        echo "<br>";
    }
}
echo "<br>";

array_push($books, array(
    "title" => "book2",
    "author" => "Harper Lee",
    "year" => 2003
));
print_r($books);
echo "<br><br>";
$books[1]["author"] = "author3";
print_r($books);
echo "<br><br>";
$titles = array_column($books, "title");
sort($titles);
print_r($titles);
echo "<hr>";

?>
<!-- //////task4 -->
 <?php
 $cities = ["New York", "London", "Paris", "Tokyo", "Sydney", "Berlin", "Moscow", "Dubai", "Rome", "Toronto"];

 print_r(array_map('strtoupper', $cities));
echo "<br><br>";

print_r(array_filter($cities, function($city) {
    return strlen($city) > 5;
}));
echo "<br><br>";

$numbers = array(1, 2, 3, 4, 5);
$sum = array_reduce($numbers, function($carry, $item) {
    return $carry + $item;
}, 0);
echo "The sum of the array is: $sum";
echo "<br><br>";

function myfunction($value, $key) {
    echo "The key $key has the value $value<br>";
}
$a = array("a" => "red", "b" => "green", "c" => "blue");
array_walk($a, "myfunction");
print_r($a);
echo "<br><br>";

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");
$result = array_diff($a1, $a2);
print_r($result);
echo "<br><br>";

print_r(array_intersect($a1, $a2));
echo "<br><br>";

$a1 = array("a", "b", "c", "d");
$a2 = array(1, 2, 3, 4);
print_r(array_combine($a1, $a2));
echo "<br><br>";

print_r(array_column($books, "year"));
echo "<br><br>";

print_r(array_slice($a1, 1, 3));
echo "<br><br>";

if (in_array("a", $a1)) {
    echo "a: exists ";
}
 
 
 
 
 
 
 
 ?>