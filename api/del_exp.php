<?php
include_once "../base.php";

$db=new DB("exp");
$id=$_GET['id'];

echo $db->del($id);
to("../admin.php");
?>