<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-form</title>
    <style>
        h1 {
            font-family: 'Times New Roman', Times, serif;
            color: cadetblue;
            text-align: center;
        }

        .form {
            margin: 25px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .form button {
            margin-left: 400px;
        }
    </style>
</head>

<body>
    <?php
    session_start() ?>
    <!-- LogOut Section -->
    <div style="display: flex; justify-content:space-between;margin:20px;">
        <h1>PHP Form</h1>
        <button onclick="document.location='logout.php'" style="height: 30px;">LogOut</button>
    </div>
    <!-- Html Form -->
    <div class="form">
        <form action="program.php" method="POST">
            <label for="FirstName">First Name:
                <input type="text" name="fname" id="" value="" placeholder="Enter Your First Name">
            </label>
            <label for="LastName">Last Name:
                <input type="text" name="lname" id="" value="" placeholder="Enter Your Last Name">
            </label><br><br><br>
            <label for="birthdate">Birth Day:
                <input type="date" name="birthday" id="">
            </label><br><br>
            <!-- check select more option where radio select just one option from many options-->
            <label for="gender">Gender:
                <input type="radio" name="gender" id="" value="male">Male
                <input type="radio" name="gender" id="" value="femal">Female
                <input type="radio" name="gender" id="" value="other">Other
            </label><br><br>
            <label for="programmingLanguage">Programming Language:<br><br>
                <input type="checkbox" name="pLanguage" id="" value="HTML">HTML<br>
                <input type="checkbox" name="pLanguage" id="" value="CSS">CSS<br>
                <input type="checkbox" name="pLanguage" id="" value="JAVASCRIPT">JAVASCRIPT<br>
                <input type="checkbox" name="pLanguage" id="" value="PHP">PHP<br>
                <input type="checkbox" name="pLanguage" id="" value="LARAVEL">LARAVEL<br>

            </label><br>
            <label for="universityName">Choose your uiversity:
                <select id="" name="university">
                    <option value="Dhaka University">Dhaka University</option>
                    <option value="Buet">Buet</option>
                    <option value="Jahangirnagar University">Jahangirnagar University</option>
                    <option value="Kuet">Kuet</option>
                </select>
            </label><br><br><br>
            <label for="parAddress">Parmanent address:
                <textarea name="parAddress" id="" cols="40" rows="2" placeholder="Enter your parmanent address"></textarea>
            </label><br><br><br>
            <button>Submit</button>
        </form>
    </div>
</body>

</html>