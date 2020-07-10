<?php 

include_once "../base.php";

$db=new DB("hp");

if(!empty($_POST)){
    echo $db->save($_POST);
}

to("../admin.php");
?>