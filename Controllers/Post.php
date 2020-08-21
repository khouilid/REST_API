<?php

 // Headers
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: POST');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

 
include_once '../Models/CRUD.php';


class Post Extends CRUD{

    public function __construct($name, $github, $website,$description){

        $result = $this->Insert($name, $github, $website,$description);

        if($result){
            echo 'Done';
        }else{
            echo "Can't insert now";
        }

    }
}



