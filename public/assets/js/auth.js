function togglePassword(button) {
    const input = button.parentElement.querySelector('input');
    const icon = button.querySelector('img');

    if (input.type === 'password') {
        input.type = 'text';
        icon.src = '/assets/img/icon/eye-close.svg';
    } else {
        input.type = 'password';
        icon.src = '/assets/img/icon/eye-open.svg';
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.toggle-password');

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            togglePassword(button);
        });
    });
});
