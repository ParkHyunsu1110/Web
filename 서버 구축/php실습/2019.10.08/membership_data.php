<html>
	<head>
		<title>
			회원가입 폼
		</title>
	</head>
	<body>
	<?
	echo "회원가입 완료!";
	echo $_POST["name_text"];
	echo $_POST["(is_gender)"];
	echo "<br>";
	echo "생년월일 : ";
	echo $_POST["year"];
	echo "년";
	echo $_POST["month"]."월"; 
	echo "월";
	echo $_POST["day"]; 
	echo "일";
	echo "<br>";
	$name = $_POST["concern"];
	
	echo "관심사 :" ;
	$concern_array = array{"여행","패션","음식" };
	foreach($name as $concern){
		echo $concern_array;
	}
	
	?>
	</body>
</html>