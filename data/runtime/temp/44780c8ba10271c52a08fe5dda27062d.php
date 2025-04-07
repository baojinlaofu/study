<?php /*a:3:{s:83:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/admin/liang/index.html";i:1733460859;s:79:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/public/header.html";i:1733460547;s:79:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/public/active.html";i:1733460547;}*/ ?>
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
			<li class="active"><a >靓号列表</a></li>
            <li><a href="<?php echo url('Liang/add'); ?>"><?php echo lang('ADD'); ?></a></li>
		</ul>
		<form class="well form-inline margin-top-20" method="post" action="<?php echo url('Liang/index'); ?>">
			状态： 
			<select class="form-control" name="status">
				<option value="">全部</option>
                <?php if(is_array($status) || $status instanceof \think\Collection || $status instanceof \think\Paginator): $i = 0; $__LIST__ = $status;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $key; ?>" <?php if(input('request.status') != '' && input('request.status') == $key): ?>selected<?php endif; ?>><?php echo $v; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>

			</select>
			位数：
			<select class="form-control" name="length">
				<option value="">全部</option>
                <?php if(is_array($length) || $length instanceof \think\Collection || $length instanceof \think\Paginator): $i = 0; $__LIST__ = $length;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $v['length']; ?>" <?php if(input('request.length') != '' && input('request.length') == $v['length']): ?>selected<?php endif; ?>><?php echo $v['length']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			会员： 
            <input class="form-control" type="text" name="uid" style="width: 200px;" value="<?php echo input('request.uid'); ?>"
                   placeholder="请输入会员ID">
			靓号：
            <input class="form-control" type="text" name="keyword" style="width: 200px;" value="<?php echo input('request.keyword'); ?>"
                   placeholder="请输入靓号">
			<input type="submit" class="btn btn-primary" value="搜索">
		</form>
        
		<form method="post" class="js-ajax-form" action="<?php echo url('Liang/listOrder'); ?>">
			<div class="table-actions">
                <button class="btn btn-primary btn-sm js-ajax-submit" type="submit"><?php echo lang('SORT'); ?></button>
            </div>
		
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>排序</th>
						<th>ID</th>
						<th>靓号</th>
						<th>所需<?php echo $configpub['name_coin']; ?></th>
						<th>所需<?php echo $configpub['name_score']; ?></th>
						<th>位数</th>
						<th>状态</th>
						<th>发布时间</th>
						<th>购买人</th>
						<th>购买时间</th>
						<th><?php echo lang('ACTIONS'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): if( count($lists)==0 ) : echo "" ;else: foreach($lists as $key=>$vo): ?>
					<tr>
                        <td><input name="list_orders[<?php echo $vo['id']; ?>]" class="input-order" type="text" value="<?php echo $vo['list_order']; ?>"></td>
						<td><?php echo $vo['id']; ?></td>
						<td><?php echo $vo['name']; ?></td>
						<td><?php echo $vo['coin']; ?></td>
						<td><?php echo $vo['score']; ?></td>
						<td><?php echo $vo['length']; ?></td>
						<td><?php echo $status[$vo['status']]; ?></td>
						<td><?php echo date('Y-m-d H:i:s',$vo['addtime']); ?></td>
						<?php if($vo['uid'] == '0'): ?>
							<td><?php echo $status[$vo['status']]; ?></td>
							<td><?php echo $status[$vo['status']]; ?></td>
						<?php else: ?>
							<td><?php echo $vo['userinfo']['user_nickname']; ?> (<?php echo $vo['uid']; ?>)</td>
							<td><?php echo date('Y-m-d H:i:s',$vo['buytime']); ?></td>
						<?php endif; ?>

						<td>
							<?php if($vo['status'] == '0'): ?>
                            <a class="btn btn-xs btn-info js-ajax-dialog-btn" href="<?php echo url('Liang/setstatus',array('id'=>$vo['id'],'status'=>'2')); ?>" >停售</a>
							<?php elseif($vo['status'] == '2'): ?>
                             <a class="btn btn-xs btn-info js-ajax-dialog-btn" href="<?php echo url('Liang/setstatus',array('id'=>$vo['id'],'status'=>'0')); ?>" >出售</a>
							<?php endif; if($vo['status'] != '1'): ?>
                            <a class="btn btn-xs btn-primary" href='<?php echo url("Liang/edit",array("id"=>$vo["id"])); ?>'><?php echo lang('EDIT'); ?></a>
							<a class="btn btn-xs btn-danger js-ajax-delete" href="<?php echo url('Liang/del',array('id'=>$vo['id'])); ?>"><?php echo lang('DELETE'); ?></a>
                            <?php endif; ?>
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