
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            margin-top: 10rem;
            background-color: lightblue;

        }
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            width: 100%;
            border: solid thin #aaa;
        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
            transition: 0.5s;
        }
        #button:hover{
            border-radius: 10px;
            color: black;
        }
        #box{
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
            border-radius: 5px;
        }
        a{
            color: white;
            text-decoration: none;
            font-family: candara;
        }
        .head{
            font-size: 40px;
            text-align: center;
            padding-top: 10px;
            font-family: candara;
        }
       
        .login{
            font-size: 30px; 
            margin:10px;
            color:white;
            text-align: center; 
            font-family: candara;
        }


    </style>
</head>
<body>
    <h1 class="head">Hospital Management System</h1>
    <div id="box">
        <form action="insert.php" method="post">
            <div class="login">Login</div>
            <input id="text" type="text" name="user_name" placeholder="Enter Your Name" require> <br><br>
            <input  id="text" type="password" name="password" placeholder="Enter your password" require><br><br>

            <input id="button" type="submit" value="submit"><br><br>
            <a href="signup.php">Signup</a><br><br>
        </form>
    </div>
    
</body>
</html>