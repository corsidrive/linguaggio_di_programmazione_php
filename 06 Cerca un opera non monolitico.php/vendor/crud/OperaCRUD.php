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

        
    }
    public function readOne($opera_id)  {

        $query = "SELECT * FROM `opera` where `opera_id` = :opera_id ;";
        $pdo_stm = $this->conn->prepare($query);
        $pdo_stm->bindValue(':opera_id',$opera_id);       
        $pdo_stm->execute();
        $result = $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
        // isset($ciccio);
        if(!isset($result[0])) {
            return false;
        }else{
            return $result[0];
        }

        // return $result[0] ?? false;
    }

    public function readAll(){

    } 


    // NOTE forse opera_id non serve
    public function update($opera)  {

        $autore = $opera["autore"];
        $titolo = $opera["titolo"];
        $datazione = $opera["datazione"];
        $tecnica = $opera["tecnica"];
        $dimensioni = $opera["dimensioni"];
        $immagine = $opera["immagine"];
        $museo_id = $opera["museo_id"];
        $opera_id = $opera["opera_id"];

        $query = 
        'UPDATE `opera` SET 
         `autore` = :autore,
         `titolo` = :titolo,
         `datazione` = :datazione,
         `tecnica` = :tecnica,
         `dimensioni` = :dimensioni, 
         `museo_id` = :museo_id, 
         `immagine` = :immagine
         WHERE `opera`.`opera_id` = :opera_id;
        ';
        $pdo_stm = $this->conn->prepare($query);
        
        $pdo_stm->bindValue(":autore", $autore);
        $pdo_stm->bindValue(":titolo", $titolo);
        $pdo_stm->bindValue(":datazione", $datazione);
        $pdo_stm->bindValue(":tecnica", $tecnica);
        $pdo_stm->bindValue(":dimensioni", $dimensioni);
        $pdo_stm->bindValue(":immagine", $immagine);
        $pdo_stm->bindValue(":museo_id", $museo_id);
        $pdo_stm->bindValue(':opera_id',$opera_id);

        $pdo_stm->execute();
    }


    public function delete($opera_id) {

        $query = 'DELETE FROM opera WHERE `opera`.`opera_id` = :opera_id';
        $pdo_stm = $this->conn->prepare($query);
        $pdo_stm->bindValue(':opera_id',$opera_id);
        $pdo_stm->execute();
    }

}