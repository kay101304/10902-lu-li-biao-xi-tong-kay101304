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
    <li class="list-group-item"><h5>技能</h5></li>
<?php

$row=new DB("skill");
$r=$row->find(['id'=>$id]);
  ?>
  <form method="post" action="../api/update_skill.php">
      <input type="hidden" name="id" id="id" value="<?=$r['id'];?>">
			<li class="list-group-item">SKILL ：<input type="text" name="sk_name" id="sk_name" value="<?=$r['sk_name'];?>"></li>
      <li class="list-group-item">SHOW：<input type="text" name="sh" id="sh" value="1"></li>
            <div>
            <br>
            <a href="../api/del_skill.php?id=<?=$r['id'];?>" type="button" class="btn btn-danger">刪除</a>
        <input  type="submit" class="btn btn-dark" value="儲存">
    </div>
</div>
</div>
</div>
</div>
</form>
