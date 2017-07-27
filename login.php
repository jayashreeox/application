<html>
    <head>
        <style>
           body{
                line-height:3.5;
                margin:auto;
                padding:50px;
                width: 500px;
            }
            h1{
                line-height: 30px;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="cssJquery.css">
    </head>
    <body style="background-color: bisque;">

        <h1>LOGIN PAGE</h1>
        <form id="loginpage" method ="post" action="loginauth.php">
            <div><label>Username</label>
                <input type="text" id="username" name="userName" placeholder="Username" required>
            </div>
            <div><label>Password</label>
                <input type="password" id="pwd" name="pwd" placeholder="Password" required>
            </div>
                
            <div id="sub">
                <input type="submit" name="login" value="Sign In"><br>
                Not a Member? <a href="register.php">Register</a>
            </div>
        </form>
    </body>

</html>
