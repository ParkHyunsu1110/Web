<? if(! defined('BASEPATH')) exit('No direct script access allowed');?>
<html>
	<head>
		<title>
			ComPhics
		</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script>

		function menu( my_menu ) {
			
			if( my_menu != 'login' && my_menu != 'join' && my_menu != 'search' && my_menu != 'introduce'){
				<?
				if( !isset($_SESSION["log_check"])){
					echo "alert('세션 정보가 없습니다. 로그인 후 이용해 주세요.');";
					?>
					my_menu='login';
					<?
				}
				?>
			}
			
			$.post(
					"http://qkrgustn.com/jeju/jeju_" + my_menu,
					{},
					function( data ){
						document.getElementById( 'main' ).innerHTML = data;
					}
				);
		}
		//로그인/아웃 동적 사용
		function logout(){	//logout버튼 누르면  실행 됨.
			document.location.href="http://qkrgustn.com/jeju/jeju_logout";
		}
		</script>
		<style>
			body{
				background-color:#FFFFCC;
			}
			.jeju_nav{
				background-color:white;
			}
			.main{
				background-color:#FFFFCC;
			}
			.white{
				background-color:white;
			}
			.green{
				background-color:#81F79F;
			}
			.orange{
				color:#FF6600;
			}
			.blue{
				background-color:#6EE3F7;
			}
			.orange_back{
				background-color:#FFBD91;
			}
			.pink{
				background-color:#FFC8CD;
			}
		</style>
	</head>
	<body>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<!-- Logo -->
		<div align="center">
			<img src="http://qkrgustn.com/img/Jeju_Logo.png" width="300px" height="150px">
		</div>

		<!--로그인 부분-->
		<div style="color:black">
			<ul class="nav justify-content-end">
				<li class="nav-item" id="login_area">
					<?
						if(isset($_SESSION["log_check"])){	//세션이 있으면 "세션 id 님 반갑습니다."
							echo $_SESSION["log_check"]."님 반갑습니다.&nbsp&nbsp&nbsp <span onclick='logout();'>Log-Out</span>";
						}										//세션이 없으면 "로그인"
						else echo "<span onclick=\"menu('login');\">Log-In</span>";
					?>
				</li>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<li class="nav-item">
					<span onclick="menu('join');">Sign-Up</span>
				</li>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			</ul>
		</div>
		<!--NavBars-->
		<div class="jeju_nav">
			<hr>
			<nav class="nav nav-pills nav-fill">
				<a class="btn btn-light nav-item nav-link" href="http://qkrgustn.com/jeju/jeju_main">Main</a>
				<a class="btn btn-light nav-item nav-link" onclick="menu('introduce');">Introduce</a>
				<li class="btn btn-light nav-item dropdown">
					<a class="dropdown-toggle" onclick="menu('jeju');" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Jeju
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="btn btn-light dropdown-item" onclick="menu('hanra');"> 한라산 </a>
					  <div class="dropdown-divider"></div>
					  <a class="btn btn-light dropdown-item" onclick="menu('dragon');"> 용두암(용머리 바위) </a>
					  <div class="dropdown-divider"></div>
					  <a class="btn btn-light dropdown-item" onclick="menu('jeolmul');"> 제주절물자연휴양림 </a>
					</div>
				</li>
				<li class="btn btn-light nav-item dropdown">
					<a class="dropdown-toggle" onclick="menu('seogwipo');" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Seogwipo
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="btn btn-light dropdown-item" onclick="menu('chun');"> 천지연 폭포 </a>
					  <div class="dropdown-divider"></div>
					  <a class="btn btn-light dropdown-item" onclick="menu('soi');"> 쇠소깍 </a>
					  <div class="dropdown-divider"></div>
					  <a class="btn btn-light dropdown-item" onclick="menu('oi');"> 외돌개 </a>
					</div>
				</li>
			</nav>
			<hr>
		</div>
		<!-- 동적 사용 부분-->
		<div id = "main" class="main" align="center">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" align="center">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="http://qkrgustn.com/img/seongsan.png" width="1300px" height="600px">
					</div>
					<div class="carousel-item">
						<img src="http://qkrgustn.com/img/sangoom.png" width="1300px" height="600px">
					</div>
					<div class="carousel-item">
						<img src="http://qkrgustn.com/img/hyupjae.png" width="1300px" height="600px">
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
			<br>
			<div align="center">
				<h2>
					<b class="orange">&gt;</b> <b>8월 추천 관광지</b> 
				<h2>
			</div>
			<br>
			<div class="card mb-3" style="max-width: 1300px; max-height=400px;" align="left">
				<div class="row no-gutters">
					<div class="col-md-4">
						<a href="http://www.namuggun.com/" height="5" width="10" target="_blank">
							<img src="http://qkrgustn.com/img/Jeju_namuggun.jpg" width="450px" height="400px">
						</a>
					</div>
					<div class="col-md-4">				
						<a href="https://map.naver.com/v5/search/%EC%84%A0%EB%85%80%EC%99%80%20%EB%82%98%EB%AC%B4%EA%BE%BC/place/12870248?c=14104227.3415804,3959107.2361591,15,0,0,0,dh"  height="5" width="10" target="_blank">
							<img src="http://qkrgustn.com/img/Jeju_namuggun_map.JPG" width="450px" height="400px">
						</a>
					</div>
					<div class="col-md-4">
						<div class="card-body">
							<table class="table table-striped" width="320px" height="350px">
								<tr>
									<th scope="row">관광지명</th>
									<td>선녀와 나무꾼 테마파크</td>
								</tr>
								<tr>
									<th scope="row">위치</th>
									<td>제주 제주시 조천읍 선교로 267</td>
								</tr>
								<tr>
									<th scope="row">전화</th>
									<td>064-784-9001</td>
								</tr>
								<tr>
									<th scope="row">영업<br>시간</th>
									<td>매일 09:00-19:00 (입장마감 18:00)</td>
								</tr>
								<tr>
									<th scope="row">입장료</th>
									<td>
										개인(성인)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13,000원<br>
										개인(경로/장애인/유공자)&nbsp;&nbsp;&nbsp;11,000원<br>
										개인(군경/청소년)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11,000원<br>
										개인(어린이)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10,000원<br>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>		
			</div>	
			<br>
			<div align="center">
				<h2>
					<b class="orange">&gt;</b> <b>제주 맛집</b> 
				<h2>
			</div>
			<br>
			<div class="card mb-3" style="max-width: 1300px; max-height=400px;" align="left">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="http://qkrgustn.com/img/Jeju_sangchunjae.jpg" width="450px" height="400px">
					</div>
					<div class="col-md-4">				
						<a href="https://map.naver.com/v5/search/%EC%83%81%EC%B6%98%EC%9E%AC/place/13467718?c=14104707.4616644,3956326.5406731,17,0,0,0,dh" height="5" width="10" target="_blank">
							<img src="http://qkrgustn.com/img/Jeju_sangchunjae_map.JPG" width="450px" height="400px">
						</a>
					</div>
					<div class="col-md-4">
						<div class="card-body">
							<table class="table table-striped" width="300px" height="350px">
								<tr>
									<th scope="row">식당<br>이름</th>
									<td>상춘재</td>
								</tr>
								<tr>
									<th scope="row">위치</th>
									<td>제주 제주시 조천읍 선진길 26</td>
								</tr>
								<tr>
									<th scope="row">전화</th>
									<td>064-725-1557</td>
								</tr>
								<tr>
									<th scope="row">영업<br>시간</th>
									<td>매일 10:00-16:00 (월요일 휴무)</td>
								</tr>
							</table>
						</div>
					</div>
				</div>		
			</div>	
			<br>
			
			<div align="center">
				<h2>
					<b class="orange">&gt;</b> <b>서귀포 맛집</b> 
				<h2>
			</div>
			<br>
			<div class="card mb-3" style="max-width: 1300px; max-height=400px;" align="left">
				<div class="row no-gutters">
					<div class="col-md-4">
							<img src="http://qkrgustn.com/img/Jeju_namyang.jpg_large" width="450px" height="400px">
					</div>
					<div class="col-md-4">				
						<a href="https://map.naver.com/v5/entry/place/16952245?c=14128031.2056663,3955211.5603103,19,0,0,0,dh"  height="5" width="10" target="_blank">
							<img src="http://qkrgustn.com/img/Jeju_namyang_map.JPG" width="450px" height="400px">
						</a>
					</div>
					<div class="col-md-4">
						<div class="card-body">
							<table class="table table-striped" width="300px" height="350px">
								<tr>
									<th scope="row">식당<br>이름</th>
									<td>남양수산</td>
								</tr>
								<tr>
									<th scope="row">위치</th>
									<td>제주 서귀포시 성산읍 고성동서로56번길 11</td>
								</tr>
								<tr>
									<th scope="row">전화</th>
									<td>064-782-6618</td>
								</tr>
								<tr>
									<th scope="row">영업<br>시간</th>
									<td>매일 14:00-20:00</td>
								</tr>
							</table>
						</div>
					</div>
				</div>		
			</div>	
		</div>
		<hr>
		<!-- 하단 부분-->
		<footer align="center">
			<h6>
				<div class="footer_section">
					<p class="contact" style="padding-bottom:0;" >
						(주)Comphics &nbsp|&nbsp대표 : 허유림&nbsp|&nbsp총 책임자 : 김지윤 &nbsp|&nbsp제작자 : 박현수 <br>
						제작자 전화번호 : 010-8898-5421&nbsp|&nbsp CONTACT CENTER : 경기도 오산시 한신대학교 60주년 기념관 18206-2 <br>
						오류 제보 이메일 : phs0767@naver.com &nbsp|&nbsp phs0767@hs.ac.kr
					</p>
					<p class="coptright" style="margin-top:10px;">
						Copyright &copy;2020 Comphics All Right Reserved 
					</p>
				</div>
			</h6>
		</footer>
	</body>
</html>