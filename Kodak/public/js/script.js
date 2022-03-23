/******/ (() => { // webpackBootstrap
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
var container = document.querySelector(".container"),
    pwShowHide = document.querySelectorAll(".showHidePw"),
    pwFields = document.querySelectorAll(".password"),
    signUp = document.querySelector(".signup-link"),
    login = document.querySelector(".login-link"); //   js code to show/hide password and change icon

pwShowHide.forEach(function (eyeIcon) {
  eyeIcon.addEventListener("click", function () {
    pwFields.forEach(function (pwField) {
      if (pwField.type === "password") {
        pwField.type = "text";
        pwShowHide.forEach(function (icon) {
          icon.classList.replace("uil-eye-slash", "uil-eye");
        });
      } else {
        pwField.type = "password";
        pwShowHide.forEach(function (icon) {
          icon.classList.replace("uil-eye", "uil-eye-slash");
        });
      }
    });
  });
});
/******/ })()
;