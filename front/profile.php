<div class="post">
<div class="entry">
	<ul class="list-group list-group-flush">
  <li class="list-group-item lead align-middle list-group-item-danger font-weight-bolder">Personal Data</li>
  </div>
  
<?php
$row=new DB("profile");
$rows=$row->all();
foreach($rows as $row){
?>
	
		<li class="list-group-item">Name：<?=$row['name'];?></li>
		<li class="list-group-item">Date of birth：<?=$row['birthday'];?></li>
    <li class="list-group-item">Intreset：<?=$row['interest'];?></li>
    <li class="list-group-item">Degree：<?=$row['sch'];?></li>
    <li class="list-group-item">Major Courses：<?=$row['dep'];?></li>
    <li class="list-group-item">From To：<?=$row['yd_s'];?> ~ <?=$row['yd_e'];?></li>
    <li class="list-group-item">Mail：<?=$row['mail'];?></li>
	</ul>
<?
}
?>
</div>
