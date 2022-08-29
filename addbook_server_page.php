<?php
// addserver_page.php 

include("data_class.php");

$bookName = $_POST['bookName'];
$bookDetail = $_POST['bookDetail'];
$bookAuthor = $_POST['bookAuthor'];
$bookPub = $_POST['bookPub'];
$branch = $_POST['branch'];

$bookPrice = $_POST['bookPrice'];
$bookQuantity = $_POST['bookQuantity'];

if(move_uploaded_file($_FILES["bookPhoto"]["tmp_name"], "uploads/" .$_FILES["bookPhoto"]["name"])) {

    echo "Upload sucessfully";
    $bookPic = $_FILES["bookPhoto"]["name"];

    $obj = new data();
    $obj->setconnection();
    $obj->addbook($bookPic, $bookName, $bookDetail, $bookAuthor, $bookPub, $branch, $bookPrice, $bookQuantity);

}
else{
    echo "Failed to uploaded you file";
}
