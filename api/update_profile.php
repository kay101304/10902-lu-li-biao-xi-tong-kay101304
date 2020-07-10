<?php 

include_once "../base.php";

$db=new DB("profile");

if(!empty($_POST)){
    echo $db->save($_POST);
}

to("../admin.php");
?>