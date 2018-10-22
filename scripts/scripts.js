$(document).ready(function () {

	function styling() {
		
        //Collect style names from the 'styles' folder
        var names,
            load = localStorage.getItem('load'),
            currentStyle = localStorage.getItem('currentStyle'),
            title = [];
		
		$.ajax({
			url: './collect-themes.php',
			type: 'post',
			data: {},
			success: function (result) {
				names = JSON.parse(result);
			},
			async: false
		});

        //OPTIONAL: Sort the array before inserting it into the select
        //names.sort();
        //names.reverse();
        //names.sort(function(a, b){return 0.5 - Math.random()});
        
        //Write the names into the select
		$.each(names, function (index, value) {
            title[index] = names[index].replace('.css', '');
            $('select').append('<option value="' + title[index] + '">' + title[index] + '</option>');
		});
		$("option[value='" + currentStyle + "']").prop('selected', true);

        //Load a random style on first visit
		if (load === null || load === true) {
			currentStyle = title[Math.floor(Math.random() * title.length)];
			localStorage.setItem('currentStyle', currentStyle);
			load = false;
			localStorage.setItem('load', false);
		} else {}
        
        //Add button functionality
		$('button[type="submit"][value="Submit"]').on('click', function () {
			var currentStyle = $('option:selected').val().replace('.css', '');
			localStorage.setItem('currentStyle', currentStyle);
		});
		$('button[type="button"][value="Random"]').on('click', function () {
			currentStyle = title[Math.floor(Math.random() * title.length)].replace('.css', '');
			localStorage.setItem('currentStyle', currentStyle);
			window.location.reload();
		});

        //Add the stylesheet and script files to the head
		$('head').append('<link rel="stylesheet" type="text/css" href="/styles/' + currentStyle + '.css">');
		$('head').append('<script type="text/javascript" src="scripts/' + currentStyle + '.js"></script>');
	}
    
	window.onload = styling();
	
});