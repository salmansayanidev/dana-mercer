// // step form js

// const allSteps = document.querySelectorAll(".step").length;
// const progressBar = document.getElementById("progress-bar");

// let progressStatus = 100 / allSteps;

// const progressStatusInit = progressStatus;

// console.log(progressStatusInit);

// const progressStatusPrevious = progressStatus;

// progressBar.style.width = `${progressStatus}%`;

// let step = 1;

// $(".next-step").click(function () {
//   setUpdate((step = step + 1));
//   $(".verify-code-popup-wrap").removeClass("active");
//   $(".shipping-address-popup-wrap").removeClass("active");
//   progressUpdate(progressStatus, progressStatusInit);
// });

// $(".step-pre-btn").click(function () {
//   setUpdate((step = step - 1));
//   progressUpdate(progressMinus , progressStatusInit);
// });

// function setUpdate(step) {
//   $(`.step`).removeClass("active");
//   $(`.step-${step}`).addClass("active");
// }

// function progressUpdate(progressWidth, step) {
//   progressStatus = progressWidth + step;
//   progressBar.style.width = `${progressStatus}%`;
//   progressMinus = progressWidth - step;
//   console.log(progressStatus);
// }

// In your Javascript (external .js resource or <script> tag)
$(document).ready(function () {
  $(".js-example-basic-single").select2();
});

// birth year js

let dateDropdown = document.getElementById("birth-year-dropdown");

let currentYear = new Date().getFullYear();
let earliestYear = 1914;

while (currentYear >= earliestYear) {
  let dateOption = document.createElement("option");
  dateOption.text = currentYear;
  dateOption.value = currentYear;
  dateDropdown.add(dateOption);
  currentYear -= 1;
}

// popup js

$(".verify-popup-opn").click(function () {
  $(".verify-code-popup-wrap").toggleClass("active");
});

// shiiping popup js

$(".shipping-popup-btn").click(function () {
  $(".shipping-address-popup-wrap").toggleClass("active");
});



const error = document.querySelector('.error');

document.addEventListener('DOMContentLoaded', function() {
const verifyButton = document.querySelector('.birth-select');
verifyButton.addEventListener('click', function() {
    const birthMonth = document.getElementById('birth-month-dropdown').value;
    const birthDay = document.getElementById('birth-day-dropdown').value;
    const birthYear = document.getElementById('birth-year-dropdown').value;

    const selectedDate = new Date(`${birthMonth}/${birthDay}/${birthYear}`);

    const today = new Date();
    let age = today.getFullYear() - selectedDate.getFullYear();
    const monthDiff = today.getMonth() - selectedDate.getMonth();

    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < selectedDate.getDate())) {
        age--;
    }

    // Check if age is less than 18
    if (age < 18) {
        $(".error").css("display","block");
        $(".verify-code-popup-wrap").removeClass("active");

        // You can also add additional handling here, like preventing form submission
    } else {
        $(".error").css("display","none");
        $(".verify-code-popup-wrap").addClass("active");
        // Proceed with your further logic here
    }
});
});