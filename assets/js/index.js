
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



$('.doctors_visits_no').click(function() {
  $(".Doctors-visits-unabel").css("display", "block");
  $(".Doctors-visits").css("display", "none");
  $(".step-pre-btn").css("display", "none");
  $(".Doctors-visits-btn").css("display", "block");
})


$('.chronic-medications-yes').click(function() {
  $(".chronic-medications-text-area").css("display", "block");
  $(".chronic-medications").css("display", "none");
  $(".step-pre-btn").css("display", "none");
  $(".Doctors-visits-btn").css("display", "block");
})

$('.chronic-medications-cancel').click(function() {
  $(".chronic-medications-text-area").css("display", "none");
  $(".chronic-medications").css("display", "block");
})


$('.kidney-liver-yes').click(function() {
  $(".kidney-liver-disease-unable").css("display", "block");
  $(".kidney-liver-disease").css("display", "none");
  $(".step-pre-btn").css("display", "none");
  $(".Doctors-visits-btn").css("display", "block");
})

$('.Doctors-visits-btn').click(function() {
  $(".Doctors-visits").css("display", "block");
  $(".kidney-liver-disease").css("display", "block");
  $(".kidney-liver-disease-unable").css("display", "none");
  $(".Doctors-visits-unabel").css("display", "none");
  $(".Doctors-visits-btn").css("display", "none");
  $(".step-pre-btn").css("display", "block");
});


$('input[data-id]').change(function() {
  $(`input[data-id=${$(this).data('id')}]`).attr('checked', true)
});






$('.country-input[data-id]').change(function() {
  selectedValue = $(this).val();
  $(`.country-input[data-id=${$(this).data('id')}]`).val(selectedValue);
});

$('.shipping-input[data-id]').change(function() {
const newValue = $(this).val();
$(`.shipping-input[data-id=${$(this).data('id')}]`).val(newValue);
});





// const allergiesInputs = document.querySelectorAll('.allergies-input');

// allergiesInputs.forEach((allergiesInput) => {
//   allergiesInput.addEventListener('change' , () => {
//     console.log(allergiesInput.value);
//   })
// })  