 $(function() {
    $("#moviename-submit").click(function() {
      // validate and process form here
    	var name = $("#moviename").val();
    	 var dataString = 'name='+ name;
    	  //alert (dataString);
    	  $.ajax({
    	    type: "POST",
    	    url: "getMovieDetailsByName.php",
    	    data: dataString,
    	    //datatype: 'jsonp',
    	    success: function(data) {
    	    	//alert(data);
    	    	//var obj = $.parseJSON(data);
    	    	$('#newdiv').html(data);
    	    	//$('#newdiv').html('<h2>Found ' + obj.total + ' results for ' + name + '</h2>');
    	    	 //var movies = obj.movies;
    	    	 //$.each(movies, function(index, movie) {
    	    	   //$('#newdiv').append('<h1>' + movie.title + '</h1>');
    	    	   //$('#newdiv').append('<img src="' + movie.posters.thumbnail + '" />');
    	    	 //});
    	    },
    	    error: function() {
    	    	$('#newdiv').html('<h2>Error!</h2>');
    	    }
    	  });
    });
});