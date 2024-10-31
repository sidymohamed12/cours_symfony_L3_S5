(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_regexp_test_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.regexp.test.js */ "./node_modules/core-js/modules/es.regexp.test.js");
/* harmony import */ var core_js_modules_es_regexp_test_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_test_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_string_trim_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.string.trim.js */ "./node_modules/core-js/modules/es.string.trim.js");
/* harmony import */ var core_js_modules_es_string_trim_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_trim_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _bootstrap_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./bootstrap.js */ "./assets/bootstrap.js");
/* harmony import */ var _bootstrap_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_bootstrap_js__WEBPACK_IMPORTED_MODULE_3__);




/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
// import './styles/app.css';

// start the Stimulus application
// import './bootstrap';

// enable the interactive UI components from Flowbite
// import 'flowbite';

console.log("app.js est chargé");
var toggleSwitch = document.getElementById("toggleSwitch");
var formUser = document.getElementById("userSwitch");
formUser.style.display = "none";
toggleSwitch.addEventListener("change", function () {
  if (this.checked) {
    formUser.style.display = "block";
    console.log("oonn", this.checked);
  } else {
    formUser.style.display = "none";
  }
});
function isEmpty(input) {
  if (input.value.trim() === "") {
    return true;
  } else {
    return false;
  }
}
function checkLength(input, min, max) {
  if (input.value.length < min) {
    return "petit";
  } else if (input.value.length > max) {
    return "grand";
  } else {
    return "bon";
  }
}
//
function passwordsMatch(input1, input2) {
  if (input1.value.trim() !== input2.value.trim()) {
    showError(input2, "Passwords don't match!");
  }
}
//
function showError(input, message) {
  var parent = input.parentElement;
  var small = parent.querySelector("small");
  parent.className = "input-groupe error";
  small.innerText = message;
}
//
function showSuccess(input) {
  var parent = input.parentElement;
  parent.className = "input-groupe success";
}
//
// function getFieldName(input) {
//   return input.id.charAt(0).toUpperCase() + input.id.slice(1);
// }
//-----------------------------Validité email-------------------
function isValidEmail(input) {
  var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  if (!emailPattern.test(input.value)) {
    return false;
  } else {
    return true;
  }
}

// ------------------------- VERIFY PASSWORD ------------------------------
function checkPassword(input) {
  if (isEmpty(input)) {
    showError(input, "ce champ est obligatoire");
  } else if (checkLength(input, 2, 10) === "petit") {
    showError(input, "doit avoir minimum 6 caracteres");
  } else if (checkLength(input, 2, 10) === "grand") {
    showError(input, "doit avoir maximum 10 caracteres");
  } else {
    showSuccess(input);
  }
}

// ------------------------- VERIFY MAIL ------------------------------
function checkMail(input) {
  if (isEmpty(input)) {
    showError(input, "ce champ est obligatoire");
  } else if (!isValidEmail(input)) {
    showError(input, "mail invalid");
  } else {
    showSuccess(input);
  }
}

// form.addEventListener("submit", function (e) {
//   checkMail(login);
//   checkPassword(password);
// });

/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/***/ (() => {



/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_regexp_test_js-node_modules_core-js_modules_es_string-f20c1b"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUMsRUFBRTtJQUNsQlUsU0FBUyxDQUFDVixLQUFLLEVBQUUsMEJBQTBCLENBQUM7RUFDOUMsQ0FBQyxNQUFNLElBQUlHLFdBQVcsQ0FBQ0gsS0FBSyxFQUFFLENBQUMsRUFBRSxFQUFFLENBQUMsS0FBSyxPQUFPLEVBQUU7SUFDaERVLFNBQVMsQ0FBQ1YsS0FBSyxFQUFFLGlDQUFpQyxDQUFDO0VBQ3JELENBQUMsTUFBTSxJQUFJRyxXQUFXLENBQUNILEtBQUssRUFBRSxDQUFDLEVBQUUsRUFBRSxDQUFDLEtBQUssT0FBTyxFQUFFO0lBQ2hEVSxTQUFTLENBQUNWLEtBQUssRUFBRSxrQ0FBa0MsQ0FBQztFQUN0RCxDQUFDLE1BQU07SUFDTGtCLFdBQVcsQ0FBQ2xCLEtBQUssQ0FBQztFQUNwQjtBQUNGOztBQUVBO0FBQ0EsU0FBU3VCLFNBQVNBLENBQUN2QixLQUFLLEVBQUU7RUFDeEIsSUFBSUQsT0FBTyxDQUFDQyxLQUFLLENBQUMsRUFBRTtJQUNsQlUsU0FBUyxDQUFDVixLQUFLLEVBQUUsMEJBQTBCLENBQUM7RUFDOUMsQ0FBQyxNQUFNLElBQUksQ0FBQ21CLFlBQVksQ0FBQ25CLEtBQUssQ0FBQyxFQUFFO0lBQy9CVSxTQUFTLENBQUNWLEtBQUssRUFBRSxjQUFjLENBQUM7RUFDbEMsQ0FBQyxNQUFNO0lBQ0xrQixXQUFXLENBQUNsQixLQUFLLENBQUM7RUFDcEI7QUFDRjs7QUFFQTtBQUNBO0FBQ0E7QUFDQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFwiLi9ib290c3RyYXAuanNcIjtcbi8qXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXG4gKlxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cbiAqL1xuXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXG4vLyBpbXBvcnQgJy4vc3R5bGVzL2FwcC5jc3MnO1xuXG4vLyBzdGFydCB0aGUgU3RpbXVsdXMgYXBwbGljYXRpb25cbi8vIGltcG9ydCAnLi9ib290c3RyYXAnO1xuXG4vLyBlbmFibGUgdGhlIGludGVyYWN0aXZlIFVJIGNvbXBvbmVudHMgZnJvbSBGbG93Yml0ZVxuLy8gaW1wb3J0ICdmbG93Yml0ZSc7XG5cbmNvbnNvbGUubG9nKFwiYXBwLmpzIGVzdCBjaGFyZ8OpXCIpO1xuY29uc3QgdG9nZ2xlU3dpdGNoID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJ0b2dnbGVTd2l0Y2hcIik7XG5jb25zdCBmb3JtVXNlciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwidXNlclN3aXRjaFwiKTtcbmZvcm1Vc2VyLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcblxudG9nZ2xlU3dpdGNoLmFkZEV2ZW50TGlzdGVuZXIoXCJjaGFuZ2VcIiwgZnVuY3Rpb24gKCkge1xuICBpZiAodGhpcy5jaGVja2VkKSB7XG4gICAgZm9ybVVzZXIuc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcbiAgICBjb25zb2xlLmxvZyhcIm9vbm5cIiwgdGhpcy5jaGVja2VkKTtcbiAgfSBlbHNlIHtcbiAgICBmb3JtVXNlci5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XG4gIH1cbn0pO1xuXG5mdW5jdGlvbiBpc0VtcHR5KGlucHV0KSB7XG4gIGlmIChpbnB1dC52YWx1ZS50cmltKCkgPT09IFwiXCIpIHtcbiAgICByZXR1cm4gdHJ1ZTtcbiAgfSBlbHNlIHtcbiAgICByZXR1cm4gZmFsc2U7XG4gIH1cbn1cblxuZnVuY3Rpb24gY2hlY2tMZW5ndGgoaW5wdXQsIG1pbiwgbWF4KSB7XG4gIGlmIChpbnB1dC52YWx1ZS5sZW5ndGggPCBtaW4pIHtcbiAgICByZXR1cm4gXCJwZXRpdFwiO1xuICB9IGVsc2UgaWYgKGlucHV0LnZhbHVlLmxlbmd0aCA+IG1heCkge1xuICAgIHJldHVybiBcImdyYW5kXCI7XG4gIH0gZWxzZSB7XG4gICAgcmV0dXJuIFwiYm9uXCI7XG4gIH1cbn1cbi8vXG5mdW5jdGlvbiBwYXNzd29yZHNNYXRjaChpbnB1dDEsIGlucHV0Mikge1xuICBpZiAoaW5wdXQxLnZhbHVlLnRyaW0oKSAhPT0gaW5wdXQyLnZhbHVlLnRyaW0oKSkge1xuICAgIHNob3dFcnJvcihpbnB1dDIsIFwiUGFzc3dvcmRzIGRvbid0IG1hdGNoIVwiKTtcbiAgfVxufVxuLy9cbmZ1bmN0aW9uIHNob3dFcnJvcihpbnB1dCwgbWVzc2FnZSkge1xuICBjb25zdCBwYXJlbnQgPSBpbnB1dC5wYXJlbnRFbGVtZW50O1xuICBjb25zdCBzbWFsbCA9IHBhcmVudC5xdWVyeVNlbGVjdG9yKFwic21hbGxcIik7XG4gIHBhcmVudC5jbGFzc05hbWUgPSBcImlucHV0LWdyb3VwZSBlcnJvclwiO1xuICBzbWFsbC5pbm5lclRleHQgPSBtZXNzYWdlO1xufVxuLy9cbmZ1bmN0aW9uIHNob3dTdWNjZXNzKGlucHV0KSB7XG4gIGNvbnN0IHBhcmVudCA9IGlucHV0LnBhcmVudEVsZW1lbnQ7XG4gIHBhcmVudC5jbGFzc05hbWUgPSBcImlucHV0LWdyb3VwZSBzdWNjZXNzXCI7XG59XG4vL1xuLy8gZnVuY3Rpb24gZ2V0RmllbGROYW1lKGlucHV0KSB7XG4vLyAgIHJldHVybiBpbnB1dC5pZC5jaGFyQXQoMCkudG9VcHBlckNhc2UoKSArIGlucHV0LmlkLnNsaWNlKDEpO1xuLy8gfVxuLy8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVZhbGlkaXTDqSBlbWFpbC0tLS0tLS0tLS0tLS0tLS0tLS1cbmZ1bmN0aW9uIGlzVmFsaWRFbWFpbChpbnB1dCkge1xuICBjb25zdCBlbWFpbFBhdHRlcm4gPSAvXlthLXpBLVowLTkuXy1dK0BbYS16QS1aMC05Li1dK1xcLlthLXpBLVpdezIsNn0kLztcbiAgaWYgKCFlbWFpbFBhdHRlcm4udGVzdChpbnB1dC52YWx1ZSkpIHtcbiAgICByZXR1cm4gZmFsc2U7XG4gIH0gZWxzZSB7XG4gICAgcmV0dXJuIHRydWU7XG4gIH1cbn1cblxuLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSBWRVJJRlkgUEFTU1dPUkQgLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5mdW5jdGlvbiBjaGVja1Bhc3N3b3JkKGlucHV0KSB7XG4gIGlmIChpc0VtcHR5KGlucHV0KSkge1xuICAgIHNob3dFcnJvcihpbnB1dCwgXCJjZSBjaGFtcCBlc3Qgb2JsaWdhdG9pcmVcIik7XG4gIH0gZWxzZSBpZiAoY2hlY2tMZW5ndGgoaW5wdXQsIDIsIDEwKSA9PT0gXCJwZXRpdFwiKSB7XG4gICAgc2hvd0Vycm9yKGlucHV0LCBcImRvaXQgYXZvaXIgbWluaW11bSA2IGNhcmFjdGVyZXNcIik7XG4gIH0gZWxzZSBpZiAoY2hlY2tMZW5ndGgoaW5wdXQsIDIsIDEwKSA9PT0gXCJncmFuZFwiKSB7XG4gICAgc2hvd0Vycm9yKGlucHV0LCBcImRvaXQgYXZvaXIgbWF4aW11bSAxMCBjYXJhY3RlcmVzXCIpO1xuICB9IGVsc2Uge1xuICAgIHNob3dTdWNjZXNzKGlucHV0KTtcbiAgfVxufVxuXG4vLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tIFZFUklGWSBNQUlMIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuZnVuY3Rpb24gY2hlY2tNYWlsKGlucHV0KSB7XG4gIGlmIChpc0VtcHR5KGlucHV0KSkge1xuICAgIHNob3dFcnJvcihpbnB1dCwgXCJjZSBjaGFtcCBlc3Qgb2JsaWdhdG9pcmVcIik7XG4gIH0gZWxzZSBpZiAoIWlzVmFsaWRFbWFpbChpbnB1dCkpIHtcbiAgICBzaG93RXJyb3IoaW5wdXQsIFwibWFpbCBpbnZhbGlkXCIpO1xuICB9IGVsc2Uge1xuICAgIHNob3dTdWNjZXNzKGlucHV0KTtcbiAgfVxufVxuXG4vLyBmb3JtLmFkZEV2ZW50TGlzdGVuZXIoXCJzdWJtaXRcIiwgZnVuY3Rpb24gKGUpIHtcbi8vICAgY2hlY2tNYWlsKGxvZ2luKTtcbi8vICAgY2hlY2tQYXNzd29yZChwYXNzd29yZCk7XG4vLyB9KTtcbiJdLCJuYW1lcyI6WyJjb25zb2xlIiwibG9nIiwidG9nZ2xlU3dpdGNoIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImZvcm1Vc2VyIiwic3R5bGUiLCJkaXNwbGF5IiwiYWRkRXZlbnRMaXN0ZW5lciIsImNoZWNrZWQiLCJpc0VtcHR5IiwiaW5wdXQiLCJ2YWx1ZSIsInRyaW0iLCJjaGVja0xlbmd0aCIsIm1pbiIsIm1heCIsImxlbmd0aCIsInBhc3N3b3Jkc01hdGNoIiwiaW5wdXQxIiwiaW5wdXQyIiwic2hvd0Vycm9yIiwibWVzc2FnZSIsInBhcmVudCIsInBhcmVudEVsZW1lbnQiLCJzbWFsbCIsInF1ZXJ5U2VsZWN0b3IiLCJjbGFzc05hbWUiLCJpbm5lclRleHQiLCJzaG93U3VjY2VzcyIsImlzVmFsaWRFbWFpbCIsImVtYWlsUGF0dGVybiIsInRlc3QiLCJjaGVja1Bhc3N3b3JkIiwiY2hlY2tNYWlsIl0sInNvdXJjZVJvb3QiOiIifQ==