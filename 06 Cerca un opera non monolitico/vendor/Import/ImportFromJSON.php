<?php

class ImportFromJSON {
    // public function __construct() {
    // }

    public static function execute($museo) {
        $opere = ottieni_opere($museo->url);
        //print_r($opere);

        $operaCrud = new OperaCRUD;
        foreach ($opere as  $opera) {
            $opera["museo_id"] = $museo->id; 
            $operaCrud->create($opera); 
            
        }

        # CRUD      | SQL       | HTTP
        # Create    | Insert    | POST
        # Read      | Select    | GET    | museo.it/opera/12
        # Update    | Update    | PUT
        # Delete    ! Delete    | DELETE | museo.it/opera/12


    }
}