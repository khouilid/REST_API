<?php

Abstract class Connection {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $DB_name = 'portfolio_db';


    public function connection() {

        $dsn = 'mysql:host='. $this->host .';dbname='. $this->DB_name .'';
        $PDO = new PDO($dsn, $this->user, $this->password);

        $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $PDO;
    }


}