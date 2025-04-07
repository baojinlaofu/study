<?php /*a:3:{s:79:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/contribute/index.html";i:1733451415;s:67:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/head.html";i:1733451413;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/footer.html";i:1733451413;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
        
    <meta charset="utf-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection" />
    <link href='/static/appapi/css/common.css?t=1576565546' rel="stylesheet" type="text/css" >

		<title><?php echo lang('礼物贡献榜'); ?></title>
		<link href='/static/appapi/css/contribute.css?t=1576653393' rel="stylesheet" type="text/css" >
	</head>
	<body>
        <div class="tab clearfix">
            <ul>
                <li class="on"><?php echo lang('日榜'); ?><div class="tab_line bg_default"></div></li>
                <li><?php echo lang('周榜'); ?><div class="tab_line bg_default"></div></li>
                <li><?php echo lang('月榜'); ?><div class="tab_line bg_default"></div></li>
                <li class="tab_right"><?php echo lang('总榜'); ?><div class="tab_line bg_default"></div></li>
            </ul>
        </div>
		<div class="tab_bd">
            <div class="list_total">
                <?php echo $list_day_total; ?><?php echo $configpub['name_votes']; ?>
            </div>
			<ul class="list">
                 <?php if(!(empty($list_day) || (($list_day instanceof \think\Collection || $list_day instanceof \think\Paginator ) && $list_day->isEmpty()))): ?>
                <div class="order_bg">
					<li class="order order2">
                        <?php if(isset($list_day[1])): ?>
                        <div class="avatar_p">
                            <div class="avatar">
                                <img src="<?php echo $list_day[1]['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
                                <span></span>
                            </div>
                        </div>
						<div class="info">
							<div class="name">
								<p><?php echo $list_day[1]['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($list_day[1]['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$list_day[1]['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $list_day[1]['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
                        <?php endif; ?>
					</li>	
                    <li class="order order1">
                        <?php if(isset($list_day[0])): ?>
                        <div class="avatar_p">
                            <div class="avatar">
                                <img src="<?php echo $list_day[0]['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
                                <span></span>
                            </div>
                        </div>
						<div class="info">
							<div class="name">
								<p><?php echo $list_day[0]['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($list_day[0]['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$list_day[0]['userinfo']['level']]['thumb']; ?>" class="level"> 
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $list_day[0]['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
                        <?php endif; ?>
					</li>	
                    <li class="order order3">
                        <?php if(isset($list_day[2])): ?>
                        <div class="avatar_p">
                            <div class="avatar">
                                <img src="<?php echo $list_day[2]['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
                                <span></span>
                            </div>
                        </div>
						
						<div class="info">
							<div class="name">
								<p><?php echo $list_day[2]['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($list_day[2]['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$list_day[2]['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $list_day[2]['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
                        <?php endif; ?>
					</li>	
                </div>
                   
                    <div class="line clearfix"></div>
                <?php endif; if(is_array($list_day) || $list_day instanceof \think\Collection || $list_day instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($list_day) ? array_slice($list_day,3,null, true) : $list_day->slice(3,null, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<li>
						<div class="nums">
							<?php echo $i+3; ?>
						</div>
						<div class="avatar">
							<img src="<?php echo $v['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
						</div>
						<div class="info">
							<div class="name">
								<p><?php echo $v['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($v['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$v['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $v['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
					</li>		
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
        
		<div class="tab_bd hide">
            <div class="list_total">
                <?php echo $list_week_total; ?><?php echo $configpub['name_votes']; ?>
            </div>
			<ul class="list">
                <?php if(!(empty($list_week) || (($list_week instanceof \think\Collection || $list_week instanceof \think\Paginator ) && $list_week->isEmpty()))): ?>
                <div class="order_bg">
					<li class="order order2">
                        <?php if(isset($list_week[1])): ?>
                        <div class="avatar_p">
                            <div class="avatar">
                                <img src="<?php echo $list_week[1]['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
                                <span></span>
                            </div>
                        </div>
						<div class="info">
							<div class="name">
								<p><?php echo $list_week[1]['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($list_week[1]['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$list_week[1]['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $list_week[1]['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
                        <?php endif; ?>
					</li>	
                    <li class="order order1">
                        <?php if(isset($list_week[0])): ?>
                        <div class="avatar_p">
                            <div class="avatar">
                                <img src="<?php echo $list_week[0]['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
                                <span></span>
                            </div>
                        </div>
						<div class="info">
							<div class="name">
								<p><?php echo $list_week[0]['userinfo']['user_nickname']; ?></p>
								<p>
                                    <img src="/static/appapi/images/<?php if($list_week[0]['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$list_week[0]['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $list_week[0]['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
                        <?php endif; ?>
					</li>	
                    <li class="order order3">
                        <?php if(isset($list_week[2])): ?>
                        <div class="avatar_p">
                            <div class="avatar">
                                <img src="<?php echo $list_week[2]['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
                                <span></span>
                            </div>
                        </div>
						
						<div class="info">
							<div class="name">
								<p><?php echo $list_week[2]['userinfo']['user_nickname']; ?><p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($list_week[2]['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$list_week[2]['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $list_week[2]['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
                        <?php endif; ?>
					</li>	
                </div>
                    
                    <div class="line clearfix"></div>
                <?php endif; if(is_array($list_week) || $list_week instanceof \think\Collection || $list_week instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($list_week) ? array_slice($list_week,3,null, true) : $list_week->slice(3,null, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<li>
						<div class="nums">
							<?php echo $i+3; ?>
						</div>
						<div class="avatar">
							<img src="<?php echo $v['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
						</div>
						<div class="info">
							<div class="name">
								<p><?php echo $v['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($v['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$v['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $v['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
					</li>		
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
        
		<div class="tab_bd hide">
            <div class="list_total">
                <?php echo $list_month_total; ?><?php echo $configpub['name_votes']; ?>
            </div>
			<ul class="list">
                <?php if(!(empty($list_month) || (($list_month instanceof \think\Collection || $list_month instanceof \think\Paginator ) && $list_month->isEmpty()))): ?>
                <div class="order_bg">
					<li class="order order2">
                        <?php if(isset($list_month[1])): ?>
                        <div class="avatar_p">
                            <div class="avatar">
                                <img src="<?php echo $list_month[1]['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
                                <span></span>
                            </div>
                        </div>
						<div class="info">
							<div class="name">
								<p><?php echo $list_month[1]['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($list_month[1]['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$list_month[1]['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $list_month[1]['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
                        <?php endif; ?>
					</li>	
                    <li class="order order1">
                        <?php if(isset($list_month[0])): ?>
                        <div class="avatar_p">
                            <div class="avatar">
                                <img src="<?php echo $list_month[0]['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
                                <span></span>
                            </div>
                        </div>
						<div class="info">
							<div class="name">
								<p><?php echo $list_month[0]['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($list_month[0]['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$list_month[0]['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $list_month[0]['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
                        <?php endif; ?>
					</li>	
                    <li class="order order3">
                        <?php if(isset($list_month[2])): ?>
                        <div class="avatar_p">
                            <div class="avatar">
                                <img src="<?php echo $list_month[2]['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
                                <span></span>
                            </div>
                        </div>
						
						<div class="info">
							<div class="name">
								<p><?php echo $list_month[2]['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($list_month[2]['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$list_month[2]['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $list_month[2]['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
                        <?php endif; ?>
					</li>	
                </div>
                    
                    <div class="line clearfix"></div>
                <?php endif; if(is_array($list_month) || $list_month instanceof \think\Collection || $list_month instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($list_month) ? array_slice($list_month,3,null, true) : $list_month->slice(3,null, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<li>
						<div class="nums">
							<?php echo $i+3; ?>
						</div>
						<div class="avatar">
							<img src="<?php echo $v['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
						</div>
						<div class="info">
							<div class="name">
								<p><?php echo $v['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($v['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$v['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $v['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
					</li>		
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
        
		<div class="tab_bd hide">
            <div class="list_total">
                <?php echo $list_all_total; ?><?php echo $configpub['name_votes']; ?>
            </div>
			<ul class="list">
                <?php if(!(empty($list_all) || (($list_all instanceof \think\Collection || $list_all instanceof \think\Paginator ) && $list_all->isEmpty()))): ?>
                <div class="order_bg">
					<li class="order order2">
                        <?php if(isset($list_all[1])): ?>
                        <div class="avatar_p">
                            <div class="avatar">
                                <img src="<?php echo $list_all[1]['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
                                <span></span>
                            </div>
                        </div>
						<div class="info">
							<div class="name">
								<p><?php echo $list_all[1]['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($list_all[1]['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$list_all[1]['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $list_all[1]['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
                        <?php endif; ?>
					</li>	
                    <li class="order order1">
                        <?php if(isset($list_all[0])): ?>
                        <div class="avatar_p">
                            <div class="avatar">
                                <img src="<?php echo $list_all[0]['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
                                <span></span>
                            </div>
                        </div>
						<div class="info">
							<div class="name">
								<p><?php echo $list_all[0]['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($list_all[0]['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$list_all[0]['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $list_all[0]['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
                        <?php endif; ?>
					</li>	
                    <li class="order order3">
                        <?php if(isset($list_all[2])): ?>
                        <div class="avatar_p">
                            <div class="avatar">
                                <img src="<?php echo $list_all[2]['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
                                <span></span>
                            </div>
                        </div>
						
						<div class="info">
							<div class="name">
								<p><?php echo $list_all[2]['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($list_all[2]['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$list_all[2]['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $list_all[2]['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
                        <?php endif; ?>
					</li>	
                </div>
                    
                    <div class="line clearfix"></div>
                <?php endif; if(is_array($list_all) || $list_all instanceof \think\Collection || $list_all instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($list_all) ? array_slice($list_all,3,null, true) : $list_all->slice(3,null, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<li>
						<div class="nums">
							<?php echo $i+3; ?>
						</div>
						<div class="avatar">
							<img src="<?php echo $v['userinfo']['avatar_thumb']; ?>" onerror="this.src='/static/images/headicon.png'">
						</div>
						<div class="info">
							<div class="name">
								<p><?php echo $v['userinfo']['user_nickname']; ?></p>
                                <p>
                                    <img src="/static/appapi/images/<?php if($v['userinfo']['sex'] == 1): ?>man<?php else: ?>woman<?php endif; ?>.png" class="sex"> 
                                    <img src="<?php echo $levellist[$v['userinfo']['level']]['thumb']; ?>" class="level">
                                </p>
							</div>
							<div class="contribute">
								<span class="contribute-nums"><?php echo $v['total']; ?></span><?php echo $configpub['name_votes']; ?>
							</div>
						</div>
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


    <script>
        (function(){
            $(".tab ul li").on("click",function(){
                $(this).siblings().removeClass("on");
                $(this).addClass("on");
                $(".tab_bd").hide().eq($(this).index()).show();
            })
        
        })()
    </script>
	</body>
</html>