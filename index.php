<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resume</title>
<link rel="stylesheet" href="plugins/bootstrap.min.css">
<link href="plugins/style.css" rel="stylesheet" type="text/css" media="screen" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body >

<div class="container" >
	<div class="my-5">
	
	<img src="images/kei.jpg" style="width:230px; heigh:230px;" class="img-thumbnail rounded mx-auto d-block" >

	</div>
  <p id="name" class="h2 align-middle my-5">My Resume</p>
		<p class="text-white my-5">  </p>
		<div class="content w-100">
<!-- <div class="tab-content"> -->
  <div id="p1"><?php include "./front/profile.php";?></div><br>
  <div id="p2"><?php include "./front/exp.php";?></div><br>
  <div id="p3"><?php include "./front/skill.php";?></div><br>
  <div id="p4"><?php include "./front/intro.php";?></div><br>
  <div id="p5"><?php include "./front/hp.php";?></div><br>
  <div id="p6"><?php include "./front/por.php";?></div><br>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>
</html>
