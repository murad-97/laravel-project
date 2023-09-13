// resources/js/sweetalert.js

import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function () {
    // Listen for Laravel flash messages
    let successMessage = document.querySelector('.sweetalert-success');
    let errorMessage = document.querySelector('.sweetalert-error');

    if (successMessage) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: successMessage.textContent,
        });
    }

    if (errorMessage) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: errorMessage.textContent,
        });
    }
});
