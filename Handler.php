<?php
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$address = $_GET['address'];
$email = $_GET['email'];
$password = $_GET['password'];
$Confirm_password = $_GET['cpassword'];

$hash = password_hash($password, PASSWORD_DEFAULT);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handler</title>

    <Style>
        @import url('https://fonts.googleapis.com/css2?family=Acme&family=Poppins:wght@300&display=swap');

        :root {
            --title: 'Acme', sans-serif;
            --Body: 'Poppins', sans-serif;
            --blue: #2cd4f3;
            --orange: #f38031;
            --black: #000000;
            --white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-user-select: none;

        }

        nav {
            background-color: var(--orange);
            height: 5rem;
            box-shadow: 0 0 50px 0;

        }

        nav img {
            max-width: 6.25rem;
            max-height: 6.25rem;
            border-radius: 100%;
            margin: 1.5rem 0 0 2rem;
        }

        nav p {
            margin: -6.4rem 0 0 13rem;
            font-size: 1.8rem;

        }

        .container {
            height: auto;
            max-width: 50rem;
            width: 100%;
            margin: 7rem 0 0 17rem;
            background-color: var(--white);
            padding: 3rem;
            border-radius: 1rem;
            box-shadow: #f38031 0 0 20px 1px ;

        }

        h1 {
            font-family: var(--title);
            text-align: center;
            padding-bottom: 1rem;
        }

        .container label {
            font-family: var(--Body);
        }

        .details {
            text-transform: capitalize;
            color: var(--black);
            padding: 0.9rem 0.5rem 0 0;
           
        }
    </Style>
</head>

<body style="background-color: var(--blue);">
    <nav>
        <a href="#"><img src="./src/logo.jpg" alt="logo"></a>
        <p>A key to Early Education with one Swipe</p>
    </nav>

    <div class="container">
        <h1>User Profile</h1>
        <div>
            <div style="margin: 10px;">
                <label for="first_name" class="input-label">First Name:</label>
                <p style="float: right; font-weight: 100"><?php echo (isset($firstname)) ? $firstname : ''; ?></p>
                <div class="details"><?php echo isset($object->firstname) ? $object->firstname : '' ?></div>
            </div>
            <div style="margin: 10px;">
                <label for="last_name" class="input-label">Last Name:</label>
                <p style="float: right; font-weight: 100"><?php echo (isset($lastname)) ? $lastname : ''; ?></p>
                <div class="details"><?php echo isset($object->lastname) ? $object->lastname : '' ?></div>
            </div>
            <div style="margin: 10px;">
                <label for="address" class="input-label">Address:</label>
                <p style="float: right; font-weight: 100"><?php echo (isset($address)) ? $address : ''; ?></p>
                <div class="details"><?php echo isset($object->address) ? $object->address : '' ?></div>
            </div>
            <div style="margin: 10px;">
                <label for="email" class="input-label">Email:</label>
                <p style="float: right; font-weight: 100"><?php echo (isset($email)) ? $email : ''; ?></p>
                <div class="details"><?php echo isset($object->email) ? $object->email : '' ?></div>
            </div>
            <div style="margin: 10px;">
                <label for="address" class="input-label">Password:</label>
                <p style="float: right; font-weight: 100"><?php echo (isset($hash)) ? $hash : ''; ?></p>
                <div class="details"><?php echo isset($object->hash) ? $object->hash : '' ?></div>
            </div>
        </div>
    </div>
</body>

</html>