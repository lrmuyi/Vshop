<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="loading">

	<head>
		<meta charset="UTF-8" />
		<meta name="Keywords" content="" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="Description" content="" />
		<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>collection.css" />
		<script src="<?php echo (JS_URL); ?>jquery-2.1.0.js" type="text/javascript" charset="utf-8"></script>
		<title>菜鸟商城</title>
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
						我的收藏
					</div>
				</div>
				<div class="fr iconfont icon-guanbi1"></div>
			</div>
		</div>

		<div id="content">
			<div class="collection_box">
				<div class="collection_box_left">
					<div class="collection_box_5">
						<div class="image_box">
							<img src="<?php echo (IMG_URL); ?>tupian4.jpg" alt="" />
						</div>
						<div class="info_box_up">
							<span>
							【小贱脆米锅巴】
							</span>
						</div>
						<div class="info_box_down">
							<span>￥14.50</span>
							<span><del>￥18.00</del></span>
							<span class="iconfont icon-shanchu"></span>
						</div>
					</div>
					<div class="collection_box_5">
						<div class="image_box">
							<img src="<?php echo (IMG_URL); ?>tupian1.jpg" alt="" />
						</div>
						<div class="info_box_up">
							<span>
							零食品咪咪虾条
							</span>
						</div>
						<div class="info_box_down">
							<span>￥13.50</span>
							<span><del>￥15.50</del></span>
							<span class="iconfont icon-shanchu"></span>
						</div>
					</div>
					<div class="collection_box_3">
						<div class="image_box">
							<img src="<?php echo (IMG_URL); ?>tupian3.jpg" alt="" />
						</div>
						<div class="info_box_up">
							<span>
									<h4>五味园PK脆薯条薯片</h4>
							</span>
						</div>
						<div class="info_box_down">
							<span>￥15.20</span>
							<span><del>￥20.50</del></span>
							<span class="iconfont icon-shanchu"></span>
						</div>
					</div>

				</div>
				<div class="collection_box_right">
					<div class="collection_box_5">
						<div class="image_box">
							<img src="<?php echo (IMG_URL); ?>tupian1.jpg" alt="" />
						</div>
						<div class="info_box_up">
							<span>
							康师傅老坛酸菜面
							</span>
						</div>
						<div class="info_box_down">
							<span>￥3.00</span>
							<span><del>￥4.50</del></span>
							<span class="iconfont icon-shanchu"></span>
						</div>
					</div>

					<div class="collection_box_1">
						<div class="image_box">
							<img src="<?php echo (IMG_URL); ?>tupian2.jpg" alt="" />
						</div>
						<div class="info_box_up">
							<span>
							锅巴运康锅巴
							</span>
						</div>
						<div class="info_box_down">
							<span>￥15.20</span>
							<span><del>￥20.00</del></span>
							<span class="iconfont icon-shanchu"></span>
						</div>
					</div>
					<div class="collection_box_5">
						<div class="image_box">
							<img src="<?php echo (IMG_URL); ?>linshi1.jpg" alt="" />
						</div>
						<div class="info_box_up">
							<span>
								双汇火腿肠
							</span>
						</div>
						<div class="info_box_down">
							<span>￥2.50</span>
							<span><del>￥5.20</del></span>
							<span class="iconfont icon-shanchu"></span>
						</div>
					</div>
				</div>

			</div>

		</div>

		<script src="<?php echo (JS_URL); ?>app.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo (JS_URL); ?>app1.js" type="text/javascript" charset="utf-8"></script>
	</body>

</html>