<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/disableLoginButton.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../backend/authentication/validationLogin.js"></script>
    <script type="text/javascript" src="../js/preventDefault.js"></script>
</head>

<body>
    <div class="navbar">
        <a href="" class="initials">TS</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
        <a href="account.php">Account</a>
    </div>

    <div class="center">
        <h1>Login</h1>
        <form id="loginForm">
            <input type="text" placeholder="Username" class="input-field" id="username" name="username">
            <br>
            <input type="password" placeholder="Password" class="input-field" id="password" name="password">
            <br>
            <input type="submit" value="Login" class="input-button" id="loginButton" name="login" disabled>
        </form>
    </div>

    <div id="response">Hallo</div>

    <footer>
        <div class="footer">
            <p>&copy; 2023 TestWebsite</p>
        </div>
    </footer>
</body>

</html>