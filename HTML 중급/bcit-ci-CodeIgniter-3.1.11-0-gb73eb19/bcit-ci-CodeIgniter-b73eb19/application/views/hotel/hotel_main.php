<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');?>
<!--hotel_main-->
<html>
	<head>
		<title>Hotel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<script>
		
		function menu_go( my_menu ) {
			
			if( my_menu != 'login' && my_menu != 'join' ){
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
					"http://qkrgustn.com/hotel/hotel_" + my_menu,
					{},
					function( data ){
						document.getElementById( 'my_div' ).innerHTML = data;
					}
				);
		}
		function log_out(){	//logout버튼 누르면 hotel/log_out 실행 됨.
			document.location.href="http://qkrgustn.com/hotel/log_out";
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
						echo $_SESSION["login_check"]."님 반갑습니다.&nbsp&nbsp&nbsp&nbsp <span onclick='log_out();'>로그아웃</span>";
					}										//세션이 없으면 "로그인"
					else echo "<span onclick=\"menu_go('login');\">로그인</span>";
				?>
			</li>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<li class="nav-item">
				<span onclick="menu_go('join');">회원가입</span>
			</li>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</ul>
		<hr>
		<div class="alert alert-light"role="alert">
			<nav class="navbar navbar-expand-lg navbar-primary bg-light">
				<a class="navbar-brand" href="http://qkrgustn.com/hotel/hotel_main"><img src="http://qkrgustn.com/img/hotel_head.jpg" alt=""></a>
				
				
				
				<button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="btn-group" role="group" aria-label="Basic example">
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<button type="button" class="btn btn-light">
									<a onclick="menu_go('info');">호텔 소개</a>
								</button>
							</li>
							<li class="nav-item">
							<div class="dropdown">
								<button type="button" class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<a onclick="menu_go('room');"> 객실</a>
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a onclick="menu_go('room');"> 객실 안내</a><br>
									<a onclick="menu_go('superior');"> 슈페리어</a><br>
									<a onclick="menu_go('suite');"> 스위트</a>
								</div>
							</div>
							</li>
							<li class="nav-item">
								<button type="button" class="btn btn-light">
									<span onclick="menu_go('wedding');">웨딩</span>
								</button>
							</li>
							<li class="nav-item">
								<button type="button" class="btn btn-light">
									<span onclick="menu_go('facility');">시설</span>
								</button>
							</li>
							<li class="nav-item">
								<button type="button" class="btn btn-light">
									<span onclick="menu_go('trip');">여행</span>
								</button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		
		<div id="my_div">
			<hr>
			<br>
			<br>
			<h2  align="center">&nbsp&nbsp<i>Welcome To Hotel Del Luna</i></h2>
			<br>
			<br>
			<hr>
			<br>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="http://qkrgustn.com/img/hotel_out.jpg" class="d-block h-75 w-100" alt="">
					</div>
					<div class="carousel-item">
						<img src="http://qkrgustn.com/img/hotel_night.jpg" class="d-block h-75 w-100" alt="">
					</div>
					<div class="carousel-item">
						<img src="http://qkrgustn.com/img/hotel_view.jpg" class="d-block h-75 w-100" alt="">
					</div>
					<div class="carousel-item">
						<img src="http://qkrgustn.com/img/hotel_room.jpg" class="d-block h-75 w-100" alt="">
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
			<hr>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<hr>
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="http://qkrgustn.com/img/superior.jpg" class="d-block h-50 w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5><a class="btn btn-outline-secondary" onclick="menu_go('superior');" role="button">Superior Room</a></h5>
							<p>파아란 동해바다의 시원함과 푸르른 설악산의 수려한 경관을 느낄 수 있고,<br>
							최신 설비와 품격 있는 서비스를 통해<br>
							안락한 휴식을 보낼 수 있도록 모든 편의를 제공하고 있습니다.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="http://qkrgustn.com/img/deluxe.jpeg" class="d-block h-50 w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5><a class="btn btn-outline-secondary" onclick="menu_go('suite');" role="button">Derux Room</a></h5>
							<p>디럭스 스위트 룸은 삼면에서 자연 경치를 조망할 수 있는 파노라마 뷰와,<br>
							고급스러운 테라스에서 시원하고 깨끗한 동해바다를 한눈에 볼 수 있는 전망뷰로<br>
							고객님의 편안한 밤을 제공해드릴 수 있는 테마별 스위트 룸입니다.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="http://qkrgustn.com/img/executive.jpg" class="d-block h-50 w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5><a class="btn btn-outline-secondary" onclick="menu_go('suite_executive');" role="button">Executive Room</a></h5>
							<p>아름다운 동해바다와 기품 있는 설악산을 바라보며<br>
							안락한 휴식을 보낼 수 있도록 모든 편의를 제공하고 있습니다.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="http://qkrgustn.com/img/ocean.jpg" class="d-block h-50 w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5><a class="btn btn-outline-secondary" onclick="menu_go('suite_ocean');" role="button">Ocean/Silver Room</a></h5>
							<p>룸이 2개가 있는 객실로 이루어져 한 가족이 이용하시기 편리한 구조로 이루어져 있으며,<br>
							베란다에서 푸르른 동해바다와 기품 있는 설악산을 바라보며 한가로이 고요한 세상에 빠지시면<br>
							여행을 즐거움을 한층 더해 드릴 것 입니다.<br>
							아늑한 침실과 휴식공간이 분리된 풍격 있는 스위트 룸 입니다.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="http://qkrgustn.com/img/presidential.jpg" class="d-block h-50 w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5><a class="btn btn-outline-secondary" onclick="menu_go('suite_presidential');" role="button">Presidential/Loyals Room</a></h5>
							<p>푸른 동해바다가 한 폭의 수채화 같이 펼쳐져 있으며,<br>
							스페인 풍의 아름다움을 반영한 호텔 최고의 조망을 자랑합니다.</p>
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
			<div class="card mb-3" style="max-width: 1300px;">
			  <div class="row no-gutters">
				<div class="col-md-7">
				  <img src="http://qkrgustn.com/img/wedding.jpg" class="card-img" style="height:500px; width:750px;" alt="...">
				</div>
				<div class="col-md-3">
				  <div class="card-body">
					<h5 class="card-title">Wedding Hall</h5>
					<p class="card-text">많은 사람들의 기대와 축복 속에 영원히 기억되어질 소중한 결혼식을<br>
					더욱 아름답고 고귀하게 할 수 있도록 Hotel Del Luna의<br>
					웨딩 프로그램은 언제나 고객 여러분과 함께 있습니다.<br><button type="button" class="btn btn-light"><a class="nav-link wedding" href="http://qkrgustn.com/hotel/hotel_wedding">Wedding</a></button></p>
				  </div>
				</div>
			  </div>
			</div>
			<hr>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<hr>
		</div>
		<footer  align="center">
			<h6>
				<div class="footer_section ">
					<p class="contact" style="padding-bottom:0;">
					(주)Hotel Del Luna&nbsp|&nbsp강원 속초시 영랑해안길 181&nbsp|&nbsp대표제작자:박현수&nbsp|&nbsp책임자:장만월 <br>
					제작자 전화번호:010-8898-5421&nbsp|&nbsp CONTACT CENTER : 031-224-5421<br>
					운영시간: 07:00~ 23:00(연중무휴) &nbsp|&nbsp 이메일:phs0767@naver.com</p>
					<div class="sns">
						<a href="https://www.facebook.com/profile.php?id=100007393926307" target="_blank" title="facebook">
							<img src="http://qkrgustn.com/img/facebook.png" alt="페이스북">
						</a>
						<a href="https://www.instagram.com/fullmoon.long/?hl=ko" target="_blank" title="instagram">
							<img src="http://qkrgustn.com/img/instagram.png" alt="인스타그램">
						</a>
						<a href="https://www.youtube.com/playlist?list=PLTnyq-p4P5n23JEF-anm-o3rzEwourTiz" target="_blank" title="youtube">
							<img src="http://qkrgustn.com/img/youtube.jpg" alt="유튜브">
						</a>
					</div>
					<p class="coptright" style="margin-top:10px;">Copyright &copy;Del Luna Hotel. All Right Reserved </p>
				</div>
			</h6>		
		</footer>	
	</body>
</html>