<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');?>
<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script>
			function red_change(){
				document.getElementById("canvas").style.backgroundColor = "red";
			}
			function blue_change(){
				document.getElementById("canvas").style.backgroundColor = "blue";
			}
			function yellow_change(){
				document.getElementById("canvas").style.backgroundColor = "yellow";
			}
			function text_copy(){
				document.getElementById("canvas").innerHTML = document.getElementById("text_input").value;
			}	
		</script>
		<title>
			dynamic_color
		</title>
		<style>
			div {
				display: inline-block;	
			}
			.div_red{
				background-color: red;
				width: 50px;
				height: 50px;
			}
			.div_blue{
				background-color: blue;
				width: 50px;
				height: 50px;
			}
			.div_yellow{
				background-color: yellow;
				width: 50px;
				height: 50px;
			}
			.div_canvas{
				display: flex;
				justify-content: center;
				align-items: center;
				width: 200px;
				height: 350px;
			}
		</style>
		
	</head>
	<body>
		
		<div class="div_red" onclick="red_change();"></div>
		<div class="div_blue" onclick="blue_change();"></div>	
		<div class="div_yellow" onclick="yellow_change();"></div>
		<br>
		<input type="text" id="text_input">
		<button type="button" onclick="text_copy();">입력</button>
		<br>
		<div class="div_canvas" id="canvas">
			
		</div>
	</body>
</html>