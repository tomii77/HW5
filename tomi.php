

<?php
echo '<link href="tomi.css" rel="stylesheet">';
include 'tomi.html';

	$x = $_POST['test'];
	//var_dump($x);
	for($i=1; $i<=$x; $i++){

		if ((($i%3 == 0) && ($i%5 == 0)) == true){
			echo "<div class='red move s4'>fizzbuzz - $i</div>";
		}
		else if ((($i%3 == 0) && ($i%5 !== 0)) == true ){
			echo "<div class='green move s2'>fizz - $i</div>";
		}
		else if ((($i%3 !== 0) && ($i%5 == 0)) == true ){
			echo "<div class='blue move s3'>buzz - $i</div>";
		}
		else{
			echo "<span>$i</span><br>";
		}
	}
?>