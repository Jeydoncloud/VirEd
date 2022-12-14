<?php

$object = new stdClass();
if (isset($_POST['submit'])) {
    $forms = array(
        'firstname'  => $first_name = $_POST['first_name'],
        'lastname' => $last_name = $_POST['last_name'],
        'address' => $address = $_POST['address'],
        'email' => $email = $_POST['email'],
        'password' => $password = $_POST['password'],
        'cpassword' => $cpassword = $_POST['cpassword']
    );
    foreach ($forms as $key => $value) {
        if (empty($value)) {
            $object->$key =  $key . ' field is required';
        }

        if (!empty($value) and($key === 'firstname' || $key  === 'lastname')) {
            if (strlen($value) < 2) $object->$key =  $key . ' Must be at least 2 characters';
            if (strlen($value) > 25) $object->$key =  $key . ' Must not exceed 25 characters';
        }

        if(!empty($value) and ($key === 'address')){
            if (strlen($value) < 10 ) $object->$key = $key . ' Must be at least 10 characters';
        }

        if ($key === 'email' and !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $object->$key = "Invalid email format";
        }
        if ($key === 'password'){
            $forms['password'] === $forms['cpassword'] ? '' : $object->$key = "Password didn't match!";
        }
    }

    if (!( (array) $object)) header("Location: Handler.php?" . http_build_query($forms));

    echo "<script> console.log(" . json_encode($object) . ")</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background-image: url(10.jpg);
            -webkit-user-select: none;
            
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

        #container{
            background-color: transparent;
            margin: 1.3rem 0 0 12rem;
            max-width: 37rem;
                        
        }
        #title{
            padding: 1.15rem  1.25rem 1.25rem 3.5rem;
            
            
        }
        #title h1{
            font-size: 2.5rem;
            padding: 0 0 0 2.2rem;;
        }
        #container form{
           padding-left: 5.5rem;
           
            
        }
        form input{
           
            max-width: 100%;
            border-color: #2FCBD3;
            width:70%;
            padding: 0.3rem 0.5rem 0.3rem 0.4rem;
            border-radius: 0.3rem;
            
        }
        form span{
            text-transform: capitalize; 
            color: #FF7F7F; 
            padding-top: 5px; 
            padding-bottom: 5px
        }
       
        #sign{
            display: inline-flex;
        }
        #sign img{
            margin-left: -2.188rem;
        }
        #sign button{
            background:linear-gradient(to top right, var(--blue),var(--orange));
            border-radius: 1.25rem;
            font-size: 1rem;
            font-weight: bold;
            margin-left:0.8rem;
            height: 2.3rem;
            /* padding-left: 3rem;
            padding-right: 4rem; */
            padding: 0 5rem 0 4.4rem;
           
        }
        #sign button:hover{
            background:linear-gradient(to top right , var(--orange),var(--blue));

        }

        @media (max-width: 1000px) {
            body{
                background-color: var(--blue);
                background-image: none;
            }

            nav p{
             margin: -6.4rem 0 0 11rem;
             font-size: 1.2rem;
        
       }
       #container{
        background-color: transparent;
            margin: 2.5rem 0 0 7rem;
            max-width: 24rem;
            width: 100%;
                        
        }
       #container form{
           padding-left: 3rem;
           
            
        }
        #title{
            padding: 1.15rem  1.25rem 1.25rem 5rem;
            
            
        }
       
        #title h1{
            font-size: 2rem;
           
        }
        
        form input{
            margin: 0 0 0.8rem 0;
            max-width: 100%;
            width: 80%;
            padding: 0.3rem 0.7rem 0.3rem 0.6rem;
            
            
        }
        form label{
            font-size: 15px;
        }
      
    }
    @media (max-width: 600px) {
            body{
                background-color: var(--blue);
                background-image: none;
            }

            nav p{
             margin: -6.4rem 0 0 11rem;
             font-size: 1.2rem;
        
       }
       #container{
        background-color: transparent;
            margin: 2.5rem 0 0 7rem;
            max-width: 24rem;
            width: 100%;
                        
        }
       #container form{
           padding-left: 3rem;
           
            
        }
        #title{
            padding: 1.15rem  1.25rem 1.25rem 5rem;
            
            
        }
       
        #title h1{
            font-size: 2rem;
           
        }
        
        form input{
            margin: 0 0 0.8rem 0;
            max-width: 100%;
            width: 80%;
            padding: 0.3rem 0.7rem 0.3rem 0.6rem;
            
            
        }
        form label{
            font-size: 15px;
        }
      
    }
       
    </style>
    
</head>
<body>
  <nav >
  <a href="#"><img src="./src/logo.jpg" alt="logo"></a>
  <p>A key to Early Education with one Swipe</p>
  </nav>

  <section id="container">
        <div id="title">
             <h1>Create Account</h1>
             <p style="padding-left:5rem;">Already registered? <a href="#" style="color:var(--black); font-weight:bold;">Login</a></p>
        </div>
        <form action="" method="post">
           
                <label for="first_name" id="input-label">First Name:</label><br>
                <input type="text" name="first_name" id="input" id="firstname" value="<?php if (isset($_POST['submit'])) {  echo $first_name;} ?>"><br>
                <span id="design"><?php echo isset($object->firstname) ? $object->firstname : '' ?></span><br>
           
                <label for="last_name" id="input-label">Last Name:</label><br>
                <input type="text" name="last_name" id="input" id="lastname" value="<?php if (isset($_POST['submit'])) { echo $last_name; } ?>"><br>
                <span><?php echo isset($object->lastname) ? $object->lastname : '' ?></span><br>
               
                <label for="address" id="input-label">Address:</label><br>
                <input type="text" name="address" id="input" id="address" value="<?php if (isset($_POST['submit'])) { echo $address; } ?>"><br>
                <span><?php echo isset($object->address) ? $object->address : '' ?></span><br>
                

                <label for="email" id="input-label">Email:</label><br>
                <input type="email" name="email" id="input" id="email" value="<?php if (isset($_POST['submit'])) { echo $email; } ?>"><br>
                <span><?php echo isset($object->email) ? $object->email : '' ?></span><br>

                <label for="Password" id="input-label">Password:</label><br>
                <input type="password" name="password" id="input" id="password" value="<?php if (isset($_POST['submit'])) { echo $password; } ?>"><br>
                <span><?php echo isset($object->password) ? $object->password : '' ?></span><br>  
            
                <label for="cpassword" id="input-label">Confirm Password:</label><br>
                <input type="password" name="cpassword" id="input" id="cpassword" value="<?php if (isset($_POST['submit'])) { echo $cpassword;} ?>"><br>
                <span><?php echo isset($object->password) ? $object->password : '' ?></span><br><br>                                                                                                                                           

        <div id="sign">
            <img src="./src/arrow.jpg" alt="arrow">
            <button type="submit" name="submit" id="signup">Register</button>
        </div>
        </form>
</section>

 
</body>
</html>
