<?php /*a:3:{s:86:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/admin/turntable/edit.html";i:1733460876;s:79:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/public/header.html";i:1733460547;s:79:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/public/active.html";i:1733460547;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->


    <link href="/themes/admin_simpleboot3/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
    <link href="/themes/admin_simpleboot3/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
    <link href="/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        form .input-order {
            margin-bottom: 0px;
            padding: 0 2px;
            width: 42px;
            font-size: 12px;
        }

        form .input-order:focus {
            outline: none;
        }

        .table-actions {
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 0px;
        }

        .table-list {
            margin-bottom: 0px;
        }

        .form-required {
            color: red;
        }
    </style>
    <?php 
        $cmf_version=cmf_version();
        if (strpos(cmf_version(), '6.') === 0) {
            $_app=app()->http->getName();
        }else{
            $_app=request()->module();
        }
     ?>

    <script type="text/javascript">
        //全局变量
        var GV = {
            ROOT: "/",
            WEB_ROOT: "/",
            JS_ROOT: "static/js/",
            APP: '<?php echo $_app; ?>'/*当前应用名*/
        };
    </script>
    <script src="/themes/admin_simpleboot3/public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/static/js/wind.js"></script>
    <script src="/themes/admin_simpleboot3/public/assets/js/bootstrap.min.js"></script>
    <script>
        Wind.css('artDialog');
        Wind.css('layer');
        $(function () {
            console.log("弹窗信息");
            $("[data-toggle='tooltip']").tooltip({
                container: 'body',
                html: true,
            });
            $("li.dropdown").hover(function () {
                $(this).addClass("open");
            }, function () {
                $(this).removeClass("open");
            });

        });
    </script>
    <!-- 页面中间双十一弹窗 -->
<style type="text/css">
    .active_alert{
        width: 600px;
        position: fixed; 
        left: 27%;
        top:30%;
        z-index: 99999;
        display: none;
    }

    .active_alert .active_alert_img{
        width: 100%;
        height: auto;
    }

    .active_alert .active_alert_close{
        width: 35px;
        height: 35px;
        position: absolute;
        right: 0;
        top: -30px;
        cursor: pointer;
    }

</style>
<div class="active_alert">
    <img class="active_alert_close" src="/static/images/close.png">
    <img class="active_alert_img" src="/upload/active_alert.png">
</div>

<!-- 页面中间双十一弹窗 -->


<!-- <script type="text/javascript">
    $(function(){
        
        //页面中间双十一弹窗显示
        setTimeout(function(){
            $(".active_alert").show();
        },3000);

        //页面中间双十一弹窗关闭
        $(".active_alert_close").on('click',function(){
            $(".active_alert").hide();
        });
    });
</script> -->
    <?php if(APP_DEBUG): ?>
        <style>
            #think_page_trace_open {
                z-index: 9999;
            }
        </style>
    <?php endif; ?>

</head>
<body>
	<div class="wrap">
		<ul class="nav nav-tabs">
			<li ><a href="<?php echo url('turntable/index'); ?>">大转盘奖品列表</a></li>
			<li class="active"><a ><?php echo lang('EDIT'); ?></a></li>
		</ul>
		<form method="post" class="form-horizontal js-ajax-form margin-top-20" action="<?php echo url('turntable/editPost'); ?>">
            <div class="form-group">
				<label for="input-name" class="col-sm-2 control-label"><span class="form-required">*</span>类型</label>
				<div class="col-md-6 col-sm-10">
					<select class="form-control" name="type" id="type">
                        <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $key; ?>" <?php if($data['type'] == $key): ?>selected<?php endif; ?>><?php echo $v; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
				</div>
			</div>
            
            <div class="form-group" id="coin" <?php if($data['type'] != 1): ?>style="display:none"<?php endif; ?>>
				<label for="input-coin" class="col-sm-2 control-label"><span class="form-required">*</span>钻石数</label>
				<div class="col-md-6 col-sm-10">
					<input type="text" class="form-control" id="input-coin" name="coin" value="<?php echo $data['type_val']; ?>">整数
				</div>
			</div>
            
            <div id="offline" <?php if($data['type'] != 3): ?>style="display:none"<?php endif; ?>>
                <div class="form-group">
    				<label for="input-name" class="col-sm-2 control-label"><span class="form-required">*</span>线下奖品中文名称</label>
    				<div class="col-md-6 col-sm-10">
    					<input type="text" class="form-control" id="input-name" name="name" value="<?php echo $data['type_val']; ?>">
    				</div>
    			</div>

                <div class="form-group">
                    <label for="input-name" class="col-sm-2 control-label"><span class="form-required">*</span>线下奖品英文名称</label>
                    <div class="col-md-6 col-sm-10">
                        <input type="text" class="form-control" id="input-name_en" name="name_en" value="<?php echo $data['type_val_en']; ?>">
                    </div>
                </div>
            
                <div class="form-group">
    				<label for="input-user_login" class="col-sm-2 control-label"><span class="form-required">*</span>奖品图片</label>
    				<div class="col-md-6 col-sm-10">
    					<input type="hidden" name="thumb" id="thumbnail" value="<?php echo $data['thumb']; ?>">
                        <a href="javascript:uploadOneImage('图片上传','#thumbnail');">
                            <?php if(empty($data['thumb'])): ?>
                            <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                     id="thumbnail-preview"
                                     style="cursor: pointer;max-width:100px;max-height:100px;"/>
                            <?php else: ?>
                            <img src="<?php echo get_upload_path($data['thumb']); ?>"
                                 id="thumbnail-preview"
                                 style="cursor: pointer;max-width:100px;max-height:100px;"/>
                            <?php endif; ?>
                        </a>
                        <input type="button" class="btn btn-sm btn-cancel-thumbnail" value="取消图片"> 建议尺寸：100X100
    				</div>
    			</div>
            </div>
            
            <div class="form-group" id="gift" <?php if($data['type'] != 2): ?>style="display:none"<?php endif; ?>>
				<label for="input-name" class="col-sm-2 control-label"><span class="form-required">*</span>礼物</label>
				<div class="col-md-6 col-sm-10">
					<select class="form-control" name="giftid" id="giftid">
                        <?php if(is_array($gift) || $gift instanceof \think\Collection || $gift instanceof \think\Paginator): $i = 0; $__LIST__ = $gift;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $v['id']; ?>" <?php if($data['type_val'] == $v['id']): ?>selected<?php endif; ?>><?php echo $v['giftname']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
				</div>
			</div>
            
            <div class="form-group" id="rate" <?php if($data['type'] == 0): ?>style="display:none"<?php endif; ?>>
				<label for="input-rate" class="col-sm-2 control-label"><span class="form-required">*</span>中奖比例</label>
				<div class="col-md-6 col-sm-10">
					<input type="text" class="form-control" id="input-rate" name="rate" value="<?php echo $data['rate']; ?>">% 范围：0.001% - 100% 
				</div>
			</div>
            
            <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                    <input type="hidden" name="thumb_old" value="<?php echo $data['thumb']; ?>" />
					<button type="submit" class="btn btn-primary js-ajax-submit"><?php echo lang('EDIT'); ?></button>
					<a class="btn btn-default" href="javascript:history.back(-1);"><?php echo lang('BACK'); ?></a>
				</div>
			</div>

		</form>
	</div>
	<script src="/static/js/admin.js"></script>
    <script type="text/javascript">
        (function(){
            $('.btn-cancel-thumbnail').click(function () {
                $('#thumbnail-preview').attr('src', '/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');
                $('#thumbnail').val('');
            });
            
            $("#type").change(function(){
                var type=$(this).val();
                if(type==0){
                    $("#coin").hide();
                    $("#gift").hide();
                    $("#offline").hide();
                    $("#rate").hide();
                }
                
                if(type==1){
                    $("#coin").show();
                    $("#gift").hide();
                    $("#offline").hide();
                    $("#rate").show();
                }
                
                if(type==2){
                    $("#coin").hide();
                    $("#gift").show();
                    $("#offline").hide();
                    $("#rate").show();
                }
                
                if(type==3){
                    $("#coin").hide();
                    $("#gift").hide();
                    $("#offline").show();
                    $("#rate").show();
                }
                
            })
        })()

    </script>
</body>
</html>