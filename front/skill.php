<div class="post">
<div class="entry">
    <ul class="list-group list-group-flush">
    <li class="list-group-item lead align-middle list-group-item-danger font-weight-bolder">Skill</li>
</div>

<?php
$row=new DB("skill");
$rows=$row->all(['sh'=>1]);
foreach($rows as $row){
?>
  <li class="d-inline-block mt-3 list-group-item font-weight-bold"><?=$row['sk_name'];?></li>
  </ul>

<?
}
?>

</div>
