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
	    		<input type="text" name="inputTask" value="" placeholder="Do something...">
	    		<div class="add-button" onclick="clickButton(this, 'add')">
	    			+
	    		</div>
    		</div>
		</div>
		
		<script type="text/javascript">
			function clickButton(el, typebutton) {
			  	let formData = new FormData();

			  	// добавим ещё одно поле
			  	if (typebutton ==="add") {
			  		let inputTask = document.getElementsByName('inputTask')[0].value;
			  		if (inputTask.length<1) {
			  			return;
			  		}
			  		formData.append("typeClick", "add");
			  		formData.append("task", inputTask);

			  	} else {
			  		let id = el.parentElement.parentElement.getAttribute("data-id");
			  		formData.append("taskId", id);
			  		formData.append("typeClick", typebutton);
			  	}

			  	// отправим данные
			  	let xhr = new XMLHttpRequest();
			  	xhr.open("POST", "index.php");
			  	xhr.responseType = 'json';
			  	xhr.send(formData);
			  	xhr.onload = () => {
			  		//console.log(xhr.response)
			  		if (xhr.response.success === true) {
			  			location.reload() // window.location.reload();window.reload;
			  		}
			  	}
			}
			
		</script>
    </body>
</html>