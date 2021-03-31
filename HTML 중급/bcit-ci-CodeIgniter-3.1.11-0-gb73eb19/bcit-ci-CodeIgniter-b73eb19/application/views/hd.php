<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');?>
<html>
	<head>
		<title>
			HomeDivision
		</title>
		<style>
			mark {
				background: #0000FF;
			}
		</style>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script>

		function menu( my_menu ) {
			
			if( my_menu != 'login' && my_menu != 'join' && my_menu != 'search'){
				<?
				if( !isset($_SESSION["login_check"])){
					echo "alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.');";
					?>
					my_menu='login';
					<?
				}
				?>
			}
			
			$.post(
					"http://qkrgustn.com/hd/hd_" + my_menu,
					{},
					function( data ){
						document.getElementById( 'main' ).innerHTML = data;
					}
				);
		}
		
		function logout(){	//logout버튼 누르면  실행 됨.
			document.location.href="http://qkrgustn.com/hd/logout";
		}
		</script>
		
	</head>
	<body>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
		<ul class="nav justify-content-end">
			<li class="nav-item" id="login_area">
				<?
					if(isset($_SESSION["login_check"])){	//세션이 있으면 "세션 id 님 반갑습니다."
						echo $_SESSION["login_check"]."님 반갑습니다.&nbsp&nbsp&nbsp <span onclick='logout();'>로그아웃</span>";
					}										//세션이 없으면 "로그인"
					else echo "<span onclick=\"menu('login');\">로그인</span>";
				?>
			</li>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<li class="nav-item">
				<span onclick="menu('join');">회원가입</span>
			</li>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</ul>
		<hr>
		<!--navbar-->
	
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="http://qkrgustn.com/hd/hd_form"><img src="http://qkrgustn.com/img/LOGO.png"><span class="sr-only"></span></a>
					</li>
					&nbsp&nbsp&nbsp&nbsp
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" onclick="menu('food');" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  FOOD	<!--원산지 적어두기-->
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" onclick="menu('meat');">육류</a>
						  <a class="dropdown-item" onclick="menu('seafood');">해산물</a>
						  <a class="dropdown-item" onclick="menu('vegetable');">채소류</a>
						</div>
					</li>
					&nbsp&nbsp&nbsp&nbsp
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" onclick="menu('life');" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  LIFE
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" onclick="menu('car');">차량용품</a>
						  <a class="dropdown-item" onclick="menu('digital');">전자기기</a>
						  <a class="dropdown-item" onclick="menu('sport');">스포츠 용품</a>
						</div>
					</li>
					&nbsp&nbsp&nbsp&nbsp
					<li class="nav-item">
						<a class="nav-link" onclick="menu('sb');">장바구니</a>
					</li>
					&nbsp&nbsp&nbsp&nbsp
					<li class="nav-item">
						<a class="nav-link" onclick="menu('csc');">고객센터</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</nav>
			<hr>
			<br>
			<br>
			<br>
			<span align="center"><h2>오늘도 찾아와 주셔서 감사합니다!</h2></span>
			<br>
			<br>
			<br>
			<hr>
			
		<div id="main">
		<!--동적 사용 할 부분-->
			<!--food-->
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" align="center">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="http://qkrgustn.com/img/MEAT2.jpg" class="d-block h-75 w-75" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5><a class="btn btn-outline-secondary" onclick="menu('meat');" role="button">육류</a></h5>
							<p>대관령에서 좋은 풀을 먹으며 뛰놀던 건강한 한우를 고객님의 식탁 위로 배송합니다.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="http://qkrgustn.com/img/SEAFOOD2.jpg" class="d-block h-75 w-75" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5><a class="btn btn-outline-secondary" onclick="menu('seafood');" role="button">해산물</a></h5>
							<p>매일 아침 갓 잡아올린 어부의 노력을 고객님의 식탁 위로 배송합니다.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="http://qkrgustn.com/img/VEGETABLE1.jpg" class="d-block h-75 w-75" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5><a class="btn btn-outline-secondary" onclick="menu('vegetable');" role="button">채소류</a></h5>
							<p>건강하게 키운 농부의 땀방울을 고객님의 식탁 위로 배송합니다.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<hr>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<hr>
			<!--life-->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  align="center">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="http://qkrgustn.com/img/CARS.jpg" class="d-block h-75 w-75" alt="...">
						<div class="carousel-indicators d-none d-md-block">
							<h5><a class="btn btn-outline-secondary" onclick="menu('car');" role="button">차량용품</a></h5>
							<p>당신의 파트너를 당신의 취향대로 바꿔보세요!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="http://qkrgustn.com/img/DIGITALS.jpg" class="d-block h-75 w-75" alt="...">
						<div class="carousel-indicators d-none d-md-block">
							<h5><a class="btn btn-outline-secondary" onclick="menu('digital');" role="button">전자기기</a></h5>
							<p>변해가는 시대에 따라 당신도 스마트하게 바꿔보는건 어떤가요?</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="http://qkrgustn.com/img/SPORTS.JPG" class="d-block h-75 w-75" alt="...">
						<div class="carousel-indicators d-none d-md-block">
							<h5><a class="btn btn-outline-secondary" onclick="menu('sport');" role="button">스포츠 용품</a></h5>
							<p>아이들과의 좋은 추억을 쌓아 보세요!</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		<!--동적 사용 할 부분-->
		</div>
			<hr>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<hr>
		<footer>
			<h6>
				<div class="footer_section" align="center">
					<p class="contact" style="padding-bottom:0;">
						(주)HomeDivision&nbsp|&nbsp본가:경기도 화성시 병점 1로 65&nbsp|&nbsp대표:박현수&nbsp|&nbsp책임자:박현수 <br>
						제작자 전화번호:010-8898-5421&nbsp|&nbsp  &nbsp|&nbsp CONTACT CENTER : 031-224-5421<br>
						운영시간: 09:00~ 22:00 (공휴일 및 매달 1,3주 일요일 휴무)&nbsp|&nbsp 이메일:phs0767@naver.com
					</p>
					<p class="coptright" style="margin-top:10px;">
						Copyright &copy;2020 HomeDivision. All Right Reserved 
					</p>
				</div>
			</h6>
		</footer>
	</body>
</html> 