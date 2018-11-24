$(document).ready(function(){
	const height=$(window).height();
	const tr=height*0.55;
	console.log(tr);
	console.log(height);
	console.log(scrollY);
	$(document).scroll(function(){
		if(scrollY>(height-tr)){
			$("nav").addClass('sticky');
		}
		else{
			$("nav").removeClass('sticky');
		}
	})

	// $(document).scroll(function(){
	// 	let scroll =$(document).scrollTop();
	// 	$(".slide-img").css('transform', 'translateY('+scroll*.7+'px)');
	// 	// console.log(scroll);
	// })
	


})