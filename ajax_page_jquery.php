<html>
	<head>
		<link rel="stylesheet" href="task-js.css">		
	</head>
    <body>
    	<div class="main-container">
    		<p>TODO List</p>  
    		<div class="main-block">
    			<?php foreach ($tasks as $task): ?>	    				
		    		<div class="task" data-id="<?php echo $task['id']; ?>">
		    			<div class="task-button">
		    				<div class="check-button button" name="check">
		    					v
		    				</div>
		    			</div> 
		    			<div class="task-text">
		    				<div class="border-text 
		    					<?php echo ($task['is_checked']==1) ? 'done' : ''; ?>
		    				">
		    					<?php echo htmlentities($task['title']); ?>
		    				</div>
		    			</div>
		    			<div class="task-button">
		    				<div class="del-button button" name="del">
		    					x
		    				</div>
		    			</div>
		    		</div>				    	
	    		<?php endforeach; ?>
	    		<input type="text" name="inputTask" value="" placeholder="Do something...">
	    		<div class="add-button button" name="add">
	    			+
	    		</div>
    		</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </body>
    <script type="text/javascript">
    	$('div.button').on('click', function() {
            let typebutton = $( this ).attr("name");
            let post =[];

            if (typebutton === "add") {
		  		let inputTask = $( 'input[name="inputTask"]' ).val();
		  		if (inputTask.length < 1) {
		  			return;
		  		}
		  		post = {
		  			typeClick : "add",
		  			task : inputTask
		  		};
		  	} else {
		  		let id = $( this ).closest('div[class="task"]').attr("data-id");
		  		post = {
		  			typeClick: typebutton, 
		  			taskId: id
		  		};		  		
		  	}
		  	// отправим jquery данные
			$.post(
				'index.php', 
				post,
				function(res){ 
					if (res) {
						location.reload();	
					}
				}
			);
        });
	</script>
</html>