<link rel="stylesheet" href="../plugins/bootstrap.min.css">
<link href="../plugins/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php
  include_once ("../base.php");
  ?>
<form id="edit" method="post" action="../api/update_skill.php">
<div class="container">
<div class=py-5>
<div class="post">
<div class="entry">
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><h5>技能</h5></li>
      <input type="hidden" name="id" id="id" value="">
			<li class="list-group-item">名稱：<input type="text" name="sk_name" id="sk_name" value=""></li>
      <li class="list-group-item">SHOW：<input type="text" name="sh" id="sh" value="1"></li>
       <div>
       <br>
        <input class="text-white bg-dark" type="reset" value="重置">
        <input class="text-white bg-dark" type="submit" value="儲存">
</div>
</div>
</div>
</div>
</div>
</form>