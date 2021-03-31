<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');?>
<html>
	<head>
		<title>
			서버 validation 실습
		</title>
	</head>
	<body>
		<h2> 주문하기 </h2>
		<hr>
		<form action="http://qkrgustn.com/server/order" method="post">
			상품명:<input id="obj_name" name="obj_name"><br/>
			<select id="count" name="count">
				<option value="">주문 수량을 선택해 주세요.</option value>
				<?
					for( $i = 1; $i < 6; $i++ ) echo "<option value='".$i."'>".$i."</option>";
				?>
			</select><br/>
			이름:<input id="name" name="name"><br/>
			e-mail:<input id="eamil" name="email"><br/>
			주소:<input id="address" name="address"><br/>
			<button type="submit">주문</button>
		</form>
	</body>
</html>