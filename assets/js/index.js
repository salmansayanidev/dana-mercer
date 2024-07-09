// step form js

const selectLensRadios = document.querySelectorAll(".select-lens-radio");
const formStep = document.querySelectorAll(".step");

let step = 1;

// selectLensRadios.forEach((selectLensRadio) => {
//   selectLensRadio.addEventListener("change", () => {
//     setUpdate((step = step + 1));
//   });
// });

$(".next-step-btn").click(function () {
  setUpdate((step = step + 1));
});

$(".step-pre-btn").click(function () {
  setUpdate((step = step - 1));
});

function setUpdate(step) {
  $(`.step`).removeClass("active");
  $(`.step-${step}`).addClass("active");
}