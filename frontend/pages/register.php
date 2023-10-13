<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/disableRegisterButton.js"></script>
    <script type="text/javascript" src="../../backend/authentication/validationRegister.js"></script>
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
        <h1>Register</h1>
        <form id="registerForm">
            <input type="text" placeholder="Username" class="input-field" id="username">
            <br>
            <input type="email" placeholder="Email" class="input-field" id="email">
            <br>
            <input type="password" placeholder="Password" class="input-field" id="password">
            <br>
            <input type="submit" value="Register" class="input-button" id="registerButton" name="register" disabled>
        </form>
    </div>
    <div id="response">Hallo</div>
    <footer class="footer">
        <p>&copy; 2023 TestWebsite</p>
    </footer>
</body>

</html>