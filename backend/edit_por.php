
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
    <li class="list-group-item"><h5>作品集</h5></li>
<?php
$row=new DB("por");
$r=$row->find(['id'=>$id]);
?>
<form method="post"  enctype="multipart/form-data"  action="../api/update_por.php">
      <input type="hidden" name="id" id="id" value="<?=$r['id'];?>">
      <li class="list-group-item">圖片：<input type="file" name="file" id="file" value="<?=$r['img'];?>"></li>
      <li class="list-group-item">檔名：<input type="text" name="img" id="img" value="<?=$r['img'];?>"></li>
      <li class="list-group-item">類型：<input type="text" name="type" id="type" value="<?=$r['type'];?>"></li>
			<li class="list-group-item">名稱：<input type="text" name="fname" id="fname" value="<?=$r['fname'];?>"></li>
      <li class="list-group-item">說明：<input type="text" name="exp" id="exp" value="<?=$r['exp'];?>"></li>
      <li class="list-group-item">網址：<input type="text" style="width:50%;" name="url" id="url" value="<?=$r['url'];?>"></li>
      <li class="list-group-item">SHOW：<input type="text" name="sh" id="sh" value="1"></li>
      </ul>
      
    <a href="../api/del_por.php?id=<?=$r['id'];?>"  type="button" class="btn btn-danger">刪除</a>
        <input type="submit" class="btn btn-dark" value="儲存">
    </div>
    </div>
	 </div>
	 </div>
   </div>
    </form>
