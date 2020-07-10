<?php
$row=new DB("por");
$type=$row ->q("SELECT * FROM `por` WHERE 1 group by type");

?>

<div class="post" id='post'>
<div class="entry">
	<ul class="list-group list-group-flush">
    <li class="list-group-item lead align-middle list-group-item-danger font-weight-bolder">Portfolio
	<div class="d-flex justify-content-end">
	<th scope="col">Type：</th>
	<select  name="type" onchange="gettype()">
	<option value="請選擇"></option>
	<!--
		如果$_GET['type']有值，在對應的資料selected並撈出該type的資料
		-->
		<?php foreach($type as $r){ ?>
			<option <?=(!empty($_GET['type'])) ?($_GET['type']== $r['type'] )? 'selected' :'' :'' ?> value="<?=$r['type'];?>"><?=$r['type'];?></option>
		<?php } ?>

</select>
</div>

	</li>
	</div>
	
<div class="row mx-3">
<?php

if(!empty($_GET['type'])){
	$rows=$row->all(['sh'=>1 ,'type' => $_GET['type']]);
	?>
	<?php
}else{
	$rows=$row->all(['sh'=>1]);
}
foreach($rows as $row){
?>
<div class="card mb-3 mr-3 " style="max-width:480px;">
  <div class="row no-gutters ">
    <div class="col-md-4 mx-4 align-self-center">
      <img src="img/<?=$row['img'];?>" class="card-img shadow rounded">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">Name：<?=$row['fname'];?></h5>
        <p class="card-text">Explanation：<?=$row['exp'];?></p>
        <p class="card-text"><small class="text-muted"><figcaption class="figure-caption">URL：<?=$row['url'];?></figcaption></small></p>
      </div>
    </div>
  </div>
</div>


<?
}
?>
</div>
</div>

<script>
let type=$('select').val()
function gettype(){
	type=$('select').val()
	location.href=`?type=${type}#post`;
}
</script>
