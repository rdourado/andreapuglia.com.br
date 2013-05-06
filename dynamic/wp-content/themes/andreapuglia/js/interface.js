// New Window
$('a').each(function() {
	var a = new RegExp('/' + window.location.host + '/');
	if (!a.test(this.href)) 
		$(this).attr('target','_blank');
});

// Newsletter
if (typeof newsletter_check !== "function") {
window.newsletter_check = function (f) {
	var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
	if (!re.test(f.elements["ne"].value)) {
		alert("Por favor, digite um e-mail válido.");
		return false;
	}
	if (f.elements["nn"] && (f.elements["nn"].value == "" || f.elements["nn"].value == f.elements["nn"].defaultValue)) {
		alert("Por favor, digite seu nome.");
		return false;
	}
	if (f.elements["ny"] && !f.elements["ny"].checked) {
		alert("You must accept the privacy statement");
		return false;
	}
	return true;
}
}

// Gallery
if ($('body').hasClass('page-template-template-campanha-php') || $('body').hasClass('page-template-template-colecao-php')) {
	var current = 0,
		total 	= $('.thumb').length;
	$('#preview').width($('#container').width() + 120);
	if (total > 1) {
		$('.thumb a').click(function(e){
			e.preventDefault();
			var $this = $(this),
				img = new Image(),
				src = $this.attr('href'),
				info = $this.data('info'),
				index = $this.data('index');

			if (info) {
				info = info.replace(/\[/g,'<b>');
				info = info.replace(/\]/g,'</b>');
				info = info.replace(/\|/g,'<br>');
			}

			if (current != index) {
				current = index;
				$('#container').fadeTo('normal',0);
				$(img).load(function(){
					$('#container').remove();
					$('#preview').prepend(this);
					$(this).fadeTo(0,0).fadeTo('normal',1);
					$('#preview').width($(this).width() + 120);
					try{ $('.info').html(info); }catch(e){}
				}).attr('src',src).attr('id','container').addClass('block');
			}

			$('html,body').animate({scrollTop: $('#container').offset().top - 10},'fast');
		});
		$('.prev').click(function(e){
			e.preventDefault();
			var index = current - 1 > 0 ? current - 1 : total - 1;
			$('.thumb:eq('+index+') a').trigger('click');
		});
		$('.next').click(function(e){
			e.preventDefault();
			var index = current + 1 < total ? current + 1 : 0;
			$('.thumb:eq('+index+') a').trigger('click');
		});
	}
}