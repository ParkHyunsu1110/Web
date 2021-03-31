<? if( ! defined('BASEPATH') ) exit ('No direct script access allowed');?>
<!--hotel_login-->
		<br>
		<br>
		<br>
		<h3 align="center">로그인</h3>
		<br>
		<br>
		<br>
		<hr>
		<form name="log-in" action="http://qkrgustn.com/hotel/log_add_data" method="post" align="center">
			<fieldset>
				<legend>Log-In</legend>
				ID&nbsp:&nbsp<input type="text" name="id"><br/>
				PW:<input type="text" name="pw"><br/>
				<button type="submit" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
					로그인
				</button>
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Log-In</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								로그인에 성공하셨습니다.
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="btn btn-light" onclick="menu_go('join');">
					회원 가입하기
				</button>
			</fieldset>
		</form>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<hr>
