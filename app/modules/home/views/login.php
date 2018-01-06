<div class="background-image">
<div class="box-login">
  <div class="login-form">
    <ul class="login-nav" >
        <li class="bg-<?=THEME?> left active" style="<?=(REGISTER_ALLOWED == 0)?"width: 100%;":""?>">
            <a href="<?=url("")?>"><img src="http://demo.websitehouse.ir/assets/images/logo-header-white-21.png" alt="پنل اتوماسیون اینستاگرام"></a>
        </li>
        <?php if(REGISTER_ALLOWED == 1){?>
        <li class="right bg-<?=THEME?>">
            <a href="<?=url("register")?>"><?=l('Register')?></a>
        </li>
        <?php }?>
    </ul>
    <div class="clearfix"></div>
    <form action="<?=url('user_management/ajax_login')?>" data-redirect="<?=current_url()?>">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">person</i>
            </span>
            <div class="form-line">
                <input type="text" class="form-control" name="email" placeholder="<?=l('Email')?>" required autofocus>
            </div>
        </div>
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">lock</i>
            </span>
            <div class="form-line">
                <input type="password" class="form-control" name="password" placeholder="<?=l('Password')?>" required>
            </div>
        </div>
		<button type="submit" class="btn btn-block bg-light-green waves-effect btnActionUpdate">ورود به پنل اتوماسیون اینستاگرام</button>
        <!-- <div class="input-group">
          <div>
            <input type="checkbox" id="md_checkbox_38" name="remember" class="filled-in chk-col-grey">
            <label for="md_checkbox_38"><?=l('Remember me')?></label><br/>
            <a href="<?=url("forgot_password")?>"><?=l('Forgot password')?></a>
          </div>
        </div> -->

        <?php if((FACEBOOK_ID != "" && FACEBOOK_SECRET != "") || (GOOGLE_ID != "" && GOOGLE_SECRET != "") || (TWITTER_ID != "" && TWITTER_SECRET != "")){?>
        <div class="clearfix"></div>
        <div class="login-social">
            <fieldset>
                <legend><span><?=l('OR LOGIN VIA')?></span></legend>
            </fieldset>
            <div class="list-social">
                <?php if(FACEBOOK_ID != "" && FACEBOOK_SECRET != ""){?>
                <a href="<?=url("oauth/facebook")?>" title=""><img src="<?=BASE?>assets/images/btn-facebook.png" title="" alt=""></a>
                <?php }?>
                <?php if(GOOGLE_ID != "" && GOOGLE_SECRET != ""){?>
                <a href="<?=url("oauth/google")?>" title=""><img src="<?=BASE?>assets/images/btn-google.png" title="" alt=""></a>
                <?php }?>
                <?php if(TWITTER_ID != "" && TWITTER_SECRET != ""){?>
                <a href="<?=url("oauth/twitter")?>" title=""><img src="<?=BASE?>assets/images/btn-twitter.png" title="" alt=""></a>
                <?php }?>
            </div>
        </div>
        <?php }?>
    </form>
  </div>
  <div class="copyright">طراحی و توسعه توسط <a href="http://websitehouse.ir">وبـ سایتـ هاوس</a></div>
</div>
</div>
<!-- CUSTOM CSS & JS BY WebsiteHouse -->
<style>
	.btn:hover, .btn:focus, .btn.focus
	{
		color:white !important;font-weight:700;
	}
	.login-form{
		border-radius: 0 50px;
	}
	.navbar{
		display:none !important;
	}
	.background-image:before {
	   content: "";
	   position: fixed;
	   top: 0;
	   left: 0;
	   right: 0;
	   z-index: -1;
	   top:0;
	   background-image: url('/assets/images/login-bg.jpg');
	   background-position: bottom;
	   background-repeat: no-repeat;
	   background-size: cover;
	   background-attachment: fixed;  
	   height: 100%;
	}
	.input-group .form-control:last-child, .input-group-addon:last-child, .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group > .btn, .input-group-btn:last-child > .dropdown-toggle, .input-group-btn:first-child > .btn:not(:first-child), .input-group-btn:first-child > .btn-group:not(:first-child) > .btn{
		text-align:center !important;
		direction:ltr;
	}
	.copyright{
		color:white !important;
	}
	.copyright a{color:white !important;font-weight:700;}
</style>