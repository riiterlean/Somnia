$(document).ready(function() {
    $('#registerButton').on('click', function() {
        let username = $('#username').val();
        let email = $('#email').val();
        let password = $('#password').val();

        $.ajax( {
            url: '../../backend/authentication/registerDB.php',
            method: 'POST',
            data: {
                register: 1,
                usernamePHP: username,
                emailPHP: email,
                passwordPHP: password
            },
            success: function(response) {
                $('#response').html(response);

                if (response.indexOf('success') >= 0) {
                    window.location = 'login.php';
                }
            },
            fail: function() {
                alert(response);
            }
            
        });
    });
});