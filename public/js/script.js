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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);
module.exports = __webpack_require__(3);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

var app = new Vue({
    el: '.wrapper',
    data: {
        name: '',
        type: 'Government',
        nameError: false,
        typeError: false,
        url: '',
        fileLabel: "Choose Your File",
        layout: 'list'
    },
    methods: {
        saveDept: function saveDept() {
            var _this = this;

            this.url = $('#form').attr('action');
            axios.post(this.url, this.$data).then(function (response) {
                return _this.successful();
            }).catch(function (error) {
                return _this.failed();
            });
        },
        successful: function successful() {
            $.toaster("Successfully Added");
            this.name = '';
        },
        failed: function failed() {
            $.toaster("Invalid Input", '', 'danger');
            if (error()) this.typeError = true;
            if (error()) this.nameError = true;
        },
        light: function light() {
            $.ajax({
                url: "set/cookies",
                type: "get",
                data: {
                    name: 'theme',
                    value: 'light'
                }
            });
            $('#theme').attr('href', 'http://nnb.test/css/theme_light.css');
            $('#light').addClass('disabled');
            $('#dark').removeClass('disabled');
        },
        dark: function dark() {
            $.ajax({
                url: "set/cookies",
                type: "get",
                data: {
                    name: 'theme',
                    value: 'dark'
                }
            });
            $('#theme').attr('href', 'http://nnb.test/css/theme_dark.css');
            $('#dark').addClass('disabled');
            $('#light').removeClass('disabled');
        },
        grid: function grid() {
            $.ajax({
                url: "set/cookies",
                type: "get",
                data: {
                    name: 'layout',
                    value: 'grid'
                }
            });
            $('#list-btn').hide();
            $('#grid-btn').show();
            $('#list').hide();
            $('#grid').show();
        },
        list: function list() {
            $.ajax({
                url: "set/cookies",
                type: "get",
                data: {
                    name: 'layout',
                    value: 'list'
                }
            });
            $('#grid-btn').hide();
            $('#list-btn').show();
            $('#grid').hide();
            $('#list').show();
        }
    } //End of methods

}); //End of app(Vue)

$(window).scroll(function () {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});

// let app2 = new Vue({
//     el: "#test",
//     methods: {
//         testit() {
//             console.log('testing')
//         },
//         light() {
//         },
//         dark() {
//
//         },
//     },
//
//
// });


$("#toTop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 500);
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);