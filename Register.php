<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="txt/css" href="Style.css">
    <title>Registration Page</title>

    <style>
        *{
            margin:0;
            padding: 0;
        }
        :root{
            --blue:#2cd4f3;
            --orange:#f38031;   
            --black:#000000;
            --white:#FFFFFF;
        }
        body{
            background-color:var(--blue);
        }
        nav{
            background-color:var(--orange);
            height: 5rem;
            box-shadow: 0 0 50px 0;
            

           
        }
       nav img{
            max-width: 6.25rem;
            max-height: 6.25rem;
            border-radius:100%;
            margin:1.5rem 0 0 2rem;
        }
       nav p{
        margin: -6.4rem 0 0 13rem;
        font-size: 1.8rem;
       }

        #bubble{
            float: right;
            margin-top: 29.8rem;
            margin-left: 11rem;
            max-width: 6.25rem;
            max-height: 6.25rem;
        }
        
        #kid{
          float: right;
          margin-top: 5rem;
          width: 22%;         
        }
        #container{
            background-color: var(--blue);
            margin: 4rem 0 0 14rem;
            max-width: 35.25rem;
                        
        }
        #title{
            padding: 1.25rem;
            
            
        }
        #title h1{
            font-size: 3.125rem;
        }
        #container form{
            padding-left: 3rem;
           
            
        }
        form input{
            margin: 0 0 1rem 0;
            max-width: 100%;
            width: 50%;
            padding: 0.3rem 0.5rem 0.3rem 0.4rem;
            
            
        }
        #sign{
            display: inline-flex;
        }
        #sign img{
            margin-left: -2.188rem;
        }
        #signup{
            background:linear-gradient(to top right, var(--blue),var(--orange));
            border-radius: 1.25rem;
            font-size: 1rem;
            font-weight: bold;
            margin-left:0.8rem;
            padding-left: 4rem;
            padding-right: 8rem;
           
        }
        #signup:hover{
            background:linear-gradient(to top right , var(--orange),var(--blue));

        }
       
    </style>
</head>
<body>
  <nav >
  <a href="#"><img src="logo.jpg" alt="logo"></a>
  <p>A key to Early Education with one Swipe</p>
  </nav>
  <section id="sideimages">
    <img id="bubble" src="bubbles.jpg" alt="bubble">
    <img id="kid" src="./src/kiddo.jpg" alt="kiddo">
  </section>
  
  <section id="container">
    <div id="title">
        <h1>Create Account</h1>
        <p style="padding-left:5rem;">Already registered? <a href="#" style="color:var(--black); font-weight:bold;">Login</a></p>
    </div>

    <form action="Registration" >
        <label for="FName" id="FName">First Name:</label><br>
        <input type="text" id="IName" name="IName" placeholder="Enter..." required><br>

        <label for="LName" id="LName">Last Name:</label><br>
        <input type="text" id="IName" name="IName" placeholder="Enter..." required><br>

        <label for="Email" id="Email">Email Adress:</label><br>
        <input type="text" id="IEmail" name="IEmail" placeholder="Enter..." required><br>

        <label for="Pass" id="Pass">Password:</label><br>
        <input type="password" id="IPass" name="IPass" placeholder="Enter..." required><br>

        <label for="CPass" id="CPass">Confirm Password:</label><br>
        <input type="password" id="ICPass" name="ICPass" placeholder="Enter..." required><br>

      <div id="sign">
      <img src="arrow.jpg" alt="arrow">
      <input id="signup" type="submit" placeholder="Sign up">
    </form>
      </div>

  </section>
</body>
</html>