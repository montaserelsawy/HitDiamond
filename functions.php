<?php
function draw_items($num=100){;
	
	for ($i=1; $i<=$num; $i++){
		$number = rand(1,3);
  		$items.= "<div id='item".$number."' class='item".$number."' onClick='increase()'></div>";
    }
	return $items;
}
?>