<?php 
 

// mysql:host=$servername;dbname=myDB
try {
    $conn = new PDO("mysql:host=localhost;dbname=museo","root","");


    // $res = $conn->query("select * from museo;");
    // 
    $res = $conn->query("select slug,nome from museo;");

    // aggiungi(2+2)
    // $musei = $res->fetchAll();
    // $musei = $res->fetchAll(PDO::FETCH_ASSOC);
    // $musei = $res->fetchAll(PDO::FETCH_NUM);
    // $musei = $res->fetchAll(PDO::FETCH_OBJ);
    $musei = $res->fetchAll(PDO::FETCH_FUNC,function ($slug,$nome){
        
        return [
            "name"=>$nome,
            "cod" =>$slug
        ];
        
        // print_r($a);
        // echo "<br>";
        // print_r($b);
        // echo "<br>";
        // print_r($c);
        // echo "<br>";
        // print_r($d);
        // echo "<hr>";
    }); // new Museo()



    // print_r($musei);
    // foreach ($musei as $key => $museo) {
    //     echo $museo['nome'];
    // }

} catch (\Exception $e) {
    echo $e->getMessage(); // e.getMessage()
}
