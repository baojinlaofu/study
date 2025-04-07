<?php /*a:5:{s:76:"/www/wwwroot/xiangqu8.com/public/../themes/default/home/index/translate.html";i:1733451420;s:67:"/www/wwwroot/xiangqu8.com/public/../themes/default/public/head.html";i:1733451414;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/public/header.html";i:1733451414;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/public/footer.html";i:1733451414;s:70:"/www/wwwroot/xiangqu8.com/public/../themes/default/public/scripts.html";i:1733451414;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie oldie ie6" lang="zh">
<![endif]-->
<!--[if IE 7]>
<html class="ie oldie ie7" lang="zh">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="zh">
<![endif]-->
<!--[if IE 9]>
<html class="ie ie9" lang="zh">
<![endif]-->
<!--[if gt IE 10]><!-->
<html lang="zh">
<!--<![endif]-->
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>	
	
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">

	<!-- No Baidu Siteapp-->
	<meta http-equiv="Cache-Control" content="no-siteapp"/>
    
    <meta name="referrer" content="origin">

	<!-- HTML5 shim for IE8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	
	<link type="text/css" rel="stylesheet" href="/static/home/css/common.css?t=1542606715"/>
	<link type="text/css" rel="stylesheet" href="/static/home/css/login.css"/>
	<link type="text/css" rel="stylesheet" href="/static/home/css/bootstrap.css"/>
	
	

<title><?php echo $configpub['site_seo_title']; ?> -<?php echo $configpub['site_name']; ?></title>
<link type="text/css" rel="stylesheet" href="/static/home/css/index.css"/>

</head>
<body>
<div class="wrapper">
		<div id="doc-hd" class="header double">
		<div class="topbar">
			<div class="container clearfix">
				<div class="hd-logo">
					<a href="#" class="links">享趣</a>
				</div>
				<ul class="hd-nav">
					<li class="item"><a href="/" <?php if($current == 'index'): ?>class="current" <?php endif; ?> >首页</a></li>
					<!-- <li class="item"><a href="/home/Category/classlive?cat=classlive"  <?php if($current == 'classlive'): ?>class="current" <?php endif; ?> >分类</a></li> -->
					<!-- <li class="item"><a href="/home/Category/index?cat=2"  <?php if($current == '2'): ?>class="current" <?php endif; ?> >女神驾到</a></li>
					<li class="item"><a href="/home/Category/index?cat=1"  <?php if($current == '1'): ?>class="current" <?php endif; ?> >国民男神</a></li> -->
					<li class="item"><a href="/home/App/programe"  <?php if($current == 'download'): ?>class="current" <?php endif; ?> >APP</a></li>
					
				</ul>
				
				 
				
			
			</div>
		</div>
	</div>


    <!-- 热门直播 -->
    <div class="container">
        <div class="g-box feed-list" id="hot">
            <form class="well translate_form" method="post" action="/home/Index/translate">
                <div class="box-hdd">
                    <input name="keyword" class="translate_input" autocomplete="off" tabindex="0" value="<?php echo $keyword; ?>" placeholder="请输入用户名、用户ID"/>
                    <input type="submit" class="translate_primary" value="搜索">
                        <div class="search_count">
                    <span><?php echo $msg['info']; ?></span>
                    <span class="search_hotkey"><?php echo $msg['name']; ?></span>
                    <span><?php echo $msg['result']; ?></span>
                </div>
            
                    
                </div>
            
            </form>
            <div>
                <hr class="search_line">
            </div>
            <div class="box-bd translate_bd">
                <ul class="list">
                    <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <li class="feed <?php if($v['islive'] == '1'): ?>live<?php else: ?>review<?php endif; ?> " style="height: 342px;margin-bottom: 18px;">
                        <a class="link" <?php if($msg['type'] == '0'): ?>  href="/<?php echo $v['uid']; ?>"<?php else: ?> href="/<?php echo $v['id']; ?>"<?php endif; ?> target="_blank">
                            <img class="screenshot thumb" src="/static/home/images/lazyload.png" data-original="<?php echo $v['avatar']; ?>"/>
                            <p class="user">
                                <img class="avatar thumb" src="/static/home/images/lazyload.png" data-original="<?php echo $v['avatar']; ?>"/><span class="username"><?php echo $v['user_nickname']; ?></span>
                            </p>
                        <div class="comment">
                            <div class="comment-inner">
                                <?php if($v['title']): ?>
                                    <?php echo $v['title']; else: ?>
                                    此处应该有互动
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="pagination"><?php echo $page; ?></div>
			
    	<div class="area-ft">
		<div class="down-ft">
			
			<div class="down-ft_two fl">
				<ul class="ewm_list">
					<li>
						<p class="ewm_title">微信公众号</p>
						<p class="ewm_icon"><img src="<?php echo $configpub['wechat_ewm']; ?>"></p>
					</li>
					<li>
						<p class="ewm_title">android版下载</p>
						<p class="ewm_icon"><img src="<?php echo $configpub['apk_ewm']; ?>"></p>
					</li>
					<li>
						<p class="ewm_title">iPhone版下载</p>
						<p class="ewm_icon"><img src="<?php echo $configpub['ipa_ewm']; ?>"></p>
					</li>
					<div class="clearboth"></div>
				</ul>
			</div>
			<div class="down-ft_three fl">
				<div class="phone_icon fl">
					<img src="/static/home/images/foot_phone.png">
				</div>
				<div class="phone_msg fl">
					<div class="phone_number"><?php echo $configpub['mobile']; ?></div>
					<div class="phone_desc">客服热线(服务时间:8:00-16:00)</div>
				</div>
				<div class="clearboth"></div>
			</div>
			<div class="down-ft_four fl">
				<p>地址:<?php echo $configpub['address']; ?></p>
			</div>
			<div class="clearboth"></div>
		</div>
	</div>
	<div style="clear: both;border-bottom: 2px solid #ffd350;"><br><br><br></div>
	<div id="doc-ft">
		<div class="container">
			<?php if($configpub['copyright_url'] != ''): ?>
				
					<p class="footer">
						<a href="<?php echo $configpub['copyright_url']; ?>" target="_blank">
						<?php echo nl2br($configpub['copyright']); ?>
						</a>
					</p>
				
			<?php else: ?>
				<p class="footer">
					<?php echo nl2br($configpub['copyright']); ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
		
	  


    <script type="text/javascript">
    window._DATA = window._DATA || {};
    window._DATA.user = <?php echo $userinfo; ?>;
    var country_json='<?php echo $country_list; ?>';
</script> 
<script src="/static/js/jquery.js"></script> 
<script src="/static/home/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="/static/js/layer/layer.js"></script> 
<script type="text/javascript" src="/static/home/js/login.js"></script> 
</div>

<script>
$(function(){
	//图片延迟加载
	$("img.thumb").lazyload({effect: "fadeIn"});		
})
</script>

</body>
</html>