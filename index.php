<?php

// // for loop practice
// for ($i = 1; $i <=100; $i++) {
//     echo "$i <br>";
// }
// //piramit practice with for loop
// $valou = "*";
// for($s = 1; $s < 11 ; $s++){
// echo str_repeat($valou,$s) ."<br>";
// };
// for($a = 11; $a > 1; $a--){
// echo str_repeat($valou,$a) ."<br>";
// };


//times table with for loops
// $number = 100;
// for($f = 1; $f <= $number;  $f++){
//     for ($b = 1; $b <= 10; $b++){
//         echo " $f * $b = ". $f * $b ."<br>";
//     };  
//     echo "<br>";
// }
// echo "<br><br>";

// //factorial practice
// $fnumber = 5;
// $result =1;
// for($d = 1; $d <= $fnumber;$d++){
//     $result = $result*$d;
// };
// echo $result ."<br><br>";
 
//prime number checker
// $pnum = 41;
// $cnum = 0;
// for($c = 2; $c < $pnum ; $c++){
//      if($pnum % $c == 0){
//         $cnum =1;
//      }break;      
// };
// if($cnum == 1){
//     echo "$pnum It's not prime number ";
// }else{
//     echo "$pnum It's a prime number";
// };
// echo "<br>";
 
//
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
     <!-- for loop in html   -->
    <!-- <select>
        <?php
    //     for($i =2023 ; $i >=1905 ; $i--) {
    // echo "<option>$i</option>";};
        ?>
        
    </select>

   <select name="" >
    <?php
    // for($a =1905 ; $a <=2023 ; $a++){
    //     echo "<option >$a</option>";
    // };
    ?>
   </select> -->


   <!-- foreach loop practice with Html -->
   <!-- <ul>
    <?php
    // $veges =[
    //     "alu",
    //     "potol",
    //     "korola",
    //     "mula",
    //     "law",
    //     "derosh",
    //     "shim",
    //     "kochu"
    // ];
    // foreach ($veges as $vege ){
    //     echo "<li>$vege</li>";
    // };
    ?>
   </ul> -->

<!-- 
   <div class="card col-4 mx-auto mt-5">
    <div class="card-header">
        <h4 class="text-center">Number checker</h4>
    </div>
    <div class="card-body">
        <form action="./NumberChecker.php" method="POST">
            <input name="number" type="text" class="form-control text-center" placeholder="Enter your number">
            <button type="submit" class="btn btn-primary  mt-3" style="margin-left: 8em;">Chack Number</button>


        </form>
    </div>
   </div> -->

<!-- section for login part -->
   <div class="card col-4 mx-auto mt-5">
    <div class="card-header">
        <h4 class="text-center">Log in your id</h4>
    </div>
    <div class="card-body">
        <form action="./email.php" method="POST">
            <input name="email" type="email" class="form-control text-center" placeholder="Enter your email">
            <input name="password" type="password" class="form-control text-center" placeholder="Enter your password">
            <button type="submit" class="btn btn-primary  mt-3" style="margin-left: 8em;">Continue</button>
        </form>
    </div>
   </div>





   
<!-- prime number checking -->
   <div class="card col-4 mx-auto mt-5">
    <div class="card-header">
        <h4 class="text-center">Number checking</h4>
    </div>
    <div class="card-body">
        <form action="./prime.php" method="POST">
            <input name="prime" type="number" class="form-control text-center" placeholder="Enter your number">
            <button type="submit" class="btn btn-primary  mt-3" style="margin-left: 8em;">Continue</button>
        </form>
    </div>
   </div>


</body>
</html> 