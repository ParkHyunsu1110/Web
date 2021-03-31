<? if(! defined('BASEPATH')) exit('No direct script access allowed');?>
<html>
	<head>
		<title>info</title>
	</head>
	<body>
		<form action="http://qkrgustn.com/request/process_add_data"method="post">	<!--액션이 들어오면 => 도메인/파일명/함수명 , post 형태로-->
			이름 : <input type="text" name="name"><br/>
			ID : <input type="text" name="id"><br/>
			PW : <input type="text" name="pw"><br/>
			성별 :<input type="enum" name="gender"><br/>	<!-- enum은 정수 형태로 원하는값을 반환하게 함-->
			생년월일 : <input type="date" name="birthday"><br/>
			<button type="submit">가입</button>
		</form>
		<form action="http://qkrgustn.com/request/process_fix_data" method="post">
			ID : <input type="text" name="id"><br/>
			PW : <input type="text" name="pw"><br/>
			<button type="submit">변경</button>
		</form>
		<form action="http://qkrgustn.com/request/process_del_data" method="post">
			ID : <input type="text" name="id"><br/>
			<button type="submit">회원 탈퇴</button>
		</form>
	</body>
</html>
