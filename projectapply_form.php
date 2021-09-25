<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body >

   <div class="container">
   	<div class="row">
   		<div class="col-lg-6">
   			<br>
   			<h3>Apply with project</h3>

   			<form action="project_apply.php" method="post">
			 

			<div class="form-class">
				<label>Project Name</label>
				<input type="text" name="projectname" autocomplete="off" class="form-control">
			</div>
			 


			 <div class="form-class">
				<label>Project Idea</label>
				<input type="text" name="projectidea" autocomplete="off" class="form-control">
			</div>


			<div class="form-class">
				<label>Maximum Team Limit</label>
				<input type="text" name="team" autocomplete="off" class="form-control">
			</div>

			<div class="form-class">
				<label>Technology used</label>
				<input type="text" name="technology" autocomplete="off" class="form-control">
			</div>

			<div class="form-class">
				<label>Description</label>
				<textarea class="form-control" name="description">
				</textarea>
			</div>

			<div class="form-class">
				<label>Status</label>
				<input type="text" name="Status" autocomplete="off" class="form-control">
			</div>

			<div class="form-class">
				<label>Github Link</label>
					<input type="text" name="Github" autocomplete="off" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
   		</div>
   		
   	</dir>
   	
   </div>

</body>
</html>











