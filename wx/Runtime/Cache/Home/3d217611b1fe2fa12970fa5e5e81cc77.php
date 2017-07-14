<?php if (!defined('THINK_PATH')) exit();?><html class="loading">
	<head>
		<meta charset="UTF-8" />
		<meta name="Keywords" content="" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="Description" content="" />
		<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>style.css" />
		<script src="<?php echo (JS_URL); ?>jquery-2.1.0.js" type="text/javascript" charset="utf-8"></script>
		<title>菜鸟商城</title>
	</head>

	<body>
		<div id="head">
			<div class="location_select">
				<div class="location_select_box">
					<span class="select_location">
						<a href="#" >						
							<span class="location_icon iconfont icon-location"></span>
						</a>
						<a href="#" onclick="return false" >						
							<span class="school_name">
								兰州理工大学技术工程学院
							</span>
							<span class="down_icon iconfont icon-xiala1"></span>
						</a>
					</span>
						<a href="#" onclick="return false">
							<span class="my_page">	
							<span class="user_open iconfont icon-my"></span>
							</span>
						</a>

				</div>

			</div>

		</div>

		<div id="user">
			<div class="user_page_top">
				<div class="user-photo">
					<img src="<?php echo (IMG_URL); ?>1.jpg" />
				</div>
				<div class="user-name">
					公瑾
				</div>
			</div>
			<div class="user_page_bottom">
				<ul class="fun_list">
					<li class="fun_list_li">
						<a href="person_info.html">
							<i class="iconfont icon-me"></i><span>我的信息</span><b class="iconfont icon-right"></b>
						</a>
					</li>
					<li class="fun_list_li">
						<a href="order_mang.html">
							<i class="iconfont icon-dingdan"></i><span>订单管理</span><b class="iconfont icon-right"></b>
						</a>
					</li>
					<li class="fun_list_li">
						<a href="commodity_car.html">
							<i class="iconfont icon-gouwuche"></i><span>购物车</span><b class="iconfont icon-right"></b>
						</a>
					</li>
					<li class="fun_list_li">
						<a href="my_collection.html">
							<i class="iconfont icon-xin"></i><span>我的收藏</span><b class="iconfont icon-right"></b>
						</a>
					</li>
					<li class="fun_list_li">
						<a href="purchase_history.html">
							<i class="iconfont icon-money1"></i><span>消费记录</span><b class="iconfont icon-right"></b>
						</a>
					</li>
					<li class="fun_list_li">
						<a href="call_person.html">
							<i class="iconfont icon-bi1"></i><span>呼叫包裹侠</span><b class="iconfont icon-right"></b>
						</a>
					</li>
					<li class="fun_list_li">
						<a href="about_us.html">
							<i class="iconfont icon-guanyu1"></i><span>关于我们</span><b class="iconfont icon-right"></b>
						</a>
					</li>
				</ul>

			</div>
		</div>
		<div id="container">
			<div id="sort">
				<div class="sort_box">
					<div class="sort_left">
						<a href="" onclick="return false;">
							<span class="sort_title">全部</span>
							<span class="sort_down_icon iconfont icon-drop"></span>
						</a>
					</div>
					<!--<i class="line_right"></i>-->
					<div class="sort-middle">
						<a href="#" onclick="return false;">
							<span class="sort_title">最新发布</span>
							<span class="sort_down_icon iconfont icon-drop"></span>
						</a>
					</div>
					<!--<i class="line_right"></i>-->
					<div class="sort-right">
						<a href="#" onclick="return false;">
							<span class="sort_title">店家推荐</span>
							<span class="sort_down_icon iconfont icon-drop"></span>
						</a>
					</div>
				</div>
			</div>
			<div id="content">
				<ul>
					<li>
						<div class="card_box">
							<div class="card_box_a">
								<div class="commodity_image fl">
									<img src="<?php echo (IMG_URL); ?>linshi5.jpg" />
								</div>
								<div class="commodity_info">
									<h4>永明黄金玉米豆</h4>
									<h5>已有<span>78人购买</span><em></em></h5>
									<div class="commodity_price">
										<dl class="commodity_views">
											<dd class="price iconfont icon-test">
												11.20
											</dd>
											<div class="clear-box"></div>
										</dl>
										<dl class="commodity_views">
											<dd class="pay_btn">
												<input onclick="sub(this)" type="button" name="-" class="reduce" value="-" />
												<input type="button" name="num" class="pnum" value="0" />
												<input onclick="add(this)" type="button" name="+" class="add" value="+" />
											</dd>
										</dl>
									</div>
									<div class="clear-box"></div>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="card_box">
							<div class="card_box_a">
								<div class="commodity_image fl">
									<img src="<?php echo (IMG_URL); ?>linshi2.jpg" />
								</div>
								<div class="commodity_info">
									<h4>【小贱脆米锅巴】</h4>
									<h5>已有<span>241人购买</span><em></em></h5>
									<div class="commodity_price">
										<dl class="commodity_views">
											<dd class="price iconfont icon-test">
												18.90
											</dd>
											<div class="clear-box"></div>
										</dl>
										<dl class="commodity_views">
											<dd class="pay_btn">
												<input onclick="sub(this)" type="button" name="-" class="reduce" value="-" />
												<input type="button" name="num" class="pnum" value="0" />
												<input onclick="add(this)" type="button" name="+" class="add" value="+" />
											</dd>
										</dl>
									</div>
									<div class="clear-box"></div>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="card_box">
							<div class="card_box_a">
								<div class="commodity_image fl">
									<img src="<?php echo (IMG_URL); ?>linshi1.jpg" />
								</div>
								<div class="commodity_info">
									<h4>零食品大礼包咪咪虾条</h4>
									<h5>已有<span>1200人购买</span><em></em></h5>
									<div class="commodity_price">
										<dl class="commodity_views">
											<dd class="price iconfont icon-test">
												14.50
											</dd>
											<div class="clear-box"></div>
										</dl>
										<dl class="commodity_views">
											<dd class="pay_btn">
												<input onclick="sub(this)" type="button" name="-" class="reduce" value="-" />
												<input type="button" name="num" class="pnum" value="0" />
												<input onclick="add(this)" type="button" name="+" class="add" value="+" />
											</dd>
										</dl>
									</div>
									<div class="clear-box"></div>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="card_box">
							<div class="card_box_a">
								<div class="commodity_image fl">
									<img src="<?php echo (IMG_URL); ?>linshi4.jpg" />
								</div>
								<div class="commodity_info">
									<h4>五味园PK脆薯条薯片</h4>
									<h5>已有<span>500人购买</span><em></em></h5>
									<div class="commodity_price">
										<dl class="commodity_views">
											<dd class="price iconfont icon-test">
												10.80
											</dd>
											<div class="clear-box"></div>
										</dl>
										<dl class="commodity_views">
											<dd class="pay_btn">
												<input onclick="sub(this)" type="button" name="-" class="reduce" value="-" />
												<input type="button" name="num" class="pnum" value="0" />
												<input onclick="add(this)" type="button" name="+" class="add" value="+" />
											</dd>
										</dl>
									</div>
									<div class="clear-box"></div>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="card_box">
							<div class="card_box_a">
								<div class="commodity_image fl">
									<img src="<?php echo (IMG_URL); ?>tupian4.jpg" />
								</div>
								<div class="commodity_info">
									<h4>康师傅老坛酸菜面</h4>
									<h5>已有<span>100人购买</span><em></em></h5>
									<div class="commodity_price">
										<dl class="commodity_views">
											<dd class="price iconfont icon-test">
												4.50
											</dd>
											<div class="clear-box"></div>
										</dl>
										<dl class="commodity_views">
											<dd class="pay_btn">
												<input onclick="sub(this)" type="button" name="-" class="reduce" value="-" />
												<input type="button" name="num" class="pnum" value="0" />
												<input onclick="add(this)" type="button" name="+" class="add" value="+" />
											</dd>
										</dl>
									</div>
									<div class="clear-box"></div>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="card_box">
							<div class="card_box_a">
								<div class="commodity_image fl">
									<img src="<?php echo (IMG_URL); ?>linshi6.jpg" />
								</div>
								<div class="commodity_info">
									<h4>锅巴运康锅巴休闲零食</h4>
									<h5>已有<span>460人购买</span><em></em></h5>
									<div class="commodity_price">
										<dl class="commodity_views">
											<dd class="price iconfont icon-test">
												25.60
											</dd>
											<div class="clear-box"></div>
										</dl>
										<dl class="commodity_views">
											<dd class="pay_btn">
												<input onclick="sub(this)" type="button" name="-" class="reduce" value="-" />
												<input type="button" name="num" class="pnum" value="0" />
												<input onclick="add(this)" type="button" name="+" class="add" value="+" />
											</dd>
										</dl>
									</div>
									<div class="clear-box"></div>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="card_box">
							<div class="card_box_a">
								<div class="commodity_image fl">
									<img src="<?php echo (IMG_URL); ?>tupian1.jpg" />
								</div>
								<div class="commodity_info">
									<h4>康师傅老坛酸菜面</h4>
									<h5>已有<span>100人购买</span><em></em></h5>
									<div class="commodity_price">
										<dl class="commodity_views">
											<dd class="price iconfont icon-test">
												2.50
											</dd>
											<div class="clear-box"></div>
										</dl>
										<dl class="commodity_views">
											<dd class="pay_btn">
												<input onclick="sub(this)" type="button" name="-" class="reduce" value="-" />
												<input type="button" name="num" class="pnum" value="0" />
												<input onclick="add(this)" type="button" name="+" class="add" value="+" />
											</dd>
										</dl>
									</div>
									<div class="clear-box"></div>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="card_box">
							<div class="card_box_a">
								<div class="commodity_image fl">
									<img src="<?php echo (IMG_URL); ?>tupian2.jpg" />
								</div>
								<div class="commodity_info">
									<h4>双汇火腿肠</h4>
									<h5>已有<span>185人购买</span><em></em></h5>
									<div class="commodity_price">
										<dl class="commodity_views">
											<dd class="price iconfont icon-test">
												1.00
											</dd>
											<div class="clear-box"></div>
										</dl>
										<dl class="commodity_views">
											<dd class="pay_btn">
												<input onclick="sub(this)" type="button" name="-" class="reduce" value="-" />
												<input type="button" name="num" class="pnum" value="0" />
												<input onclick="add(this)" type="button" name="+" class="add" value="+" />
											</dd>
										</dl>
									</div>
									<div class="clear-box"></div>
								</div>
							</div>
						</div>
					</li>

				</ul>
				<div class="list_loading">
					<span class="icon-load"></span><span>努力加载中...</span>
				</div>
			</div>

			<div class="push_msk"></div>
		</div>
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
		<!--底部购物车-->
		<div id="car">
			<div class="car_left">
				<span class="iconfont icon-gouwuche">
						<span class="commodity_num">1</span>
				</span>
				<span class="car_money">
					<span class="iconfont icon-test"></span>
				<span class="commodity_prece_add">11.20</span>
				</span>
			</div>
			<div class="clear-box">

			</div>
			<div class="car_right">
				<div class="car_selected">
					<span>还差
						<span>1.00</span> 元起送
					</span>
				</div>
				<div class="car_paybtn">
					<span>
						结算
					</span>
				</div>
			</div>
		</div>
		<!--底部购物车end-->
		<div id="sort_content">

			<!--分类全部-->
			<div class="asort">
				<div class="hd">
					<div class="wrap">
						<div class="fl">
							<span>选择分类</span>
							<div class="clear">
							</div>
						</div>
						<div class="fr iconfont icon-guanbi1"></div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="ct">
					<div class="wrap">
						<ul class="choose_cate">
							<li c_data="0" class="a_selected" style="font-weight:700;">
								<i style="background:none;width:0;margin-right:0;" class="s"></i>
								<span>全部行业</span>
								<i class="e"></i>
							</li>
							<li c_data="0" style="font-weight:700;">
								<i style="background:none;width:0;margin-right:0;" class="s"></i>
								<span>零食一条街</span>
								<i class="e"></i>
							</li>
							<li c_data="0" style="font-weight:700;">
								<i style="background:none;width:0;margin-right:0;" class="s"></i>
								<span>衣裤一柜子</span>
								<i class="e"></i>
							</li>
							<li c_data="0" style="font-weight:700;">
								<i style="background:none;width:0;margin-right:0;" class="s"></i>
								<span>鞋帽随便挑</span>
								<i class="e"></i>
							</li>

						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>

			<!--分类全部-->
			<!--最新推荐-->
			<div class="asort">
				<div class="hd">
					<div class="wrap">
						<div class="fl">
							<span>选择排序</span>
							<div class="clear">
							</div>
						</div>
						<div class="fr iconfont icon-guanbi1"></div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="ct">
					<div class="wrap">
						<ul class="choose_sort">
							<li class="a_selected" s_data="rec">
								<i class="s"></i><span>最新推荐</span><i class="e"></i>
							</li>
							<li s_data="like">
								<i class="s"></i><span>最多购买</span><i class="e"></i>
							</li>
							<li s_data="view">
								<i class="s"></i><span>最多浏览</span><i class="e"></i>
							</li>
							<li s_data="comment">
								<i class="s"></i><span>最多评论</span><i class="e"></i>
							</li>
							<li s_data="laster">
								<i class="s"></i><span>最新发布</span><i class="e"></i>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<!--最新推荐-->
			<!--待定功能-->
			<div class="asort">
				<div class="hd">
					<div class="wrap">
						<div class="fl">
							<i class=""></i><span>店家推荐</span>
							<div class="clear">
							</div>
						</div>
						<div class="fr iconfont icon-guanbi1"></div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="ct">
					<div class="wrap">
						<!--<h4 class="cate_trade"><i></i><span>行业</span></h4>-->
						<ul>
							<li t_data="1" class="a_selected">
								<i></i><span>原味</span><i class="e"></i>
							</li>
							<li t_data="2">
								<i></i><span>鲜虾味</span><i class="e"></i>
							</li>
							<li t_data="2">
								<i></i><span>烧烤味</span><i class="e"></i>
							</li>
							<li t_data="2">
								<i></i><span>海苔味</span><i class="e"></i>
							</li>
							<li t_data="2">
								<i></i><span>烧烤味</span><i class="e"></i>
							</li>
							<li t_data="2">
								<i></i><span>番茄味</span><i class="e"></i>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<!--待定功能-->
			<!--地点选择-->
			<div class="location_page">
				<div class="hd">
					<div class="wrap">
						<div class="fl">
							<a href="#" onclick="return false">
								<i class="city_name_btn">
								<span class="city_name"><h3>兰州</h3></span>
								<span class="iconfont icon-drop"></span>
								</i>
							</a>
							<span><h3>选择地址</h3></span>
						</div>
					</div>
					<div class="fr iconfont icon-guanbi1"></div>
				</div>

				<div class="ct">
					<div class="ct_ht">
						<div class="search_input">
							<input type="text" name="" id="" value="" placeholder="搜索城市" />
							<i class="clear_btn iconfont icon-guanbi"></i>
						</div>
					</div>

					<div class="city_list">
						<div class="hot_city">
							<h3>热门城市</h3>
							<form action="" method="post">
								<input type="button" name="" id="" value="西安" />
								<input type="button" name="" id="" value="兰州" />
								<input type="button" name="" id="" value="上海" />
								<input type="button" name="" id="" value="北京" />
								<input type="button" name="" id="" value="杭州" />
								<input type="button" name="" id="" value="南京" />
								<input type="button" name="" id="" value="深圳" />
								<input type="button" name="" id="" value="无锡" />
								<input type="button" name="" id="" value="天津" />
								<input type="button" name="" id="" value="石家庄" />
								<input type="button" name="" id="" value="郑州" />
								<input type="button" name="" id="" value="成都" />
							</form>
						</div>
					</div>
					<div class="wrap">
						<ul>
							<li c_data="0" style="font-weight:700;">
								<i style="background:none;width:0;margin-right:0;" class="s"></i>
								<span>甘肃省</span>
							</li>
							<li c_data="0">
								<i style="background:none;width:20px;margin-right:0;" class="s"></i>
								<span>兰州</span>
							</li>
							<li c_data="0">
								<i style="background:none;width:20px;margin-right:0;" class="s"></i>
								<span>武威</span>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
				<div class="sn">
					<div class="sn_ht">
						<div class="search_input">
							<input type="text" name="" id="" value="" placeholder="搜索学校" />
							<i class="clear_btn iconfont icon-guanbi"></i>
						</div>
					</div>
					<div class="wrap">
						<ul>
							<li c_data="0" style="font-weight:700;">
								<i style="background:none;width:0;margin-right:0;" class="s"></i>
								<span>七里河区</span>
							</li>
							<li c_data="0">
								<i style="background:none;width:20px;margin-right:0;" class="s"></i>
								<span>兰州工业学院</span>
							</li>
							<li c_data="0">
								<i style="background:none;width:20px;margin-right:0;" class="s"></i>
								<span>兰州理工大学</span>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>

			<!--地点选择end-->
			<!--个人信息-->
			<div class="person_info">
				<div class="hd">
					<div class="wrap">
						<div class="defind_title">
							个人中心
						</div>
					</div>
					<div class="fr iconfont icon-guanbi1"></div>
				</div>
				<div class="content_box">
					asdfasdf
				</div>
			</div>

			<!--个人信息end-->
			<!--订单管理-->
			<div class="order_mang">
				<div class="hd">
					<div class="wrap">
						<div class="defind_title">
							订单管理
						</div>
					</div>
					<div class="fr iconfont icon-guanbi1"></div>
				</div>
				<div class="content_box">

				</div>

			</div>
			<!--订单管理  ---end-->
			<!--购物车-->
			<div class="commodity_car">
				<div class="hd">
					<div class="wrap">
						<div class="defind_title">
							购物车
						</div>
					</div>
					<div class="fr iconfont icon-guanbi1"></div>
				</div>
				<!--购物车end-->
			</div>
			<!--我的收藏-->
			<div class="my_collection">
				<div class="hd">
					<div class="wrap">
						<div class="defind_title">
							我的收藏
						</div>
					</div>
					<div class="fr iconfont icon-guanbi1"></div>
				</div>
				<div id="content_box">
					<div class="car_commodity_box">
						asdfasdfs
					</div>
					<div class="car_commodity_box">
						asdfasdfs
					</div>
					<div class="car_commodity_box">
						asdfasdfs
					</div>
					<div class="car_commodity_box">
						asdfasdfs
					</div>
					<div class="car_commodity_box">
						asdfasdfs
					</div>
				</div>					
				
			</div>

			<!--我的收藏end-->
			<!--消费记录-->
			<div class="purchase_history">
				<div class="hd">
					<div class="wrap">
						<div class="defind_title">
							消费记录
						</div>
					</div>
					<div class="fr iconfont icon-guanbi1"></div>
				</div>
				<br />
				<div class="content_box">

				</div>
			</div>
			<!--消费记录end-->
			<!--呼叫包裹侠-->
			<div class="call_person">
				<div class="hd">
					<div class="wrap">
						<div class="defind_title">
							呼叫包裹侠
						</div>
					</div>
					<div class="fr iconfont icon-guanbi1"></div>
				</div>
				<div class="content_box">
					<div class="content_box_card">
					</div>

				</div>

			</div>

			<!--呼叫包裹侠end-->
			<!--关于我们-->
			<div class="about_us">
				<div class="hd">
					<div class="wrap">
						<div class="defind_title">
							关于我们
						</div>
					</div>
					<div class="fr iconfont icon-guanbi1"></div>
				</div>
				<div class="content_box">

				</div>

				<!--关于我们---end-->
			</div>
		</div>

		<script src="<?php echo (JS_URL); ?>app.js" type="text/javascript" charset="utf-8"></script>
	</body>

</html>