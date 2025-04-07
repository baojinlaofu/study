<?php /*a:5:{s:73:"/www/wwwroot/xiangqu8.com/public/../themes/default/home/app/programe.html";i:1733451420;s:67:"/www/wwwroot/xiangqu8.com/public/../themes/default/public/head.html";i:1733451414;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/public/header.html";i:1733451414;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/public/footer.html";i:1733451414;s:70:"/www/wwwroot/xiangqu8.com/public/../themes/default/public/scripts.html";i:1733451414;}*/ ?>
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
	
	

<title><?php echo $configpub['site_name']; ?></title>
<link type="text/css" rel="stylesheet" href="/static/home/css/programe.css"/>

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


</div>

<!-- <div class="content">
    <div class="con_center">
        <div class="con_left fl">
            
            <div class="c-banner">
                <div class="banner">
                    <ul>
                        <?php if(is_array($slide_list) || $slide_list instanceof \think\Collection || $slide_list instanceof \think\Paginator): if( count($slide_list)==0 ) : echo "" ;else: foreach($slide_list as $key=>$vo): ?>
                            <li>
                                <?php if($vo['url'] != ''): ?>
                                    <a href="<?php echo $vo['url']; ?>" target="_blank">
                                <?php endif; ?>
                                    <img src="<?php echo $vo['image']; ?>">
                                
                                <?php if($vo['url'] != ''): ?>
                                    </a>
                                <?php endif; ?>
                            </li>

                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </ul>
                </div>

                <div class="jumpBtn">
                    <ul>
                        <?php if(is_array($slide_list) || $slide_list instanceof \think\Collection || $slide_list instanceof \think\Paginator): if( count($slide_list)==0 ) : echo "" ;else: foreach($slide_list as $key=>$vo): ?>
                            <li jumpImg="<?php echo $key; ?>"></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>

        </div>
        <div class="con_right fr">
            <div class="live_logo_area fl">
                <p class="app_logo"><img src="/static/home/images/index/app_logo.png" /></p>
                <p><img src="/static/home/images/index/pro_img.png" /></p>
            </div>
            <div class="ewm_area fr">
                <p class="down_ewm"><img src="<?php echo get_upload_path($configpub['qr_url']); ?>" /></p>
                <p class="ewm_text">扫描二维码下载演示APP</p>
                <p class="ewm_text">下载iOS/Android</p>
            </div>
            <div class="clearboth"></div>
        </div>
        <div class="clearboth"></div>
    </div>
</div> -->


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
<script type="text/javascript">
    //定时器返回值
    var time=null;
    //记录当前位置
    var nexImg = 0;
    //用于获取轮播图图片个数
    var imgLength = $(".c-banner .banner ul li").length;
    //当时动态数据的时候使用,上面那个删除
    // var imgLength =0;
    //设置底部第一个按钮样式
    $(".c-banner .jumpBtn ul li[jumpImg="+nexImg+"]").css({"background-color":"#FF347C","width":'30px',"border-radius":'8px'});

    //页面加载
    $(document).ready(function(){
        // dynamicData();
        //启动定时器,设置时间为3秒一次
        time =setInterval(intervalImg,3000);
    });

    //轮播图
    function intervalImg(){
        if(nexImg<imgLength-1){
            nexImg++;
        }else{
            nexImg=0;
        }
        
        //将当前图片试用绝对定位,下一张图片试用相对定位
        $(".c-banner .banner ul img").eq(nexImg-1).css("position","absolute");
        $(".c-banner .banner ul img").eq(nexImg).css("position","relative");
        
        $(".c-banner .banner ul li").eq(nexImg).css("display","block");
        $(".c-banner .banner ul li").eq(nexImg).stop().animate({"opacity":1},1000);
        $(".c-banner .banner ul li").eq(nexImg-1).stop().animate({"opacity":0},1000,function(){
            $(".c-banner .banner ul li").eq(nexImg-1).css("display","none");
        });
        $(".c-banner .jumpBtn ul li").css({"background-color":"white","width":'15px',"border-radius":'50%'});
        $(".c-banner .jumpBtn ul li[jumpImg="+nexImg+"]").css({"background-color":"#FF347C","width":'30px',"border-radius":'8px'});
    }

    //轮播图底下按钮
    //动态数据加载的试用应放在请求成功后执行该代码,否则按钮无法使用
    $(".c-banner .jumpBtn ul li").each(function(){
        //为每个按钮定义点击事件
        $(this).click(function(){
            clearInterval(time);
            $(".c-banner .jumpBtn ul li").css({"background-color":"white","width":'15px',"border-radius":'50%'});
            jumpImg = $(this).attr("jumpImg");
            if(jumpImg!=nexImg){
                var after =$(".c-banner .banner ul li").eq(jumpImg);
                var befor =$(".c-banner .banner ul li").eq(nexImg);
                
                //将当前图片试用绝对定位,下一张图片试用相对定位
                $(".c-banner .banner ul img").eq(nexImg).css("position","absolute");
                $(".c-banner .banner ul img").eq(jumpImg).css("position","relative");
                
                after.css("display","block");
                after.stop().animate({"opacity":1},1000);
                befor.stop().animate({"opacity":0},1000,function(){
                    befor.css("display","none");
                });
                nexImg=jumpImg;
            }
            $(this).css({"background-color":"#FF347C","width":'30px',"border-radius":'8px'});
            time =setInterval(intervalImg,3000);
        });
    });


</script>
</body>
</html>