<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');?>
<!--hotel_join-->	
		<br>
		<br>
		<br>
		<h3 align="center">회원가입</h3>
		<br>
		<br>
		<br>
		<hr>
		<form name="sign-up" action="http://qkrgustn.com/hotel/join_add_data" method="post" align="center">
			<fieldset>
				<h3>Sign-Up</h3><br>
				&nbsp&nbsp&nbsp이름: 
				<input type="text" name="name"size="30" placeholder="예시)홍길동"><br/>
				&nbsp&nbsp&nbsp&nbsp&nbspID&nbsp:&nbsp
				<input type="text" name="id"size="30"><h6>ID 입력시 하단의 ID 검색을 먼저 해주세요.</h6>
				&nbsp&nbsp&nbsp&nbsp&nbspPW:
				<input type="text" name="pw"size="30"><br/>
				Phone :
				<input type="text" name="phone" size="30" id="user_Phone" placeholder="예시)010-0000-0000"><br>
				&nbsp&nbsp&nbsp주소 :
				<input type="text" name="address" size="30" id="user_address"placeholder="예시)강원 속초시 영랑해안길 181"><br>
				e-mail :
				<input type="text" name="mail" size="30" id="user_e-mail" placeholder="예시)gdhong@naver.com"><br>
				&nbsp&nbsp&nbsp성별:
				<input type="enum" name="gender" size="30"><br/>
				생년월일 :
				<input type="date" name="birthday" placeholder="1900-01-01" size="30"><br/>
				
				<button type="submit" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
					회원 가입
				</button>
			</fieldset>
		</form>	
		<form name="sign-up" action="http://qkrgustn.com/hotel/search_id" method="post" align="center">
			<fieldset>
				<h3>ID-Check</h3>
				ID:
				<input type="text" name="id">&nbsp&nbsp&nbsp
				<button type="submit" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">ID 확인</button><br/>
			<fieldset>
		<form>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<hr>
