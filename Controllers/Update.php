<?php
 // Headers
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: UPDATE');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


 
 include_once '../Models/CRUD.php';


 class Update_item extends CRUD{



    public function Update(){
        // check if ID is set 

        if(isset($_GET['id'])){

            // check which data we gonna update

            if(isset($_GET['name'])){
                $this->Update_item($_GET['id'], $_GET['name'], 'Name');

                echo json_encode(['Message' => 'Name updated succesfuly']);
            }

            if(isset($_GET['Github'])){
                $this->Update_item($_GET['id'], $_GET['Github'], 'Github');

                echo json_encode(['Message' => 'Github link updated succesfuly']);
            
            }


            if(isset($_GET['Website'])){
                $this->Update_item($_GET['id'], $_GET['Website'], 'Website');

                echo json_encode(['Message' => 'Website link updated succesfuly']);
            
            }

            if(isset($_GET['Desc'])){
                $this->Update_item($_GET['id'], $_GET['Desc'], 'Desc');


                echo json_encode(['Message' => 'Description updated succesfuly']);
            
            }


        }else{
            
            echo json_encode(['Message' => 'The ID must be a Number/integer']);
        }


    }
 }



 
$s = new Update_item;
$d = $s->Update();



 