<?php /*a:3:{s:85:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/admin/liveban/index.html";i:1733460860;s:79:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/public/header.html";i:1733460547;s:79:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/public/active.html";i:1733460547;}*/ ?>
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
			<li class="active"><a >列表</a></li>
		</ul>
        <form class="well form-inline margin-top-20" name="form1" method="post" action="<?php echo url('Liveban/index'); ?>">
			提交时间：
			<input class="form-control js-bootstrap-date" name="start_time" id="start_time" value="<?php echo input('request.start_time'); ?>" aria-invalid="false" style="width: 110px;"> - 
            <input class="form-control js-bootstrap-date" name="end_time" id="end_time" value="<?php echo input('request.end_time'); ?>" aria-invalid="false" style="width: 110px;">
			关键字： 
            <input class="form-control" type="text" name="uid" style="width: 200px;" value="<?php echo input('request.uid'); ?>"
                   placeholder="请输入主播ID、靓号">
             
			<input type="submit" class="btn btn-primary" value="搜索"/>
		</form>			
		<form method="post" class="js-ajax-form" >

		
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>主播</th>						
						<th>超管</th>
						<th>封禁时长</th>
						<th>封禁时间</th>
						<th>到期时间</th>
						<th><?php echo lang('ACTIONS'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): if( count($lists)==0 ) : echo "" ;else: foreach($lists as $key=>$vo): ?>
						<tr>
	                        			<td><?php echo $vo['liveinfo']['user_nickname']; ?> (<?php echo $vo['liveinfo']['id']; ?>)</td>
	                        			<td><?php echo $vo['superinfo']['user_nickname']; ?> (<?php echo $vo['superinfo']['id']; ?>)</td>
	                        			<td><?php echo $vo['ban_time']; ?></td>
							<td><?php echo date('Y-m-d H:i:s',$vo['addtime']); ?></td>
							<td><?php if($vo['endtime'] > 0): ?><?php echo date('Y-m-d H:i:s',$vo['endtime']); else: ?>--<?php endif; ?></td>
							<td>	
	                            			<a class="btn btn-xs btn-danger js-ajax-delete" href="<?php echo url('Liveban/del',array('id'=>$vo['liveuid'])); ?>"><?php echo lang('DELETE'); ?></a>
							</td>
						</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
			<div class="pagination"><?php echo $page; ?></div>

		</form>
	</div>
	<script src="/static/js/admin.js"></script>
</body>
</html>