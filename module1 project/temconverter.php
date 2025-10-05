<?php

//c/s = ((F-32)/9) 5;

const FACTOR = 9/5;
const OFFSET = 32;


echo "Enter your temparature :";
$temparature = (float)readline();


echo "Convert to (F: Farenheit, c:Celcius)";

$choice = readline();


switch ($choice){
    case "F":
        $result = $temparature * FACTOR + OFFSET ;
        echo "Temparature in Farenheit : $result";
        break;
 case "c":
        $result = ($temparature - OFFSET ) / FACTOR;
        echo "Temparature in Celcius : $result";
        break;
 default :
  echo "Invalid choice";
  break;



}