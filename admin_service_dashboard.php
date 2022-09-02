<?php
include("data_class.php");

$successfulMsg = "";


// session_start();

$adminid = $_SESSION["adminid"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- BOOTSTRAP CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- CUSTOM CSS  -->
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style=" margin-top: 4rem; ">
                <img src="images/logo.png" class="imglogo" alt="img">
            </div>
            <!-- BUTTON SECTION -->
            <div class="row mt-3 d-flex justify-content-center pt-2">
                <div class="col-2 d-flex flex-column gap-2">
                    <button type='button' class='btn btn-success'>ADMIN</button>
                    <button type='button' class='btn btn-success' onclick="openpart('addbook')">ADD BOOK</button>
                    <button type='button' class='btn btn-success' onclick="openpart('bookrecord')">BOOK
                        RECORD</button>
                    <button type='button' class='btn btn-success' onclick="openpart('bookrequestapprove')">BOOK
                        REQUEST</button>
                    <button type='button' class='btn btn-success' onclick="openpart('addperson')">ADD
                        PERSON</button>
                    <button type='button' class='btn btn-success' onclick="openpart('studentrecord')">STUDENT
                        REPORT</button>
                    <button type='button' class='btn btn-success' onclick="openpart('issuebook')">ISSUE
                        BOOK</button>
                    <button type='button' class='btn btn-success' onclick="openpart('issuebookreport')">ISSUE
                        REPORT</button>

                    <button type="button" class="btn btn-success">
                        <a href="index.php" style="text-decoration: none;color: rgb(255, 255, 255);">LOGOUT</a>
                    </button>
                </div>

                <!-- CONTENT SECTION  -->
                <div class="col-7 ">

                    <!-- ADD PERSON  -->
                    <div id="addperson" class="portion" style="display: none;">
                        <button type="button" class="btn col-12 mb-3 text-light"
                            style="background-color: rgb(163, 163, 163);">ADD PERSON</button>
                        <form action="addperson_server_page.php" method="post" enctype="multipart/form-data">


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="addname">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="addemail">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="addpass">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="type" class="col-sm-2 col-form-label">Choose type:</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="type" aria-label="Default select example">
                                        <option value="student">Student</option>
                                        <option value="teacher">Teacher</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col text-center">
                                    <input type="submit" class="btn btn-primary col-2" value="SUBMIT"></input>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- End of Add Person  -->

                    <!-- ADD BOOK  -->
                    <div class="row">
                        <div id="addbook" class="portion" style="<?php
                             if(!empty($_REQUEST['viewid']))
                             { echo " display:none";} else { echo "" ;} ?>">

                            <!-- ADD BOOK SECTION HEADING  -->
                            <button type="button" class="btn col-12 mb-3 text-light"
                                style="background-color: rgb(163, 163, 163);">ADD NEW BOOK</button>

                            <!-- BOOK SECTION CONTENT                                  -->
                            <form action="addbook_server_page.php" method="post" enctype="multipart/form-data">

                                <div class="row mb-2">
                                    <label class="col-sm-2 col-form-label">Book Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="bookName">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label class="col-sm-2 col-form-label">Detail</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="bookDetail">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label class="col-sm-2 col-form-label">Author</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="bookAuthor">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label class="col-sm-2 col-form-label">Publication</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="bookPub">
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Branch</label>

                                    <!-- BRANCH RADIO SECTION   -->
                                    <div class="col-sm-10 col-form-label">
                                        <!-- IT BRANCH -->
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch" value="IT"
                                                id="itBranch">
                                            <label class="form-check-label" for="itBranch">IT</label>
                                        </div>
                                        <!-- CIVIL BRANCH -->
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch" value="CIVIL"
                                                id="civilBranch">
                                            <label class="form-check-label" for="civilBranch">CIVIL</label>
                                        </div>
                                        <!-- ECE BRANCH  -->
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch" value="ECE"
                                                id="eceBranch">
                                            <label class="form-check-label" for="eceBranch">ECE</label>
                                        </div>
                                        <!-- ELECTRICAL BRANCH -->
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch"
                                                value="ELECTRICAL" id="electricalBranch">
                                            <label class="form-check-label" for="electricalBranch">ELECTRICAL</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="bookPrice">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label class="col-sm-2 col-form-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="bookQuantity">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label class="col-sm-2 col-form-label">Book Photo</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="bookPhoto">
                                    </div>
                                </div>

                                <div class="row pt-2">
                                    <div class="col text-center">
                                        <input type="submit" class="btn btn-primary col-2" value="SUBMIT"></input>
                                    </div>
                                    <div class="col-auto">
                                        <h4>
                                            <?php  echo $successfulMsg?>
                                        </h4>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End of Add Book  -->

                    <!-- STUDENT REPORT  -->
                    <div id="studentrecord" class="portion" style="display: none">
                        <button type="button" class="btn col-12 mb-3 text-light"
                            style="background-color: rgb(163, 163, 163);">STUDENT REPORT</button>

                        <?php
                        $u= new data;
                        $u->setconnection();
                        $u->userdata();
                        $recordset = $u->userdata();


                        $table="
                        <table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'>
                        <tr>
                        <th> Name </th>
                        <th> Email </th>
                            <th> Type </th>
                            <th> Delete </th>
                        </tr>
                        ";
                        
                        foreach($recordset as $row){
                            $table.="<tr>";
                            "<td>$row[0]</td>";
                            $table.="<td>$row[1]</td>";
                            $table.="<td>$row[3]</td>";
                            $table.="<td>$row[4]</td>";
                            $table.="<td>
                            <a href='deleteuser.php?useriddelete=$row[0]'> <button type='button' class='btn btn-outline-danger'>Delete  </button> </a>
                            
                            </td>";
                            
                            $table.="</tr>";
                            
                        }
                        $table.="</table>";

                        echo $table;
                        ?>
                    </div>

                    <!-- End of Student Report  -->

                    <!-- BOOK REPORT  -->
                    <div id="bookrecord" class="portion" style="display:none">
                        <button type="button" class="btn col-12 mb-3 text-light"
                            style="background-color: rgb(163, 163, 163);">BOOK RECORD</button>
                        <?php
                            $u=new data;
                            $u->setconnection();
                            $u->getbook();
                            $recordset=$u->getbook();

                            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'> 
                            <tr>
                                <th style ='padding: 8px 8px 8px 0px;'> Book Name </th>
                                <th>Price</th>
                                <th>Qnt</th>
                                <th>Available</th>
                                <th>Rent</th>
                                <th>View</th>
                                <th>Delete</th>
                            </tr>";

                                foreach($recordset as $row){
                                    $table.="<tr>";
                                        "<td>$row[0]</td>";
                                        $table.="<td>$row[2]</td>";
                                        $table.="<td>$row[7]</td>";
                                        $table.="<td>$row[8]</td>";
                                        $table.="<td>$row[9]</td>";
                                        $table.="<td>$row[10]</td>";

                                        $table.="<td>
                                            <a href='admin_service_dashboard.php?viewid=$row[0]' style='text-decoration: none'>
                                                View Book
                                            </a>
                                        </td>";

                                        $table.="
                                        <td>
                                            <a href='deletebook_dashboard.php?deletebookid=$row[0]'>
                                            <button type='button' class='btn btn-outline-danger'>Delete  </button>
                                            </a>
                                        </td>";

                                    $table.="</tr>";
                                        $table.=$row[0];
                                }
                                        $table.="</table>";

                                        echo $table;
                                        ?>

                    </div>

                    <!-- End of Book Report  -->

                    <!-- BOOK DETAILS  -->
                    <div id="bookdetail" class="innerright portion"
                        style="<?php  if(!empty($_REQUEST['viewid'])){ $viewid=$_REQUEST['viewid'];} else {echo "
                        display:none"; }?>">

                        <Button class="greenbtn">BOOK DETAIL</Button>
                        </br>
                        <?php
                            $u=new data;
                            $u->setconnection();
                            $u->getbookdetail($viewid);
                            $recordset=$u->getbookdetail($viewid);

                            foreach($recordset as $row){
                                    $bookid= $row[0];
                                    $bookimg= $row[1];
                                    $bookname= $row[2];
                                    $bookdetail= $row[3];
                                    $bookauthour= $row[4];
                                    $bookpub= $row[5];
                                    $branch= $row[6];
                                    $bookprice= $row[7];
                                    $bookquantity= $row[8];
                                    $bookava= $row[9];
                                    $bookrent= $row[10];
                                }            
                        ?>

                        <img width='150px' height='150px' style='border:1px solid #333333; float:left;margin-left:20px'
                            src="uploads/<?php echo $bookimg?> " />
                        </br>
                        <p style="color:black"><u>Book Name:</u> &nbsp&nbsp
                            <?php echo $bookname ?>
                        </p>
                        <p style="color:black"><u>Book Detail:</u> &nbsp&nbsp
                            <?php echo $bookdetail ?>
                        </p>
                        <p style="color:black"><u>Book Authour:</u> &nbsp&nbsp
                            <?php echo $bookauthour ?>
                        </p>
                        <p style="color:black"><u>Book Publisher:</u> &nbsp&nbsp
                            <?php echo $bookpub ?>
                        </p>
                        <p style="color:black"><u>Book Branch:</u> &nbsp&nbsp
                            <?php echo $branch ?>
                        </p>
                        <p style="color:black"><u>Book Price:</u> &nbsp&nbsp
                            <?php echo $bookprice ?>
                        </p>
                        <p style="color:black"><u>Book Available:</u> &nbsp&nbsp
                            <?php echo $bookava ?>
                        </p>
                        <p style="color:black"><u>Book Rent:</u> &nbsp&nbsp
                            <?php echo $bookrent ?>
                        </p>


                    </div>


                </div>
            </div>


            <!-- BOOK REPORT  -->


            <!-- End of Book Report -->





        </div>
    </div>
    </div>

    </div>



    <!-- custom script  -->
    <script>
        function openpart(portion) {
            var i;
            var x = document.getElementsByClassName("portion");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(portion).style.display = "block";
        }
    </script>


    <!-- BOOTSTRAP JAVASCRIPT FILE  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>