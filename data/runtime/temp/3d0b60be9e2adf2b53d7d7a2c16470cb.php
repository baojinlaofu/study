<?php /*a:3:{s:84:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/admin/monitor/play.html";i:1733460863;s:79:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/public/header.html";i:1733460547;s:79:"/www/wwwroot/xiangqu8.com/public/../themes/admin_simpleboot3/public/active.html";i:1733460547;}*/ ?>
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
    .woring{
        text-align: center;
        margin-top: 100px;
        font-weight: bold;
        color: red;
        font-size: 18px;
    }
</style>
</head>
<body>
    <form id="join-form" style="display:none;">
        <input id="appid" type="text" value="<?php echo $sw_appid; ?>" />
        <input id="token" type="text" value="<?php echo $sw_rtc_token; ?>" />
        <input id="channel" type="text" value="<?php echo $stream; ?>" />
        <input id="uid" type="text" value="<?php echo $current_uid; ?>" />
        <input id="linkmic_token" type="text" value="<?php echo $sw_rtc_linkmic_token; ?>" />
        <input id="linkmic_channel" type="text" value="<?php echo $linkmic_stream; ?>" />
    </form>
	<div class="wrap">
        <?php if($islive == 0): ?>
            <div class="woring">主播已关播</div>
        <?php else: ?>
        <div class="form-group">
            <div class="col-md-6 col-sm-10">
                <div id="area-video">
                <div class="playerzmblbkjP" id="playerzmblbkjP"></div>
                </div>
            </div>
        </div>
        <?php endif; ?>
	</div>
    <?php if($islive == 1): ?>
	<script src="/static/js/admin.js"></script>
	<script src="/static/js/jquery.form.min.js"></script>
    <script src="/static/js/AgoraRTC_N-4.20.0.js?t=1617781898"></script>
    <script src="/static/admin/js/agora.js?t=1617781914"></script>
    <script type="text/javascript">
        var avatar='<?php echo $avatar; ?>';
        var anyway=<?php echo $anyway; ?>;
        var _DATA = {};
        _DATA.live=<?php echo $liveinfoj; ?>;
        _DATA.linkmic_uid=<?php echo $linkmic_uid; ?>;

        $(function(){
            if(anyway==0){
                $("#area-video").height('735');
            }else{
                $("#area-video").height('400');
            }
            
            //声网
            AgoraRTC.onAutoplayFailed = () => {

              layer.msg('画面加载完成', {
                time:false,
                  btn: ['好的','关闭']
              });
            };

            //主播未与其他主播连麦
            if(_DATA.live.pkuid==0){

                $("#join-form").ajaxSubmit(async function(){

                  try {
                    sw_client = AgoraRTC.createClient({
                      mode: "rtc",
                      codec: "vp8"
                    });
                    sw_options.channel = $("#channel").val();
                    sw_options.uid = Number($("#uid").val());
                    sw_options.appid = $("#appid").val();
                    sw_options.token = $("#token").val();
                    join();
                    
                  } catch (error) {
                    console.error(error);
                  }
                
                });

            }else{

                $("#join-form").ajaxSubmit(async function(){
                    try {
                        sw_client = AgoraRTC.createClient({
                          mode: "rtc",
                          codec: "vp8"
                        });
                        sw_options.channel = $("#channel").val();
                        sw_options.uid = Number($("#uid").val());
                        sw_options.appid = $("#appid").val();
                        sw_options.token = $("#token").val();

                        sw_linkmic_client = AgoraRTC.createClient({
                          mode: "rtc",
                          codec: "vp8"
                        });

                        sw_linkmic_options.channel = $("#linkmic_channel").val();
                        sw_linkmic_options.uid = Number($("#uid").val());
                        sw_linkmic_options.appid = $("#appid").val();
                        sw_linkmic_options.token = $("#linkmic_token").val();
                        
                        await Promise.all([join(), join2()]);
                        
                    } catch (error) {
                        console.error(error);
                    }
                });
            }

            
        });
    </script>
    <?php endif; ?>
</body>
</html>