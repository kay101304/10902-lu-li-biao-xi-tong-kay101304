<link rel="stylesheet" href="../plugins/bootstrap.min.css">
<link href="../plugins/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php
  include_once ("../base.php");
  ?>
<form id="edit" method="post" action="../api/update_exp.php">
<div class="container">
<div class=py-5>
<div class="post">
<div class="entry">
		<ul class="list-group list-group-flush">
    <li class="list-group-item"><h5>經歷</h5></li>
      <input type="hidden" name="id" id="id" value="">
			<li class="list-group-item">公司名稱：<input type="text" name="job" id="job" value=""></li>
			<li class="list-group-item">起始日期：<input type="text" name="sdate" id="sdate" value=""></li>
      <li class="list-group-item">結束日期：<input type="text" name="edate" id="edate" value=""></li>
      <li class="list-group-item">工作內容：<input type="text" name="exp" id="exp" value=""></li>
      <li class="list-group-item">SHOW：<input type="text" name="sh" id="sh" value="1"></li>
      </ul>
      <br>
    
        <input class="text-white bg-dark" type="reset" value="重置">
        <input class="text-white bg-dark" type="submit" value="儲存">
        </div>
    </div>
    </div>
	 </div>
 </form>