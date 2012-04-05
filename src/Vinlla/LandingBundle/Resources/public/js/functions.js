$(document).ready(function() {
	// Rollover function for the form submit element
    $("input:image[src$=img/subscribeButton.png]").hover(function() {
        $(this).attr("src", "img/subscribeButtonOver.png")
    }, function(){
        $(this).attr("src", "img/subscribeButton.png")    
    });

    $("input:image[src$=img/submitButton.png]").hover(function() {
        $(this).attr("src", "img/submitButtonOver.png")
    }, function(){
        $(this).attr("src", "img/submitButton.png")    
    });

	// Tipsy Init
	$(function() {
		$('ul.socialNav li a').tipsy({fade: true, gravity: 'n'});
		$('div#contactInformation a').tipsy({fade: true, gravity: 'n'});
	});
	
	// Activate the tabs
	$(".tabContent").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tabContent:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tabContent").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});
});
