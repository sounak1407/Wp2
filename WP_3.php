<!DOCTYPE html>
<html>
<body>

<?php

$cars = array("Suzuki", "Mercedes", "Jaguar");
echo "$cars[0] $cars[1] $cars[2] </br>";

foreach($cars as $i){
    echo "$i </br>";
}

$student = array("name"=>"Sounak",
    "roll"=>1814070,
    "email"=>"sounak.das@somaiya.edu",
);

foreach($student as $key => $element){
    echo $key.":".$element."</br>";
}

$info = array("e" => "elephant","a"=>"apple","c"=>23,"b"=>676);
ksort($info);

foreach($info as $key => $element){
    echo $key.":".$element."</br>";
} 

?>

</body>
</html>