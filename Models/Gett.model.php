<?php
include_once '../Config/Connection.php';



class Gett Extends Connection {

    public function get_project(){
        $sql = 'SELECT * FROM `projects`';
        $stmt = $this->connection()->query($sql);
        $stmt = $stmt->fetchAll();
        return $stmt;
    }
}
