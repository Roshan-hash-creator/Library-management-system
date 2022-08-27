<?php
session_start();
include("db.php");

class data extends db{
    
    function __construct(){
        // echo "working";
    }

    function adminLogin($t1, $t2){
        $q="SELECT * FROM admin where email='$t1' and pass='$t2' ";
        $recordSet= $this->connection->query($q);
        $result = $recordSet->rowCount();


        if($result > 0){
            foreach($recordSet->fetchAll() as $row){
                $logid = $row['id'];   
                $_SESSION["adminid"] = $logid;
                header("Location:admin_service_dashboard.php");
            }
        }
        else if($result <= 0){
            header("Location:index.php?msg=Invalid Credentials");
        }
    }
}