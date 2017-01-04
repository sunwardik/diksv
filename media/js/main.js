$(function(){
		$('.topmenu a').bind({
			'mouseover':function(){
			//text=$(this).text();
			//console.log(text);
			color=$(this).attr('data-color');
			body=$(this).attr('data-body');
			$('empty').text(body);
			$('.shapka').css({
				'background':color
			})
			},
			'mouseout':function(){
				$('.shapka').css({
					'background':'url(media/img/logo.png)',
				})
			}
		})
	//конец работы jquery
});