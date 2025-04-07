<?php /*a:3:{s:73:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/mall/index.html";i:1733451419;s:67:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/head.html";i:1733451413;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/footer.html";i:1733451413;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		
    <meta charset="utf-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection" />
    <link href='/static/appapi/css/common.css?t=1576565546' rel="stylesheet" type="text/css" >

		<title><?php echo lang('道具'); ?></title>
		<link href='/static/appapi/css/mall.css?t=1576821469' rel="stylesheet" type="text/css" >
	</head>
<body>
    <div class="tab clearfix">
        <ul>
            <li class="on">
                <?php echo lang("会员"); ?>
                <div class="tab_line bg_default"></div>
            </li>
            <li>
                <?php echo lang("靓号"); ?>
                <div class="tab_line bg_default"></div>
            </li>
            <li>
                <?php echo lang("坐骑"); ?>
                <div class="tab_line bg_default"></div>
            </li>
        </ul>
    </div>
    <div class="tab_bd vip">
        <div class="bd_title">
            <span class="bd_title_line">——</span>
            <span class="bd_title_txt"><?php echo lang("VIP会员专属特权"); ?></span>
            <span class="bd_title_line">——</span>
        </div>
        <div class="bd_content clearfix">
            <ul>
                <li>
                    <div class="v_t"><?php echo lang("尊贵身份"); ?></div>
                    <div class="v_d"><?php echo lang("携带VIP标识登场"); ?></div>
                </li>
                <li>
                    <div class="v_t"><?php echo lang("炫酷标识"); ?></div>
                    <div class="v_d"><?php echo lang("用户聊天显示VIP图标"); ?></div>
                </li>
            </ul>
        </div>
        <div class="vip_button button_default">
            <?php echo $vip_txt; ?><?php echo lang('会员'); ?>
        </div>
        <div class="nonage_warning"><img src="/static/appapi/images/mall/warning.png"> <?php echo lang('未成年人禁止充值消费'); ?></div>
        <div class="vip_end <?php if(!$uservip['endtime']): ?>hide<?php endif; ?>">
            <?php echo lang('当前VIP到期时间'); ?>:<span id="vip_endtime"><?php echo $uservip['endtime']; ?></span>
        </div>
        
        <div class="vip_buy_body hide">
            <div class="vip_buy_list">
                <div class="vip_buy_list_t"><?php echo lang("开通账号"); ?></div>
                <div class="vip_buy_list_b"><?php echo $user['user_nickname']; ?> (<?php echo $user['id']; ?>)</div>
            </div>
            <div class="vip_buy_list hide">
                <div class="vip_buy_list_t"><?php echo lang("会员类型"); ?></div>
                <div class="vip_buy_list_b">
                    <ul>
                        <li class="on"><?php echo lang("VIP会员"); ?></li>
                    </ul>
                </div>
            </div>
            <div class="vip_buy_list">
                <div class="vip_buy_list_t vip_length_t" style="width:3.5rem;"><?php echo $vip_txt; ?><?php echo lang("时长"); ?></div>
                <div class="vip_buy_list_b vip_length">
                    <ul>
                        <?php if(is_array($vip_list) || $vip_list instanceof \think\Collection || $vip_list instanceof \think\Paginator): $i = 0; $__LIST__ = $vip_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <li <?php if($i == '1'): ?>class="on"<?php endif; ?> data-id="<?php echo $v['id']; ?>" data-coin="<?php echo $v['coin']; ?>" data-score="<?php echo $v['score']; ?>" data-length="<?php echo $long[$v['length']]; ?>">
                            <?php echo $long[$v['length']]; ?>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="vip_buy_list">
                <div class="vip_buy_list_t"><?php echo lang("开通花费"); ?></div>
                <div class="vip_buy_list_b">
                    <!-- <img src="/static/appapi/images/coin.png" class="coin"> -->
                    <span id="vip_total_coin"><?php echo $vip_list[0]['coin']; ?><?php echo $configpub['name_coin']; ?>/<?php echo $vip_list[0]['score']; ?><?php echo $configpub['name_score']; ?></span>
                </div>
            </div>
            
            <div class="vip_buy_list vip_user">
                <div class="vip_buy_list_t"><?php echo lang("我的钱包"); ?></div>
                <div class="vip_buy_list_b">
                    <!-- <img src="/static/appapi/images/coin.png" class="coin"> -->
                    <span id="user_coin"><?php echo $user['coin']; ?><?php echo $configpub['name_coin']; ?>/<?php echo $user['score']; ?><?php echo $configpub['name_score']; ?></span>
                </div>
            </div>
            
            <div class="vip_buy_list vip_submit_bd">
                <div class="vip_submit_bd_b vip_submit_bd_l button_default" data-type='0'>
                    
                    <?php echo $configpub['name_coin']; if($language_type != 'zh-cn'): ?> <?php endif; ?><?php echo $vip_txt; ?>
                   
                </div>
                <div class="vip_submit_bd_b vip_submit_bd_r" data-type='1'>
                    <?php echo $configpub['name_score']; if($language_type != 'zh-cn'): ?> <?php endif; ?><?php echo lang("兑换"); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="tab_bd liang hide">
        <div class="bd_title">
            <span class="bd_title_line">——</span>
            <span class="bd_title_txt"><?php echo lang("发言时会携带尊贵靓号标识"); ?></span>
            <span class="bd_title_line">——</span>
        </div>
        <div class="bd_content clearfix liang_list">
            <ul>
                <?php if(is_array($liang_list) || $liang_list instanceof \think\Collection || $liang_list instanceof \think\Paginator): $i = 0; $__LIST__ = $liang_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <li>
                    <div class="liang_id">ID:<?php echo $v['name']; ?></div>
                    <div class="liang_coin"><?php echo $v['coin_date']; ?></div>
                    <div class="liang_coin"><?php echo $v['score_date']; ?></div>
                    <div class="liang_buy" data-id="<?php echo $v['id']; ?>" data-name="<?php echo $v['name']; ?>" data-coin="<?php echo $v['coin_date']; ?>" data-score="<?php echo $v['score_date']; ?>" >
                        <div class="liang_buy_b liang_buy_l" data-type='0'>
                            <?php echo $configpub['name_coin']; if($language_type != 'zh-cn'): ?> <?php endif; ?><?php echo lang("购买"); ?>
                        </div>
                        <div class="liang_buy_b liang_buy_r" data-type='1'>
                            <?php echo $configpub['name_score']; if($language_type != 'zh-cn'): ?> <?php endif; ?><?php echo lang("兑换"); ?>
                        </div>
                    </div>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <div class="tab_bd car hide">
        <div class="bd_content clearfix">
            <ul>
                <?php if(is_array($car_list) || $car_list instanceof \think\Collection || $car_list instanceof \think\Paginator): $i = 0; $__LIST__ = $car_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <li>
                    <div class="car_img">
                        <img src="<?php echo $v['thumb']; ?>">
                    </div>
                    <div class="car_title">
                        <?php echo $v['name']; ?>
                    </div>
                    <div class="car_coin">
                        <?php echo $v['needcoin']; ?><?php echo $configpub['name_coin']; ?>/<?php echo lang("月"); ?>
                    </div>
                    <div class="car_coin">
                        <?php echo $v['score']; ?><?php echo $configpub['name_score']; ?>/<?php echo lang("月"); ?>
                    </div>
                    <div class="car_buy" data-id="<?php echo $v['id']; ?>" data-name="<?php echo $v['name']; ?>" data-coin="<?php echo $v['needcoin']; ?>" data-score="<?php echo $v['score']; ?>">
                        <div class="car_buy_b car_buy_l" data-type='0'>
                            <?php echo $configpub['name_coin']; if($language_type != 'zh-cn'): ?> <?php endif; ?><?php echo lang("购买"); ?>
                        </div>
                        <div class="car_buy_b car_buy_r" data-type='1'>
                            <?php echo $configpub['name_score']; if($language_type != 'zh-cn'): ?> <?php endif; ?><?php echo lang("兑换"); ?>
                        </div>
                    </div>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
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


<script>
    var vip_txt='<?php echo $vip_txt; ?>';
    var name_coin='<?php echo $configpub['name_coin']; ?>';
    var name_score='<?php echo $configpub['name_score']; ?>';
</script>
<script src="/static/appapi/js/mall.js?t=1578620089"></script>
</body>
</html>