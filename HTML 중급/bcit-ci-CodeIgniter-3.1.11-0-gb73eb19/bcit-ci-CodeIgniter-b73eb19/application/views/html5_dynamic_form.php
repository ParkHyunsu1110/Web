<? if(! defined('BASEPATH')) exit('No direct script access allowed');?>
<html>
	<head>
		<title>
			html5 동적
		</title>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script>
			function join(){
				var my_form = document.getElementById("id");
				if( !my_form.checkValidity() ){
					my_form.reportValidity();
					return false;
				}
				var my_form = document.getElementById("pw");
				if( !my_form.checkValidity() ){
					my_form.reportValidity();
					return false;
				}
				var my_form = document.getElementById("name");
				if( !my_form.checkValidity() ){
					my_form.reportValidity();
					return false;
				}
				$.post(
					"http://qkrgustn.com/html5_dynamic/receive",
					{id:document.getElementById("id").value, pw:document.getElementById("pw").value, name:document.getElementById("name").value},
					function(data){
						alert('회원가입 완료');
						alert( data );
					}
				);
			}
		</script>
	</head>
	<body>
			id : <input type="text"id="id" name="id" required><br/>
			pw : <input type="text" id="pw" name="pw" required><br/>
			이름 : <input type="text" id="name" name="name" required><br/>
			<button type="button" onclick="join();">회원가입</button>
	</body>
</html>