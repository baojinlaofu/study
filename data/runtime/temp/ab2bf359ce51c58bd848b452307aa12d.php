<?php /*a:3:{s:78:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/equipment/index.html";i:1733451416;s:67:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/head.html";i:1733451413;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/footer.html";i:1733451413;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		
    <meta charset="utf-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection" />
    <link href='/static/appapi/css/common.css?t=1576565546' rel="stylesheet" type="text/css" >

		<title><?php echo lang('装备中心'); ?></title>
		<link href='/static/appapi/css/mall.css?t=1561967793' rel="stylesheet" type="text/css" >
		<link href='/static/appapi/css/equipment.css?t=1561975646' rel="stylesheet" type="text/css" >
	</head>
<body>
    <div class="tab clearfix">
        <ul>
            <li class="on">
                <?php echo lang('靓号'); ?>
                <div class="tab_line button_default"></div>
            </li>
            <li>
                <?php echo lang('坐骑'); ?>
                <div class="tab_line button_default"></div>
            </li>
        </ul>
    </div>
    <div class="tab_bd liang">
        <div class="bd_content clearfix">
            <ul>
                <?php if(is_array($liang_list) || $liang_list instanceof \think\Collection || $liang_list instanceof \think\Paginator): $i = 0; $__LIST__ = $liang_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <li>
                    <div class="liang_id">ID:<?php echo $v['name']; ?></div>
                    <div class="liang_coin"></div>
                    <div class="liang_buy" data-id="<?php echo $v['id']; ?>"  data-state="<?php echo $v['state']; ?>" >
                        <?php if($v['state'] == '1'): ?>
                            <?php echo lang('卸载'); else: ?>
                            <?php echo lang('使用'); ?>
                        <?php endif; ?>
                    </div>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; if(empty($liang_list) || (($liang_list instanceof \think\Collection || $liang_list instanceof \think\Paginator ) && $liang_list->isEmpty())): ?>
                    <div class="li_empty">
                        <p class="title"><?php echo lang('您还没有靓号哦'); ?></p>
                        <p class="des"><?php echo lang('赶快去道具挑选一个吧'); ?></p>
                    </div>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="tab_bd car hide">
        <div class="bd_content clearfix">
            <ul>
                <?php if(is_array($user_carlist) || $user_carlist instanceof \think\Collection || $user_carlist instanceof \think\Paginator): $i = 0; $__LIST__ = $user_carlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <li>
                    <div class="car_img">
                        <img src="<?php echo $v['carinfo']['thumb']; ?>">
                    </div>
                    <div class="car_title">
                        <?php echo $v['carinfo']['name']; ?>
                    </div>
                    <div class="car_coin">
                        <?php echo lang('到期时间'); ?><br>
                        <?php echo $v['endtime_date']; ?>
                    </div>
                    <div class="car_buy" data-id="<?php echo $v['carid']; ?>" data-status="<?php echo $v['status']; ?>" >
                        <?php if($v['status'] == '1'): ?>
                            <?php echo lang('卸载'); else: ?>
                            <?php echo lang('使用'); ?>
                        <?php endif; ?>
                    </div>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; if(empty($user_carlist) || (($user_carlist instanceof \think\Collection || $user_carlist instanceof \think\Paginator ) && $user_carlist->isEmpty())): ?>
                    <div class="li_empty">
                        <p class="title"><?php echo lang('您还没有坐骑哦'); ?></p>
                        <p class="des"><?php echo lang('赶快去道具挑选一个吧'); ?></p>
                    </div>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</body>
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


<script src="/static/appapi/js/equipment.js"></script>
</body>
</html>