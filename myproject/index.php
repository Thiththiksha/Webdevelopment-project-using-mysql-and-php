<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
body {
  border-style: solid;
  border-color: black;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 20px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
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

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
     	<form  style="border:1px solid #ccc"
		       action="php/signup_check.php" 
    	      method="post"
    	      enctype="multipart/form-data">

		 
		 <h1>Sign Up</h1>
         <p>Please fill in this form to create an account.</p>
         <hr>
         <?php if(isset($_GET['error'])){ ?>
          <p class="error">
			  <?php echo $_GET['error']; ?></p>
			
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<p class="success">
			  <?php echo $_GET['success']; ?>
        </p>
		    <?php } ?>
		  

			<div class="container">
		  
		    <label for="fname"><b>Name</b><span  style="color:red"> *</span></label>
		    <input type="text" 
		           placeholder="Enter Name"
		           name="fname"
		           value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
		 

		    <label for="uname"><b>Email</b><span  style="color:red"> *</span></label><br>
        <span id="check-username"></span>	
		    <input type="text" 
		           placeholder="Enter Email"
		           name="uname"
               id="uname"
               onInput="checkUsername()"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		 

		    <label for="pass"><b>Password</b><span  style="color:red"> *</span></label>
		    <input type="password" 
		           placeholder="Enter Password"
		           name="pass">
				 
    

		  <div class="mb-3">
		    <label class="form-label"><b>Profile Picture</b></label>
		    <input type="file" 
		           class="form-control"
		           name="pp"><br>
               <br>
		
          
		  <div class="clearfix">
      <button type="reset" value="reset" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>

  <p>Already have an account? <a href="login.php" class="link-secondary">Login</a></p>
		</form>
    </div>
    </section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function checkUsername() {
    
    jQuery.ajax({
    url: "check_availability.php",
    data:'uname='+$("#uname").val(),
    type: "POST",
    success:function(data){
        $("#check-username").html(data);
    },
    error:function (){}
    });
}
</script>
</body>
</html>