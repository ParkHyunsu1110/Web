<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');?>
<!--id,pw 찾기-->
<br>
<br>
<br>
<h3 align="center">ID,PW 찾기</h3>
<br>
<br>
<br>
<hr>
<form name="search_id" action="http://qkrgustn.com/hd/search_id" method="post" align="center">
	<!--ID-->
	<h3>ID 찾기</h3>
	&nbsp&nbsp&nbsp이름: 
	<input name="name" id="name" size="30" pattern="^[가-힣]*$" minlength=2 maxlength=5 required placeholder="예시)홍길동"><br/>
	&nbsp&nbsp&nbsp&nbsp&nbsp
	Tel :
	<input type="text" name="tel" size="30" id="tel" required placeholder="예시)010-0000-0000"><br>
	<button type="submit" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
		찾기
	</button>
</form>
<form name="search_pw" action="http://qkrgustn.com/hd/search_pw" method="post" align="center">
	<!--PW-->
	<h3>PW 찾기</h3>
	&nbsp&nbsp&nbsp이름: 
	<input type="text" name="name" id="name" size="30" pattern="^[가-힣]*$" minlength=2 maxlength=5 required placeholder="예시)홍길동"><br/>
	ID&nbsp:&nbsp<input name="id" id="id"size="30" pattern=^[0-9a-zA-Z]*$ required placeholder="최소 6자 이상 입력해 주세요."><br/>
	<button type="submit" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
		찾기
	</button>
</form>
<br>
<br>
<br>