$( document ).ready(function() {
    $(".title").hide().delay(1000).fadeIn(2000);
    $(".login-form").delay(2000).animate({'top':'0vw'},1000);

    $("#moveToForg").on('click', function(){
    	$(".login-form").animate({'top':'-26.04vw'},1000, function(){
    		$(".login-form-forg").animate({'left':'0'},1000);
    	});
    });
});