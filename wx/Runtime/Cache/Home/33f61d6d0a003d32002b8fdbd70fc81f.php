<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="loading">

	<head>
		<meta charset="UTF-8" />
		<meta name="Keywords" content="" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="Description" content="" />
		<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>style.css" />
		<script src="<?php echo (JS_URL); ?>jquery-2.1.0.js" type="text/javascript" charset="utf-8"></script>
		<title>菜鸟商城</title>
		<style type="text/css">
			html {
				height: 100%
			}
			
			body {
				height: 100%;
				margin: 0px;
				padding: 0px
			}
			
			#container {
				height: 100%
			}
		</style>
	</head>

	<body>
		<!--转场过渡-->
		<div class="loading_dark"></div>
		<div id="loading_mask">
			<div class="loading_mask">
				<ul class="anm">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
		<!--转场过渡-->
		<div class="my_collection show">
			<div class="hd">
				<div class="wrap">
					<div class="defind_title">
						您的位置
					</div>
				</div>
				<div class="fr iconfont icon-guanbi1"></div>
			</div>
		</div>

		<div id="content">
			<div id="container"></div>
			<script type="text/javascript">
				var map = new BMap.Map("container"); // 创建地图实例  
				var point = new BMap.Point(116.404, 39.915); // 创建点坐标  
				map.centerAndZoom(point, 15); // 初始化地图，设置中心点坐标和地图级别
			</script>
		</div>
	</body>

</html>