<!DOCTYPE html>
<html>
<?php
require_once('conf.php')
?>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
<body>

     <form action="server.php " method="post">
        <div class = "container">
        	<h1> Registration</h1>
			<p> Fill up the form with the correct values</p>
        	 <div class="form-group ">
		      <label for="ID">ID:</label>
		      <input type="ID" class="form-control" id="ID" placeholder="Enter ID" name="ID">
		    </div>
		    <div class="form-group">
		      <label for="First Name">First Name:</label>
		      <input type="First Name" class="form-control" id="pwd" placeholder="Enter First Name" name="First Name">
		    </div>

            <div class="form-group ">
		      <label for="Last Name">Last Name:</label>
		      <input type="Last Name" class="form-control" id="Last Name" placeholder="Enter Last Name" name="Last Name">
		    </div>
		    <div class="form-group">
		      <label for="mail">mail:</label>
		      <input type="mail" class="form-control" id="mail" placeholder="Enter email" name="mail">
		    </div>
		    <div class="form-group">
		      <label for="phone number">phone number:</label>
		      <input type="phone number" class="form-control" id="phone number" placeholder="Enter phone number" name="phone number">
		    </div>

		    <div class="form-group">
		      <label for="pwd">Password:</label>
		      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
		    </div>
		    
            <button type="submit" class="btn btn-primary" name= "create" value="sign up">sign up</button>

            
		 </div>
		</div>
	 </form>
	 <script src="./js/bootstrap.min.js"></script>
 </body>
</html>



