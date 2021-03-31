<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');?>
<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script>
			function change(){
				alert(document.getElementById("my_span").innerHTML);
				document.getElementById("my_span").style.backgroundColor = "red";
				document.getElementById("my_span").innerHTML = "반갑습니다.";
			}
	
			function right_copy(){
				document.getElementById("left_input").value = document.getElementById("right_input").value;
			}	
			function left_copy(){
				document.getElementById("right_input").value = document.getElementById("left_input").value;
			}
			<!-- button에 대한 내용을 처리하려는 부분(input내용의 이동)-->
		</script>
	</head>
	<body>
		<span id="my_span" onclick="change();">안녕하세요.</span>
			
		<input type="text" id="left_input">
		<button type="button" onclick="left_copy();">오른쪽으로 전송</button> <!--input에 입력된 내용을 오른쪽의 input으로 전송하려는 부분-->
		
		<input type="text" id="right_input">
		<button type="button" onclick="right_copy();">왼쪽으로 전송</button> <!--input에 입력된 내용을 왼쪽의 input으로 전송하려는 부분-->
		
	</body>
</html>