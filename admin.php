<?php
include_once "base.php";

if(empty($_SESSION['login'])){
?>
    <script>
        alert('非法登入，請重新登入');
        location.href='index.php?do=login'
    </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resume</title>
<link rel="stylesheet" href="plugins/bootstrap.min.css">
<link href="plugins/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<div class="container">
<div class= py-5>
<nav class="navbar navbar-dark background- background-color:transparent">
<nav class="nav">
  <a class="nav-link text-white" id="l1" href="#p1">個人基本資料管理</a>
  <a class="nav-link text-white" id="l2"  href="#p2">學經歷管理</a>
  <a class="nav-link text-white" id="l3"  href="#p3">技能管理</a>
  <a class="nav-link text-white" id="l4" href="#p4">自傳管理</a>
  <a class="nav-link text-white" id="l5" href="#p5">求職條件管理</a>
  <a class="nav-link text-white" id="l6" href="#p6">作品集管理</a>
</nav>
  <form class="form-inline my-2 my-lg-0">
  <button class="btn btn-outline-light my-2 my-sm-0" type="button" onclick="go()">回前台</button>
  </form>
  <script>
 function go(){
  window.location.href='./index.php'
 }
  
  </script>
<form class="form-inline my-2 my-lg-0" action="api/logout.php">  
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">管理登出</button>
</form>
</nav>
</div>

<!-- Tab panes -->

<div class="tab-content">
  <div id="p1">
  <div class="entry">
		<ul class="list-group list-group-flush">
    <li class="list-group-item lead align-middle list-group-item-danger font-weight-bolder">個人基本資料
    <a class="btn my-2 my-sm-0 float-right" href="backend/edit_profile.php">編輯</a>
    </li>
  <?php
$row=new DB("profile");
$rows=$row->all();
foreach($rows as $row){
?>
  <input type="hidden" name="id" id="id" value="<?=$row['id'];?>">
	<li class="list-group-item">姓名：<?=$row['name'];?></li>
	<li class="list-group-item">生日：<?=$row['birthday'];?></li>
  <li class="list-group-item">興趣：<?=$row['interest'];?></li>
  <li class="list-group-item">學歷：<?=$row['sch'];?></li>
  <li class="list-group-item">科系：<?=$row['dep'];?></li>
  <li class="list-group-item">期間：<?=$row['yd_s'];?>至<?=$row['yd_e'];?></li>
  <li class="list-group-item">Mail：<?=$row['mail'];?></li>
 
<?
}
?>
	 </ul>
    </div>
    </div>
    <hr>	


<div id="p2">
<div class="entry">
	<ul class="list-group list-group-flush">
  <li class="list-group-item lead align-middle list-group-item-danger font-weight-bolder">經歷
  <a class="btn my-2 my-sm-0 float-right" href="backend/add_exp.php">新增</a>
  
  </li>
<?php
$row=new DB("exp");
$rows=$row->all(['sh'=>1]);
foreach($rows as $row){
?>
	<li class="list-group-item font-weight-bold list-group-item-secondary">公司名稱：<?=$row['job'];?></h6><a class="btn my-2 my-sm-0 float-right" href="backend/edit_exp.php?id=<?=$row['id'];?>">編輯</a></li>
	<li class="list-group-item">起始日期：<?=$row['sdate'];?></li>
  <li class="list-group-item">結束日期：<?=$row['edate'];?></li>
  <li class="list-group-item">工作內容：<?=$row['exp'];?></li>
  <br>
	</ul>
  </div>
<?
}
?>
</div>
<hr>

  <div id="p3">
  <div class="entry">
    <ul class="list-group list-group-flush">
    <li class="list-group-item lead align-middle list-group-item-danger font-weight-bolder">技能
    <a class="btn my-2 my-sm-0 float-right" href="backend/add_skill.php">新增</a>
    
    </li>
<?php
$row=new DB("skill");
$rows=$row->all(['sh'=>1]);
foreach($rows as $row){
?>

		<li class="list-group-item font-weight-bold"><?=$row['sk_name'];?><a class="btn my-2 my-sm-0 float-right" href="backend/edit_skill.php?id=<?=$row['id'];?>">編輯</a></li>	
<?
}
?>
</ul>
</div>
</div>
<hr>
  <div id="p4">
  <div class="entry">
		<ul class="list-group list-group-flush">
    <li class="list-group-item lead align-middle list-group-item-danger font-weight-bolder">自傳
      <a class="btn my-2 my-sm-0 float-right" href="backend/add_intro.php">新增</a>

      </li>
<?php
$row=new DB("intro");
$rows=$row->all(['sh'=>1]);
foreach($rows as $row){
?>
	
			<li class="list-group-item"><?=$row['intro'];?> <a class="btn my-2 my-sm-0 float-right" href="backend/edit_intro.php?id=<?=$row['id'];?>">編輯</a></li>
	  </ul>
  </div>
<?
}
?>
</div>
<hr>

  <div id="p5">
  <div class="entry">
		<ul class="list-group list-group-flush">
    <li class="list-group-item lead align-middle list-group-item-danger font-weight-bolder">希望職務
      <a class="btn my-2 my-sm-0 float-right" href="backend/add_hp.php">新增</a>
      
      </li>
<?php
$row=new DB("hp");
$rows=$row->all(['sh'=>1]);
foreach($rows as $row){
?>

<li class="list-group-item font-weight-bold list-group-item-secondary">地區：<?=$row['zone'];?><a class="btn my-2 my-sm-0 float-right" href="backend/edit_hp.php?id=<?=$row['id'];?>">編輯</a></li>
		  <li class="list-group-item">職稱：<?=$row['tit'];?></li>
	</ul>
  </div>
<?
}
?>
</div>
<hr>

<div id="p6">
<div class="entry">
		<ul class="list-group list-group-flush">
    <li class="list-group-item lead align-middle list-group-item-danger font-weight-bolder">作品集
      <a class="btn my-2 my-sm-0 float-right" href="backend/add_por.php">新增</a>
      
      </li>
  <?php
$row=new DB("por");
$rows=$row->all(['sh'=>1]);
foreach($rows as $row){
?>
			<li class="list-group-item font-weight-bold list-group-item-secondary">類型：<?=$row['type'];?><a class="btn my-2 my-sm-0 float-right" href="backend/edit_por.php?id=<?=$row['id'];?>">編輯</a></li>
      <li class="list-group-item"><figure class="figure">
  <img src="img/<?=$row['img'];?>" width='150px' height='150px' class="figure-img img-fluid rounded ml-4" >
</figure></li>
    <li class="list-group-item">名稱：<?=$row['fname'];?></li>
      <li class="list-group-item">說明：<?=$row['exp'];?></li>
      <li class="list-group-item"><figcaption class="figure-caption">URL：<?=$row['url'];?></figcaption></li>
		</ul>
    
<?
}
?>
  </div>
  </div>
<hr>
  
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>

</html>
