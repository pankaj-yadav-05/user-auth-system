<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrapper">

    <!-- SIGN UP -->
    <div class="container" id="signup" style="display:none;">
        <h1 class="form-title">Create Account</h1>

        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" placeholder="First Name" required>
                <label>First Name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" placeholder="Last Name" required>
                <label>Last Name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
                <label>Email</label>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
                <label>Password</label>
            </div>

            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>

        <p class="or">or continue with</p>

        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook-f"></i>
        </div>

        <div class="links">
            <span>Already have an account?</span>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <!-- SIGN IN -->
    <div class="container" id="signIn">
        <h1 class="form-title">Welcome Back</h1>

        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
                <label>Email</label>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
                <label>Password</label>
            </div>

            <p class="recover">
                <a href="#">Forgot Password?</a>
            </p>

            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>

        <p class="or">or continue with</p>

        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook-f"></i>
        </div>

        <div class="links">
            <span>New here?</span>
            <button id="signUpButton">Create Account</button>
        </div>
    </div>

</div>

<script src="script.js"></script>
</body>
</html>
