import IMask from "imask";
import axios from "axios";
import Swal from "sweetalert2/dist/sweetalert2.js";
import "sweetalert2/src/sweetalert2.scss";

["ketuaan", "kadar_air", "diameter"].forEach((element) =>
    IMask(document.getElementById(element), {
        mask: Number,
        min: 1,
        thousandsSeparator: ".",
    })
);

const checkForm = document.getElementById("formCheck");

checkForm.addEventListener("submit", async (e) => {
    e.preventDefault();
    const answers = new FormData(checkForm);
    const response = await axios.post(
        `${location.protocol}//${location.host}/api/check-data`,
        answers
    );

    if (Number(response.status) === 200) {
        Swal.fire({
            title: response.data.message,
            icon: "success",
            width: "18em",
            position: "center",
            toast: true,
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: false,
        });
    }
});