$(document).ready(function() {
    $('#loginButton').on('click', function() {
        let username = $('#username').val();
        let password = $('#password').val();

        $.ajax( {
            url: '../../backend/authentication/loginDB.php',
            method: 'POST',
            data: {
                login: 1,
                usernamePHP: username,
                passwordPHP: password
            },
            success: function(response) {
                $('#response').html(response);

                if (response.indexOf('success') >= 0) {
                    window.location = 'hidden.php';
                    alert('hehe');
                }
            },
            fail: function() {
                alert(response);
            }
            
        });
    });
});