<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


  include_once '../Models/CRUD.php';


  class Delete Extends CRUD{


      public function Delete_item(){
                 if(isset($_GET['id'])){
                    if($this->Delete($_GET['id'])){
                        echo json_encode(['message' => 'Poject Deleted']);
                    }else{
                        echo json_encode(['message' => 'Poject Not Deleted']);
                    }
                 }else{
                    echo json_encode(['message' => 'Poject Not Deleted']);
                 }

      }
  }


