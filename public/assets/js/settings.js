document.addEventListener('DOMContentLoaded', () => {
    const currentAvatar = document.querySelector('#current-avatar');
    const avatarIdInput = document.querySelector('#avatar-id');
    const avatarOptions = document.querySelectorAll('.avatar-option');

    avatarOptions.forEach((option) => {
        option.addEventListener('click', () => {
            const file = option.dataset.file;
            const id = option.dataset.id;

            currentAvatar.src = '/assets/img/avatars/' + file;
            avatarIdInput.value = id;
        });
    });
});
