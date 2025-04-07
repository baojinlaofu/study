<?php /*a:6:{s:72:"/www/wwwroot/xiangqu8.com/public/../themes/default/home/index/index.html";i:1733451420;s:67:"/www/wwwroot/xiangqu8.com/public/../themes/default/public/head.html";i:1733451414;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/public/header.html";i:1733451414;s:79:"/www/wwwroot/xiangqu8.com/public/../themes/default/home/index/centerbanner.html";i:1733451420;s:69:"/www/wwwroot/xiangqu8.com/public/../themes/default/public/footer.html";i:1733451414;s:70:"/www/wwwroot/xiangqu8.com/public/../themes/default/public/scripts.html";i:1733451414;}*/ ?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie oldie ie6" lang="zh">
<![endif]-->
<!--[if IE 7]>
<html class="ie oldie ie7" lang="zh">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="zh">
<![endif]-->
<!--[if IE 9]>
<html class="ie ie9" lang="zh">
<![endif]-->
<!--[if gt IE 10]><!-->
<html lang="zh">
<!--<![endif]-->
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>	
	
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">

	<!-- No Baidu Siteapp-->
	<meta http-equiv="Cache-Control" content="no-siteapp"/>
    
    <meta name="referrer" content="origin">

	<!-- HTML5 shim for IE8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	
	<link type="text/css" rel="stylesheet" href="/static/home/css/common.css?t=1542606715"/>
	<link type="text/css" rel="stylesheet" href="/static/home/css/login.css"/>
	<link type="text/css" rel="stylesheet" href="/static/home/css/bootstrap.css"/>
	
	

<title><?php echo (isset($configpub['site_seo_title']) && ($configpub['site_seo_title'] !== '')?$configpub['site_seo_title']:$site_name); ?></title>
<meta name="keywords" content="<?php echo $configpub['site_seo_keywords']; ?>"/>
<meta name="description" content="<?php echo $configpub['site_seo_description']; ?>"/>
<link type="text/css" rel="stylesheet" href="/static/js/swiper/swiper.min.css"/>
<link type="text/css" rel="stylesheet" href="/static/home/css/index.css"/>
</head>
<body>
<div class="wrapper">
    	<div id="doc-hd" class="header double">
		<div class="topbar">
			<div class="container clearfix">
				<div class="hd-logo">
					<a href="#" class="links">享趣</a>
				</div>
				<ul class="hd-nav">
					<li class="item"><a href="/" <?php if($current == 'index'): ?>class="current" <?php endif; ?> >首页</a></li>
					<!-- <li class="item"><a href="/home/Category/classlive?cat=classlive"  <?php if($current == 'classlive'): ?>class="current" <?php endif; ?> >分类</a></li> -->
					<!-- <li class="item"><a href="/home/Category/index?cat=2"  <?php if($current == '2'): ?>class="current" <?php endif; ?> >女神驾到</a></li>
					<li class="item"><a href="/home/Category/index?cat=1"  <?php if($current == '1'): ?>class="current" <?php endif; ?> >国民男神</a></li> -->
					<li class="item"><a href="/home/App/programe"  <?php if($current == 'download'): ?>class="current" <?php endif; ?> >APP</a></li>
					
				</ul>
				
				 
				
			
			</div>
		</div>
	</div>


	<div class="top_line"></div>
	<div class="index_live">
		

		<div class="scroll_top">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php if(is_array($slide) || $slide instanceof \think\Collection || $slide instanceof \think\Paginator): $i = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide">
                        <a target="_blank" href="<?php echo $vo['url']; ?>">
                            <img src="<?php echo $vo['image']; ?>">
                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>       	
    	</div>	
	</div>
    	
	<div class="index-com-box">
        <div class="container">
            <h3 class="index-com-title">享趣APP特色</h3>
            <p class="index-com-descption">多重加密技术，保障用户隐私安全。</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="index-item23">
                        <div class="t-top">
                            <img src="http://www.bootfastui.cn/img/2020/0425-2/ico1.png" class="center-block" />
                            <h5>智能推荐</h5>
                        </div>
                        <div class="t-footer">
                            <p>根据用户喜好精准推送内容。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="index-item23">
                        <div class="t-top">
                            <img src="http://www.bootfastui.cn/img/2020/0425-2/ico2.png" class="center-block" />
                            <h5>个性定制</h5>
                        </div>
                        <div class="t-footer">
                            <p>界面风格、内容板块，随心所欲设置。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="index-item23">
                        <div class="t-top">
                            <img src="http://www.bootfastui.cn/img/2020/0425-2/ico3.png" class="center-block" />
                            <h5>语音识别</h5>
                        </div>
                        <div class="t-footer">
                            <p>高效语音交互，解放双手操作。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="index-item23">
                        <div class="t-top">
                            <img src="http://www.bootfastui.cn/img/2020/0425-2/ico4.png" class="center-block" />
                            <h5>数据分析</h5>
                        </div>
                        <div class="t-footer">
                            <p>深度挖掘数据，提供个性化建议。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="index-item23">
                        <div class="t-top">
                            <img src="http://www.bootfastui.cn/img/2020/0425-2/ico5.png" class="center-block" />
                            <h5>跨平台同步</h5>
                        </div>
                        <div class="t-footer">
                            <p>无缝衔接，多设备间数据共享。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="index-item23">
                        <div class="t-top">
                            <img src="http://www.bootfastui.cn/img/2020/0425-2/ico6.png" class="center-block" />
                            <h5>安全防护</h5>
                        </div>
                        <div class="t-footer">
                            <p>多重加密技术，保障用户隐私安全。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	 
<!-- 立即咨询 -->
<div class="contact-banner">
    <canvas id="waves" class="waves"></canvas>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 contact-banner-box">
                <h2 class="h1">更多疑问 全面解答</h2>
                <h4>资深专家在线为您解答所有疑惑</h4>
                <a href="javascript:;" class="btn btn-outline-inverse btn-lg web-chat">免费咨询</a>
            </div>
        </div>
    </div>
  </div>
  <!-- 立即咨询 -->
  <script type="text/javascript" src="/static/js/jquery.js"></script>  
  <script>
    
  //通用waves线条动画
  $(function() {
      function a() {
          var a = $(window).width(),
              b = (768 - a) / 768 + 1,
              c = 1;
          fmhPara = $(".feature-mi").height() < 641 || $(".feature-ai").height() < 641 || $(".feature-bi").height() < 641 ? 0 : 1, 768 > a ? ($(".mi-headline-bg").css("height", $(".feature-mi").height() + 28 * b * c + "px"), $(".ai-headline-bg").css("height", $(".feature-ai").height() + 28 * b * c + "px"), $(".bi-headline-bg").css("height", $(".feature-bi").height() + 28 * b * c + "px"), $(".ee-headline-bg").css("height", $(".feature-ee").height() + parseInt($(".feature-ee").css("padding-top")) + 20 * b + "px")) : ($(".mi-headline-bg").removeAttr("style"), $(".ai-headline-bg").removeAttr("style"), $(".bi-headline-bg").removeAttr("style"), $(".ee-headline-bg").removeAttr("style"))
      }
      setTimeout(function() {
          a()
      }, 100), $(window).resize(function() {
          a()
      })
  }), function(a, b) {
      "use strict";
      "function" == typeof define && "object" == typeof define.amd ? define([], function() {
          return b(a)
      }) : a.SineWaves = b(a)
  }(this, function() {
      "use strict";
  
      function a(a) {
          if (this.options = i.defaults(this.options, a), this.el = this.options.el, delete this.options.el, !this.el) return false; //throw "No Canvas Selected";刘明排错注销
          if (this.ctx = this.el.getContext("2d"), this.waves = this.options.waves, delete this.options.waves, !this.waves || !this.waves.length) throw "No waves specified";
          this.dpr = window.devicePixelRatio || 1, this.updateDimensions(), window.addEventListener("resize", this.updateDimensions.bind(this)), this.setupUserFunctions(), this.easeFn = i.getFn(n, this.options.ease, "linear"), this.rotation = i.degreesToRadians(this.options.rotate), i.isType(this.options.running, "boolean") && (this.running = this.options.running), this.setupWaveFns(), this.loop()
      }
      function b(a, b) {
          return i.isType(a, "number") ? a : (a = a.toString(), a.indexOf("%") > -1 ? (a = parseFloat(a), a > 1 && (a /= 100), b * a) : a.indexOf("px") > -1 ? parseInt(a, 10) : void 0)
      }
      Function.prototype.bind || (Function.prototype.bind = function(a) {
          if ("function" != typeof this) throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");
          var b = Array.prototype.slice.call(arguments, 1),
              c = this,
              d = function() {},
              e = function() {
                  return c.apply(this instanceof d && a ? this : a, b.concat(Array.prototype.slice.call(arguments)))
              };
          return d.prototype = this.prototype, e.prototype = new d, e
      });
      for (var c = ["ms", "moz", "webkit", "o"], d = 0; d < c.length && !window.requestAnimationFrame; ++d) window.requestAnimationFrame = window[c[d] + "RequestAnimationFrame"], window.cancelAnimationFrame = window[c[d] + "CancelAnimationFrame"] || window[c[d] + "CancelRequestAnimationFrame"];
      if (!window.requestAnimationFrame) {
          var e = 0;
          window.requestAnimationFrame = function(a) {
              var b = (new Date).getTime(),
                  c = Math.max(0, 16 - (b - e)),
                  d = window.setTimeout(function() {
                      a(b + c)
                  }, c);
              return e = b + c, d
          }
      }
      window.cancelAnimationFrame || (window.cancelAnimationFrame = function(a) {
          clearTimeout(a)
      });
      var f = Math.PI / 180,
          //原来的值为g=2 * Math.PI 用于修正sineinout右边的正弦值
          g = 2.6 * Math.PI,
          h = Math.PI / 2,
          i = {},
          j = i.isType = function(a, b) {
              var c = {}.toString.call(a).toLowerCase();
              return c === "[object " + b.toLowerCase() + "]"
          },
          k = i.isFunction = function(a) {
              return j(a, "function")
          },
          l = i.isString = function(a) {
              return j(a, "string")
          },
          m = (i.isNumber = function(a) {
              return j(a, "number")
          }, i.shallowClone = function(a) {
              var b = {};
              for (var c in a) a.hasOwnProperty(c) && (b[c] = a[c]);
              return b
          }),
          n = (i.defaults = function(a, b) {
              j(b, "object") || (b = {});
              var c = m(a);
              for (var d in b) b.hasOwnProperty(d) && (c[d] = b[d]);
              return c
          }, i.degreesToRadians = function(a) {
              if (!j(a, "number")) throw new TypeError("Degrees is not a number");
              return a * f
          }, i.getFn = function(a, b, c) {
              return k(b) ? b : l(b) && k(a[b.toLowerCase()]) ? a[b.toLowerCase()] : a[c]
          }, {});
      n.linear = function(a, b) {
          return b
      }, n.sinein = function(a, b) {
          return b * (Math.sin(a * Math.PI - h) + 1) * .5
      }, n.sineout = function(a, b) {
          return b * (Math.sin(a * Math.PI + h) + 1) * .5
      }, n.sineinout = function(a, b) {
          return b * (Math.sin(a * g - h) + 1) * .5
      };
      var o = {};
      o.sine = function(a) {
          return Math.sin(a)
      }, o.sin = o.sine, o.sign = function(a) {
          return a = +a, 0 === a || isNaN(a) ? a : a > 0 ? 1 : -1
      }, o.square = function(a) {
          return o.sign(Math.sin(a * g))
      }, o.sawtooth = function(a) {
          return 2 * (a - Math.floor(a + .5))
      }, o.triangle = function(a) {
          return Math.abs(o.sawtooth(a))
      }, a.prototype.options = {
          speed: 10,
          rotate: 0,
          ease: "Linear",
          wavesWidth: "95%"
      }, a.prototype.setupWaveFns = function() {
          for (var a = -1, b = this.waves.length; ++a < b;) this.waves[a].waveFn = i.getFn(o, this.waves[a].type, "sine")
      }, a.prototype.setupUserFunctions = function() {
          i.isFunction(this.options.resizeEvent) && (this.options.resizeEvent.call(this), window.addEventListener("resize", this.options.resizeEvent.bind(this))), i.isFunction(this.options.initialize) && this.options.initialize.call(this)
      };
      var p = {
          timeModifier: 1,
          amplitude: 50,
          wavelength: 50,
          segmentLength: 10,
          lineWidth: 1,
          strokeStyle: "rgba(255, 255, 255, 0.2)",
          type: "Sine"
      };
      return a.prototype.getDimension = function(a) {
          return i.isNumber(this.options[a]) ? this.options[a] : i.isFunction(this.options[a]) ? this.options[a].call(this, this.el) : "width" === a ? this.el.clientWidth : "height" === a ? this.el.clientHeight : void 0
      }, a.prototype.updateDimensions = function() {
          var a = this.getDimension("width"),
              c = this.getDimension("height");
          this.width = this.el.width = a * this.dpr, this.height = this.el.height = c * this.dpr, this.el.style.width = a + "px", this.el.style.height = c + "px", this.waveWidth = b(this.options.wavesWidth, this.width), this.waveLeft = (this.width - this.waveWidth) / 2, this.yAxis = this.height / 2
      }, a.prototype.clear = function() {
          this.ctx.clearRect(0, 0, this.width, this.height)
      }, a.prototype.time = 0, a.prototype.update = function(a) {
          this.time = this.time - .007, "undefined" == typeof a && (a = this.time);
          var b = -1,
              c = this.waves.length;
          for (this.clear(), this.ctx.save(), this.rotation > 0 && (this.ctx.translate(this.width / 2, this.height / 2), this.ctx.rotate(this.rotation), this.ctx.translate(-this.width / 2, -this.height / 2)); ++b < c;) {
              var d = this.waves[b].timeModifier || 1;
              this.drawWave(a * d, this.waves[b])
          }
          this.ctx.restore(), b = void 0, c = void 0
      }, a.prototype.getPoint = function(a, b, c) {
          var d = a * this.options.speed + (-this.yAxis + b) / c.wavelength,
              e = c.waveFn.call(this, d, o),
              f = this.easeFn.call(this, b / this.waveWidth, c.amplitude);
          return d = b + this.waveLeft, e = f * e + this.yAxis, {
              x: d,
              y: e
          }
      }, a.prototype.drawWave = function(a, b) {
          b = i.defaults(p, b), this.ctx.lineWidth = b.lineWidth * this.dpr, this.ctx.strokeStyle = b.strokeStyle, this.ctx.lineCap = "butt", this.ctx.lineJoin = "round", this.ctx.beginPath(), this.ctx.moveTo(0, this.yAxis), this.ctx.lineTo(this.waveLeft, this.yAxis);
          var c, d;
          for (c = 0; c < this.waveWidth; c += b.segmentLength) d = this.getPoint(a, c, b), this.ctx.lineTo(d.x, d.y), d = void 0;
          c = void 0, b = void 0, this.ctx.lineTo(this.width, this.yAxis), this.ctx.stroke()
      }, a.prototype.running = !0, a.prototype.loop = function() {
          this.running === !0 && this.update(), window.requestAnimationFrame(this.loop.bind(this))
      }, a.prototype.Waves = o, a.prototype.Ease = n, a
  }), $(function() {
      var a = new SineWaves({
              el: document.getElementById("waves"),
              //设置正弦波速度 刘明注释
              speed: 4,
              width: function() {
                  var a = $(document).width();
                  //原来的值, 设置正弦波的宽度, 现在设置为与元素同宽
                  //return 768 > a ? 3 * $("#waves").parent().width() : 1.4 * $("#waves").parent().width()
                  return 1.4 * $("#waves").parent().width()
              },
              height: function() {
                  return $("#waves").parent().height()
              },
              //原来的值, 可以正弦波宽度, 居中, 两边超出部分隐藏
              //wavesWidth: "100%",
              wavesWidth: "130%",//150
              ease: "SineInOut",
              waves: [{
                  timeModifier: .5,
                  lineWidth: 2,
                  amplitude: 150,
                  wavelength: 200,
                  segmentLength: 1
              }, {
                  timeModifier: .5,
                  lineWidth: 2,
                  amplitude: 100,
                  wavelength: 150,
                  segmentLength: 1
              }, {
                  timeModifier: .5,
                  lineWidth: 2,
                  amplitude: 50,
                  wavelength: 80,
                  segmentLength: 1
              }],
              initialize: function() {},
              resizeEvent: function() {
                  var a = this.ctx.createLinearGradient(0, 0, this.width, 0);
                  //原来的值, 设置线条渐变透明度, 以及开始激变的位置
                  //a.addColorStop(0, "rgba(255, 255, 255, 0)"), a.addColorStop(.5, "rgba(255, 255, 255, 0.2)"), a.addColorStop(1, "rgba(255, 255, 255, 0)");
                  a.addColorStop(0, "rgba(255, 255, 255, 0)"), a.addColorStop(.1, "rgba(255, 255, 255, 0.2)"), a.addColorStop(1, "rgba(255, 255, 255, 0)");
                  for (var b = -1, c = this.waves.length; ++b < c;) this.waves[b].strokeStyle = a;
                  b = void 0, c = void 0, a = void 0
              }
          }),
          b = $("#waves"),
          c = $(document).scrollTop(),
          d = $(document).scrollTop() + $(window).height(),
          e = b.offset().top + b.height(),
          f = b.offset().top;
      (c > e || f > d) && (a.running = !1, a.update()), $(window).bind("scroll", function() {
          c = $(document).scrollTop(), d = $(document).scrollTop() + $(window).height(), e = b.offset().top + b.height(), f = b.offset().top, c > e || f > d ? (a.running = !1, a.update()) : (a.running = !0, a.update())
      })
  });
  
  </script>  
	<div class="auto-box">
		<div class="main-box">
			<div class="index-tit">
				<h1>精益求精的360°服务</h1>
				<p>近20年 IT 服务经验，千锤百炼打造面向企业的全程服务</p>
			</div>
			<ul class="index-tserver">
				<li class="tserver-list1">
					专业教程
					<p class="animated zoomin">
						<a href="#">内置详细教程，轻松学习新技能。</a>
					</p>
				</li>
				<li class="tserver-list2">
					新手服务
					<p class="animated zoomin">
						<a href="#">提供云端架构、部署、产品和功能培训和指导</a>
					</p>
				</li>
				<li class="tserver-list3">
					网络安全服务
					<p class="animated zoomin">
						<a href="#">提供漏扫、态势感知、安全加固等全面网络安全防护服务</a>
					</p>
				</li>
				<li class="tserver-list4">
					资质服务
					<p class="animated zoomin">
						<a href="#">致力于为客户的应用提供更加安全防护与合规保障</a>
					</p>
				</li>
				<li class="tserver-list5">
					应用服务
					<p class="animated zoomin">
						<a href="#">提供面向应用的系统运维服务</a>
					</p>
				</li>
				<li class="tserver-list6">
					快速更新
					<p class="animated zoomin">
						<a href="#">紧跟科技前沿，每日更新最新资讯</a>
					</p>
				</li>
				<li class="tserver-list7">
					夜间模式
					<p class="animated zoomin">
						<a href="#">保护视力，夜间阅读更舒适。</a>
					</p>
				</li>
			</ul>
		</div>
		<div class="index-tserver-ad">
			<div class="main-box">
				<ul>
					<li><img src="http://www.bootfastui.cn/img/2020/200424-4/tserver-ad-icon1.png">7*24*365 服务支持</li>
					<li><img src="http://www.bootfastui.cn/img/2020/200424-4/tserver-ad-icon2.png">灵活定制行业解决方案</li>
					<li><img src="http://www.bootfastui.cn/img/2020/200424-4/tserver-ad-icon3.png">秒级快速响应</li>
					<li><img src="http://www.bootfastui.cn/img/2020/200424-4/tserver-ad-icon4.png">VVIP 大客户服务</li>
					<li><img src="http://www.bootfastui.cn/img/2020/200424-4/tserver-ad-icon5.png">资深隐私保护</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="area-ft">
		<div class="down-ft">
			
			<div class="down-ft_two fl">
				<ul class="ewm_list">
					<li>
						<p class="ewm_title">微信公众号</p>
						<p class="ewm_icon"><img src="<?php echo $configpub['wechat_ewm']; ?>"></p>
					</li>
					<li>
						<p class="ewm_title">android版下载</p>
						<p class="ewm_icon"><img src="<?php echo $configpub['apk_ewm']; ?>"></p>
					</li>
					<li>
						<p class="ewm_title">iPhone版下载</p>
						<p class="ewm_icon"><img src="<?php echo $configpub['ipa_ewm']; ?>"></p>
					</li>
					<div class="clearboth"></div>
				</ul>
			</div>
			<div class="down-ft_three fl">
				<div class="phone_icon fl">
					<img src="/static/home/images/foot_phone.png">
				</div>
				<div class="phone_msg fl">
					<div class="phone_number"><?php echo $configpub['mobile']; ?></div>
					<div class="phone_desc">客服热线(服务时间:8:00-16:00)</div>
				</div>
				<div class="clearboth"></div>
			</div>
			<div class="down-ft_four fl">
				<p>地址:<?php echo $configpub['address']; ?></p>
			</div>
			<div class="clearboth"></div>
		</div>
	</div>
	<div style="clear: both;border-bottom: 2px solid #ffd350;"><br><br><br></div>
	<div id="doc-ft">
		<div class="container">
			<?php if($configpub['copyright_url'] != ''): ?>
				
					<p class="footer">
						<a href="<?php echo $configpub['copyright_url']; ?>" target="_blank">
						<?php echo nl2br($configpub['copyright']); ?>
						</a>
					</p>
				
			<?php else: ?>
				<p class="footer">
					<?php echo nl2br($configpub['copyright']); ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
		
	  


<script type="text/javascript">
    window._DATA = window._DATA || {};
    window._DATA.user = <?php echo $userinfo; ?>;
    var country_json='<?php echo $country_list; ?>';
</script> 
<script src="/static/js/jquery.js"></script> 
<script src="/static/home/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="/static/js/layer/layer.js"></script> 
<script type="text/javascript" src="/static/home/js/login.js"></script> 

<div class="fix_area">
	<div class="fix_area_left fl">
		<div class="fix_area_left_con">
			<p>扫一扫</p>
			<p>手机看</p>
			<p class="ewm_img"><img src="<?php echo get_upload_path($configpub['apk_ewm']); ?>"></p>
			<p class="app_ewm_name">Android APP</p>
		</div>
	</div>
	<div class="fix_area_right fl">
		<p class="app_type_icon app_type_android mar_top75">
			<img src="/static/home/images/index/az.png">
		</p>
		<p class="app_type_icon app_type_apple">
			<img src="/static/home/images/index/pg1.png">
		</p>
		<p class="go_top">
			<img src="/static/home/images/index/zhiding.png">
		</p>
	</div>
	<div class="clearboth"></div>
</div>

</div>
<script type="text/javascript" src="/static/js/swiper/swiper.min.js"></script>  

<script>
$(function(){
	//图片延迟加载
	$("img.thumb").lazyload({effect: "fadeIn"});	

    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
        },
        autoplay: {
            delay: 3000,
            stopOnLastSlide: false,
            disableOnInteraction: true,
        },
        loop : true
    });
})
function check() {
	var userAgentInfo=navigator.userAgent;
	var Agents =new Array("Android","iPhone","SymbianOS","Windows Phone","iPad","iPod");
	var flag=true;
	for(var v=0;v<Agents.length;v++) {
		if(userAgentInfo.indexOf(Agents[v])>0) {
			flag=false;
			break;
		}
	}
	return flag;
}
if(!check()){
	window.location.href="/wxshare/share/index";
}
	
</script>

<!-- 视频播放start -->
<script src="/static/xigua/xgplayer.js?t=1574906138" type="text/javascript"></script>
<script src="/static/xigua/backups/xgplayer-flv.js.js" type="text/javascript"></script>
<script src="/static/xigua/backups/xgplayer-hls.js.js" type="text/javascript"></script>
<script src="/static/xigua/backups/player.js?t=1585644578" type="text/javascript"></script>

<!-- 视频播放end -->
<script type="text/javascript">
	$(function(){
		$(".index_live_area_right ul li").click(function(){
			if($(this).hasClass("on")){
				return;
			}
			$(this).siblings().removeClass("on");
			$(this).addClass("on");
            
			var pull=$(this).attr("data-pull");
            
			$(".video_mask a").attr("href","/"+$(this).attr("data-uid"));
			xgPlay('video_play',pull);
		});
        
        var firstLive=$(".index_live_area_right ul li")[0];
        if(firstLive){
            firstLive.click();
        }

		$(".index_live_area_left").mouseover(function() {
			$(".video_mask").show();
		});
		$(".index_live_area_left").mouseleave(function() {
			$(".video_mask").hide();
		});


		var apk_ewm='<?php echo get_upload_path($configpub['apk_ewm']); ?>';
		var ios_ewm='<?php echo get_upload_path($configpub['ipa_ewm']); ?>';

		$(".app_type_apple").mouseover(function(){
			$(this).find('img').attr("src","/static/home/images/index/pg.png");
			$(".app_type_android").find('img').attr("src","/static/home/images/index/az1.png");
			$(".ewm_img").find("img").attr("src",ios_ewm);
			$(".app_ewm_name").text("iOS App");
		});
			
		

		$(".app_type_apple").mouseleave(function(){
			$(this).find('img').attr("src","/static/home/images/index/pg1.png");
			$(".app_type_android").find('img').attr("src","/static/home/images/index/az.png");
			$(".ewm_img").find("img").attr("src",apk_ewm);
			$(".app_ewm_name").text("Android App");
		});

		$(".go_top").mouseover(function() {
			$(this).find("img").attr("src",'/static/home/images/index/zhiding1.png');
		});
		$(".go_top").mouseleave(function() {
			$(this).find("img").attr("src",'/static/home/images/index/zhiding.png');
		});
		
		$(".go_top").click(function(){
			document.body.scrollTop = 0;
    		document.documentElement.scrollTop = 0;
		});

		//点击分类
		$(".home_live_class li").click(function(){
			$(this).siblings().removeClass('current');
			$(this).addClass('current');
			var id=$(this).data("id");
			$.ajax({
				url:'/home/index/getClassLive',
				data:{'id':id},
				dataType:'json',
				success:function(data){
					console.log(data);
					var code=data.code;
					if(code !=0){
						layer.msg(data.msg);
						return;
					}

					var info=data.info;
					console.log(info);
					var string='';
					for (var i = 0; i < info.length; i++) {

						string+='<li class="feed live">';

						string+='<a class="link" href="/'+info[i]['uid']+'" target="_blank">\
							<img class="screenshot thumb" src="'+info[i]['thumb']+'" data-original="'+info[i]['thumb']+'"/>\
							<div class="user">\
								<div class="user_left fl"><img class="avatar thumb" src="'+info[i]['avatar']+'" data-original="'+info[i]['avatar']+'"/></div>\
								<div class="user_right fl">\
									<p class="username">'+info[i]['user_nickname']+'</p>\
									<p class="bottom">\
										<span class="type">'+info[i]['signature']+'</span>\
										<span class="nums">'+info[i]['nums']+'</span>\
									</p>\
								</div>\
							</div>\
							</a></li>';







					}


					$("#focuspic ul").html(string);
				},
				error:function(){
					layer.msg('获取失败');
				}
			});
		});
	});
</script>
</body>
</html>