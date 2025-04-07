<?php /*a:3:{s:87:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/admin/monitor/swindex.html";i:1733460863;s:79:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/public/header.html";i:1733460547;s:79:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/public/active.html";i:1733460547;}*/ ?>
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

<style type="text/css">
    .ban_area{
        padding: 10px 20px;
    }

    .ban_area p{
        padding-left: 10%;
        width: 50%;
        float: left;
    }

    .clearboth{
        clear: both;
    }

    .ban_btn_area{
        text-align: center;
    }

    .ban_btn_area input{
        margin-top: 15px;
        width: 40px;
        height: 25px;
    }
</style>
</head>
<body>
	<script src="/static/js/admin.js"></script>
	<script src="/static/home/js/socket.io.js"></script>
    <script src="/static/js/layer/layer.js"></script>
    
	<div class="wrap">
		<ul class="nav nav-tabs">
			<li class="active"><a >监控</a></li>
		</ul>
		<form method="post" class="js-ajax-form" >
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>主播ID</th>
                        <th>主播昵称</th>
                        <th>直播ID</th>
                        <th>开播时间</th>
                        <th>直播时长</th>
                        <th>直播类型</th>
                        <th>直播分类</th>
                        <th>房间类型</th>
                        <th>密码/价格</th>
                        <th>横竖屏</th>
                        <th>聊天室类型</th>
                        <th align="center"><?php echo lang('ACTIONS'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): if( count($lists)==0 ) : echo "" ;else: foreach($lists as $key=>$vo): ?>
                    <tr>
                        <td><?php echo $vo['uid']; ?></td>
                        <td><?php echo $vo['userinfo']['user_nickname']; ?> </td>
                        <td><?php echo $vo['showid']; ?></td>
                        <td><?php echo date('Y-m-d H:i',$vo['starttime']); ?></td>
                        <td><?php echo $vo['live_length']; ?></td>
                        <td><?php if($vo['live_type'] == 0): ?>视频直播<?php else: ?>聊天室<?php endif; ?></td>
                        <td><?php echo $vo['liveclassname']; ?></td>
                        <td><?php echo $type[$vo['type']]; ?></td>
                        <td><?php echo $vo['type_val']; ?></td>
                        <td><?php if($vo['anyway'] == 0): ?>竖屏<?php else: ?>横屏<?php endif; ?></td>
                        <td><?php if($vo['live_type'] == 0): ?>---<?php else: if($vo['voice_type'] == 0): ?>语音<?php else: ?>视频<?php endif; ?><?php endif; ?></td>
                        <td>
                            <a class="btn btn-xs btn-info view" data-uid="<?php echo $vo['uid']; ?>" data-anyway="<?php echo $vo['anyway']; ?>" data-livetype="<?php echo $vo['live_type']; ?>">查看
                            <?php if($vo['live_type'] == 0): ?>视频直播<?php else: ?>聊天室<?php endif; ?>
                            </a>
                            <a onclick="closeRoom('<?php echo $vo['uid']; ?>')" class="btn btn-xs btn-warning">关闭</a>
                            <a onclick="warning('<?php echo $vo['uid'];?>')" class="btn btn-xs btn-warning">警告</a>
                            <a onclick="banRoom('<?php echo $vo['uid'];?>')" class="btn btn-xs btn-warning">封禁</a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>

		</form>
        <div style="clear:both;"></div>
        <div class="pagination"  style="clear:both"><?php echo $page; ?></div>
	</div>

    <script type="text/javascript">
        var socket = new io("<?php echo $config['chatserver']; ?>");

        function closeRoom(roomId){
            var data2 = {"token":"1234567","roomnum":roomId};
            $.ajax({
                async: false,
                url: '/admin/Monitor/stopRoom',
                data:{uid:roomId},
                dataType: "json",
                success: function(data){
                    console.log(data);
                    if(data.status ==0){
                        alert(data.info);
                    }else{
                        socket.emit("superadminaction",data2);
                        alert("房间已关闭");
                        location.reload();
                    }
                },
                error:function(XMLHttpRequest, textStatus, errorThrown){
                    alert('关闭失败，请重试');
                }
            });
        }

        function warning(roomId){
            var data2 = {"token":"1234567","roomnum":roomId};
            socket.emit("warning",data2);
            layer.msg('直播间'+roomId+'警告成功');
        }

        var ban_length='30min';

        function banRoom(roomId){

            layer.open({
              type: 1,
              title:'房间'+roomId+'封禁时间',
              skin: 'layui-layer-rim', //加上边框
              area: ['420px', '280px'], //宽高
              content: '<div class="ban_area">\
                            <p><label><input name="length" type="radio" checked="true" value="30min" onclick="changeBanLength(\'30min\')"/> 30分钟</label></p>\
                            <p><label><input name="length" type="radio" value="1day" onclick="changeBanLength(\'1day\')"/> 1天</label></p>\
                            <p><label><input name="length" type="radio" value="7day" onclick="changeBanLength(\'7day\')"/> 7天</label></p>\
                            <p><label><input name="length" type="radio" value="15day onclick="changeBanLength(\'15day\')""/> 15天</label></p>\
                            <p><label><input name="length" type="radio" value="30day" onclick="changeBanLength(\'30day\')"/> 30天</label></p>\
                            <p><label><input name="length" type="radio" value="90day" onclick="changeBanLength(\'90day\')"/> 90天</label></p>\
                            <p><label><input name="length" type="radio" value="180day" onclick="changeBanLength(\'180day\')"/> 180天</label></p>\
                            <p><label><input name="length" type="radio" value="all" onclick="changeBanLength(\'all\')"/> 永久</label></p>\
                            <div class="clearboth"></div>\
                            <div class="ban_btn_area">\
                                <input type="button" onclick="banRoomSubmit('+roomId+')" value="封禁" />\
                            </div>\
                        </div>'
            });
        }

        function changeBanLength(val){
            ban_length=val;
            layer.msg(ban_length);
        }

        function banRoomSubmit(roomId){
            var data2 = {"token":"1234567","roomnum":roomId};
            //询问框
            layer.confirm('确定将该直播间封禁吗?', {
              btn: ['确定','取消'] //按钮
            }, function(){
               
              $.ajax({
                'type':'post',
                'url':'/admin/Monitor/banRoom',
                'data':{roomid:roomId,length:ban_length},
                'dataType':'json',
                'success':function(data){
                    var code=data.code;
                    var msg=data.msg;
                    if(code!=0){
                        layer.msg(msg);
                        return;
                    }

                    layer.msg(msg,{time:1000},function(){
                        layer.closeAll();
                        socket.emit("superadminaction",data2);
                        location.reload();
                    });
                    
                    return;
                },
                'error':function(e){
                    layer.msg('封禁失败,请重试');
                    reutrn;
                }
              });
            }, function(){
              layer.close(layer.index);
            });
        }

        $('.view').click(function(){
                var _this=$(this);
                var uid=_this.data('uid');
                var anyway=_this.data('anyway');
                var livetype=_this.data('livetype');
                var width='0px',height='0px';
                //竖
                if(anyway==0){
                    width='500px';
                    height='840px';
                }else{
                    width='700px';
                    height='550px';
                }

                var title;

                if(livetype==0){
                    title="查看视频直播";
                }else{
                    title="查看聊天室";
                }

                layer.open({
                    type: 2,
                    title: title,
                    shadeClose: false,
                    shade: 0.8,
                    area: [width, height],
                    content: '/admin/Monitor/play?uid='+uid
                }); 
                
            });
    </script>
</body>
</html>