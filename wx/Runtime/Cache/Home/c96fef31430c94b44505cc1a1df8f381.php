<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="loading">
	<head>
		<meta charset="UTF-8" />
		<meta name="Keywords" content="" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="Description" content="" />
		<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>purchase.css"/>
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
						消费记录
					</div>
				</div>
				<div class="fr iconfont icon-guanbi1"></div>
			</div>
		</div>
		<div id="content">
			<div class="purchase_top_box_a">
				<div>当前余额</div>
				<div class="money">0.00元</div>
				<div class="btn">
				<input type="button" name="" id="" value="充值" />
				</div>
			</div>	
			<div class="purchase_title">
					最近30天收支明细
				</div>
			<div class="purchase_top_box_b">
				<ul>
					<li>
						<div class="li_up">
							<span>第三方支付消费</span>
							<span><p>2016-1-02</p></span>
						</div>
						<div class="li_down">
							<span>余额：</span>
							<span>0.00</span>
							<span>-26.30</span>
						</div>
					</li>
					<li>
						<div class="li_up">
							<span>优智源账户充值</span>
							<span><p>2016-1-02</p></span>
						</div>
						<div class="li_down">
							<span>余额：</span>
							<span>0.00</span>
							<span>+26.30</span>
						</div>
					</li>
					<li>
						<div class="li_up">
							<span>支付宝账户充值</span>
							<span><p>2016-1-02</p></span>
						</div>
						<div class="li_down">
							<span>余额：</span>
							<span>0.00</span>
							<span>+100.00</span>
						</div>
					</li>
					<li>
						<div class="li_up">
							<span>第三方支付消费</span>
							<span><p>2016-1-02</p></span>
						</div>
						<div class="li_down">
							<span>余额：</span>
							<span>0.00</span>
							<span>-26.30</span>
						</div>
					</li>
					<li>
						<div class="li_up">
							<span>第三方支付消费</span>
							<span><p>2016-1-02</p></span>
						</div>
						<div class="li_down">
							<span>余额：</span>
							<span>0.00</span>
							<span>-26.30</span>
						</div>
					</li>
					<li>
						<div class="li_up">
							<span>第三方支付消费</span>
							<span><p>2016-1-02</p></span>
						</div>
						<div class="li_down">
							<span>余额：</span>
							<span>0.00</span>
							<span>-26.30</span>
						</div>
					</li>
					<li>
						<div class="li_up">
							<span>第三方支付消费</span>
							<span><p>2016-1-02</p></span>
						</div>
						<div class="li_down">
							<span>余额：</span>
							<span>0.00</span>
							<span>-26.30</span>
						</div>
					</li>
					<li>
						<div class="li_up">
							<span>第三方支付消费</span>
							<span><p>2016-1-02</p></span>
						</div>
						<div class="li_down">
							<span>余额：</span>
							<span>0.00</span>
							<span>-26.30</span>
						</div>
					</li>
					<li>
						<div class="li_up">
							<span>第三方支付消费</span>
							<span><p>2016-1-02</p></span>
						</div>
						<div class="li_down">
							<span>余额：</span>
							<span>0.00</span>
							<span>-26.30</span>
						</div>
					</li>
				</ul>
			</div>
		
		</div>

		<script src="<?php echo (JS_URL); ?>app.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo (JS_URL); ?>app1.js" type="text/javascript" charset="utf-8"></script>
	</body>

</html>