<?php

// Need to create a humen marrege age validity qwitch case

// $name = "Rohim";
// $dob = 2020;
// $gender = "Male";

// // Find out the current age of human

// $currentAge = 2024 - $dob;
// $marriageAge = NULL;

// switch ($gender){
//     case "Male":
//     $marriageAge = 21;
//     break;

//     case "Female" :
//     $marriageAge = 18;
//     break;

//     default :
//     $marriageAge = 21;

// }

// if ( $currentAge >= $marriageAge ){
//   echo "Hi {$name}, As a {$gender}, you are a Young and you age now {$currentAge}, You are able to marrege. You have to ready for that :) ";
// }else{
//     echo "Sorry, you are now {$currentAge}, So not allow";
// }


// Need to create a humen marrege age validity using if else

// $name = "Rohima";
// $dob = 2000;
// $gender = "Female";

// // Find out the current age of human
// $currentAge = 2024 - $dob;

// // For Male 

// if ($gender == "Male"){
//     if($currentAge >= 21 ){
//         echo "Hi {$name} Vaiya, As a {$gender}, you are a Young and you age now {$currentAge}, You are able to marrege. You have to ready for that :) ";
//     }else if($currentAge < 18){
//         $boyWait = $currentAge - 21;
//         echo "Hi {$name} Vaiya, As a {$gender}, you are a Boy and you age now {$currentAge}, You are under from 18. Please wait {$boyWait} year";
//     }else{
//         $wait = 21 - $currentAge;
//         echo "Sorry {$name} Vaiya, you are now {$currentAge}, So not allow. You have to wait {$wait} years :( ";
//     }

// // For Female

// }else if($gender == "Female"){
//     if($currentAge >= 18 ){
//         echo "Hi {$name} apu, As a {$gender}, you are girls and you age now {$currentAge}, You are able to marrege. You have to ready for that :) ";
//     }else{
//         $wait = 18 - $currentAge;
//         echo "Sorry {$name} apu, you are now {$currentAge}, So not allow. You have to wait {$wait} years :( ";
//     }
// }else{
//     echo "Please provide valid information";
// }


// for ($i = 1; $i <=10 ; $i++){

//   echo " -{$i} </br>";

//   if($i % 2 == 0){
//     continue;
//   }
  

// }


/**
 * Arrat Sort
 * rsort
 * asort
 * ksort
 * shuffle
 * 
 */


$allData = [
  
  "rangpur" => "rasel",
  "dhaka"   => "kamal",
  "bogura" => "amir",
  "chottragram" => "jamal",
  "foridpur" => "dilp",
  "samalPur" => "amrul",
  "feni" => "zamal",
];





echo ("<pre>");
print_r ($allData);
echo ("</pre>");


?>