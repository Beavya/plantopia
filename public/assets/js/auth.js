document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.toggle-password').forEach((button) => {
        button.addEventListener('click', () => {
            const input = button.parentElement.querySelector('input');
            const icon = button.querySelector('img');

            if (input.type === 'password') {
                input.type = 'text';
                icon.src = '/assets/img/icon/eye-close.svg';
            } else {
                input.type = 'password';
                icon.src = '/assets/img/icon/eye-open.svg';
            }
        });
    });
});
