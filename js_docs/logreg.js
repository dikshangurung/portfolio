const loginok = document.querySelector(".login");
const hide = document.querySelector(".container_hide");
const cross = document.querySelector(".container_hide .hide .cross");
const overlay = document.querySelector(".overlay");
const login_page = document.querySelector(".login_page");
const registration_page = document.querySelector(".registration_page");
let login_side = document.querySelector(
  ".container_hide .hide .hide_body .hide_login"
);
let register_side = document.querySelector(
  ".container_hide .hide .hide_body .hide_registration"
);
let condition = 1;
// hidden();
const hidden = function () {
  hide.style.display = "none";
  overlay.style.display = "none";
};
loginok.addEventListener("click", function (e) {
  hide.style.display = "block";
  overlay.style.display = "block";
  hide.style.left = "35%";
  if (e.pageY < 250) {
    hide.style.top = `80px`;
  } else if (e.pageY > 250 && e.pageY <= 350) {
    hide.style.top = `190px`;
  } else if (e.pageY > 350 && e.pageY <= 500) {
    hide.style.top = `300px`;
  } else if (e.pageY > 500 && e.pageY <= 600) {
    hide.style.top = `400px`;
  } else if (e.pageY > 600 && e.pageY <= 700) {
    hide.style.top = `500px`;
  } else if (e.pageY > 700 && e.pageY <= 800) {
    hide.style.top = `600px`;
  } else {
    hide.style.top = `700px`;
  }
});
cross.addEventListener("click", hidden);
overlay.addEventListener("click", hidden);
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    hidden();
  }
});

login_page.addEventListener("click", function () {
  login_page.style.color = "#12816a";
  login_page.style.backgroundColor = "#fff";
  registration_page.style.color = "#000";
  registration_page.style.backgroundColor = "#cccccc";
  condition = 1;
  run();
  //   (condition==1)?condition==1:cond
});
registration_page.addEventListener("click", function () {
  login_page.style.color = "#000";
  login_page.style.backgroundColor = "#cccccc";
  registration_page.style.color = "#12816a";
  registration_page.style.backgroundColor = "#fff";
  condition = 0;
  run();
});
let run = function () {
  if (condition) {
    login_side.style.display = "block";
    register_side.style.display = "none";
  } else {
    register_side.style.display = "block";
    login_side.style.display = "none";
  }
};
