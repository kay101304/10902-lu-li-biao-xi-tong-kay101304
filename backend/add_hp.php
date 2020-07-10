<link rel="stylesheet" href="../plugins/bootstrap.min.css">
<link href="../plugins/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php
  include_once ("../base.php");
  ?>
  

<div class="container">
<div class=py-5>
<div class="post">
<div class="entry">
		<ul class="list-group list-group-flush">
    <li class="list-group-item"><h5>希望職務</h5></li>
    <form id="edit" method="post" action="../api/update_hp.php">
			<input type="hidden" name="id" id="id" value="">
			<li class="list-group-item">地區：<input type="text" name="zone" id="zone" value=""></li>
			<li class="list-group-item">職稱：<input type="text" name="tit" id="tit" value=""></li>
      <li class="list-group-item">SHOW：<input type="text" name="sh" id="sh" value="1"></li>
			</ul>
    
        <input class="text-white bg-dark" type="reset" value="重置">
        <input class="text-white bg-dark" type="submit" value="儲存">
        </div>
    </div>
    </div>
    </div>
 </form>