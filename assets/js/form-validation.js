const allSteps = document.querySelectorAll(".step").length;
const progressBar = document.getElementById("progress-bar");
let progressStatus = 100 / allSteps;
const progressStatusInit = progressStatus;
let step = 1;

progressBar.style.width = `${progressStatus}%`;

// Disable all "Next" buttons initially
$(".validate-btn").prop("disabled", true);

$(".next-step").click(function () {
  setUpdate((step = step + 1));
  $(".verify-code-popup-wrap").removeClass("active");
  $(".shipping-address-popup-wrap").removeClass("active");
  progressUpdate(progressStatus, progressStatusInit);
});

$(".validate-btn").click(function () {
  if (validateStep(step)) {
    $(".verify-code-popup-wrap").removeClass("active");
    $(".shipping-address-popup-wrap").removeClass("active");
  }
});

$(".step-pre-btn").click(function () {
  setUpdate((step = step - 1));
  progressUpdate(progressMinus, progressStatusInit);
  checkStepInputs();
});

function setUpdate(step) {
  $(`.step`).removeClass("active");
  $(`.step-${step}`).addClass("active");
  checkStepInputs();
}

function progressUpdate(progressWidth, step) {
  progressStatus = progressWidth + step;
  progressBar.style.width = `${progressStatus}%`;
  progressMinus = progressWidth - step;
  console.log(progressStatus);
}

function validateStep(currentStep) {
  let isValid = true;
  $(
    `.step-${currentStep} input, .step-${currentStep} textarea, .step-${currentStep} select`
  ).each(function () {
    if (
      $(this).attr("type") === "checkbox" ||
      $(this).attr("type") === "radio"
    ) {
      if (!$(`input[name="${$(this).attr("name")}"]:checked`).length) {
        isValid = false;
        return false; 
      }
    } else if ($(this).is("select")) {
      if ($(this).val() === null || $(this).val().trim() === "") {
        isValid = false;
        return false; 
      }
    } else if ($(this).val().trim() === "") {
      isValid = false;
      return false; 
    }
  });

  // Check for step-5 and add the setTimeout logic
  if (currentStep === 5) {
    setTimeout(() => {
      $(".loader-area").addClass("active");
      $(".emergency-medication-supply").addClass("active");
    }, 5000);
  }

  return isValid;
}




function checkStepInputs() {
  const nextButton = $(`.step-${step} .validate-btn`);
  if (validateStep(step)) {
    nextButton.prop("disabled", false);
  } else {
    nextButton.prop("disabled", true);
  }
}

// Initial check for the first step
checkStepInputs();

// Add event listeners to input fields in each step
$(".step input, .step textarea, .step select").on("input change", function () {
  checkStepInputs();
});
