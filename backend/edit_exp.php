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
    <li class="list-group-item"><h5>經歷</h5></li>
<?php
$row=new DB("exp");
$r=$row->find(['id'=>$id]);
?>
<form id="edit" method="post" action="../api/update_exp.php">
      <input type="hidden" name="id" id="id" value="<?=$r['id'];?>">
			<li class="list-group-item">公司名稱：<input type="text" name="job" id="job" value="<?=$r['job'];?>"></li>
			<li class="list-group-item">起始日期：<input type="text" name="sdate" id="sdate" value="<?=$r['sdate'];?>"></li>
      <li class="list-group-item">結束日期：<input type="text" name="edate" id="edate" value="<?=$r['edate'];?>"></li>
      <li class="list-group-item">工作內容：<input type="text" style="width:40%; height:150px;" name="exp" id="exp" value="<?=$r['exp'];?>"></li>
      <li class="list-group-item">SHOW：<input type="text" name="sh" id="sh" value="1"></li>
      </ul>
    <div>
    <a href="../api/del_exp.php?id=<?=$r['id'];?>"  type="button" class="btn btn-danger">刪除</a>
        <input class="btn btn-dark" type="submit" value="儲存">
    </div>
    </div>
    </div>
	 </div>
	 </div>
    </form>

