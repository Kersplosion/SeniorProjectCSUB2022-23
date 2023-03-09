<?php


?>
<!-- Source code for login.php: https://shib.csub.edu/idp/Authn/External?conversation=e1s1 --> 
<html lang="en">
<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="Content-Security-Policy" content="default-src 'self' https://www.csub.edu https://www.google-analytics.com https://*.duosecurity.com;
		script-src 'self' 'unsafe-inline' https://www.google-analytics.com https://maxcdn.bootstrapcdn.com https://cdnjs.cloudflare.com https://www.csub.edu;
		style-src 'self' 'unsafe-inline' https://maxcdn.bootstrapcdn.com; img-src 'self' https://www.google-analytics.com">

	<title>CSUB Shib Login</title>
	<link rel="stylesheet" type="text/css" href="login.css" media="screen">
	<link rel="stylesheet" type="text/css" href="login2.css" media="screen">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="login3.css" media="screen">

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<!-- CSB Custom Javascript to add system alerts -->
	<script src="/idp/js/systemAlert.js"></script>

	<!-- CSB Custom Javascript to add google analytics -->
	<script src="https://www.csub.edu/static/js/google-analytics.js"></script>
	<script language="JavaScript" type="text/javascript">
		var uri = "";
		var globActionUrl = "";
		function initControls() {
			var url = document.location.toString();
			var lkAuth = "null";
			if (lkAuth === "true") {
				document.getElementById('spinner').style.display = "";
				var actionUrl = "/idp/Authn/External?conversation=e1s1";
				document.getElementById('j_username').disabled = true;
				document.getElementById('j_password').disabled = true;
				document.getElementById('loginform:loginBtn').disabled = true;
				document.getElementById('launchKeyWaitTxt').style.display = "";

				(function () {
					var poll, schedule, processResponse;

					processResponse = function () {
						if (this.readyState == 4 && this.status == 200) {
							var resp = JSON.parse(this.responseText);
							if (resp.timedout) {
								alert("Authentication has timed out.");
								location.replace('/idp/login.jsp?actionUrl=' + actionUrl);
								return;
							}
							if (resp.authorized === null) {
								schedule();
							} else if (resp.authorized === false) {
								alert("Authentication was denied.");
								location.replace('/idp/login.jsp?actionUrl=' + actionUrl);
								return;
							} else {
								document.loginform.launchKeyAuthenticated.value = true;
								document.loginform.submit();
							}
						}
					};

					poll = function () {
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange = processResponse;
						xhttp.open("POST", actionUrl, true);
						xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						xhttp.send("isLaunchKeyAuthenticated=true");
					};

					schedule = function () {
						window.setTimeout(poll, 1500)
					};

					schedule();
				})();
			}
			else if (url.indexOf("&qrCode=") > -1) {
				uri = getPath(url);
				document.getElementById('j_username').disabled = true;
				document.getElementById('j_password').disabled = true;
				document.getElementById('loginform:loginBtn').disabled = true;
				document.getElementById('loginBtnRow').style.display = "none";
				document.getElementById('qrCode').style.display = "";
				var endInd = url.indexOf("&actionUrl=");
				var qrcode = url.substring(url.indexOf("&qrCode=") + 8, endInd);
				document.getElementById('qrCodeImg').src = qrcode;
				var idx = qrcode.indexOf("/qr/");
				qrcode = qrcode.substring(idx + 4);
				document.getElementById('launchKeyQrCodeTxt').innerHTML = qrcode;

				globActionUrl = url.substring(endInd + 11);
			}
			else if (url.indexOf("&actionUrl=") > -1 || url.indexOf("?actionUrl=") > -1) {
				var ind = url.indexOf("&actionUrl=");
				if (ind == -1)
					ind = url.indexOf("?actionUrl=")
				globActionUrl = url.substring(ind + 11);
			}
			setFocus('j_username');
		}

		function getPath(url) {
			var parser = document.createElement('a');
			parser.href = url;
			var path = parser.pathname;
			var search = parser.search;
			path = path + search.substring(0, search.indexOf("&"));
			return path;
		}

		function reLogin() {
			location.replace(uri + "&actionUrl=" + globActionUrl);
		}

		function login() {
			if (globActionUrl.length > 0)
				document.loginform.action = globActionUrl;
			document.getElementById('spinner').style.display = "";
			document.loginform.submit();
		}

		function CancelEnterPressed(evt) {
			if (evt.keyCode == 13)
				reLogin();
			else if (evt.which == 13)
				reLogin();
		}

		function setFocus(elId) {
			var el;
			if (elId == null || elId == "null" || elId == "") {
				var inputs = document.getElementsByTagName("input")
				for (var i = 0; i < inputs.length; i++) {
					if (inputs[i].type != "hidden" && !inputs[i].disabled) {
						el = inputs[i];
						break;
					}
				}
			}
			else
				el = document.getElementById(elId);

			if (el && el.focus && !el.disabled)
				el.focus();
		}

	</script>
</head>

<body onload="initControls()">
	 <div id="spinner" class="progress" style="display:none;">
	<div class="indeterminate"></div>
</div>


	<div class="containerwrap">

		<div class="container">
			<div class="logonbody">
				<div id="loginPanel" class="logonloc wrapper">

					
					<form action="/idp/Authn/External?conversation=e1s1" method="post" id="loginform" name="loginform" autocomplete="off">
						

							<input type="hidden" name="launchKeyAuthenticated" />
							<div id="loginformaarea" class="loginUserIdArea formContent">
								<div class="csubLoginHeader">
									<img src="/idp/images/CSUB-Logo-Stacked.png" alt="CSUB Seal" id="footerLogo"
										class="img-fluid">
								</div>

								<div id="duoSection" class="row justify-content-sm-center py-2 m-0">
									<div class="col-sm-2 col-xs-12 center">
										<a ref="https://www.csub.edu/2step/duoapp/" target="_blank">
											<img src="/idp/images/Duologo.png" alt="Duo Logo">
										</a>
									</div>
								
									<div class="col-sm-6 text-center">
									<a class="duoLink underlineHover" href="https://www.csub.edu/2step/duoapp/" target="_blank">
										Enroll in 2Step today by downloading Duo Mobile
									</a>
									</div>
								</div>

								<div class="csubLoginBody">
									<table class="sectionbodytext" cellspacing="5">
										<tbody>

											<tr>
												<td class="maxwidth">
													<label for="j_username" class="sr-only">NetID (e.g.jdoe)</label>
													<input name="j_username" id="j_username" type="text"
														class="loginInput" placeholder="NetID (e.g.jdoe)" />
												</td>
											</tr>
											<tr>
												<td class="maxwidth">
													<label for="j_password" class="sr-only">Password</label>
													<input name="j_password" id="j_password" type="password"
														class="loginInput" placeholder="Password" />
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="2">
													<div align="right" style="text-align:left;padding-right:5px">
														<span id="launchKeyWaitTxt" class="resendText"
															style="display:none;">
															Please continue authentication on your mobile device.<br />
														</span>
													</div>
												</td>
											</tr>
											<tr id="qrCode" style="display:none;">
												<td colspan="3" align="right">
													<table class="sectionbodytext floatRight">
														<tr>
															<td>
																<span class="resendText"><br /><br />Please scan the QR
																	Code to pair your device.<br /><br /></span>
															</td>
														</tr>
														<tr>
															<td><span><img id="qrCodeImg" class="qrcode"
																		alt="Mobile Authentication Qr Code" /></span>
															</td>
														</tr>
														<tr>
															<td align="center">
																<span id="launchKeyQrCodeTxt"
																	class=""></span><br /><br />
															</td>
														</tr>
														<tr>
															<td align="center">
																<input type="button" class="loginButton "
																	onclick="reLogin()" value="Re-Login" title="Login"
																	onKeyDown="CancelEnterPressed(event)" />
															</td>
														</tr>
													</table>
												</td>
											</tr>

											<tr id="loginBtnRow">
												<td colspan="2">
													<input id="loginform:loginBtn" name="loginform:loginBtn"
														value="LOG IN" class="loginButton" type="submit"
														onclick="login()">
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div id="sysMsg" class="alert alert-info d-none" role="alert">
									<h1 class="alert-heading"></h1>
									<p class="mb-0"></p>
								</div>

								

							</div>
							<div id="formFooter">
								<a class="underlineHover" href="http://2step.csub.edu/">
									More Information about 2Step
								</a>
								<br />
								<a class="underlineHover" href="https://csub.edu/lookup/">
									Don't know your NetID?
								</a>
								<br />
								<a class="underlineHover" href="https://csub.edu/accounts/">
									Forgot your password?
								</a>
							</div>
						</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
