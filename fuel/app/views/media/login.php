<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex,nofollow">
	<meta http-equiv="pragma" content="no-cache">
	<meta name="format-detection" content="telephone=no">
	<meta name="referrer" content="origin">
	<meta name="referrer" content="strict-origin-when-cross-origin">
	<link rel="canonical" href="https://www.felmat.net/" />
	<title>felmat - パートナーログイン</title>
	<link rel="shortcut icon" href="/img/favicon.ico">
	<link rel="apple-touch-icon" href="/img/touch-icon-180x180.png">
	<link rel="icon" sizes="192x192" href="/img/touch-icon-192x192.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
	<link href="/css/service/style.css" rel="stylesheet">
	<link href="/css/service/form.css" rel="stylesheet">
	<link href="/css/service/login.css" rel="stylesheet">
	</head>
<body>
<div class="footerFixed">
	<div class="container">
		<div class="logo_erea"><img src="/img/logo.svg"></div>
		<div class="contact_input_erea">
			<div class="glass login_box_partner">
				<h2>パートナー専用 ログイン</h2>
				<div class="contact_input_form">
					<form data-role="form" action="login" name="loginForm" method="post">
					<div class="form-group row">
						<div class="col-sm-12" style="position: relative;">
							<input type="text" class="form-control" id="p_username" name="p_username" value="" placeholder="ログインID" autofocus>
							<i class="fa fa-user placeholder_icon" aria-hidden="true"></i>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12" style="position: relative;">
							<input type="password" class="form-control" id="p_password" name="p_password" value="" placeholder="パスワード" onkeydown="goForm('loginForm',event.keyCode);">
							<i id="p_password_lock" class="fa fa-lock placeholder_icon" aria-hidden="true"></i>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="password_disp_flg" name="password_disp_flg" onclick="passwordDispOfPartner(this.checked)">
							<label class="form-check-label" for="password_disp_flg">パスワードを表示する</label>
						</div>
						</div>
					</div>
															<div class="form-group row">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-primary btn-lg btn-block login_btn" name="partnerlogin" value="login">LOG&nbsp;IN</button>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="p_persistent" name="p_persistent" value="yes">
								<label class="form-check-label" for="p_persistent">ログイン状態を保持する</label>
							</div>
						</div>
					</div>
					<p class="text-center"><a href="/publisher/forgot">パスワードを忘れた場合はこちら</a></p>
					<input type="hidden" name="partnerlogin" value="partnerlogin">
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer class="container text-center pt-3" style="font-size: 80%;">
	<p>
		<a href="https://www.felmat.net/">TOP</a>
		<a href="https://www.felmat.net/service/terms" target="_blank">パートナー利用規約</a>
		<a href="https://www.felmat.net/service/privacypolicy" target="_blank">プライバシー&Cookie ポリシー</a>
		<a href="https://www.felmat.net/document/sns" target="_blank">SNSガイドライン</a>
	</p>
	<p><small style="font-size: 100%;">&copy; 2012 - 2024 <a href="https://www.lombard.co.jp" target="lombard">lombard inc.</a> All rights reserved.</small></p>
</footer></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js""></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="/js/service/login.js"></script></body>
</html>