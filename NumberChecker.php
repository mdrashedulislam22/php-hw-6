<?php
$number2 = $_REQUEST['number'];
if($number2 % 2 == 0){
    echo $_REQUEST['number']." It's a even number";
}else{
    echo $_REQUEST['number']." It's a odd number";
};
?>