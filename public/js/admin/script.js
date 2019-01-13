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
/******/ 	return __webpack_require__(__webpack_require__.s = 42);
/******/ })
/************************************************************************/
/******/ ({

/***/ 32:
/***/ (function(module, exports) {

var app = new Vue({
    el: '.wrapper',
    data: {
        name: '',
        full_name: '',
        type: 'Government',
        nameError: false,
        typeError: false,
        url: '',
        fileLabel: "Choose Your File",
        layout: 'list'
    },

    methods: {
        notify: function notify(message) {
            var Color = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'primary';

            color = Color;
            $.notify({
                icon: "now-ui-icons ui-1_bell-53",
                message: message
            }, {
                type: color,
                timer: 5000,
                placement: {
                    from: 'bottom',
                    align: 'right'
                }
            });
        },
        notifySuccess: function notifySuccess(message) {
            $.notify({
                icon: "now-ui-icons ui-1_check",
                message: message
            }, {
                type: 'success',
                timer: 2000,
                placement: {
                    from: 'bottom',
                    align: 'right'
                }
            });
        },
        notifyFailure: function notifyFailure(message) {
            $.notify({
                icon: "now-ui-icons ui-1_simple-remove",
                message: message
            }, {
                type: 'danger',
                timer: 2000,
                placement: {
                    from: 'bottom',
                    align: 'right'
                }
            });
        },
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
            this.notifySuccess('Successfully Added');
            this.name = '';
        },
        failed: function failed() {
            this.notifyFailure('Check for input(s)');
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

$(document).ready(function () {

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $(window).scroll(function () {
        if ($(this).scrollTop()) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });

    $("#toTop").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 500);
    });

    $(function () {
        $('[data-toggle="popover"]').popover();
    });
});

/***/ }),

/***/ 42:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(32);


/***/ })

/******/ });