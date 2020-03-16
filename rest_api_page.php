<html>
	<head>
		<link rel="stylesheet" href="task-js.css?">
		<style>
			
	        input {
	        	width: 100%;
	        	font-size: 25px;
	        	padding: 5px;
	        }

	    </style>
	</head>
    <body>
    	<div class="main-container">
    		<p>Rest API</p>  
    		<div class = "main-block">
    			<form class="form-margin" action="test_restapi.php" method="post">
    				<lable>Full Name</lable>
	    			<input type="text" name="full-name" value="" placeholder="Name">
	    			<lable>Code country</lable>
	    			<input type="text" name="code" value="" placeholder="code">
	    			<lable>Capital city</lable>
	    			<input type="text" name="capital-city" value="" placeholder="Capital">
		    		<input class="add-button" id="Send" type="submit" size="18" name="Send">
		    		<a href="index.php">
			    		<div class="cancel-button">
			    			Cancel
			    		</div>
			    	</a>
		    	</form>	
    		</div>
		</div>
    </body>
</html>