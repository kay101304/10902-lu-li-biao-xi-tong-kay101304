  <div class="post">
  <div class="entry">
	<ul class="list-group list-group-flush">
  <li class="list-group-item lead align-middle list-group-item-danger font-weight-bolder title">Work Experience</li>
  </div>
  
<?php
$row=new DB("exp");
$rows=$row->all(['sh'=>1]);
foreach($rows as $row){
?>
    <li class="list-group-item font-weight-bold list-group-item-secondary">Organization Name：<?=$row['job'];?></li>
    <li class="list-group-item">Position：<?=$row['tit'];?></li>
		<li class="list-group-item">From：<?=$row['sdate'];?></li>
    <li class="list-group-item">To：<?=$row['edate'];?></li>
    <li class="list-group-item">Description of Responsibility：<?=$row['exp'];?></li>
	</ul>
    
<?
}
?>
</div>