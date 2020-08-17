<!DOCTYPE html>
<html>
<body>

<?php

function factorial($n){
    if($n>1){
        return $n*factorial($n-1);
    }
    else{
        return 1;
    }
}

function fibonacci($n,$n1,$n2){
    $n3=0;
    if($n>0){
        $n3 = $n2 + $n1;
        $n1 = $n2;
        $n2 = $n3;
        echo $n3 ;
        echo "</br>";
        fibonacci($n-1,$n1,$n2);
    }
}

function palindrome($n){
    echo "</br>";
    $n1 = reverse_no($n);
    if($n == $n1){
        echo "$n is a Pallindrome ";
    }
    else{
        echo "$n is not a Pallindrome";
    }
}

function reverse_no($n){
    echo "</br>";
    $rev = 0;
    while($n>0){
        $rev = $rev*10;
        $rev = $rev + $n%10;
        $n = (int)($n/10);
    }
    return $rev;

}

function reverse_string($s){
    
    $l = strlen($s);
    for ($i=$l-1,$j=0;$j<$i;$i--,$j++){
        $temp = $s[$i];
        $s[$i] = $s[$j];
        $s[$j] = $temp; 
    }
    echo $s;
}


echo factorial(13);
echo "</br>0</br>1</br>";
echo fibonacci(15,0,1);
echo palindrome(1234321);
echo reverse_no(123);
echo "</br>";
reverse_string("hello");


?>

</body>
</html>