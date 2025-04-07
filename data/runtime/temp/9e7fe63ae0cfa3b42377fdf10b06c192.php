<?php /*a:3:{s:75:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/family/index.html";i:1733451417;s:67:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/head.html";i:1733451413;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/footer.html";i:1733451413;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    
    <meta charset="utf-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection" />
    <link href='/static/appapi/css/common.css?t=1576565546' rel="stylesheet" type="text/css" >

	<link type="text/css" rel="stylesheet" href="/static/appapi/css/family.css?t=1561712924"/>
	<style type="text/css">
		.attended{
			background: url("/static/appapi/images/family/family_top_bg.jpg") no-repeat left top;
		}
		.user-list-fillet{
			background: #FFF;
		}
		.user-list{
			width: 100%;
			margin-top: -0.1rem;
			border-radius: 0;
		}
		.user-list ul li{
			padding: 15px 0 15px 75px;
			border-bottom: 0;
		}
		.user-list-fillet ul li .thumb{
			width: 60px;
			height: 60px;
			left: 5px;
		}
		.attended .user-list ul li .action{
			top: 34px;
		}
	</style>
    <title><?php echo lang("我的家族"); ?></title>
</head>
<body class="attended">
	<!-- <div class="search">
		<div class="search_input">
			<input id="key" placeholder="搜索签约家族ID/名称">
			<span class="search_clear"></span>
		</div>
		<div class="search_btn">
			搜索
		</div>
	</div> 
	<div class="line10"></div>
	-->
	<div class="<?php echo lang('attended_top'); ?>">
		
	</div>
	<div class="list_title">
		<?php echo lang("家族推荐"); ?>
		<div class="reload"></div>
	</div>
	<div class="user-list user-list-fillet">
		<ul>
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
			<li>
				<a href="/appapi/Family/detail?familyid=<?php echo $vo['id']; ?>&uid=<?php echo $uid; ?>&token=<?php echo $token; ?>&language=<?php echo $language_type; ?>">
					<div class="thumb">
						<img src="<?php echo $vo['badge']; ?>">
					</div>
					<div class="info">
						<p class="info-title"><?php echo $vo['name']; ?></p>
						<p class="info-des2 ellipsis"><?php echo $vo['briefing']; ?></p>
						<p class="info-des2"><span><?php echo lang("成员"); ?>：<?php echo $vo['count']; ?><?php echo lang("人"); ?></span><span>ID：<?php echo $vo['id']; ?></span></p>
					</div>
					<div class="action">
						<span class="ok" data-familyid="<?php echo $vo['id']; ?>"><?php echo lang("加入"); ?></span>
					</div>
				</a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
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


	<script src="/static/appapi/js/family.js?t=1617867680"></script>
	<script type="text/javascript">

		var page=2; 
        var isscroll=true; 

        function getlistmore(){
			$.ajax({
				url:'/appapi/Family/indexmore',
				data:{'page':page,'uid':uid,'token':token,'language':language_type},
				type:'get',
				dataType:'json',
				success:function(data){
					if(data.nums>0){
                        var nums=data.nums;
                        var list=data.data;
                        var html='';
                        for(var i=0;i<nums;i++){
                            var v=list[i];
                            html+='<li>\
								<a href="/appapi/Family/detail?familyid='+v.id+'&uid='+uid+'&token='+token+'&language='+language_type+'">\
									<div class="thumb">\
										<img src="'+v.badge+'">\
									</div>\
									<div class="info">\
										<p class="info-title">'+v.name+'</p>\
										<p class="info-des2 ellipsis">'+v.briefing+'</p>\
										<p class="info-des2"><span>'+LangT('成员')+'：'+v.count+LangT('人')+'</span><span>ID：'+v.uid+'</span></p>\
									</div>\
									<div class="action">\
										<span class="ok" data-familyid="'+v.id+'">'+LangT('加入')+'</span>\
									</div>\
								</a>\
							</li>';
                        }
						
						$(".user-list ul").append(html);
					}
					
					if(data.isscroll==1){
						page++;
						isscroll=true;
					}
				}
			})
		}

		$(function(){
	        
	        var scroll_list=$(".user-list");

			$(window).scroll(function(){
	            var srollPos = $(document).scrollTop();    //滚动条距顶部距离(页面超出窗口的高度)

	            var totalheight = parseFloat($(window).height()) + parseFloat(srollPos);

	            if((scroll_list.height()-totalheight) <=50 && isscroll){
	                isscroll=false;
	                getlistmore()
	            }

	            
			});

	        


		})
	</script>	
</body>
</html>