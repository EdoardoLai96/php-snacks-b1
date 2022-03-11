<?php


## SNACK 2

$nameCheck = $_GET["name"];

$emailCheck = $_GET["email"];

$ageCheck = $_GET["age"];

if(!empty($_GET["name"]) || !empty($_GET["email"]) || !empty($_GET["age"])){

    if(strlen($nameCheck) >= 3 && strpos($emailCheck , '.') !== false && strpos($emailCheck , '@') !== false && is_numeric($ageCheck)){
        echo "access granted <br/>";
    }else{
        echo "access denied <br/>";
    };

    
}else{
    echo "Inserire prima i dati <br/>";
}


## SNACK 5

$paragrafoLungo = "The Office is an American mockumentary sitcom television series. Depicts the everyday work lives of office employees in the Scranton. Pennsylvania branch of the fictional Dunder Mifflin Paper Company. It aired on NBC from March 24, 2005, to May 16, 2013. Spanning a total of nine seasons";

$paragrafiCorti = explode(".", $paragrafoLungo);



for($c=0; $c < count($paragrafiCorti); $c++){
    echo $paragrafiCorti[$c] . "." . "<br/>";
}