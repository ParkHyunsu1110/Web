<? if(! defined('BASEPATH')) exit('No direct script access allowed');?>
<html>
	<head>
		<title>예제</title>
	</head>
	<body>
		<form action="http://qkrgustn.com/ExInfo/process_add_data"method="post">
			ID:<input type="text" name="id"><br/>
			PW:<input type="text" name="pw"><br/>
			Name:<input type="text" name="name"><br/>
			Gender:<input type="enum" name="gender"><br/>
			BirthDay:<input type="date" name="birthday"><br/>
			
			<button type="submit">입력</button>
		</form>
		<form action="http://qkrgustn.com/ExInfo/process_post_data2"method="post">
			<button type="submit">예제2번:모든 정보, birthday기준 오름차순 정렬 </button>
		</form>
	</body>
</html>