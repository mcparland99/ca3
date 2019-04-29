    <head>
        <title>Football League Standings</title>
        
        <!-- Main CSS -->
        <link href="../css/main.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Sidebar CSS -->
        <link href="css/simple-sidebar.css" rel="stylesheet">

        <!-- Favicon  -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
                     
             
        <script>
	$(document).ready(function(){
			var url = "http://api.flickr.com/services/feeds/photos_public.gne?" +
	    			  "format=json&jsoncallback=?&tags=football match";
	
			$.getJSON(url, function(data){
				var html = "";
				$.each(data.items, function(i, item){
					html += "<h2>" + item.title + "</h2>";	
					html += "<img src=" + item.media.m + ">";
					html += "<p></p>";
				});
				$("#photos").html(html);
			});          
        });
    </script>
	
    </head>