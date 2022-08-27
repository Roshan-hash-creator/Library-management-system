<?php

class db{
    protected $connection;
    
    function setconnection(){
        try{
            $this->connection=new PDO("mysql:host=localhost;dbname=library_managment", "root", "");
            // echo "Connection Sucessfully..";
        }
        catch(PDOException $e){
            echo "Error";
        }
    }
}