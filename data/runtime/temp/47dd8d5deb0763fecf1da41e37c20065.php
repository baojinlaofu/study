<?php /*a:3:{s:72:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/game/xqtb.html";i:1733451418;s:67:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/head.html";i:1733451413;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/footer.html";i:1733451413;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    
    <meta charset="utf-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection" />
    <link href='/static/appapi/css/common.css?t=1576565546' rel="stylesheet" type="text/css" >

    <title><?php echo lang('星球探宝规则'); ?></title>
	<link type="text/css" rel="stylesheet" href="/static/appapi/css/game.css?t=10"/> 
    
</head>
<body class="xqtb">
    <div class="content">
    	<p class="top_img">
    		<img src="/static/appapi/images/game/<?php echo lang('title'); ?>.png">
    	</p>
    	<div class="list_area">
    		<div class="list_title">
    			<p><?php echo lang('中奖概率及规则'); ?></p>
    			<ul>
    				<li>1.<?php echo lang('使用锤子对星球进行探索。'); ?></li>
    				<li>2.<?php echo lang('星球探索后，将会获得各种礼物，礼物将发放至背包。'); ?></li>
    				<li>3.<?php echo lang('不同的星球奖励/价格均不同，越高级的星球奖励越好喔！'); ?></li>
    			</ul>
    		</div>
    		<table class="list_con">
				
				<th><?php echo lang('奖品'); ?></th>
				<th><?php echo lang('价值'); ?>(<?php echo $name_coin; ?>)</th>
				<th><?php echo lang('概率'); ?></th>
				<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
					<tr>
						<td><?php echo $vo['gift_info']['giftname']; ?></td>
						<td class="coin"><?php echo $vo['total']; ?></td>
						<td><?php echo $vo['show_win_prob']; ?>%</td>
					</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
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


	<script type="text/javascript">
		$(function(){
			//var height = $(window).height();
			var height = window.screen.height;

			$(".xqtb").height(height);
			$(".content").height(height);
		});
	</script>
</body>
</html>