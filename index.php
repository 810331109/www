
<!DOCTYPE HTML>
<html>
	<head>
		<title>个人日记分享</title>
		<meta name="keywords" content="个人日记分享,">
        <meta name="description" content="个人日记分享">
        <link rel="shortcut icon" href="favicon.ico">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./static/css/main.css" />
		<noscript><link rel="stylesheet" href="./static/css/noscript.css" /></noscript>
	</head>
	<body onselectstart="return false" oncontextmenu=self.event.returnValue=false> 

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span>个人日记</span>						</div>
						<div class="content">
							<div class="inner">
								<h2><?php echo date("Y年m月d日D")?>   晴</h2>
								<h3 id="sentence"></h3>
							</div>
						</div>
                   <button class="btn btn-primary btn-filled btn-xs" onclick="randomSentence()">再来一段</button>
						<nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">
						    
						    
						    
						    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<audio id="bgmusic" src="1.mp3" autoplay preload loop controls></audio>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
    function autoPlayAudio1() {
        wx.config({
            debug: false,
            appId: '',
            timestamp: 1,
            nonceStr: '',
            signature: '',
            jsApiList: []
        });
        wx.ready(function() {
            document.getElementById('bgmusic').play();
        });
    }
    function autoPlayAudio2() {
        window.onload = function() {
            WeixinJSBridge.invoke('getNetworkType', {}, function(e) {
                document.getElementById('bgmusic').play();
            });
        };
    }
    autoPlayAudio1(); 
    </script>
</body>
</html>
<br><br>



						    
						    <a target="_black" href='https://beian.miit.gov.cn/'>粤ICP备20002221号</a></p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="./static/js/jquery.min.js"></script>
			<script src="./static/js/skel.min.js"></script>
			<script src="./static/js/util.js"></script>
			<script src="./static/js/main.js"></script>
            <script src="./static/js/index.js"></script>

 

	</body>
</html>
