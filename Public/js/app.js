$(window).on('DOMContentLoaded', function() {
	
//	$('#sort_content').addClass('show');
//	$('.order_mang').addClass('show');
//		$('#container,#head,#user').addClass('pull');
	
	//	$('#sort_content').addClass('show');
	//	$('.location_page').addClass('show');
	setTimeout(function() {
		if(!document.getElementById('newwrap')) {
			img_loader();
		}
		$('html').removeClass('loading');
	}, 400);
});
var img_loader = function() {
	var imgReady = (function() {
		var list = [],
			intervalId = null,
			tick = function() {
				var i = 0;
				for(; i < list.length; i++) {
					list[i].end ? list.splice(i--, 1) : list[i]();
				};
				!list.length && stop();
			},
			stop = function() {
				clearInterval(intervalId);
				intervalId = null;
			};
		return function(url, ready, load, error) {
			var onready, width, height, newWidth, newHeight, img = new Image();
			img.src = url;
			if(img.complete) {
				ready.call(img);
				load && load.call(img);
				return;
			};
			width = img.width;
			height = img.height;
			img.onerror = function() {
				error && error.call(img);
				onready.end = true;
				img = img.onload = img.onerror = null;
			};
			onready = function() {
				newWidth = img.width;
				newHeight = img.height;
				if(newWidth !== width || newHeight !== height || newWidth * newHeight > 1024) {
					ready.call(img);
					onready.end = true;
				};
			};
			onready();
			img.onload = function() {
				!onready.end && onready();
				load && load.call(img);
				img = img.onload = img.onerror = null;
			};
			if(!onready.end) {
				list.push(onready);
				if(intervalId === null) intervalId = setInterval(tick, 40);
			};
		};
	})();
	$('.works').each(function() {
		var e = $(this).find('img'),
			v = e.attr('vsrc');
		imgReady(v, function() {
			e.attr('width', this.width);
			e.attr('height', (($(window).width() - 10) / this.width) * this.height);
			e.attr('src', v);
		});
	});
}

//商品购买数量控制
function sub(obj) {
	alert(obj)
	var num = obj.nextElementSibling;
	var pnum = Number(num.value);
	if(pnum == 0) {
		num.value = pnum - 0;

	} else {
		num.value = pnum - 1;

		carshow(num.value);

	}

}

function add(obj) {
	var num = obj.previousElementSibling;
	var pnum = Number(num.value);
	num.value = pnum + 1;
	carshow(num.value);
}
//商品购买数量控制-------end------------
//carshow()
function carshow(statu) {
	var car = document.getElementById('car');
	//	var num = car.getQuery('.car_money');
	//	console.log(num)
	if(statu != 0) {
		car.style.visibility = 'visible'
	} else {
		//			if (num.innerHTML === 0 ) {
		car.style.visibility = 'hidden'
		//			} 
	}
}

$('#sort .sort_box div').on('click', function() {
	$('#sort_content').addClass('show');
	$('.asort').eq($(this).index()).addClass('show');
});
$('.asort .hd .fr').on('click', function() {
	$('#sort_content').removeClass('show');
	var _this = $(this);
	setTimeout(function() {
		_this.parent().parent().parent().removeClass('show');
	}, 300);
});

$('#head .select_location').on('click', function() {
	$('#sort_content').addClass('show');
	$('.location_page').addClass('show');
});
var dd = 0;
$('.my_page').on('click', function(e) {
		if($('#container').hasClass('push') == false) {
			if(dd == 0) {
				$('#container,#head,#user').addClass('pull');
				dd = 1;
				$(window).bind('touchmove', function(e) {
					e.preventDefault();
					e.stopImmediatePropagation();
				});
			} else {
				$('#user,#container,#head').removeClass('pull');
				dd = 0;
				$(window).unbind('touchmove');
			}
		}
		return false;
	});
$('.push_msk').bind('touchmove', function(e) {
		if($('#container').hasClass('pull')) {
			$('.my_page').trigger('click');
		} 
		return false;
	});
$('.location_page .hd .fr').on('click', function() {
	$('.ct').css({"display":"none"})
	$('.sn').css({"display":"block"})
	$('#sort_content').removeClass('show');
	var _this = $(this);
	setTimeout(function() {
		_this.parent().parent().removeClass('show');
	}, 300);
});
//城市   学校 切换
$('.city_name_btn').on('click', function() {
	$('.ct').css({"display":"block"})
	$('.sn').css({"display":"none"})

})

//清除input   value
$('.clear_btn').on('click', function() {
	$('.clear_btn').prev().val("");
});

//我的信息    订单管理    呼叫包裹侠    关于我们
//function person_info() {
//	$('#sort_content').addClass('show');
//	$('.person_info').addClass('show');
//};
//function order_mang() {
//	$('#sort_content').addClass('show');
//	$('.order_mang').addClass('show');
//};
//function commodity_car(){
//	$('#sort_content').addClass('show');
//	$('.commodity_car').addClass('show');
//};
//function my_collection(){
////	$('#sort_content').addClass('show');
////	$('.my_collection').addClass('show');
//}
//function purchase_history(){
//	$('#sort_content').addClass('show');
//	$('.purchase_history').addClass('show');
//}
//function call_person() {
//	$('#sort_content').addClass('show');
//	$('.call_person').addClass('show');
//};
//function about_us() {
//	$('#sort_content').addClass('show');
//	$('.about_us').addClass('show');
//};
//$('.fr').on('click', function() {
//	$('#sort_content').removeClass('show');
//	var _this = $(this);
//	setTimeout(function() {
//		_this.parent().parent().removeClass('show');
//	}, 300);
//});
