<?php /*a:3:{s:75:"/www/wwwroot/xiangqu8.com/public/../themes/default/wxshare/share/index.html";i:1733451423;s:68:"/www/wwwroot/xiangqu8.com/public/../themes/default/wxshare/head.html";i:1733451414;s:70:"/www/wwwroot/xiangqu8.com/public/../themes/default/wxshare/footer.html";i:1733451414;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection" />
    <link href='/static/appapi/css/common.css' rel="stylesheet" type="text/css" >
    <link href='/static/swiper/css/swiper.min.css' rel="stylesheet" type="text/css" >

    <title><?php echo $configpub['site_name']; ?></title>
	<link rel="stylesheet" href="/static/wxshare/css/lives.css">

</head>
<body class="body">

	<div class="lstop">
		<ul class="clear">
			<li 
				onclick="location.href='<?php echo url('wxshare/Share/index',['ltype'=>2]); ?>'"
				<?php if($ltype == 2): ?>
				class="on"
				<?php endif; ?>
			>关注<span></span></li>
			<li 
				onclick="location.href='<?php echo url('wxshare/Share/index',['ltype'=>1]); ?>'" 
				<?php if($ltype == 1): ?>
				class="on"
				<?php endif; ?>
			>热门<span></span></li>
			<li 
				onclick="location.href='<?php echo url('wxshare/Share/index',['ltype'=>3]); ?>'"
				<?php if($ltype == 3): ?>
				class="on"
				<?php endif; ?>
			>最新<span></span></li>
		</ul>
		<div class="search"
			onclick="location.href='<?php echo url('wxshare/Share/search'); ?>'"
		><img src="/static/wxshare/images/index/sousuo.png">请输入用户ID/用户名...</div>
	</div>
	
	<div class="swiper-container rotation">
        <div class="swiper-wrapper">
			<?php if(is_array($slide) || $slide instanceof \think\Collection || $slide instanceof \think\Paginator): $i = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <div class="swiper-slide rotation_img"><a <?php if($v['url']!=''): ?> href="<?php echo $v['url']; ?>" <?php endif; ?>><img src="<?php echo $v['image']; ?>" ></a></div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

	
	
	<ul class="live_ls clear">
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<li class="lists" onclick="openlive(<?php echo $v['uid']; ?>)">
				<img src="<?php echo $v['thumb']; ?>" onerror="this.src='/default.jpg'" class="icon-big" />
				<div class="h-info">
					<div class="rom_icon"><img src="/static/wxshare/images/index/liverom_<?php echo $v['type']; ?>.png" /></div>
					<ul class="u_info">
						<li><img src="<?php echo $v['avatar_thumb']; ?>" onerror="this.src='/default.jpg'" class="uavatar" /></li>
						<li class="fans"><?php echo $v['user_nickname']; ?></li>
						<li class="live-icon"><img src="/static/wxshare/images/index/rs.png"  /></li>
						<li class="fans_rs"><?php echo $v['nums']; ?></li>
					</ul>
				</div>
			</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<div style="height:1rem"></div>
	<div class="footer">
		<div class="fli" onclick="location.href='<?php echo url('wxshare/Share/index',['ltype'=>1]); ?>'">
			<div class="icon"><img src="/static/wxshare/images/index/index2.png"  /></div>
			<div class="tit on">首页</div>
		</div>
		
		<div class="fli"  onclick="location.href='<?php echo url('wxshare/user/index'); ?>'">
			<div class="icon"><img src="/static/wxshare/images/index/my2.png"  /></div>
			<div class="tit">我的</div>
		</div>
	</div>
	
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


	
	<script>
    var ltype="<?php echo $ltype; ?>";
	var swiper = new Swiper('.swiper-container', {
		keyboard : true,
		virtualTranslate : true,
		on:{
			setTranslate: function(){
				this.$wrapperEl.transition('')
				TweenMax.to(this.$wrapperEl, 1.5, {x:this.translate, ease:Power4.easeOut})
				
			}
		},
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
    });

	
	function getlistmore(){
		$.ajax({
			url:'/wxshare/Share/live_more',
			data:{'page':page,'ltype':ltype},
			type:'post',
			dataType:'json',
			success:function(data){
				if(data.nums>0){
						var nums=data.nums;
						var list=data.data;
						var html='';
						for(var i=0;i<nums;i++){

							var linfo=list[i];

							html+='<li class="lists" onclick="openlive('+linfo['uid']+')">\
									<img src="'+linfo['thumb']+'"  class="icon-big" />\
									<div class="h-info">\
										<div class="rom_icon"><img src="/static/wxshare/images/index/liverom_'+linfo['type']+'.png" /></div>\
										<ul class="u_info">\
											<li><img src="'+linfo['avatar_thumb']+'"  class="uavatar" /></li>\
											<li class="fans">'+linfo['user_nickname']+'</li>\
											<li class="live-icon"><img src="/static/wxshare/images/index/rs.png"  /></li>\
											<li class="fans_rs">'+linfo['nums']+'</li>\
										</ul>\
									</div>\
								</li>';
						}
					
					$(".live_ls").append(html);
				}
				
				if(data.isscroll==1){
					page++;
					isscroll=true;
				}
			}
		})
	}

	var page=2; 
	var isscroll=true; 
	$(window).scroll(function(){  
			var srollPos = $(window).scrollTop();    //滚动条距顶部距离(页面超出窗口的高度)  		
			var totalheight = parseFloat($(window).height()) + parseFloat(srollPos);  
			
			if(($(document).height()-50) <= totalheight  && isscroll) {  
					isscroll=false;
					getlistmore()
			}  
			
			
	});  
	
	function openlive(uid){

		location.href='/wxshare/share/show.html?roomnum='+uid;
	}

	</script>	


</body>
</html> 
