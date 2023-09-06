<?php
// prime number checking in php
$pnum = $_REQUEST['prime'];
$cnum = 0;
for($c = 2; $c < $pnum ; $c++){
     if($pnum % $c == 0){
        $cnum =1;
     }break;      
};
if($cnum == 1){
    echo "$pnum It's not prime number ";
}else{
    echo "$pnum It's a prime number";
};
echo "<br>";
?>