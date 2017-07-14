
$('.fr').on('click', function() {
	window.history.back(-1); 
});
$('.icon-shanchu').on('click',function(){
	$(this).parent().parent().addClass('hide');
})
$('input[value="取消订单"]').on('click',function(){
	$(this).parent().parent().addClass('hide');

})
$('.out_circle').on('click',function(){
	if ($(this).children().hasClass('show')) {
		$(this).children().removeClass('show');
		$(this).children().addClass('hide');
	} else{
		$(this).children().addClass('show');
	}

})
var price= 0;
var num = 0;
$('input[value="-"]').on('click',function(){
	if (this.nextElementSibling.value == 0) {
		this.nextElementSibling.value = 0
	} else{
	--this.nextElementSibling.value
	}
})
$('input[value="+"]').on('click',function(){
	var price = $(this).parent().siblings()
	var a = this.previousElementSibling.value
		++a
		this.previousElementSibling.value = a
	num++
})