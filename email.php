<?php

$user = $_REQUEST['email'];
$password = $_REQUEST['password'];
$email = "rashedul59992@gmail.com";
$my_password = "rashed8742@";
if($user == $email && $password == $my_password){
    Print_r("<h3> if typing username and password is right</h3>");
    print_r("<h3>Hi!</h>") ;
    echo "<br>";
    print_r("<h3>Md Rashedul Islam</h>");
    echo "<br>";
    print_r("welcome in your email") ;
    echo "<br>";
}else if($user != $email && $password != $my_password){
    Print_r("<h3> if typing username and password is  wrong</h3>");
    print_r("yor username and password is incorrect") ;
    echo "<br>";
}else if($user != $email){
    Print_r("<h3> if typing username is wrong</h3>");
    print_r("yor user name is incorrect") ;
    echo "<br>";
}else if($password != $my_password){
    Print_r("<h3> if typing password is wrong</h3>");
    print_r("your Password is incorrect") ;
    echo "<br>";
};


// if($user == $email){
//     print_r("Hi!") ;
//     echo "<br>";
//     print_r("welcome in your email") ;
//     echo "<br>";
// }else{
//     print_r("yor user name is incorrect") ;
//     echo "<br>";
// };
// if($password == $my_password){
//     print_r("Welcome") ;
//     echo "<br>";
// }else{
//     print_r("your Password is incorrect") ;
//     echo "<br>";
// }
?>