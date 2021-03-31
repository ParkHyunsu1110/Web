<? if(! defined('BASEPATH')) exit('No direct script access allowed');?>
<!--main-->
<html>
	<head>
		<title>
			Session 예제
		</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script>
			function menu_move( menu_type ){
				if(menu_type != 'login' && menu_type != 'join'){<?
					if(!isset($_SESSION["is_session"])){
						echo "alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.');";?>
						menu_type='login';
						<?
					}
				?>}
				$.post(
					"http://qkrgustn.com/shoppingmall/shoppingmall_" + menu_type,
					{},
					function(data){
						document.getElementById('menu_div').innerHTML = data;
					}
				);
			}
			function logout(){
				document.location.href="http://qkrgustn.com/shoppingmall/logout";
			}
		</script>
	</head>
	<body>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<ul>
			<li class="nav-item">
			<?
				if(isset($_SESSION["is_session"])){ 
					echo $_SESSION["is_session"]."님 반갑습니다. &nbsp&nbsp&nbsp&nbsp<span onclick='logout();'>로그아웃</span>";
				}
				else echo "<span onclick=\"menu_move('login');\">로그인</span>";
			?>
			</li>
			<li class="nav-item">
				<span onclick="menu_move('join');">회원가입</a>
			</li>
		</ul>
		<hr>
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link main" href="http://qkrgustn.com/shoppingmall/shoppingmall_main">쇼핑몰</a>
			</li>
			<li class="nav-item">
				<a class="nav-link storage" onclick="menu_move('storage');">장바구니</a>
			</li>
		</ul>
		<hr>
		<div id="menu_div">
			<p>로그인 없이 사용 가능한 홈 화면입니다.<br>
			더 많은 창은 로그인 후 이용해 주세요.<p> 
		</div>
	</body>
</html>
