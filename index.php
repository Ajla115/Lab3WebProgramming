

<?php 
//first way of creating an array

$array1 = array(1,2,3,4,5);

$array2 = [1,2,3,4,5];

var_dump($array1);
echo "<br>";
var_dump($array2);
echo "<br>";

$array3 = array("Peter"=>"35", "Bob"=>"42", "Maria"=>"21");
var_dump($array3);
echo "<br>";
$array4 = ["Peter"=>"35", "Bob"=>"42", "Maria"=>"21"];
var_dump($array4);
echo "<br>";

$castVariable = 8;
var_dump(+$castVariable); 
/*default vrijednost je String, pa onda compailer sam trazi da pokusa u drugu vrijednost da pretvori kad stavimo +,
 bilo da je to int ili float*/

 // string key
$arr1 = ["a" => 1];
$arr2 = ["a" => 2];
$arr3 = ["a" => 0, ...$arr1, ...$arr2];
var_dump($arr3);


// integer key
$arr4 = [1, 2, 3];
$arr5 = [4, 5, 6];
$arr6 = [...$arr4, ...$arr5];
var_dump($arr6);
?>