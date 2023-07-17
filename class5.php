<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
            text-decoration: underline;
        }

        .html-form {
            /* display: flex;
            flex-direction: row; */
            font-family: 'Times New Roman', Times, serif;
            font-size: larger;
            width: 50%;
        }

        .form input {
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <!-- HTML FORM -->
    <!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> -->
    <h1>HTML Login Form</h1>
    <div class="html-form">
        <form action="welcome.php" method="POST" class="form">
            <fieldset>
                First Name: <input type="text" name="F-name" Value="" placeholder="Enter First Name" />
                Last Name: <input type="text" name="L-name" Value="" placeholder="Enter  Name" /><br>
                Email: <input type="email" name="email" Value="" placeholder="Enter User Email" required /><br>
                Password: <input type="password" name="password" value="" placeholder="Enter Your Password" /><br>

                Gender:<br>
                <input type="radio" name="gender" value="male" />Male<br>
                <input type="radio" name="gender" value="female" />Female<br>
                <input type="radio" name="gender" value="others" />Others<br><br>
                <textarea name="openion" id="" cols="30" rows="10" placeholder="About Your Self"></textarea><br><br>
                <button type="submit" value="submit">Submit</button>
            </fieldset>
        </form>
    </div>
   


    <!-- GET requests are used to get information from a specified resource and provide data in the form of a query string to the server. POST requests are used to create and update server resources, and they deliver data in the request body.  -->
</body>

</html>