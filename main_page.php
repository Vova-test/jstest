<html>
	<head>
		<link rel="stylesheet" href="task-js.css">
		
	</head>
    <body>
    	<div class="main-container">
    		<p>TODO List</p>  
    		<form name="atTask" action="index.php" method="post">
    			<input type="hidden" name="taskId">
    			<input type="hidden" name="typeClick">
	    		<div class="main-block">
	    			<?php foreach ($tasks as $task): ?>	    				
			    		<div class="task" data-id="<?php echo $task['id']; ?>">
			    			<div class="task-button">
			    				<div class="check-button" onclick="clickButton(this, 'check')">
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
			    				<div class="del-button" onclick="clickButton(this, 'del')">
			    					x
			    				</div>
			    			</div>
			    		</div>				    	
		    		<?php endforeach; ?>
		    		<a href="input_task_page.php">
			    		<div class="add-button">
			    			+
			    		</div>
		    		</a>
	    		</div>
    		</form>
		</div>
		
		<script type="text/javascript">
			function clickButton(el, typebutton) {
				let inputId = document.getElementsByName('taskId')[0];
				let inputType = document.getElementsByName('typeClick')[0];
				let att = el.parentElement.parentElement.getAttribute("data-id");
				inputId.value = att;
				inputType.value = typebutton;
				document.getElementsByName('atTask')[0].submit();
				//console.log(typebutton);
			}
			
		</script>
    </body>
</html>