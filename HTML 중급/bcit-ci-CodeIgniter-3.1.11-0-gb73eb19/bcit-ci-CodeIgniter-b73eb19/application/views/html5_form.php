<? if(! defined('BASEPATH')) exit('No direct script access allowed');?>
<html>
	<head>
		<title>
			html5 validation
		</title>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script>
		function is_empty(){
			if( document.getElementById("name").value == "" || document.getElementById("id").value == "" || document.getElementById("pw").value == ""){
				<? echo "alert('공란을 채워주세요');"; ?>
				return false;
			}
			else {
				<? echo "alert('회원가입에 성공하셨습니다.');"; ?>
				document.getElementById( "my_form" ).submit();
			}
		}
		</script>
	</head>
	<body>
		<form action="http://qkrgustn.com/html5/receive" id="my_form" method="post">
			<h3>회원가입</h3>
			name : <input type="text" id="name" name="name"><br>
			id : <input type="text" id="id" name="id"><br>
			pw : <input type="text" id="pw" name="pw"><br>
			<button type="button" onclick="is_empty();">회원가입</button>
		</form>
	</body>
</html>