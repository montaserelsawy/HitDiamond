<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Arab net game</title>

<script type='text/javascript' src='./js/jquery-1.7.1.min.js'></script>
<link href="css/css.css" rel="stylesheet" type="text/css">
<script>

 $(document).ready(function() {
	$('.item1').click(function() {
	  $('.item1').fadeOut('slow');
	});
	$('.item2').click(function() {
	  $('.item2').fadeOut('slow');
	});
	$('.item3').click(function() {
	  $('.item3').fadeOut('slow');
	});
});

function increase(){
	
	var result;
	result=document.getElementById('result').value;
	result=parseInt(result)+10;
	document.getElementById('result').value=result;	
}

function checkitems(){
	if($("#item1").length == 0) {
 	 alert('Your Win..Try Again :)');
	}
}

</script>
</head>

<body>
<?php
require_once('functions.php');
?>
<div class="container">
  <div class="score"> 
  <h1>HitDiamond</h1>
  <br /><br /><br />
  <h2>Score</h2>
  <form>
  <input type="text" id="result" value="0" style="width:30px;">
  </form>
  <br /><br />
  <a href="javascript:location.href='index.php'">Restart</a><br />
  <a href="readme.txt">Read me file</a>
  </div>
  <div class="playing" onclick="checkitems()"><?php echo draw_items(196)?></div>
</div>
</body>
</html>
