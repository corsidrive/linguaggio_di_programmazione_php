<?php 

// # un uguale --> assegnazione (diventa uguale a)
// $a = 2;

// # == --> operatore di uguaglianza (se due valori sono uguali)

// var_dump(2 == 2,3==2);
// var_dump(2);
// var_dump("2");
// var_dump("2" == 2 );
// var_dump("2" === 2 );
// echo "------\n";
// $risultato = boolval("2" === 2);
// var_dump($risultato);
// echo "------\n";

// var_dump("",boolval(""));

// echo "------\n";
// var_dump("ciccio",boolval("ciccio"));

// if(""){

//     echo "sono dentro il ramo 1";
    
// }else{
    
//     echo "sono dentro il ramo 2";
// }

echo "------\n";
var_dump(boolval("") === false);
var_dump(boolval(0) === false);
var_dump(boolval(-50) === true);
var_dump(boolval(50) === true);
var_dump(boolval([]) === false);
var_dump(boolval([1,2]) === true);
var_dump(boolval("0") === false);
var_dump(boolval("1") === true);
echo "------\n";

var_dump("1" === true);
