$(document).ready(function(){
	//Set options
	var speed=500;  				//fade speed
	var autoswitch=true;  			//auto slider options
	var autoswitch_speed=4000; 		//auto slider speed

	// Add initial active class
	$(".slide").first().addClass("active");

	// Hide all aslides
	$(".slide").hide();

	// Show first slide
	$(".active").show();

	// playing with buttons /addind an event handler
	$("#next").on("click",nextSlide);

	$("#prev").on("click",prevSlide);

	//For automatically change content

	if(autoswitch == true)
	{
		setInterval(nextSlide,autoswitch_speed);
	}

	//  Switch t the next slide
	function nextSlide()
	{
		$(".active").removeClass("active").addClass("oldActive");
		if($(".oldActive").is(":last-child"))
		{
			$(".slide").first().addClass("active");
		}
		else
		{
			$(".oldActive").next().addClass("active");
		}
		$(".oldActive").removeClass("oldActive");
		$(".slide").fadeOut(speed);
		$(".active").fadeIn(speed);
	}
	
	// Switching to previous slide
	function prevSlide()
	{
		$(".active").removeClass("active").addClass("oldActive");
		if($(".oldActive").is(":first-child"))
		{
			$(".slide").last().addClass("active");
		}
		else
		{
			$(".oldActive").prev().addClass("active");
		}
		$(".oldActive").removeClass("oldActive");
		$(".slide").fadeOut(speed);
		$(".active").fadeIn(speed);
	}
});