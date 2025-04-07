<?php /*a:3:{s:73:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/auth/index.html";i:1733451415;s:67:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/head.html";i:1733451413;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/appapi/footer.html";i:1733451413;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    
    <meta charset="utf-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection" />
    <link href='/static/appapi/css/common.css?t=1576565546' rel="stylesheet" type="text/css" >

    <title><?php echo lang('身份认证'); ?></title>
    <style type="text/css">
        *{margin: 0;padding: 0;font-family: Helvetica;}
        *{
            -webkit-tap-highlight-color:rgba(0, 0, 0, 0);  
            -moz-tap-highlight-color:rgba(0, 0, 0, 0);  
            -ms-tap-highlight-color:rgba(0, 0, 0, 0);  
            -o-tap-highlight-color:rgba(0, 0, 0, 0);  
            tap-highlight-color:rgba(0, 0, 0, 0);  
        }
        body{
            background: #FFF;
        }
        .top_img{
            margin-top:1.6rem;
            margin-bottom:0.5rem;
            text-align:center;
        }
        .top_img img{
            width:4rem;
        }
        .title1{color: #526165;text-align: center;}
        .title2{color: #969696;text-align: center;margin-top: 0.3rem;}
        .btn{
            color: #fff;
            width: 74%;
            margin:0 auto;
            height: 0.92rem;
            line-height: 0.92rem;
            text-align: center;
            border-radius: 1.1rem;
            margin-top: 1rem;
        }
        a:nth-of-type(3){text-decoration: none;color: #ffdd00;}
        a:nth-of-type(1){text-decoration: none;color: #03CACF;}

        .button_default1{
            background: -webkit-linear-gradient(left,#03cacf, #01e8d4) !important;
            background: -o-linear-gradient(left,#03cacf, #01e8d4) !important;
            background: -moz-linear-gradient(left,#03cacf, #01e8d4) !important;
            background: linear-gradient(to right,#03cacf, #01e8d4) !important;
        }
        .title4{
            text-align: center;
            margin-top: 0.4rem;
            color: #969696;
        }
        .color_default1{
            color: #03CACF;
        }

    </style>

</head>
<body>
    <div class="top_img">
        <img src="/static/appapi/images/auth/auth_index.png">
    </div>
    <div class="title1"><?php echo lang('亲爱的用户'); ?></div>
    <div class="title2"><?php echo lang('收到付费礼物可领取劳务费'); ?></div>
    <div class="title2"><?php echo lang('为保证'); ?><span style="color:#03CACF"><?php echo lang('资金安全'); ?></span></div>
    <div class="title2"><?php echo lang('开播前请通过'); ?><span style="color:#03CACF"><?php echo lang('身份认证'); ?></span><?php echo lang('绑定账户'); ?></div>
    <div class="title2"><?php echo lang('通过认证可以获得更好的体验'); ?></div>
    <div class="btn button_default1"><?php echo lang('立即认证'); ?></div>
    <div class="title4"><?php echo lang('认证即同意'); ?> <a class="color_default1" href="/portal/page/index?id=10&language=<?php echo $language_type; ?>"><?php echo lang("主播协议"); ?></a></div>
    
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


    <script type="text/javascript">
        $(function(){
            $(".button_default1").click(function(){
                location.href="auth://";
            });
        });
    </script>
</body>
</html>