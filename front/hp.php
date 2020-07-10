<div class="post">
<div class="entry">
	<ul class="list-group list-group-flush">
	<li class="list-group-item lead align-middle list-group-item-danger font-weight-bolder">Objective</li>
	</div>
<?php
$row=new DB("hp");
$rows=$row->all(['sh'=>1]);
foreach($rows as $row){
?>
<li class="list-group-item font-weight-bold list-group-item-secondary">Area：<?=$row['zone'];?></li>
	<li class="list-group-item">Hope job title：<?=$row['tit'];?></li>
	</ul>

<?
}
?>
</div>