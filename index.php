<?php 
$emailmsg = "";
$pasdmsg = "";
$msg = "";

$ademailmsg="";
$adpasdmsg="";

if(!empty($_REQUEST['ademialmsg'])){
    $ademailmsg=$_REQUEST['ademialmsg'];
}
if(!empty($_REQUEST['adpasdmsg'])){
    $adpasdmsg=$_REQUEST['adpasdmsg'];
}
if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
}
if(!empty($_REQUEST['pasdmsg'])){
    $pasdmsg=$_REQUEST['pasdmsg'];
}
if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
}


$disspear = "<h4 class ='autovanish'>$msg</h4>;"


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>library management</title>
    <!-- BOOTSTRAP CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container login-container">
        <div class="row">

            <?php
           echo $disspear;
           ?>

        </div>
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Student Login</h3>
                <form action="login_server_page.php" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control" name="login_email" placeholder="Your Email *"
                            value="" />
                    </div>
                    <Label style="color:red">*</label>
                    <div class="form-group">
                        <input type="password" class="form-control" name="login_pasword" placeholder="Your Password *"
                            value="" />
                    </div>
                    <Label style="color:red">*
                        <?php echo $pasdmsg?>
                    </label>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                </form>
            </div>

            <div class="col-md-6 login-form-2">
                <h3>Admin Login</h3>
                <form action="loginadmin_server_page.php" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control" name="login_email" placeholder="Your Email *"
                            value="" />
                    </div>
                    <Label style="color:red">*
                        <?php echo $ademailmsg?>
                    </label>
                    <div class="form-group">
                        <input type="password" class="form-control" name="login_password" placeholder="Your Password *"
                            value="" />
                    </div>
                    <Label style="color:red">*
                        <?php echo $adpasdmsg?>
                    </label>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">

                        <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <script src="" async defer></script>



    <script>

        function autovanish() {
            const avDivs = document.getElementsByClassName('autovanish');

            setTimeout(function () {
                avDivs[0].remove();
            }, 2000); //removes the element after 3000ms

            setTimeout(() => { autovanish(); }, 500); //re-run every 500ms   
        }
    </script>

    <!-- BOOTSTRAP JAVASCRIPT FILE  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>