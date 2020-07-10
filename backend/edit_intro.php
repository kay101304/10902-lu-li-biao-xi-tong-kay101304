
<link rel="stylesheet" href="../plugins/bootstrap.min.css">
<link href="../plugins/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php
  include_once ("../base.php");
  $id=$_GET['id'];
  ?>
<div class="container">
<div class=py-5>
<div class="post">
<div class="entry">
		<ul class="list-group list-group-flush">
      <li class="list-group-item"><h5>自傳</h5></li>
<?php
$row=new DB("intro");
$rows=$row->all(['sh'=>1]);
$r=$row->find(['id'=>$id]);
?>
<form id="edit" method="post" action="../api/update_intro.php">
			<input type="hidden" name="id" id="id" value="<?=$r['id'];?>">
			<li class="list-group-item">內容 ：<input type="text" style="width:50%; height:150px;" name="intro" id="intro" value="<?=$r['intro'];?>"></li>
			<li class="list-group-item">SHOW：<input type="text" name="sh" id="sh" value="1"></li>
     </ul>
	 
	 <div>
	 <a href="../api/del_intro.php?id=<?=$r['id'];?>" type="button" class="btn btn-danger">刪除</a>
		 <input type="submit" class="btn btn-dark" value="儲存">
	 </div>
	 </div>
	 </div>
	 </div>
	 </div>
	 </form>