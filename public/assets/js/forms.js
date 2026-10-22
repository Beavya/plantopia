document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('form');

    forms.forEach((form) => {
        if (form.action.includes('/logout')) {
            return;
        }

        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            clearErrors(form);

            const formData = new FormData(form);

            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                },
                body: formData,
            });

            if (response.ok) {
                const data = await response.json();

                if (data.redirect) {
                    window.location.href = data.redirect;
                } else {
                    window.location.reload();
                }

                return;
            }

            const data = await response.json();

            if (data.errors) {
                showErrors(form, data.errors);
            }
        });
    });
});

function clearErrors(form) {
    const errorLists = form.querySelectorAll('.error-list');
    errorLists.forEach((list) => list.remove());

    const errorFields = form.querySelectorAll('.field-error');
    errorFields.forEach((field) => field.classList.remove('field-error'));
}

function showErrors(form, errors) {
    Object.keys(errors).forEach((fieldName) => {
        const field = form.querySelector(`[name="${fieldName}"]`);
        if (!field) {
            return;
        }

        const wrapper = field.closest('.edit-form-field') || field.closest('.form-field');
        if (!wrapper) {
            return;
        }

        wrapper.classList.add('field-error');

        const parent = wrapper.parentElement;
        if (!parent) {
            return;
        }

        const errorList = document.createElement('div');
        errorList.className = 'error-list';

        errors[fieldName].forEach((message) => {
            const errorText = document.createElement('span');
            errorText.className = 'error-text';
            errorText.textContent = message;
            errorList.appendChild(errorText);
        });

        parent.appendChild(errorList);
    });
}
