<?php

class OperaCRUD {

    private $conn;
    public function __construct() {
        
        try {
            $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD); // ERRORE
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

    /** 
     * @example
     * $crud->readAll();
     * $crud->readAll(10);
     * $crud->readAll(20,10);
     * @see https://www.w3schools.com/mysql/mysql_limit.asp
     * @param int $to fino a quanti record devo estrarre 
     * @param int $from da che numero ...
     */
    public function readAll($to=null,$from=null){
        $limit = "";

        // @example $crud->readAll(10);
        if(!is_null($to) && is_null($from)){
            $limit = " LIMIT $to";
        } 

        //  $crud->readAll(20,10);
        if(!is_null($to) && !is_null($from)){
            $limit = " LIMIT $from,$to";
        }
        $query = "SELECT * FROM opera $limit;";
        echo $query;
        $pdo_stm = $this->conn->prepare($query);
        
        $pdo_stm->execute();
        
        // $res = $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
        // if(count($res) == 0){
        //     return false;
        // }else{
        //     return $res;
        // }
        return $pdo_stm->fetchAll(PDO::FETCH_ASSOC); // [] --> false
    } 


    public function readByMuseoId($museo_id,$to=null,$from=null){
        $limit="";
        
        if(!is_null($to) && is_null($from)){
            $limit = " LIMIT $to";
        } 

        //  $crud->readAll(20,10);
        if(!is_null($to) && !is_null($from)){
            $limit = " LIMIT $from,$to";
        }

        $query = "SELECT * FROM opera  where museo_id = :museo_id $limit;";
        $pdo_stm = $this->conn->prepare($query);
        $pdo_stm->bindValue(':museo_id',$museo_id,PDO::PARAM_INT);
        $pdo_stm->execute();

        return $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
    }
    // NOTE forse opera_id non serve
    public function update($opera)  {

        $autore = $opera["Autore"];
        $titolo = $opera["Titolo"];
        $datazione = $opera["Datazione"];
        $tecnica = $opera["Tecnica"];
        $dimensioni = $opera["Dimensioni"];
        $immagine = $opera["Immagine"];
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