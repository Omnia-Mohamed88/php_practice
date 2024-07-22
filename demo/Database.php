<?php
//conecting to the mysql database ans exwcuting a query

class Database {
    public $connection;
    public function __construct(){
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8";
        $this->connection = new PDO($dsn ,'root' );
    }
    public function query($query){
        $statement = $this->connection -> prepare($query);
        $statement -> execute();
        return $statement;
    }
}