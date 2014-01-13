// hide and show extra-services
$(function(){

    //--------------------- to update the text on the page -------------------------------
   	$("[data-editable]").each(function(){
		var url = window.location.href;

		var theClass = "";
		if($(this).hasClass("wysiwyg") == true){
			theClass = "wysiwyg";
		}

		var options = {
				type: "textarea",
				cssclass : theClass,
				submitdata : {
					_method: "PUT",
					field: $(this).attr("data-editable")
				},
				//loadurl : url+"?field="+$(this).attr("data-editable"),
				submit: "OK"
			};
		$(this).editable(url,options);
	});

	$(document).on("DOMNodeInserted",function(event){
		if($(event.target).hasClass("wysiwyg") == true){
			$(event.target).find("textarea").cleditor();
		}
	});


	$('.fa-bars').on('click', function(){
		// console.log($(this).next());
		$(this).next().slideToggle();
		console.log('toggled');
	});

	console.log($(window).width());

	if($(window).width() >= 480){

		$('.fancybox').fancybox();
	}
});

$(window).resize(function(){
	if($(window).width() >= 480){

		$('.fancybox').fancybox();
		console.log('Handler for .resize() called');
	}
});