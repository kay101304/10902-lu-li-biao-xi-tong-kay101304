<?php 

include_once "../base.php";

$db=new DB("por");
    if(!empty($_POST['type'])){
        $path = "../img/";
        $path .=$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $path);
  }

if(!empty($_POST)){
    echo $db->save($_POST);
}

to("../admin.php");
?>