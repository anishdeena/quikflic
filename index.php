<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>QuikFlic</title>
<link rel="stylesheet" href="/quikflic/css/bootstrap.css">
</head>

<body>
<script src="js/jquery-1.7.2.js"></script>
<script src="js/functions.js"></script>
	<div class="container-fluid">
		<div class="navbar">
  			<div class="navbar-inner">
    			<div class="container">
    				<a class="brand" href="#">
  						QuikFlic
					</a>
    			</div>
  			</div>
		</div>
  		<div class="row-fluid">
  		
    		<div class="span2">
      			<!--Sidebar content-->
      			<ul class="nav nav-list">
      				<li class="nav-header">
      					General
      				</li>
  					<li>
    					<a href="#">
      					<i class="icon-home"></i>
     	 					Home
    					</a>
  					</li>
  					<li>
    					<a href="#">
      					<i class="icon-file"></i>
     	 					Files
    					</a>
  					</li>
  					<li>
    					<a href="#">
      					<i class="icon-envelope"></i>
     	 					Mails(0)
    					</a>
  					</li>
				</ul>
    		</div>
    		<div class="span4">
      			<!--Body content-->
      			<form class="well" id="movieform" action="">
  					<label>Movie Name</label>
  					<input type="text" class="span10" id="moviename">
  					<span class="help-block">Type the name of the movie.</span>
  					<button type="button" class="btn" id="moviename-submit">Submit</button>
				</form>
    		</div>
    		<div class="span6">
    			<div id="newdiv"></div>
    		</div>
  		</div>
	</div>
</body>
</html>