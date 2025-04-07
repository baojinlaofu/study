<?php /*a:3:{s:80:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/family/apply_wait.html";i:1733451417;s:67:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/head.html";i:1733451413;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/footer.html";i:1733451413;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    
    <meta charset="utf-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection" />
    <link href='/static/appapi/css/common.css?t=1576565546' rel="stylesheet" type="text/css" >

	<link type="text/css" rel="stylesheet" href="/static/appapi/css/family.css?t=1561712922"/>
    <title><?php echo lang("申请进度"); ?></title>
</head>
<body>
	<div class="apply_wait">
		<div class="speed">
			<div class="speed_thumb"><img src="/static/appapi/images/family/create_wait.png"></div>
			<div class="speed_title"><?php echo lang("等待审核中"); ?></div>
			<div class="speed_tips">
				<?php echo lang("如管理员在10个工作日内未接受审核"); ?>，<br><?php echo lang("视为不通过，可再次发起创建申请"); ?>
			</div>
			<div class="speed_tips2">
				<?php echo lang("在此期间您可以先浏览其他家族哦"); ?>
			</div>
		</div>
		<div class="line10" ></div>
		<form id="apply_form" class="apply_form" style="margin-bottom: 0;">
			<div class="term">
				<span class="form_span"><?php echo lang('家族名称'); ?></span>
				<input type="text"  id="name" name="name" class="form_input" readonly value="<?php echo $familyinfo['name']; ?>">
			</div>
			<!-- <div class="line" ></div> -->
			<div class="term">
				<span class="form_span"><?php echo lang("个人姓名"); ?></span>
				<input type="text"  id="fullname" name="fullname" class="form_input" readonly value="<?php echo $familyinfo['fullname']; ?>">
			</div>
			<!-- <div class="line" ></div> -->
			<div class="term">
				<span class="form_span"><?php echo lang("身份证号"); ?></span>
				<input type="text"  id="carded" name="carded" class="form_input" readonly value="<?php echo $familyinfo['carded']; ?>">
			</div>
			<!-- <div class="line" ></div> -->
			<div class="term">
				<span class="form_span"><?php echo lang("抽成比例"); ?></span>
				<input type="text"  id="divide_family" name="divide_family" class="form_input" readonly value="<?php echo $familyinfo['divide_family']; ?> %">
			</div>
			<!-- <div class="line" ></div> -->
			<div class="term">
				<span class="form_span sf2"><?php echo lang("家族简介"); ?></span>
				<textarea  type="text"  id="briefing" name="briefing" class="form_textarea" readonly><?php echo $familyinfo['briefing']; ?></textarea>
			</div>
		</form>
			<div class="line5"></div>
		<form class="apply_form">
			<div class="family_review_title"><?php echo lang("证件图片"); ?></div>
			<div class="term t">
				
				<img src="<?php echo $familyinfo['apply_pos']; ?>" class="fl img-sfz" data-index="ipt-file1" id="img_file1" >
				<img src="<?php echo $familyinfo['apply_side']; ?>" class="fl img-sfz" data-index="ipt-file2" id="img_file2" >
				<div class="cl"></div>
			</div>
			<div class="family_review_title"><?php echo lang("家族图片"); ?></div>
			<div class="term t">
				<img src="<?php echo $familyinfo['badge']; ?>" class="fl img-sfz" data-index="ipt-file3" id="img_file3" >
			</div>
		</form>
		<div class="bottombtn revoke button_default1">
			<?php echo lang("撤销申请"); ?>
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


	<script src="/static/appapi/js/family.js?t=1617935452"></script>
</body>
</html>