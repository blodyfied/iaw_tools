<?php
	$miArray = array(array('HOLA','A','B'),array('C'),array('D','E','F','G'));
	for($x=0;$x<sizeof($miArray);$x++) {
		for($y=0;$y<sizeof($miArray[$x]);$y++) {
			echo "La posicion ($x,$y) contiene: ".$miArray[$x][$y]."<br>\n";
		}

	}
?>