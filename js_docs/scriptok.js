/*------------------------------------------Corousel-----------------------------------------------*/
let carousel = document.querySelectorAll(".carousel");
let nav = document.querySelector(".nav_link");
let carLeft = document.querySelector(".game .left .carousel_images .cleft");
let carRight = document.querySelector(".game .left .carousel_images .cright");
let dashes = document.querySelectorAll(".dash");
let index = 0;
for (let i = 0; i < 4; i++) {
  dashes[i].addEventListener("click", function () {
    carousel[index].style.opacity = 0;
    dashes[index].style.backgroundColor = "#bae8df";
    index = i;
    dashes[index].style.backgroundColor = "#12816a";
    carousel[index].style.opacity = 1;
    logic();
  });
}
function logic() {
  if (index == 0) {
    carLeft.style.display = "none";
  } else if (index == 3) {
    carRight.style.display = "none";
  } else {
    carLeft.style.display = "block";
    carRight.style.display = "block";
  }
}
logic();
carRight.addEventListener("click", function () {
  carousel[index].style.opacity = 0;
  dashes[index].style.backgroundColor = "#bae8df";
  index = index + 1;
  dashes[index].style.backgroundColor = "#12816a";
  carousel[index].style.opacity = 1;
  logic();
});
carLeft.addEventListener("click", function () {
  carousel[index].style.opacity = 0;
  dashes[index].style.backgroundColor = "#bae8df";
  index = index - 1;
  dashes[index].style.backgroundColor = "#12816a";
  carousel[index].style.opacity = 1;
  logic();
});

/*----------------------------------------Login------------------------------------------------------*/
