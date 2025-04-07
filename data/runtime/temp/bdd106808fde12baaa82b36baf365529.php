<?php /*a:3:{s:75:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/detail/index.html";i:1733451416;s:67:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/head.html";i:1733451413;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/footer.html";i:1733451413;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    
    <meta charset="utf-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection" />
    <link href='/static/appapi/css/common.css?t=1576565546' rel="stylesheet" type="text/css" >

	<link type="text/css" rel="stylesheet" href="/static/appapi/css/detail.css?t=1540544885"/> 
    <title><?php echo lang('我的明细'); ?></title>
</head>
<body class="detail">
	<div class="profit_bg">
		<div class="tab">
			<ul>
				<li class="on">
                    <?php echo lang('收礼物明细'); ?>
                    <div class="tab_line bg_default"></div>
                </li>
				<li>
                    <?php echo lang('直播时长明细'); ?>
                    <div class="tab_line bg_default"></div>
                </li>
			</ul>
		</div>
        <div class="profit_line"></div>
		<div class="tab_b receive">
			<div class="profit_ul_t">
				<span class="name"><?php echo lang('礼物名称'); ?></span>
				<span class="coin"><?php echo lang('价值'); ?></span>
				<span class="nums"><?php echo lang('个数'); ?></span>
				<span class="username"><?php echo lang('送礼人'); ?></span>
			</div>
			<div class="profit_ul clear">
				<ul>
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<li>
						<span class="name"><?php echo $v['giftinfo']['giftname']; ?></span>
						<span class="coin"><img src="/static/appapi/images/coin.png"><?php echo $v['totalall']; ?></span>
						<span class="nums"><?php echo $v['num']; ?></span>
						<span class="username"><?php echo $v['userinfo']['user_nickname']; ?></span>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<div class="tab_b hide liverecord">
			<div class="profit_ul_t">
				<span style="width:36%;"><?php echo lang('开始时间'); ?></span>
				<span style="width:36%;"><?php echo lang('结束时间'); ?></span>
				<span style="width:28%;"><?php echo lang('直播时长'); ?></span>
			</div>
			<div class="profit_ul clear">
				<ul>
					<?php if(is_array($list_live) || $list_live instanceof \think\Collection || $list_live instanceof \think\Paginator): $i = 0; $__LIST__ = $list_live;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<li>
						<span style="width:36%;"><?php echo $v['starttime']; ?></span>
						<span style="width:36%;"><?php echo $v['endtime']; ?></span>
						<span style="width:28%;"><?php echo $v['length']; ?></span>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<script>

    var lang=<?php echo $lang_json; ?>;
    var language_type='<?php echo $language_type; ?>';

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
<script src="/static/js/function.js?t=123409504"></script>


	<script>
	$(function(){
		function getlistmore(){
			$.ajax({
				url:'/appapi/detail/receive_more',
				data:{'page':page,'uid':uid,'token':token,'language':language_type},
				type:'post',
				dataType:'json',
				success:function(data){
					if(data.nums>0){
							var nums=data.nums;
							var list=data.data;
							var html='';
							for(var i=0;i<nums;i++){
								html+='<li>\
										<span class="name">'+list[i]['giftinfo']['giftname']+'</span>\
										<span class="coin"><img src="/static/appapi/images/coin.png">'+list[i]['totalall']+'</span>\
										<span class="nums">'+list[i]['num']+'</span>\
										<span class="username">'+list[i]['userinfo']['user_nickname']+'</span>\
									</li>';
							}
						
						$(".receive .profit_ul ul").append(html);
					}
					
					if(data.isscroll==1){
						page++;
						isscroll=true;
					}
				}
			})
		}
		
		function getlivelistmore(){
			$.ajax({
				url:'/appapi/detail/liverecord_more',
				data:{'page':page,'uid':uid,'token':token,'language':language_type},
				type:'post',
				dataType:'json',
				success:function(data){
					if(data.nums>0){
							var nums=data.nums;
							var list=data.data;
							var html='';
							for(var i=0;i<nums;i++){
								html+='<li>\
										<span style="width:35%;">'+list[i]['starttime']+'</span>\
										<span style="width:35%;">'+list[i]['endtime']+'</span>\
										<span style="width:30%;">'+list[i]['length']+'</span>\
									</li>';
							}
						
						$(".liverecord .profit_ul ul").append(html);
					}
					
					if(data.isscroll==1){
						page++;
						isscroll2=true;
					}
				}
			})
		}
		
		$(".tab ul li").on("click",function(){
			$(this).siblings().removeClass("on");
			$(this).addClass("on");
			$(".tab_b").hide().eq($(this).index()).show();
		})
		var page=2; 
		var isscroll=true; 
		var isscroll2=true; 

		$(".receive .profit_ul").scroll(function(){  
				var srollPos = $(".receive .profit_ul").scrollTop();    //滚动条距顶部距离(页面超出窗口的高度)  		
				var totalheight = parseFloat($(".receive .profit_ul").height()) + parseFloat(srollPos);  
				if(($(document).height()-50) <= totalheight  && isscroll) {  
						isscroll=false;
						getlistmore()
				}  
		});  
		
		$(".liverecord .profit_ul").scroll(function(){  
				var srollPos = $(".liverecord .profit_ul").scrollTop();    //滚动条距顶部距离(页面超出窗口的高度)  		
				var totalheight = parseFloat($(".liverecord .profit_ul").height()) + parseFloat(srollPos);  
				if(($(document).height()-50) <= totalheight  && isscroll2) {  
						isscroll2=false;
						getlivelistmore()
				}  
		});  

	})
	</script>	
</body>
</html>