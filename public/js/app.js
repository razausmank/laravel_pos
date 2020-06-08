/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// require('./bootstrap');
__webpack_require__(/*! ./config */ "./resources/js/config.js");

__webpack_require__(/*! ./components_scripts */ "./resources/js/components_scripts.js");

var FormValidator = __webpack_require__(/*! ./form_validation */ "./resources/js/form_validation.js");

__webpack_require__(/*! ./page_specific */ "./resources/js/page_specific.js"); // {
//     trigger: new FormValidation.plugins.Trigger(),
//     // Bootstrap Framework Integration
//     bootstrap: new FormValidation.plugins.Bootstrap(),
//     // Validate fields when clicking the Submit button
//     submitButton: new FormValidation.plugins.SubmitButton(),
//                                     // Submit the form when all fields are valid
//     defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
// }

/***/ }),

/***/ "./resources/js/components_scripts.js":
/*!********************************************!*\
  !*** ./resources/js/components_scripts.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// page hierachy json
$(document).ready(function () {
  $('#page_hierarchy_js_tree_form_submit').on('click', function (e) {
    e.preventDefault();
    var data = JSON.stringify($('#kt_tree_5').jstree(true).get_json('#', {
      flat: true
    }));
    $.ajax({
      type: 'POST',
      url: $('#js_tree_form').attr('action'),
      data: {
        "_token": $('input[name="page_hierarchy_csrf_token"]').val(),
        "data": data
      },
      success: function success(data) {
        console.log(data);
        location.reload();
      }
    }).fail(function (jqXHR, textStatus, error) {
      console.log(jqXHR);
      console.log(textStatus);
      console.log(error);
    });
    ;
  });
  $('#page_hierarchy_js_tree_form_reset').on('click', function (e) {
    $('#kt_tree_5').jstree(true).refresh();
  });
  var page_hierarchy_json = JSON.parse($('input[name="page_hierarchy_json"]').val());
  $("#kt_tree_5").jstree({
    "core": {
      "themes": {
        "responsive": false
      },
      // so that create works
      "check_callback": true,
      "data": page_hierarchy_json
    },
    "types": {
      "default": {
        "icon": "fa fa-folder text-success"
      },
      "file": {
        "icon": "fa fa-file  text-success"
      }
    },
    "state": {
      "key": "demo2"
    },
    "plugins": ["dnd", "state", "types"]
  });
});

/***/ }),

/***/ "./resources/js/config.js":
/*!********************************!*\
  !*** ./resources/js/config.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// window.setlocale = function getBaseUrl()
// {
//     var absolute_path = document.querySelector('input[name="absolute_path"]').value ;
//     alert( absolute_path );
//     return absolute_path;
// }
// function inputvalidation( fieldname )
// {
//     value = $(`input[name="${fieldname}"]`).val() ;
//    if ( !hasWhiteSpace( value )  && isNotEmpty( value ) )
//    {
//     return true ;
//    }
//    alert("The username is either blank or has space ")
//    return false ;
// }
// $('button').on('click', function(e){
//     if (!inputvalidation('username')) {
//         e.preventDefault();
//     }
// });
// function hasWhiteSpace(s) {
//     return s.indexOf(' ') >= 0;
// }
// function isNotEmpty(s) {
//     return s.length > 0 ;
// }

/***/ }),

/***/ "./resources/js/form_validation.js":
/*!*****************************************!*\
  !*** ./resources/js/form_validation.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = {
  /* Validate is the main Function, it takes 3 inputs one of which is optional
  the first input is the form id
  the second input takes an object which defines the fields to be validated and the type of validations each field will have with a custom message for each validation type
  the third parameter is optional it has a few default plugins, it takes an object that defines the plugings to be used
  */
  validate: function validate(formID, form_data) {
    var form_validation_plugin = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : this.form_validation_plugin;
    var fields_data = this.make_form_data(form_data);
    var form_id = document.getElementById(formID);
    this.form_validation_function(form_id, fields_data, form_validation_plugin);
  },
  //this makes call to the validation library
  form_validation_function: function form_validation_function(form_id, fields_data, form_validation_plugin) {
    FormValidation.formValidation(form_id, {
      fields: fields_data,
      plugins: form_validation_plugin
    });
  },
  //parses the input object into a valid object structure that the validation library requires
  make_form_data: function make_form_data(form_data) {
    var fields_with_validators = {};

    for (var field_name in form_data) {
      fields_with_validators[field_name] = {
        validators: {}
      };

      for (var key in form_data[field_name]) {
        fields_with_validators[field_name].validators[key] = {
          "message": form_data[field_name][key]
        };
      }
    }

    return fields_with_validators;
  },
  // default plugins to be used if plugins not explicitly mentioned
  form_validation_plugin: {
    trigger: new FormValidation.plugins.Trigger(),
    // Bootstrap Framework Integration
    bootstrap: new FormValidation.plugins.Bootstrap(),
    // Validate fields when clicking the Submit button
    submitButton: new FormValidation.plugins.SubmitButton(),
    // Submit the form when all fields are valid
    defaultSubmit: new FormValidation.plugins.DefaultSubmit()
  }
}; // pass in the form id
// go through every field and filter out the inputs with attribute "data-validation='true' "
// each input will have the types of validation mentioned in attribute which would be

/***/ }),

/***/ "./resources/js/page_specific.js":
/*!***************************************!*\
  !*** ./resources/js/page_specific.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// main master Component
$('#logout_button').on('click', function (event) {
  event.preventDefault();
  $('#logout_form').submit();
});
FormValidator.validate("kt_form_1", {
  "email": {
    "notEmpty": "Email is required modified",
    "emailAddress": "The value is not a valid email address modified"
  },
  "url": {
    "notEmpty": "Url is required :)",
    "uri": "this is mad"
  }
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\Sufi_Mano\Desktop\laravel_POS\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\Sufi_Mano\Desktop\laravel_POS\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });