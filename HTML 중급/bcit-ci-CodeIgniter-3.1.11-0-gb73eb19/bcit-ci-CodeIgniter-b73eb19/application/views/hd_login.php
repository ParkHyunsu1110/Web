<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');?>
<br>
<br>
<br>
<h3 align="center">로그인</h3>
<br>
<br>
<br>
<hr>
<form name="log-in" action="http://qkrgustn.com/hd/log_add_data" method="post" align="center">
	<fieldset>
		ID&nbsp:&nbsp<input name="id" id="id"size="30" pattern=^[0-9a-zA-Z]*$ required placeholder="최소 6자 이상 입력해 주세요."><br/>
		PW:<input type="text" name="pw" id="pw" size="30" pattern=^[0-9a-zA-Z]*[-_\.~!@]*$ required placeholder="최소 6자 이상 입력해 주세요."><br/>
		<button type="submit" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
			로그인
		</button>
		<button type="button" class="btn btn-light" onclick="menu('join');">
			회원 가입하기
		</button>
		<br>
		<button type = "button" class="btn btn-light" onclick="menu('search');">
			아이디/비밀번호 찾기
		</button>
	</fieldset>
</form>
<br>
<br>
<br>