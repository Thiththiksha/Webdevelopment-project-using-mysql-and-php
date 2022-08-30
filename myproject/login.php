<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid black;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: 100%;
  padding: 10px 18px;
  background-color: #f44336;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}


.container {
  padding: 16px;
}

.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

</style>
</head>
<body >
        <form action="php/login_check.php" 
    	      method="post">

    		<align="center"><h2>Please Login Here</h2></align>

    		<?php if(isset($_GET['error'])){ ?>
				<p class="error">
			  <?php echo $_GET['error']; ?>
			</p>
		    <?php } ?>
			
			<img src="Avatar.svg" class="img-rounded" alt="avatar">
		  <div class="container">
		  <label for="uname"><b>Email</b><span  style="color:red"> *</span></label><br>
		      <input type="text" 
		           placeholder="Enter Email"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		 <br>

		   <label for="pass"><b>Password</b><span  style="color:red"> *</span></label><br>
		    <input type="password" 
		           placeholder="Enter Password"
		           name="pass"></align><br>
		  </div>
		  <br>
		  <button type="submit">Login</button><br>
		  <button type="reset" value="reset" class="cancelbtn">Cancel</button><br>

    
	 <p>Don't have an account?
		  <a href="index.php" class="link-secondary">Sign Up</a></p>
		</form>
    </div>
</body>
</html>