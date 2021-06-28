<?php
	$con = mysqli_connect("localhost", "jianhao", "pass574f5244", "vocabulary");
	$sql = 'SELECT * FROM `english7000` where `No`=1';
	$rows = mysqli_query($con, $sql); 	

	$vocabulary = array();

	echo '<div class="main">';
	foreach ($rows as $key => $value) {
		echo '<div class="card">';
			echo '<div class="cardTop">';
				echo '<a href='.$_SERVER['PHP_SELF'].'?page=quiz&lesson='.$value['Lesson'].' >';
					echo '<div class="viewImg">';
						echo '<img src="images/student.png" alt="">';
					echo '</div>';
				echo '</a>';
				echo '<div class="viewText">';
					echo '<h1>';
						echo 'Lesson '.$value['Lesson'];
						echo '</h1>';

				echo '</div>';
			echo '</div>';
		echo '</div>';
	}
	echo '</div>';
?>

