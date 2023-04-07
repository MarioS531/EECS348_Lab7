<?php
if(isset($_POST['size'])) {
	$number = $_POST['size'];

	echo "<h1>Multiplication Table from 1 to $number</h1>";
	echo "<table border='1'>";
	echo "<tr><th>&nbsp;</th>";
	for($i=1;$i<=$number;$i++){
		echo "<th>$i</th>";
	}
	for($i=1;$i<=$number; $i++){
		echo "<tr><th>$i</th>";
		for($j=1;$j<=$number;$j++){
			echo "<td>" . ($i * $j) . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
?>
