<?php

class OperaCRUD {

    private $conn;
    public function __construct() {
        
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=museo","root",""); // ERRORE
        
        } catch (\PDOException $exc) {
            
            echo $exc->getMessage()."\n"; 
        }
        
    }



    public function create($opera) {
        // echo __CLASS__."::".__FUNCTION__."\n" ;
        print_r($opera);

        // $autore = ";DROP DATABASE museo;";
        $autore = $opera["Autore"];
        $titolo = $opera["Titolo"];
        $datazione = $opera["Datazione"];
        $tecnica = $opera["Tecnica"];
        $dimensioni = $opera["Dimensioni"];
        $immagine = $opera["Immagine"];
        $museo_id = $opera["museo_id"];

        $query ="INSERT INTO `opera` ( `autore`, 
                                       `titolo`, 
                                       `datazione`, 
                                       `tecnica`, 
                                       `dimensioni`, 
                                       `immagine`, 
                                       `museo_id`) 
                 VALUES ( 
                 :autore, 
                 :titolo, 
                 :datazione, 
                 :tecnica, 
                 :dimensioni, 
                 :immagine, 
                 :museo_id);
                 ";

        $pdo_stm = $this->conn->prepare($query);

        $pdo_stm->bindValue(":autore", $autore);
        $pdo_stm->bindValue(":titolo", $titolo);
        $pdo_stm->bindValue(":datazione", $datazione);
        $pdo_stm->bindValue(":tecnica", $tecnica);
        $pdo_stm->bindValue(":dimensioni", $dimensioni);
        $pdo_stm->bindValue(":immagine", $immagine);
        $pdo_stm->bindValue(":museo_id", $museo_id);

        $pdo_stm->execute();
        
        // $this->conn->query($query);

        die();

    }
    public function readOne($opera_id)  {}

    // NOTE forse opera_id non serve
    public function update($opera_id,$opera)  {
        
    }


    public function delete($opera_id) {}

}