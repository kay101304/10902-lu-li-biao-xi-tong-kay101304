<?php
include_once "../base.php";

$db=new DB("login");
$acc=$_POST['acc'];
$pw=$_POST['pw'];
$chk=$db->find(['acc'=>$acc,'pw'=>$pw]);

if(empty($chk)){
    echo 0;
}else{
    echo 1;
    $_SESSION['login']=$acc;
}


?>