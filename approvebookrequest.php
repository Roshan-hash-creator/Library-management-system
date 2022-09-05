<?php
 
 include('data_class.php');

 $book = $_POST['book'];
 $userselect = $_POST['userselect'];
 $getdate = date("Y/m/d");
 $days = $_POST['days'];
 $returnDate = Date('Y/m/d', strtotime('+'.$days.'days'));

 $obj = new data();
 $obj->setconnection();
 $obj->issuebookapprove($book,$userselect,$days,$getdate,$returnDate, $request);

