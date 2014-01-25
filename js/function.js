//  Nivo Slider Banner principal
$(window).load(function() {
	$('#slider').nivoSlider();
});


//  Invasão retror
var intervalId;
var slidetime = 5500; // milliseconds between automatic transitions

$(document).ready(function() {	

  // Comment out this line to disable auto-play
	intervalID = setInterval(cycleImage, slidetime);

	$(".main_image .desc").show(); // Show Banner
	$(".main_image .block").animate({ opacity: 0.85 }, 1 ); // Set Opacity

	// Click and Hover events for thumbnail list
	$(".image_thumb ul li:first").addClass('active'); 
	$(".image_thumb ul li").click(function(){ 
		// Set Variables
		var imgAlt = $(this).find('img').attr("alt"); //  Get Alt Tag of Image
		var imgTitle = $(this).find('a').attr("href"); // Get Main Image URL
		var imgDesc = $(this).find('.block').html(); 	//  Get HTML of block
		var imgDescHeight = $(".main_image").find('.block').height();	// Calculate height of block	
		
		if ($(this).is(".active")) {  // If it's already active, then...
			return false; // Don't click through
		} else {
			// Animate the Teaser				
			$(".main_image .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
				$(".main_image .block").html(imgDesc).animate({ opacity: 0.85,	marginBottom: "0" }, 250 );
				$(".main_image img").attr({ src: imgTitle , alt: imgAlt});
			});
		}
		
		$(".image_thumb ul li").removeClass('active'); // Remove class of 'active' on all lists
		$(this).addClass('active');  // add class of 'active' on this list only
		return false;
		
	}) .hover(function(){
		$(this).addClass('hover');
		}, function() {
		$(this).removeClass('hover');
	});
			
	// Toggle Teaser
	$("a.collapse").click(function(){
		$(".main_image .block").slideToggle();
		$("a.collapse").toggleClass("show");
	});
	
	// Function to autoplay cycling of images
	// Source: http://stackoverflow.com/a/9259171/477958
	function cycleImage(){
    var onLastLi = $(".image_thumb ul li:last").hasClass("active");       
    var currentImage = $(".image_thumb ul li.active");
    
    
    if(onLastLi){
      var nextImage = $(".image_thumb ul li:first");
    } else {
      var nextImage = $(".image_thumb ul li.active").next();
    }
    
    $(currentImage).removeClass("active");
    $(nextImage).addClass("active");
    
		// Duplicate code for animation
		var imgAlt = $(nextImage).find('img').attr("alt");
		var imgTitle = $(nextImage).find('a').attr("href");
		var imgDesc = $(nextImage).find('.block').html();
		var imgDescHeight = $(".main_image").find('.block').height();
					
		$(".main_image .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
      $(".main_image .block").html(imgDesc).animate({ opacity: 0.85,	marginBottom: "0" }, 250 );
      $(".main_image img").attr({ src: imgTitle , alt: imgAlt});
		});
  };
	
});// Close Function



//contato
function validar()
{
	if (document.f1.nome.value == "")
	{
		alert('Favor informar seu Nome.');
		document.f1.nome.focus();
		return false;
	}
	if (document.f1.email.value == "")
	{
		alert('Favor informar seu E-mail.');
		document.f1.email.focus();
		return false;
	}
	if (document.f1.endereco.value == "")
	{
		alert('Favor informar seu Endereço.');
		document.f1.endereco.focus();
		return false;
	}
	
	if (document.f1.bairro.value == "")
	{
		alert('Favor informar seu Bairro.');
		document.f1.bairro.focus();
		return false;
	}
	if (document.f1.cidade.value == "")
	{
		alert('Favor informar sus Cidade.');
		document.f1.cidade.focus();
		return false;
	}	
	if (document.f1.estado.value == "")
	{
		alert('Favor informar sus Cidade.');
		document.f1.estado.focus();
		return false;
	}	
	if (document.f1.tel.value == "")
	{
		alert('Favor informar seu Telefone.');
		document.f1.tel.focus();
		return false;
	}
	if (document.f1.msg.value == "")
	{
		alert('Favor deixe sua mensagem.');
		document.f1.msg.focus();
		return false;
	}
}
//máscara de contato
jQuery(function($){
   $(".telefone").mask("(99) 9999-9999");
});

//widgets facebook
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));