<?php

class MuseoCRUD
{

    private $conn;
    public function __construct()
    {

        try {
            $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD); // ERRORE

        } catch (\PDOException $exc) {
            
            echo $exc->getMessage()."\n"; 
        }

    }
    public function create($museo)
    {
        //tirare fuori tutte le infomazioni e poi si compila la query 
        $slug = $museo["slug"];
        $nome = $museo["nome"];
        $import_url = $museo["import_url"];
        $query = "INSERT INTO `museo` (slug,nome,import_url`) 
                 VALUES ( 
                 :slug, 
                 :nome, 
                 :import_url, 
                 );
                 ";
        $pdo_stm = $this->conn->prepare($query);
        $pdo_stm->bindValue(":nome", $nome); 
        $pdo_stm->bindValue(":slug", $slug);
        $pdo_stm->bindValue(":import_url", $import_url);
        
        $pdo_stm->execute();
    }

    public function readOne($museo_id)
    {

        $query = "SELECT * FROM museo where museo_id = :museo_id ;";
        $pdo_stm = $this->conn->prepare($query);
        $pdo_stm->bindValue(':museo_id', $museo_id);
        $pdo_stm->execute();
        $result = $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
        // isset($ciccio);
        if (!isset($result[0])) {
            return false;
        } else {
            return $result[0];
        }
    }
    /** 
     * @example
     * @param int $to fino a quanti record devo estrarre 
     * @param int $from da che numero ...
     */
    public function readAll()
    {

        $query = "SELECT * FROM museo";
       
        $pdo_stm = $this->conn->prepare($query);
        $pdo_stm->execute();
        return $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update($museo)
    {

        $slug = $museo["slug"];
        $nome = $museo["nome"];
        $import_url = $museo["import_url"];
        $museo_id = $museo["museo_id"];
        $query =
            'UPDATE `opera` SET 
         `slug` = :slug,
         `nome` = :nome,
         `import_url` = :import_url,
         WHERE `museo`.`meseo_id` = :museo_id;
        ';
        $pdo_stm = $this->conn->prepare($query);
        $pdo_stm->bindValue(":nome", $nome); //avviene l'assegnazione tra parametro e il suo valore 
        $pdo_stm->bindValue(":slug", $slug);
        $pdo_stm->bindValue(":import_url", $import_url);
        $pdo_stm->bindValue(":museo_id", $museo_id);
        $pdo_stm->execute();
    }
    public function delete($museo_id)
    {

        $query = 'DELETE FROM opera WHERE `museo`.`museo_id` = :museo_id';
        $pdo_stm = $this->conn->prepare($query);
        $pdo_stm->bindValue(':museo_id', $museo_id);
        $pdo_stm->execute();
    }

}