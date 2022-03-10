<?php


## SNACK 2

$nameCheck = $_GET["name"];

$emailCheck = $_GET["email"];

$ageCheck = $_GET["age"];

if(strlen($nameCheck) >= 3 && strpos($emailCheck , '.') !== false && is_numeric($ageCheck)){
    echo "access granted";
}else{
    echo "access denied";
};