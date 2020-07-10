<link rel="stylesheet" href="../plugins/bootstrap.min.css">
<link href="../plugins/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php
include_once ("../base.php");
?>

<div class="container">
<div class=py-5>
<div class="post">
<div class="entry">
		<ul class="list-group list-group-flush">
    <li class="list-group-item"><h5>個人基本資料管理</h5></li>
    <form id="edit" method="post" action="../api/update_profile.php">
<?php
$row=new DB("profile");
$rows=$row->all();
foreach($rows as  $row){
?>	
      <input type="hidden" name="id" id="id" value="<?=$row['id'];?>">
			<li class="list-group-item">姓名：<input type="text" name="name" value="<?=$row['name'];?>"> </li>
			<li class="list-group-item">生日：<input type="text" name="birthday" id="birthday" value="<?=$row['birthday'];?>"> </li>
      <li class="list-group-item">興趣：<input type="text" name="interest" id="interest"  value="<?=$row['interest'];?>"> </li>
      <li class="list-group-item">學歷：<input type="text" name="sch" id="sch" value="<?=$row['sch'];?>"> </li>
      <li class="list-group-item">科系：<input type="text" name="dep" id="dep" value="<?=$row['dep'];?>"> </li>
      <li class="list-group-item">期間：<input type="text" name="yd_s" id="yd_s" value="<?=$row['yd_s'];?>">至<input type="text" name="yd_e" id="yd_e" value="<?=$row['yd_e'];?>"> </li>
      <li class="list-group-item">Mail：<input type="text" name="mail" id="mail" value="<?=$row['mail'];?>"> </li>
		</ul>
    <br>
    </div>
    <div>
    </div>
    <a href="../api/del_profile.php?id=<?=$row['id'];?>"  type="button" class="btn btn-danger">刪除</a>
        <input type="submit" class="btn btn-dark" value="儲存">
    </div>
    </div>
	 </div>
	 

<?
}
?>
</div>
 </form>