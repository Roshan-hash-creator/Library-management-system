<?php
session_start();
include("db.php");

class data extends db{

    private $bookPic;
    private $bookName;
    private $bookDetails;
    private $bookAuthor;
    private $bookPub;
    private $branch;
    private $bookPrice;
    private $bookQuantity;
    private $type;
    private $book;
    private $userSelect;
    private $days;
    private $getDate;
    private $returnDate;

    
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

    function addnewuser($name, $password, $email, $type){
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->type = $type;

        $q = "INSERT INTO userdata(id, name, email, pass, type) VALUES('', '$name','$email', '$password', '$type')";

        if($this->connection->exec($q)){
            header("Location:admin_service_dashboard.php?msg=New User created");
        }
        else{
            header("Location:admin-service_dashboard.php?msg=Register Fail");
        }
    }

    function addbook($bookPic, $bookName, $bookDetail, $bookAuthor, $bookPub, $branch, $bookPrice, $bookQuantity) {
        
        $this->$bookPic=$bookPic;
        $this->bookName=$bookName;
        $this->bookDetail=$bookDetail;
        $this->bookAuthor=$bookAuthor;
        $this->bookPub=$bookPub;
        $this->branch=$branch;
        $this->bookPrice=$bookPrice;
        $this->bookQuantity=$bookQuantity;

       $q="INSERT INTO book (id,bookpic,bookname, bookdetail, bookauthor, bookpub, branch, bookprice,bookquantity,bookava,bookrent)VALUES('','$bookPic', '$bookName', '$bookDetail', '$bookAuthor', '$bookPub', '$branch', '$bookPrice', '$bookQuantity','$bookQuantity',0)";

        if($this->connection->exec($q)) {
            header("Location:admin_service_dashboard.php?successfulMsg=Book Added Successfully...");
        }

        else {
            header("Location:admin_service_dashboard.php?msg=fail");
        }

    }

    function issuereport(){
        $q="SELECT * FROM issuebook ";
        $data = $this->connection->query($q);
        return $data;
    }

}