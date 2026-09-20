
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <style>
        ```css
/* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body */
body {
    font-family: Arial, sans-serif;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #667eea, #764ba2);
    padding: 20px;
}

/* Main Container */
.container {
    width: 100%;
    max-width: 500px;
}

/* Form Box */
.form-box {
    background: #ffffff;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
}

/* Heading */
.form-box h2 {
    text-align: center;
    color: #333;
    font-size: 30px;
    margin-bottom: 8px;
}

.form-box > p {
    text-align: center;
    color: #777;
    margin-bottom: 25px;
}

/* Input Group */
.input-group {
    margin-bottom: 18px;
}

.input-group label {
    display: block;
    margin-bottom: 7px;
    color: #333;
    font-weight: bold;
}

.input-group input {
    width: 100%;
    padding: 13px 15px;
    border: 1px solid #ddd;
    border-radius: 10px;
    outline: none;
    font-size: 15px;
    transition: 0.3s;
}

.input-group input:focus {
    border-color: #667eea;
    box-shadow: 0 0 5px rgba(102, 126, 234, 0.3);
}

/* Terms */
.terms {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 10px 0 20px;
    color: #666;
    font-size: 14px;
}

.terms input {
    width: 16px;
    height: 16px;
}

/* Button */
button {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
}

/* Login Text */
.login-text {
    margin-top: 20px;
    text-align: center;
    color: #666;
}

.login-text a {
    color: #667eea;
    font-weight: bold;
    text-decoration: none;
}

.login-text a:hover {
    text-decoration: underline;
}

/* Responsive */
@media (max-width: 500px) {
    body {
        padding: 15px;
    }

    .form-box {
        padding: 25px 20px;
    }

    .form-box h2 {
        font-size: 25px;
    }
}


    </style>
</head>
<body>

    <div class="container">
        <div class="form-box">

            <h2>Create Account</h2>
            <p>Register your account below</p>

            <form>

                <div class="input-group">
                    <label>Full Name</label>
                    <input type="text" placeholder="Enter your full name" required>
                </div>

                <div class="input-group">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter your email" required>
                </div>

                <div class="input-group">
                    <label>Phone Number</label>
                    <input type="tel" placeholder="Enter your phone number" required>
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <input type="password" placeholder="Enter your password" required>
                </div>

                <div class="input-group">
                    <label>Confirm Password</label>
                    <input type="password" placeholder="Confirm your password" required>
                </div>

                <div class="terms">
                    <input type="checkbox" required>
                    <span>I agree to the Terms & Conditions</span>
                </div>

                <button type="submit">Register Now</button>

                <p class="login-text">
                    Already have an account?
                    <a href="../login/login.php">Login</a>
                </p>

            </form>
        </div>
    </div>

</body>
</html>

