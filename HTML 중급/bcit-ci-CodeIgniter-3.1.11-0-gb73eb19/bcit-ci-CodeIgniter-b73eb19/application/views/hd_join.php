﻿<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');?>

<br>
<br>
<br>
<h3 align="center">회원가입</h3>
<br>
<br>
<br>
<hr>
<form name="sign-up" action="http://qkrgustn.com/jeju/join_add_data" method="post" align="center">
	<fieldset>
		&nbsp&nbsp&nbsp이름: 
		<input type="text" name="name" id="name" size="30" pattern=^[가-힣]* minlength=2 maxlength=5 required placeholder="예시)홍길동"><br/>
		&nbsp&nbsp&nbsp&nbsp&nbspID&nbsp:&nbsp
		<input type="text" name="id" id="id"size="30" pattern=^[0-9a-zA-Z]*$ required placeholder="최소 6자 이상 입력해 주세요."><br>
		<h6>ID 입력시 <mark>하단의 ID 검색</mark>을 먼저 해주세요.</h6>
		&nbsp&nbsp&nbsp&nbsp&nbspPW:
		<input type="text" name="pw" id="pw" size="30" pattern=^[0-9a-zA-Z]*[-_\.~!@]*$ required placeholder="최소 6자 이상 입력해 주세요."><br/>
		&nbsp&nbspTel :  
		<input type="text" name="tel" size="30" id="tel" required placeholder="예시)010-0000-0000"><br>
		&nbsp&nbsp&nbsp주소 :
		<input type="text" name="address" size="30" id="address" required placeholder="예시)경기도 화성시 병점 1로 65"><br>
		e-mail :
		<input type="text" name="email" size="30" id="email" required placeholder="예시)gdhong@naver.com"><br>
		&nbsp&nbsp&nbsp성별:
		<select id="gender" name="gender" required>
				<option value="남">남</option>
				<option value="여">여</option>
			</select><br/>
		생년월일 :
		<input type="text" name="birthday" size="10" id="birthday" required placeholder="예시)0000.00.00"><br>
		<button type="submit" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
			회원 가입
		</button>
	</fieldset>
</form>	
<form name="sign-up" action="http://qkrgustn.com/jeju/jeju_search" method="post" align="center">
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