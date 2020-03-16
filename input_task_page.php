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
    		<p>Input your task and press Save!</p>  
    		<div class = "main-block">
    			<form class="form-margin" action="index.php" method="post">
	    			<input type="text" name="task" value="" placeholder="Do something...">
		    		<input class="add-button" id="save" type="submit" size="18" name="typeClick" value="Save" >
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