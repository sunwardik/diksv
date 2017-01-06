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
var fx={
	'initModal': function(){
		if($('.modal-window').length==0){
			
$('<div>').attr('id','jquery-overlay')
		  .fadeIn(2000)
		  .appendTo('body');
			
			
			
			
			
			return $('<div>')
					.addClass('modal-window')
					.appendTo('body');
		}else{
			return $('.modal-window');
		}
	}
}
$('.link').bind('click',function(e){
	e.preventDefault();
	var data=$(this).attr('data-id');
	//console.log(data);
	modal=fx.initModal();
	$('<a>').attr('href','#') //создаем ссылку
		.addClass('modal-close-btn')
		.html('&times')
		.click(function(e){
			e.preventDefault();
			$('#jquery-overlay').fadeOut(1000,function(){
				$(this).remove();
			});
			
			modal.remove(); //закрывается окно
		}).appendTo(modal);
	//подключение ajax
	$.ajax({
		type:'Post',
		url:'ajax.php',
		data:'id='+data,
		success:function(data){
			modal.append(data);
		},
		error:function(msg){
			modal.append(msg);
		}
	});
});

 

	//конец работы jquery
});