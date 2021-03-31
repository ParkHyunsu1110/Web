<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');?>
<html>
	<head>
		<title>
			CodeIgniter validation 실습
		</title>
	</head>
	<body>
		<form action="http://qkrgustn.com/code/receive" method="post">
			name : <input id="name" name="name"><br/>
			id : <input id="id" name="id"><br/>
			pw : <input id="pw" name="pw"><br/>
			tel : <input id="tel" name="tel"><br/>
			성별 : <select id="gender" name="gender">
				<option value="남">남</option>
				<option value="여">여</option>
			</select><br/>
			birth : 
			<select id="year" name="year">
				<? for($i=2020; $i>1900; $i--) echo "<option value='".$i."'>".$i."</option>";?>
			</select>
			<select id="month" name="month">
				<? for($i=1; $i<13; $i++) echo "<option value='".$i."'>".$i."</option>";?>
			</select>
			<select id="day" name="day">
				<? for($i=1; $i<31; $i++) echo "<option value='".$i."'>".$i."</option>";?>
			</select><br/>
			<button type="submit">전송</button>
		</form>
	</body>
</html>