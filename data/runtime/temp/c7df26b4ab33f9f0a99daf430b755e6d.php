<?php /*a:3:{s:74:"/www/wwwroot/xiangqu8.com/public/../themes/default/wxshare/user/login.html";i:1733451424;s:68:"/www/wwwroot/xiangqu8.com/public/../themes/default/wxshare/head.html";i:1733451414;s:70:"/www/wwwroot/xiangqu8.com/public/../themes/default/wxshare/footer.html";i:1733451414;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
        
    <meta charset="utf-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection" />
    <link href='/static/appapi/css/common.css' rel="stylesheet" type="text/css" >
    <link href='/static/swiper/css/swiper.min.css' rel="stylesheet" type="text/css" >

		<title><?php if($configpub['site_seo_title'] != ''): ?>
        <?php echo (isset($configpub['site_seo_title']) && ($configpub['site_seo_title'] !== '')?$configpub['site_seo_title']:''); else: ?>
        <?php echo (isset($configpub['site_name']) && ($configpub['site_name'] !== '')?$configpub['site_name']:''); ?>
        <?php endif; ?>-登录</title>
		<link href='/static/wxshare/css/login.css?t=2' rel="stylesheet" type="text/css" >
	</head>
<body class="logbg">
	<div class="l_top">
		<div class="logo"><img src="/logo_h5.png"></div>
		<div class="tit"><?php echo (isset($configpub['site_name']) && ($configpub['site_name'] !== '')?$configpub['site_name']:''); ?></div>
	</div>
	
	<div class="l_user">
		<div class="u_inp">
			<select id="code">
				<?php if(is_array($countrys) || $countrys instanceof \think\Collection || $countrys instanceof \think\Paginator): $i = 0; $__LIST__ = $countrys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<option value="<?php echo $vo['tel']; ?>">+<?php echo $vo['tel']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<input class="mobile" type="text" name="mobile" placeholder="请输入您的手机号" />
		</div>
		<div class="u_inp">
			<input class="pws" type="password" name="pws" placeholder="请输入密码" />
		</div>
		
		<div class="lgo" id="userlogin">立即登录</div>
		
		<div class="reg_w">
			<a class="reg" href="<?php echo url('wxshare/user/lreg'); ?>">立即注册</a>
			<a class="w" href="<?php echo url('wxshare/user/lwreg'); ?>">忘记密码</a>
		</div>
	</div>
	
	<div class="l_bot">
		<div class="lmode">
			<div class='line'></div>
			<div class='tit'>其他登录方式</div>
			<div class='line'></div>
		</div>
		<div class="l_tripartite">
			<?php if(in_array('qq',$configpub['login_type'])): ?>
			<a href="<?php echo url('wxshare/user/qqLogin'); ?>"><img src="/static/wxshare/images/login/qq.png" /></a>
			<?php endif; if(in_array('wx',$configpub['login_type'])): ?>
			<a href="<?php echo url('wxshare/user/wxLogin'); ?>"><img src="/static/wxshare/images/login/wx.png" /></a>
			<?php endif; ?>
		</div>
	</div>
	<div class="agreement">已详细阅读并同意<a href="<?php echo $configpub['login_private_url']; ?>&ish5=1"><?php echo $configpub['login_private_title']; ?></a>和<a href="<?php echo $configpub['login_service_url']; ?>&ish5=1"><?php echo $configpub['login_service_title']; ?></a></div>
	
    <script>
    var uid='<?php echo (isset($uid) && ($uid !== '')?$uid:''); ?>';
    var token='<?php echo (isset($token) && ($token !== '')?$token:''); ?>';
    var baseSize = 100;
    function setRem () {
      var scale = document.documentElement.clientWidth / 750;
      document.documentElement.style.fontSize = (baseSize * Math.min(scale, 3)) + 'px';
    }
    setRem();
    window.onresize = function () {
      setRem();
    }
</script>
<script src="/static/js/jquery.js"></script>
<script src="/static/js/layer/layer.js"></script>
<script src="/static/swiper/js/swiper.min.js"></script>
<script src="/static/swiper/js/TweenMax.min.js"></script>


   <script src="/static/wxshare/js/login.js"></script>
</body>
</html>