<?php
	if(isset($_GET['page']) AND !empty($_GET['page'])){
	    $page = $_GET['page'];
	}else{
	    $page = "home";
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="content-language" content="zh-tw" />
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/hao.css">
		<link rel="icon" href="images/icon.ico">
		<title>7000英文單字</title>
	</head>
	<body>
		<div class="container-lg">
			<div class="row">
				<div class="col-12 border border-sucess">
					<?php include('_header.php'); ?>
				</div>
				<div class="col-12 border border-sucess">
					<?php 
						switch($page){  
							case "home";
								include('home.php');
								break;  
							case "quiz";
								include('quiz.php');
								break;

						}
					?>
				</div>
				<div class="col-12 border border-sucess">
					<?php include('_footer.php'); ?>
				</div>
			</div>
		</div>
	</body>
</html>