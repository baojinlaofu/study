<?php /*a:3:{s:74:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/level/index.html";i:1733451418;s:67:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/head.html";i:1733451413;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/footer.html";i:1733451413;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		
    <meta charset="utf-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection" />
    <link href='/static/appapi/css/common.css?t=1576565546' rel="stylesheet" type="text/css" >

		<title><?php echo lang('我的等级'); ?></title>
		<link href='/static/appapi/css/level.css?t=1589966626' rel="stylesheet" type="text/css" >
		<style type="text/css">
			.bg_default1{
				background: #FFF;
			}
		</style>
	</head>
<body >

	<div class="main">
        <div class="tab clearfix">
            <ul>
                <li class="on">
                    <?php echo lang('用户等级'); ?>
                    <div class="tab_line bg_default1"></div>
                </li>
                <li>
                    <?php echo lang('主播等级'); ?>
                    <div class="tab_line bg_default1"></div>
                </li>
            </ul>
        </div>
		<div class="top-body ">
			<div class="level">
				<div class="speed">
					<div class="info">
						<div class="name">
                            <img src="<?php echo $userinfo['avatar']; ?>">
                        </div>
                        <div class="avatar_bg"></div>
						<div class="tip">Lv.<?php echo $levelinfo['levelid']; ?></div>
					</div>
					<div class="level_val">
						<?php echo lang('经验值'); ?>:<span id="total" style="margin-right: 10px;"><?php echo $userinfo['consumption']; ?></span>
						<?php if($type == '1'): ?>
							<?php echo lang('距离升级'); ?>:<span id="next_diff"><?php echo $cha; ?></span>
						<?php else: ?>
							<?php echo lang('你已经达到最高级别'); ?>
						<?php endif; ?>
					</div>
                    <div class="level_jindu">
                        <div class="level_jindu_l">
                            Lv.<?php echo $levelinfo['levelid']; ?>
                        </div>
                        <div class="jindu">
                            <div class="levelnp">
                                <div class="leveln n2 bg_default1" id="progress" style="width:<?php echo $baifen; ?>%; border-radius: 4px;"></div>
                            </div>
                        </div>
                        <div class="level_jindu_r">
                            <?php if($type == '1'): ?>
                                Lv.<?php echo $levelinfo['levelid']+1; else: ?>
                                Lv.Max
                            <?php endif; ?>
                        </div>
                    </div>
					
				</div>
			</div>
			<div class="privilege clearfix">
				<div class="title">
					<img src="/static/appapi/images/level/level_title_left.png" />
					<?php echo lang('等级特权'); ?>
					<img src="/static/appapi/images/level/level_title_right.png" />
				</div>
				<ul>
					<li>
                        <img src="/static/appapi/images/level/v_level_id.png">
                        <div class="privilege_t"><?php echo lang('排名靠前'); ?></div>
                    </li>
					<li>
                        <img src="/static/appapi/images/level/v_level_id2.png">
                        <div class="privilege_t"><?php echo lang('等级勋章'); ?></div>
                    </li>
				</ul>
			</div>
			<div class="privilege clearfix" style="margin-top: 0.2rem;">
				<div class="title">
					<img src="/static/appapi/images/level/level_title_left.png" />
					<?php echo lang('如何升级'); ?>
					<img src="/static/appapi/images/level/level_title_right.png" />
				</div>
				<ul>
					<li>
                        <img src="/static/appapi/images/level/send_gift.png">
                        <div class="privilege_t"><?php echo lang("送礼"); ?></div>
                    </li>
					<li>
                        <img src="/static/appapi/images/level/shop_consumption.png">
                        <div class="privilege_t"><?php echo lang("道具消费"); ?></div>
                    </li>
				</ul>
			</div>
            <div class="line10"></div>
			<div class="tips">
				<a href="/appapi/level/level"><?php echo lang("用户等级说明"); ?></a>
			</div>
		
		</div>
		
		<div class="top-body hide">
			<div class="level level_a">
				<div class="speed">
                    <div class="info">
						<div class="name">
                            <img src="<?php echo $userinfo['avatar']; ?>">
                        </div>
                        <div class="avatar_bg"></div>
						<div class="tip">Lv.<?php echo $levelinfo_a['levelid']; ?></div>
					</div>
					<div class="level_val">
						<?php echo lang("经验值"); ?>:<span id="total" style="margin-right: 10px;"><?php echo $userinfo['votestotal']; ?></span>
						<?php if($type_a == '1'): ?>
							<?php echo lang("距离升级"); ?>:<span id="next_diff"><?php echo $cha_a; ?></span>
						<?php else: ?>
							<?php echo lang("你已经达到最高级别"); ?>
						<?php endif; ?>
					</div>
                    <div class="level_jindu">
                        <div class="level_jindu_l">
                            Lv.<?php echo $levelinfo_a['levelid']; ?>
                        </div>
                        <div class="jindu">
                            <div class="levelnp">
                                <div class="leveln n2 bg_default1" id="progress" style="width:<?php echo $baifen_a; ?>%; border-radius: 4px;"></div>
                            </div>
                        </div>
                        <div class="level_jindu_r">
                            <?php if($type_a == '1'): ?>
                                Lv.<?php echo $levelinfo_a['levelid']+1; else: ?>
                                Lv.Max
                            <?php endif; ?>
                        </div>
                    </div>

				</div>
			</div>
			<div class="privilege clearfix">
				<div class="title">
					<img src="/static/appapi/images/level/level_title_left.png" />
					<?php echo lang('等级特权'); ?>
					<img src="/static/appapi/images/level/level_title_right.png" />
				</div>
				<ul>
					<li>
                        <img src="/static/appapi/images/level/m_level_id.png">
                        <div class="privilege_t"><?php echo lang('等级标识'); ?></div>
                    </li>
					<li>
                        <img src="/static/appapi/images/level/m_level_id2.png">
                        <div class="privilege_t"><?php echo lang('身份标识'); ?></div>
                    </li>
				</ul>
			</div>
			<div class="privilege clearfix" style="margin-top: 0.2rem;">
				<div class="title">
					<img src="/static/appapi/images/level/level_title_left.png" />
					<?php echo lang('如何升级'); ?>
					<img src="/static/appapi/images/level/level_title_right.png" />
				</div>
				<ul>
					<li>
                        <img src="/static/appapi/images/level/a_send_gift.png">
                        <div class="privilege_t"><?php echo lang("收礼"); ?></div>
                    </li>
					<li>
                        <img src="/static/appapi/images/level/shop_consumption.png">
                        <div class="privilege_t"><?php echo lang("计费房间"); ?></div>
                    </li>
				</ul>
			</div>	
            <div class="line10"></div>
			<div class="tips">
				<a href="/appapi/level/level_a"><?php echo lang("主播等级说明"); ?></a>
			</div>
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
	(function(){
		$(".tab ul li").on("click",function(){
			$(this).siblings().removeClass("on");
			$(this).addClass("on");
			$(".top-body").hide().eq($(this).index()).show();
		})
	})()
</script>
</body>
</html>