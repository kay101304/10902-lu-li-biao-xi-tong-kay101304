<link rel="stylesheet" href="../plugins/bootstrap.min.css">
<link href="../plugins/style.css" rel="stylesheet" type="text/css" media="screen" />

  <?php
  include_once ("../base.php");
  ?>
<form id="edit" enctype="multipart/form-data" method="post" action="../api/update_por.php">
<div class="container">
<div class=py-5>
<div class="post">
<div class="entry">
		<ul class="list-group list-group-flush">
    <li class="list-group-item"><h5>作品集</h5></li>
      <input type="hidden" name="id" id="id" value="">
      <li class="list-group-item">圖片：<input type="file" name="file" id="file" value=""></li>
      <li class="list-group-item">檔名：<input type="text" name="img" id="img" value=""></li>
      <li class="list-group-item">類型：<input type="text" name="type" id="type" value=""></li>
			<li class="list-group-item">名稱：<input type="text" name="fname" id="fname" value=""></li>
      <li class="list-group-item">說明：<input type="text" name="exp" id="exp" value=""></li>
      <li class="list-group-item">網址：<input type="text" name="url" id="url" value=""></li>
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