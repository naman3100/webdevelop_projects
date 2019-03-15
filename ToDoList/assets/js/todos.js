		// Check Off Specific todos By Clicking

		 $("ul").on("click","li",function(){//when an li is clicked inside of a ul then trigger the code 
		 // 	//if li is gray
		 // 	if($(this).css("color") === "rgb(128, 128, 128)"){
		 // 		//turn it black
		 // 		$(this).css({
		 // 			color:"black" ,
		 // 			textDecoration:"none"
		 // 		})
		 // 	}
		 // 	//else
		 // 	else
		 // 	{
		 // 		$(this).css(
			// 	{
		 // 		//turn it gray
			// 	color : "gray"	,
			// 	textDecoration : "line-through"
			// 	});
		 // 	}
		 	

		 	//	NEW APPROACH

		 $(this).toggleClass("completed");
			
		});


		 //click on x to delete to do
		 $("ul").on("click","span",function(event)
		 {
		 	$(this).parent().fadeOut(500,function()//here this refers to the span
		 		{
		 			$(this).remove();//here this refers to the li not the span 
		 		});
		 	event.stopPropagation();
		 })

		 $("input[type='text']").keypress(function(event)
		 {
		 		if(event.which===13)
		 		{
		 			var todoText = $(this).val();
		 			$(this).val("");
		 			//create a new li and add to ul by append
		 			$("ul").append("<li><span><i class='fa fa-trash'></i></span> "+todoText+ "</li>")
		 			
		 		}
		 })

		 $(".fa-plus").on("click",function()
		 {
		 		 $("input[type='text']").fadeToggle();
		 });

