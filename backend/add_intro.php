<link rel="stylesheet" href="../plugins/bootstrap.min.css">
<link href="../plugins/style.css" rel="stylesheet" type="text/css" media="screen" />

  <?php
  include_once ("../base.php");
  ?> 
<form id="edit" method="post" action="../api/update_intro.php">
<div class="container">
<div class=py-5>
<div class="post">
<div class="entry">
	<ul class="list-group list-group-flush">
      <li class="list-group-item"><h5>自傳</h5></li>
		<input type="hidden" name="id" id="id" value="">
		<li class="list-group-item">內容 ：<input type="text" style="width:50%; height:150px;" name="intro" id="intro" value=""></li>
		<li class="list-group-item">SHOW：<input type="text" name="sh" id="sh" value="1"></li>
    </ul>
	<br>
 <input class="text-white bg-dark" type="reset" value="重置">
		 <input class="text-white bg-dark" type="submit" value="儲存">
		 </div>
		 <div>
	 </div>
	 </div>
    </div>
	 </div>
  </form>