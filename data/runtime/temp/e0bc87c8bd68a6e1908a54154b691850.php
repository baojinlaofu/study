<?php /*a:3:{s:74:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/level/level.html";i:1733451418;s:67:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/head.html";i:1733451413;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/footer.html";i:1733451413;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		
    <meta charset="utf-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection" />
    <link href='/static/appapi/css/common.css?t=1576565546' rel="stylesheet" type="text/css" >

		<title><?php echo lang('用户等级说明'); ?></title>
		<link href='/static/appapi/css/level.css?t=1540809470' rel="stylesheet" type="text/css" >
	</head>
<body >
    <div class="line10"></div>
	<div class="explain">
		<div class="list">
			<table>
				<tr>
					<th><?php echo lang('用户等级'); ?></th>
					<th><?php echo lang('经验值'); ?></th>
					<th><?php echo lang('等级标识'); ?></th>
				</tr>
				<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<tr>
					<td>V<?php echo $v['levelid']; ?></td>
					<td><?php echo $v['level_up']; ?></td>
					<td><img src="<?php echo $v['thumb']; ?>"></td>
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


</body>

</body>
</html>