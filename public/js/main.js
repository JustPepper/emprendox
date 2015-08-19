$('#login-link').click(function() {
	event.preventDefault();
	$('.loginPopup').toggleClass('is-visible');
});

$('.loginPopup').on('click', function(event){
		if( $(event.target).is($('.loginPopup')) || $(event.target).is('.cd-close-form') ) {
			$('.loginPopup').removeClass('is-visible');
		}	
});


$('.topBar-buttons--logged').click(function() {
	$('.sideNav').toggleClass('is-nav-visible');
	$('.topBar').toggleClass('is-nav-visible');
	$('.siteWrapper').toggleClass('is-nav-visible');
});

$('.siteWrapper').click(function() {
	$('.topBar').removeClass('is-nav-visible');
	$('.siteWrapper').removeClass('is-nav-visible');
	$('.sideNav').removeClass('is-nav-visible');
});


$('.footerNav-list h2').click(function() {
	var ancho = $(document).width();
	if (ancho < 768) {
		$(this).next().slideToggle('fast');		
	};
});


$(document).ready(function() {
	var scrollHeight = $('.scrollToDown').height();
	$('.scrollToDown').scrollTop(scrollHeight);
});


$(document).ready(function() {

    $(".messagesThumb-item").click(function() {     

    	console.log('clicked');     

      	$.ajax({ 
      		cache: false, 
	        type: "GET",
	        data: { usuario_id: "5", remitente_id : "67"} ,
	        //dataType: "json",
	        url: "/includes/messagesAjax.php",

	        success: function(response){                    
	            $(".scrollToDown").html(response);
	            //alert(response); 
	        }
		});
	});
});

console.log(SESSION);