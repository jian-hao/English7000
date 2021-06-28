<?php
	if(isset($_GET['lesson']) AND !empty($_GET['lesson'])){
	    $lesson = $_GET['lesson'];
	}else{
	    $lesson = 1;
	}

	$con = mysqli_connect("localhost", "jianhao", "pass574f5244", "vocabulary");
	$sql = 'SELECT * FROM `english7000` where `Lesson`='.$lesson;
	$rows = mysqli_query($con, $sql); 	

	$vocabulary = array();

	foreach ($rows as $key => $value) {
		$vocabulary[$key]['Lesson'] = $value['Lesson'];
		$vocabulary[$key]['No'] = $value['No'];
		$vocabulary[$key]['EN'] = $value['EN'];
		$vocabulary[$key]['POS'] = $value['POS'];
		$vocabulary[$key]['CN'] = $value['CN'];
		$vocabulary[$key]['sequence'] = $value['sequence'];
	}

	for ($i=0; $i<ceil(count($vocabulary)/4); $i++) {		
		echo '<div class="wrapper">';
		    echo '<div class="cols">';
				for ($j=0; $j<4 && $i*4+$j<count($vocabulary); $j++) {
					echo '<div class="col" ontouchstart="this.classList.toggle(\'hover\');">';
						echo '<div class="fb-container">';
							echo '<div class="front">';
								echo '<div class="inner">';
									echo '<span>'.$vocabulary[$i*4+$j]['EN'].'</span>';
								echo '</div>';
							echo '</div>';
							echo '<div class="back">';
								echo '<div class="inner">';
									echo '<span>'.$vocabulary[$i*4+$j]['POS'].' '.$vocabulary[$i*4+$j]['CN'].'</br>';
									echo '</br>'.$vocabulary[$i*4+$j]['sequence'].'</span>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				}
			echo '</div>';
		echo '</div>';
	}
/*
	A 已很直覺
	B 想一下
	C 想很久
	D 錯部分
	E 不行
*/

?>
