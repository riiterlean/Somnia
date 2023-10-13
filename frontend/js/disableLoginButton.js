document.addEventListener('DOMContentLoaded', function() {
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const loginButton = document.getElementById('loginButton');

    usernameInput.addEventListener('input', toggleLoginButton);
    passwordInput.addEventListener('input', toggleLoginButton);

    function toggleLoginButton() {
        if (usernameInput.value.trim() !== '' && passwordInput.value.trim() !== '') {
            loginButton.removeAttribute('disabled');
        } else {
            loginButton.setAttribute('disabled', 'true');
        }
    }
})