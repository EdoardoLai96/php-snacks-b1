<?php


## SNACK 2

$nameCheck = $_GET["name"];

$emailCheck = $_GET["email"];

$ageCheck = $_GET["age"];

if(!empty($_GET["name"]) || !empty($_GET["email"]) || !empty($_GET["age"])){

    if(strlen($nameCheck) >= 3 && strpos($emailCheck , '.') !== false && is_numeric($ageCheck)){
        echo "access granted";
    }else{
        echo "access denied";
    };

    
}else{
    echo "Inserire prima i dati";
}


## SNACK 5

$paragrafoLungo = "The Office is an American mockumentary sitcom television series. Depicts the everyday work lives of office employees in the Scranton. Pennsylvania branch of the fictional Dunder Mifflin Paper Company. It aired on NBC from March 24, 2005, to May 16, 2013. Spanning a total of nine seasons";

$paragrafiCorti = explode(".", $paragrafoLungo);

var_dump($paragrafiCorti);

$c= 0;

for($c; $c < count($paragrafiCorti); $c++){
    echo $paragrafiCorti[$c] . "." . "<br/>";
}