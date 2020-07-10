<div class="post">
<div class="entry">
	<ul class="list-group list-group-flush">
    <li class="list-group-item lead align-middle list-group-item-danger font-weight-bolder">Intro</li>
	</div>
	
<?php
$row=new DB("intro");
$rows=$row->all(['sh'=>1]);
foreach($rows as $row){
?>
	<li class="list-group-item"><?=$row['intro'];?></li>
	</ul>
	
<?
}
?>

</div>
