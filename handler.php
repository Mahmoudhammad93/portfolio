<?php

  $op = $_POST['operation']; // use op to differ bettwen difrent ajax requests

  $data = $_POST['data'];
  if($op == "testajax"){
   echo "Mahmoud";
  }else{
  	echo "Send Failed" ;
  }
?>