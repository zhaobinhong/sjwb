function tBox(){
	//h = $(window).height();
	t = $(document).scrollTop();
	if(t > 150){
		$(".tbox").fadeIn(300);
	}else{
		$(".tbox").fadeOut(300);
	}
}

$(document).ready(function(e){

	tBox();

	$("#gotop").click(function(){
		$(document).scrollTop(0);
	})
});

$(window).scroll(function(e){
	tBox();
})
