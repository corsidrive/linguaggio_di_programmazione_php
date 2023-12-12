<?php 
/**
 * @var string $form_name attributo name del form
 * @var string $destination_relative_path cartella di upload
 *   
 */
function upload_file($form_name,$destination_relative_path){
// print_r($_FILES);
    if($_FILES[$form_name]['error'] == UPLOAD_ERR_OK ){
        $upload_folder = SITE_DIR.$destination_relative_path;
        $nome_file_originale = $_FILES[$form_name]['name'];
        $path_file_temporaneo = $_FILES[$form_name]['tmp_name'];
    

        if(!file_exists($upload_folder)){
            if(!mkdir($upload_folder,0777,true)){
                // non sono riuscito a creare la directory
                return false;
            };
        }

        if(move_uploaded_file($path_file_temporaneo,$upload_folder."/".$nome_file_originale)){
            return $nome_file_originale;
        }else{
            // non ho caricato il file
            return false;
        };
        
    }else{
        // posso avrere ragioni diverse
        // return $_FILES[$form_name]['error']
        return false;
    }

}

