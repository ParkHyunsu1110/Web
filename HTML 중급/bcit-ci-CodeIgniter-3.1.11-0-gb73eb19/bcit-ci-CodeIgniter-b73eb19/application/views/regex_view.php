<? if(! defined('BASEPATH')) exit('No direct script access allowed');?>
<html>
	<head>
		<title>
			정규식 실습
		</title>
	</head>
	<body>
		<form>
			ID(영어 대소문자, 숫자 사용가능):<br/> <input pattern="^[0-9a-zA-Z]*$"><br/>
			PW(영어 대소문자,숫자,특수기호:-_.~!@ 사용 가능) :<br/><input pattern=^[0-9a-zA-Z]*[-_\.~!@]*$><br/>
			NAME(한글 사용가능, 2~5글자 이내 작성) : <br/><input pattern="^[가-힣]*" minlength=2 maxlength=5><br/>
			Tel :<br/><input pattern=^\d{3}-\d{3,4}-\d{4}$><br/>
			e-Mail : <br/><input pattern=^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\[a-zA-Z]{2,3}$><br/>
			<br/><button type="submit">Send</button>
		</form>
	</body>
</html>
