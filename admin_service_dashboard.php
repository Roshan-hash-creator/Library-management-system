<?php

session_start();
// asdf;lajsdf;lkj
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
        <div class="innerdiv">
            <div class="row">
                <div class="col-12 text-center" style=" margin-top: 4rem; ">
                    <img src="images/logo.png" class="imglogo" alt="img">
                </div>

                <div class="row mt-3 d-flex justify-content-center pt-2">
                    <div class="col-2 d-flex flex-column gap-2">
                        <button type='button' class='btn btn-success'>ADMIN</button>
                        <button type='button' class='btn btn-success' onclick="openpart('addbook')">ADD BOOK</button>
                        <button type='button' class='btn btn-success' onclick="openpart('bookreport')">BOOK
                            REPORT</button>
                        <button type='button' class='btn btn-success' onclick="openpart('bookrequestapprove')">BOOK
                            REQUEST</button>
                        <button type='button' class='btn btn-success' onclick="openpart('addperson')">ADD
                            STUDENT</button>
                        <button type='button' class='btn btn-success' onclick="openpart('studentrecord')">STUDENT
                            REPORT</button>
                        <button type='button' class='btn btn-success' onclick="openpart('issuebook')">ISSUE
                            BOOK</button>
                        <button type='button' class='btn btn-success' onclick="openpart('issuebookreport')">ISSUE
                            REPORT</button>

                        <!-- <a href="index.php"> <button type="button"  class="bg-success">LOGOUT</button></a> -->

                        <button type="button" class="btn btn-success">
                            <a href="index.php" style="text-decoration: none;color: rgb(255, 255, 255);">LOGOUT</a>
                        </button>
                    </div>
                    <div class="col-7 ">
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

                                    <div class="col text-center ">
                                        <input type="submit" class="btn btn-primary col-2" value="SUBMIT"></input>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id="addbook" class="portion" style="display: none;"></div>

                    </div>
                </div>

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