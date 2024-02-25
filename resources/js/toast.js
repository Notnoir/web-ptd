// resources/js/custom-toast.js

import Swal from "sweetalert2";

window.showCustomToast = function (message, type = "success") {
    Swal.fire({
        icon: type,
        title: message,
        showConfirmButton: false,
        timer: 3000, // Durasi dalam milidetik (3 detik)
        position: "top-end", // Atur posisi toast (top, bottom, left, right)
    });
};
