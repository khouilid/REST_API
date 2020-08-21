<?php
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');

 include_once '../Models/CRUD.php';

class Read_id Extends CRUD{

    private function get_pro($id){

        $data = $this->find_project($id);
        // check  data if it existe or not
        if(is_array($data) == True){

            if (sizeof($data) > 0 ){
                // Rename the Data 
                $Arr = ["Project" =>  $data[0]['Project_name'],
                "Github" => $data[0]['GitHub_link'],
                "Website" => $data[0]['website_link'] ,
                "Description" => $data[0]['Description']
                ];
                // return JSON file containe data
                echo json_encode($Arr);
    
    
            }else{
             
                echo json_encode(['Message' => 'No Data Found']);
            }
        }else{
            
            echo json_encode(['Message' => 'The ID must be a Number/integer']);
        }

    }

    // check the poject ID 
    public function Get_single(){
        // check the ID is set and check if it's integer
        if(!empty($_GET['id'])){
            return $this->get_pro($_GET['id']);
        }else{

            echo json_encode(['Message' => 'Messing project ID']);


        }
    }
}

$data = new Read_id;
$data = $data->Get_single();

