<?php /*a:3:{s:82:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/admin/gift/index.html";i:1733460854;s:79:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/public/header.html";i:1733460547;s:79:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/public/active.html";i:1733460547;}*/ ?>
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
			<li class="active"><a>礼物列表</a></li>
            <li><a href="<?php echo url('Gift/add'); ?>"><?php echo lang('ADD'); ?>礼物</a></li>
		</ul>
		<form method="post" class="js-ajax-form" action="<?php echo url('Gift/listOrder'); ?>">
			<div class="table-actions">
                <button class="btn btn-primary btn-sm js-ajax-submit" type="submit"><?php echo lang('SORT'); ?></button>
            </div>
		
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
					  	<th>排序</th>
						<th>ID</th>
						<th>类型</th>
						<th>标识</th>
						<th>中文名称</th>
						<th>英文名称</th>
						<th>所需点数</th>
						<th>图片</th>
						<th>动画类型</th>
						<th>动画</th>
						<th>动画时长</th>
						<th>发布时间</th>
						<th align="center"><?php echo lang('ACTIONS'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): if( count($lists)==0 ) : echo "" ;else: foreach($lists as $key=>$vo): ?>
					<tr>
					   <td><input name="list_orders[<?php echo $vo['id']; ?>]" class="input-order" type="text" value="<?php echo $vo['list_order']; ?>"></td>
						<td><?php echo $vo['id']; ?></td>
						<td><?php echo $type[$vo['type']]; ?></td>
						<td><?php echo $mark[$vo['mark']]; ?></td>
						<td><?php echo $vo['giftname']; ?></td>
						<td><?php echo $vo['giftname_en']; ?></td>
						<td><?php echo $vo['needcoin']; ?></td>
						<td><img width="25" height="25" class="imgtip" src="<?php echo $vo['gifticon']; ?>" /></td>
						<td><?php if($vo['type'] == 1): ?><?php echo $swftype[$vo['swftype']]; ?><?php endif; ?></td>
						<td><?php if($vo['swf']): if($vo['swftype'] == 1): ?>
                                    <?php echo $vo['swf']; else: ?>
                                    <img width="100" height="100" src="<?php echo $vo['swf']; ?>" />
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>
                        <td><?php echo $vo['swftime']; ?></td>
						<td><?php echo date('Y-m-d H:i',$vo['addtime']); ?></td>
						<td>
                            
                            <?php if($vo['type'] == 1): if($vo['isplatgift'] == 1): ?>
                                <a class="btn btn-xs btn-warning js-ajax-dialog-btn" href="<?php echo url('Gift/plat',array('id'=>$vo['id'],'isplatgift'=>0)); ?>" >取消全站飘屏</a>
                                <?php else: ?>
                                <a class="btn btn-xs btn-warning js-ajax-dialog-btn" href="<?php echo url('Gift/plat',array('id'=>$vo['id'],'isplatgift'=>1)); ?>" >设置全站飘屏</a>
                                <?php endif; ?>
                            <?php endif; if($vo['type'] == 0 && $vo['mark'] == 3): ?>
                            <a class="btn btn-xs btn-info" href='<?php echo url("Luckrate/index",array("giftid"=>$vo["id"])); ?>'>中奖设置</a>
                            <a class="btn btn-xs btn-info" href='<?php echo url("Jackpotrate/index",array("giftid"=>$vo["id"])); ?>'>奖池设置</a>
                             <?php endif; ?>
                            <a class="btn btn-xs btn-primary" href='<?php echo url("Gift/edit",array("id"=>$vo["id"])); ?>'><?php echo lang('EDIT'); ?></a>
							<a class="btn btn-xs btn-danger js-ajax-delete" href="<?php echo url('Gift/del',array('id'=>$vo['id'])); ?>"><?php echo lang('DELETE'); ?></a>
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