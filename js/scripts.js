jQuery(function ($) {
	var Engine = {
		ui: {
			foundation: function () {
				$(document).foundation();
			}, // end foundation
			hero: function () {
				$("#hero").owlCarousel({
					autoPlay : true,
					loop 	 : true,
					singleItem : true,
					navigation : true,
					pagination : false,
					navigationText : ["",""],
					autoHeight : true,
					rewindNav  : true
				});
			}, // end hero
		}, // end ui
		forms: {
			labels: function () {
				$("#CaptchaV2").attr("placeholder","Enter Code");
				$('input, textarea').placeholder();
			} // end labels
		}, // end forms
		tweaks: {
			footerDate : function(){
				if($("span.auto-copy").size() === 0){return;}
				var currentTime=new Date();
				var year=currentTime.getFullYear();
				$("span.auto-copy").text(year);
			}, // end footer date
			mails : function(){
				$('a[href^="mailto:"]').each(function(){
					var mail = $(this).attr('href').replace('mailto:',''),
						  replaced = mail.replace('/at/','@');
					$(this).attr('href','mailto:' + replaced);
					if($(this).text() === mail) {
						$(this).text(replaced);
					}
				});
			}, // end mail tweak
			selectedNav : function(){
				var path = location.pathname.substring(1);
				if (path) {
					$('nav a[href$="' + path + '"]').parent().addClass('selected');
					$('aside li a[href$="' + path + '"]').parent().addClass('selected');
				};
			}, // end selectedNav
			fastclick : function(){
				FastClick.attach(document.body);
			}, // end fastclick
			versions : function() {
				$('.user-desktop').on('click',function(){
					localStorage.setItem('viewport','desktop');
					location.reload();
				});
				$('.user-mobile').on('click',function(){
				  localStorage.removeItem('viewport');
					location.reload();
				});
					var taste = localStorage.getItem('viewport');
					console.log(taste);
				if(taste == 'desktop'){
					$('.user-mobile').css('display','inline-block');
				}else{
					$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />');
					$('.user-desktop').css('display','inline-block');
				}
			}, // end versions
		} // end tweaks
	};
Engine.ui.foundation();
Engine.ui.hero();
Engine.forms.labels();
Engine.tweaks.footerDate();
Engine.tweaks.mails();
Engine.tweaks.selectedNav();
Engine.tweaks.fastclick();
Engine.tweaks.versions();
});
document.createElement( "picture" );