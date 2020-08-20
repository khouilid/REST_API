<?php
include_once '../Config/Connection.php';



class Gett Extends Connection {
    // get all the project from DB 
    public function get_project(){
        $sql = 'SELECT * FROM `projects`';
        $stmt = $this->connection()->query($sql);
        $stmt = $stmt->fetchAll();
        return $stmt;
    }


    //  get a specific project by it's ID
    public function find_project($id){
        $sql = 'SELECT * FROM `projects` WHERE ID = '. $id .'';
        $stmt = $this->connection()->query($sql);

        // check if the request not return an boolean 
        if($stmt){
            $data = $stmt->fetchAll();
            return $data;
        }else{
            return 'No Data Found';
        }
    }
}


