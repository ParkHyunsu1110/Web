<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');?>
<html>
	<head>
		<title>
			포켓몬GO
		</title>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script>
			function capture(){
				$.post(
					"http://qkrgustn.com/pochangmon_Go/pochangmon_capture/",
					{name: document.getElementById("capture").value},
					function(data){
						document.getElementById('result').innerHTML = data;
					}
				);
			}
			function call(){
				$.post(
					"http://qkrgustn.com/pochangmon_Go/pochangmon_call/",
					{name: document.getElementById("call").value},
					function(data){
						document.getElementById('result').innerHTML = data;
					}
				);
			}
		</script>
		<style>
			.div_result{
			display: flex;
			align-items: center;
			background-color: yellow;
			width: 300px;
			height: 150px;
			}
		</style>
	</head>
	<body>
		<h5>포켓몬 포획!</h5>
		<input type="text" id="capture">
		<button type="button" onclick="capture();">포획</button>
		<br>
		<br>
		<div class="div_result" id="result">
		
		</div>
		<h5>포켓몬 소환!</h5>
		<input type="text" id="call">
		<button type="button" onclick="call();">소환</button>
	</body>
</html>