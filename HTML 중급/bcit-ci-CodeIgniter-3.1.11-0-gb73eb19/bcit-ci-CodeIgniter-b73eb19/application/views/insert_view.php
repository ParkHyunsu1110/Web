<? if(! defined('BASEPATH')) exit('No direct script access allowed');?>
<html>
	<head>
		<title>
			Information_Insert
		</title>
	</head>
	<body>
		<form action="http://qkrgustn.com/insert/information" method="post">
			id : <input type="text" name="id"><br/>
			pw : <input type="text" name="pw"><br/>
			name : <input type="text" name="name"><br/>
			gender : <input type="enum" name="gender"><br/>
			birthday: <input type="date" name="birthday"><br/>
			<button type="submit">Insert</button>
		</form>
		<form action="http://qkrgustn.com/insert/ascending" method="post">
			<button type="submit">ASC</button>
		</form>
		<form action="http://qkrgustn.com/insert/choice" method="post">
			<button type="submit">홍길동</button>
		</form>
		<form action="http://qkrgustn.com/insert/who" method="post">
			name : <input type="text" name="name">
			<button type="submit">who?</button>
		</form>
	</body>
</html>