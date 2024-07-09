let step = 1;
const totalSteps = $(".step").length;

$(".next-step").click(function () {
  if (step < totalSteps) {
    step++;
    setUpdate(step);
  }
});

$(".step-pre-btn").click(function () {
  if (step > 1) {
    step--;
    setUpdate(step);
  }
});

function setUpdate(step) {
  $(".step").removeClass("active");
  $(`.step-${step}`).addClass("active");
  updateProgressBar(step, totalSteps);
}

function updateProgressBar(step, totalSteps) {
  const progressPercentage = (step / totalSteps) * 100;
  $("#progress-bar").css("width", progressPercentage + "%");
}

// Initial update
updateProgressBar(step, totalSteps);
