<?php 

// mysql:host=$servername;dbname=myDB
try {
    $conn = new PDO("mysql:host=localhost;dbname=museo","root","");

    $res = $conn->query("select * from museo;");
    // print_r($res->fetchAll());
    $musei = $res->fetchAll();
    
    foreach ($musei as $key => $museo) {
        echo $museo['nome'];
    }

} catch (\Exception $e) {
    echo $e->getMessage(); // e.getMessage()
}
