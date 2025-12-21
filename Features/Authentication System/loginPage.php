<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "loginForm">
    <h1 class = "welcome">welcome</h1>
    <p class = "subtitle">Please enter your details to log in.</p>
    <form id = "loginForm">
        <div class = "formGroup">
            <label class = "formLabel"for="email">Email or Phone Number</label>
            <div class = "icon">
                <i class = "fas fa-user input-icon"></i>
                <input type = "text" id = "mail" placeholder = "Enter your email or phone numnber">
            </div>
        </div>

        <div class = "formGroup">
            <label class = "formLabel" for="password">Password</label>
            <div class = "icon">
                <i class = "fas fa-lock input-icon"></i>
                <input type="password" id = "password" placeholder = "Enter your password">
            </div>
        </div>

        <div class = "formGroup">
            <label for="formLabel" for="role">Select your Role</label>
            <div class="icon">
                <i class ="fas fa-user-tag input-icon"></i>
                <select id="role">
                    <option value="admin" selected>Admin</option>
                    <option value="farmer">Farmer</option>
                    <option value="employee">Employee</option>
                    <option value="buyer">Buyer</option>
                </select>
            </div>
        </div>

        <div class ="formOption">
            <div class="rememberMe">
                <input type="checkbox" id="remember">
                <label for="remember">Remember Me</label>
            </div>
            <!--Forget Password Page link add hobe-->
            <a href="#" class="forgotPassword">Forgot Password?</a>
        </div>

        <button type="submit" class ="loginbtn">Login</button>
        <!--Signup Page link add hobe-->
        <div class="signupLink">Don't have an account? <a href="#"></a></div>
    </form>

    </div>
</body>
</html>