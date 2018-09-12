(function($){
	$('#slider-button').on('click',function(event){
		// e.preventDefault();
		event.preventDefault();
		$.ajax({
		  	method: "POST",
		  	url: "upload.php",
		  	contentType: false,
         	cache: false,
   			processData:false,
		  	data:new FormData(myForm)
		})
		  .done(function( msg ) {
		   $("#message").html(msg);
		  });
	});
	$("#file-upload").change(function() {
		$("#message").empty(); // To remove the previous error message
		var file = this.files[0];
		console.log(file);
		var imagefile = file.type;
		var match= ["image/jpeg","image/png","image/jpg"];
	  if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
		{
			$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
			$(this).empty();
			return false;
		}
	});
})(jQuery);