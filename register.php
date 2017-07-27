<html>
    <head>
        <title>Application form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="cssJquery.css">
        <script src="jquery-3.2.1.min.js"></script>
        <script src="validate.js"></script>
        
     
    </head>
    <body>
        <header>Registration</header>
        <form name="registration"  class="overall" method="post" action="dataBase.php" enctype="multipart/form-data">
            
          

            <div class="division">

                <div><label>Name: </label><input type="text" id="name" name="name">
                    <span class="error_class" id="usererror"></span>
                </div>

                <div><label>Password:</label><input type="password" id="password" name="password">
                    <span class="error_class " id="passworderror"></span>
                </div>

                <div>
                    <label>Email:</label><input type="email" id="email" name="email" value="">
                    <span class="error_class" id="emailerror"></span>
                </div>

                <div>
                    <label>Mobile_Number:</label> <input type="text" id="mobile" name="mobile" value="">
                    <span class="error_class" id="mobileerror"></span>
                </div>

                <div>
                    <label>DOB:</label> 
                         
                    <input type="date" id="dob" name="dob">
                     <span class="error_class" id="doberror"></span>
                    
                </div>

                <div class="Gender">
                    <label>Gender:</label><input type="radio"  class="Gen"   value="male" name="gender" id="gender"><span>Male</span>
                    <input type="radio"  class="Gen" value="female" name="gender" id="gender"><span>Female</span>
                    <span class="error_class" id="gendererror"></span>
                </div>

                
                    
                    
                <label> Address </label>
                <div id="subspace">
                    <textarea id="address" cols="30" rows="10" name="address"></textarea>
                    <span class="error_class" id="addresserror"> </span>
                </div>
                <div>
                 <label>Profile:</label>
                    <input type="file" name="profile" id="profile">
                </div>
…
                <div>
                    <input type="submit" value="submit" name="submit" id="submit">   
                    Already a Member? <a href="login.php">Sign In</a>
                </div>



                </div>
        </form>

    </body>


</html>
