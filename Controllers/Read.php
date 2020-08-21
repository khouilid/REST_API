<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../Models/CRUD.php';

class Read Extends CRUD{
   public $Data = [];
  public function get_All(){
        // create new object and call the method get_project that will return all the project inside an Array
      
        $project_All = $this->get_project();

        if (sizeof($project_All) > 0 ){
                // Rename the data 
                for ($i = 0; $i < sizeof($project_All); $i++){
                        $Arr = ["Project" =>  $project_All[$i]['Project_name'],
                            "Github" => $project_All[$i]['GitHub_link'],
                            "Website" => $project_All[$i]['website_link'] ,
                            "Description" => $project_All[$i]['Description']
                    ];
                    $Data[] = $Arr;

                };
                // convert the data into JSON file
               echo json_encode($Data);
        }else{
           echo 'No Data Found';
        }
        

  }
}


