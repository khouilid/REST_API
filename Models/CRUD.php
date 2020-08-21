<?php
include_once '../Config/Connection.php';



Abstract class CRUD Extends Connection {
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
//     this method for insert new project 
    public function Insert($name, $github, $website,$description){

        $sql = 'INSERT INTO `projects`(`Project_name`, `GitHub_link`, `website_link`, `Description`) VALUES (?,?,?,?)';
        $stmt = $this->connection()->prepare($sql);

        return $stmt->execute([$name, $github, $website,$description]);
       
    }


    // this method for delete poject from DB 
    public function Delete($id){
        $sql = 'DELETE FROM `projects` WHERE ID = ?';

        $stmt = $this->connection()->prepare($sql);
        
        return $stmt->execute([$id]);
    }




}


