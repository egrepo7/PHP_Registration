<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

	* {
		padding:0px auto;
	}

	fieldset {
		width:280px;
		background-color:lightgrey;
		box-shadow: 3px 3px black;

	}

	label{
		display:inline-block;
		width:48%;
	}

	p {
		text-align: left;
	}

	label {
		padding: 5px;
	}

	#upload {
		width:40%;
	}

	</style>
</head>
<body>


<form action='process.php' method='post'>

<!--This is a really cool way of making a form :) -->
	<fieldset>
		
		<legend><h1>Registration</h1></legend>
		  
		   <label for="email" >Email:</label>
		   		<input type='text' name="email">

		   <label for="firstname">First Name:</label>
		   		<input type='text' name='first_name'>

		   <label for="lastname">Last Name:</label>
		   		<input type='text' name='last_name'>

		   <label for="password">Password:</label>
		   		<input type='password' name='password'>

		   <label for="confirmpass">Confirm Password:</label>
		   		<input type='password' name='confirm'>

		   <label for="birthdate">Birth Date:</label>
		   		<input type='text' name='birth'>

		   <label for="profilepic">Profile Picture:</label> 
		   		<input id='upload' type='file' value='Upload File'>
			<br>
			<br>
			<!-- Removed id from input, wasn't being used -->
		    <input type='submit' value='Submit'>

	</fieldset>

</form>

</body>
</html>