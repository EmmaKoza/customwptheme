$(function(){


//listen for a change in the selected radio buttons 

	$('.selector').on('change', function(){
	// store the value of the selected button in a variable 
		var selectedOption = $(this).attr('id');
			// console.log(selectedOption);

	// concatenate productPicture on to selected option and store that in a variable
		var selectedOptionX = 'productPicture '+ selectedOption;
		// console.log('yo this works ' + selectedOptionX); 

	//go through each list item and and grab the class name
		var productList = $('.products li');
		productList.each(function(){
			var className = $(this).find('img').attr('class');
				console.log(className);
	//compare the className of the list items with the selected option.  Display ones that are the same and hide the ones that aren't. If the user selects view all then display all. 

				if (className === selectedOptionX){
					$(this).fadeIn();
				} else if (selectedOption === 'viewall'){
					$(this).fadeIn();
				} else if (className !== selectedOptionX){
					$(this).hide();
				}else{

				}			
		});		
	}); 

	$('.burgerWrapper').on('click', function(){
		$('.burger').toggleClass('activeBurger');


	});	

	$('.burgerWrapper').on('click', function(){
		$('.form-container').slideToggle();
	});


	
});

