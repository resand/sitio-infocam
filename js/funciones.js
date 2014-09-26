$(function(){

	$('.select').click(function(){
		$(".seccion").hide();
      $('#d'+this.id).fadeIn(500);
      $('.select').removeClass('current-page');
      $(this).addClass('current-page');
      //$('html,body').animate({scrollTop: $('#ancla').offset().top},1400);
	});
	/*$('#estadistica').click(function(){
		$('#galeria-estadistica').load('galeria-estadistica.html');
	});*/

	






















});