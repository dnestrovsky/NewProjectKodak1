/******/ (() => { // webpackBootstrap
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
var body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");
toggle.addEventListener("click", function () {
  sidebar.classList.toggle("close");
});
searchBtn.addEventListener("click", function () {
  sidebar.classList.remove("close");
});
modeSwitch.addEventListener("click", function () {
  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    modeText.innerText = "Light режим";
  } else {
    modeText.innerText = "Dark режим";
  }
});
/******/ })()
;