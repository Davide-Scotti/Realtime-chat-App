<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/876b62928a.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text"  name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email"  name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password"  name="password" placeholder="Enter new password" required>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file"  name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Alredy signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>

    <script src="javascript/signup.js"></script>

</body>
</html>
