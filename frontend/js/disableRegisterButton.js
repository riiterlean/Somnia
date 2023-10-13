document.addEventListener('DOMContentLoaded', function() {
    const usernameInput = document.getElementById('username');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const registerButton = document.getElementById('registerButton');

    usernameInput.addEventListener('input', toggleRegisterButton);
    emailInput.addEventListener('input', toggleRegisterButton);
    passwordInput.addEventListener('input', toggleRegisterButton)

    function toggleRegisterButton() {
        if (usernameInput.value.trim() !== '' && emailInput.value.trim() !== '' && passwordInput.value.trim() !== '') {
            registerButton.removeAttribute('disabled');
        } else {
            registerButton.setAttribute('disabled', 'true');
        }
    }
})