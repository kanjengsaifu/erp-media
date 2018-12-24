<!DOCTYPE html>
<!-- 
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			<?php echo $title; ?>
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->

		<script type='text/javascript'>
		    var titleData = '<?php echo $title; ?>';
			msg = " " + titleData;
			pos = 0;
			
			function scrollMSG() {
				document.title = msg.substring(pos, msg.length) + msg.substring(0, pos); pos++;
				if (pos > msg.length) pos = 0
				window.setTimeout("scrollMSG()",150);
			}
			scrollMSG();
		</script>
        <!--begin::Base Styles -->
		<link href="<?php echo VENDORS_PATH; ?>base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo ASSETS_PATH; ?>demo/demo5/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!-- Shortcut Icon ================================================ -->
        <link rel="shortcut icon" href="<?php echo IMG_PATH; ?>logo/favicon.ico" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url(../../../assets/app/media/img//bg/bg-1.jpg);">
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img alt="" src="<?php echo IMG_PATH; ?>logo/logo.png"/>
							</a>
						</div>
                        
                        <!-- LOGIN -->
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">
									ERP MEDIA SYSTEM
								</h3>
							</div>
							<form class="m-login__form m-form" action="<?php echo base_url('member/validate'); ?>">
								<div class="form-group m-form__group">
									<input class="form-control m-input"   type="text" placeholder="Username" name="username" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
								</div>
								<div class="row m-login__form-sub">
                                    <div class="col m--align-left m-login__form-left">
										<label class="m-checkbox  m-checkbox--light">
											<input type="checkbox" name="remember">
											Remember me
											<span></span>
										</label>
									</div>
									<div class="col m--align-right m-login__form-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">
											Forget Password ?
										</a>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">
										Sign In
									</button>
								</div>
							</form>
						</div>
                        <!-- END LOGIN -->
                        
                        <!-- SIGN UP -->
						<div class="m-login__signup">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Sign Up
								</h3>
								<div class="m-login__desc">
									Enter your details to create your account:
								</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Fullname" name="fullname">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Password" name="password">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
								</div>
								<div class="row form-group m-form__group m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--light">
											<input type="checkbox" name="agree">
											I Agree the
											<a href="#" class="m-link m-link--focus">
												terms and conditions
											</a>
											.
											<span></span>
										</label>
										<span class="m-form__help"></span>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signup_submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Sign Up
									</button>
									&nbsp;&nbsp;
									<button id="m_login_signup_cancel" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">
										Cancel
									</button>
								</div>
							</form>
						</div>
                        <!-- END SIGN UP -->
                        
                        <!-- FORGOT PASSWORD -->
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Forgotten Password ?
								</h3>
								<div class="m-login__desc">
									Enter your email to reset your password:
								</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Request
									</button>
									&nbsp;&nbsp;
									<button id="m_login_forget_password_cancel" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">
										Cancel
									</button>
								</div>
							</form>
						</div>
                        <!-- END FORGOT PASSWORD -->
                        
						<div class="m-login__account">
							<span class="m-login__account-msg">
								Copyright &copy; 2018 <a href="http://formediasolutions.com/">For Media Solutions</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="<?php echo VENDORS_PATH; ?>base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?php echo ASSETS_PATH; ?>demo/demo5/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
		<script src="<?php echo ASSETS_PATH; ?>snippets/custom/pages/user/login.js" type="text/javascript"></script>
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>