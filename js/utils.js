var hits = 5;

function fontSize(action, container){

	container = typeof(container) != 'undefined' ? container : '#cont';

	var hitIncrease = 0;

	var hitDecrease = 0;

	

	var pegaTodos = {pega : function(maiorDeTodos){

	var filho;

	

	// Passo por todos os controles.

	jQuery(maiorDeTodos).children().each(function(i){

	filho = jQuery(this);

	

	$fs = parseInt(jQuery(filho).css('font-size'));

	if(action=="plus" && $fs<16) $fs+=1;

    else if(action=="minus" && $fs>9) $fs-=1;

	jQuery(filho).css('font-size', $fs);

	

	if (jQuery(filho).children().length != 0) {

	pegaTodos.pega(jQuery(filho));

	}

	});

	}};

	

	pegaTodos.pega(jQuery(container));

	

	if (hitIncrease == 1)hits+=1;

	else if (hitDecrease == 1)hits-=1;

}



function vrsImprEstat()

{

	window.open(location.href+"&impressao=1", '', 'location=no, directories=no, resizable=no, scrollbars=yes, menubar=no, left=100, top=100, width=682, height='+Number(Number(jQuery("#cont").height())+Number(jQuery("#titulo").height())));

}



jQuery(function(){

	jQuery('#decrease').click(function(){ fontSize('minus'); });

	jQuery('#increase').click(function(){ fontSize('plus'); });

});

