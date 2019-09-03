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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./js/App.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./js/App.js":
/*!*******************!*\
  !*** ./js/App.js ***!
  \*******************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nvar _Main = __webpack_require__(/*! ./modules/Main */ \"./js/modules/Main.js\");\n\nvar _Main2 = _interopRequireDefault(_Main);\n\nfunction _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }\n\nvar main = new _Main2.default();\n\n//# sourceURL=webpack:///./js/App.js?");

/***/ }),

/***/ "./js/modules/Main.js":
/*!****************************!*\
  !*** ./js/modules/Main.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nObject.defineProperty(exports, \"__esModule\", {\n  value: true\n});\n\nvar _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nvar Main = function () {\n  function Main() {\n    _classCallCheck(this, Main);\n\n    this.faq_nav = $('.faq .left');\n    this.faq_nav_link = $('.faq .left__item a');\n    this.learn_more_btn = $('.hero .buttons a');\n    this.scroll_to_form = $('.scroll-to-form');\n    this.tabs = $('.section-tabs__tabs');\n    this.tabs_link = $('.section-tabs__tabs .nav-link');\n    this.modal_toggler = $('a[data-target=\"#downloadModal\"]');\n    this.modal = $('#downloadModal');\n    this.events();\n  }\n\n  _createClass(Main, [{\n    key: 'events',\n    value: function events() {\n      this.faq_nav_link.on('click', this.faq_nav_link_onClick);\n      this.tabs_link.on('click', this.tab_link_onClick);\n      this.learn_more_btn.on('click', this.learn_more_btn_onClick);\n      this.scroll_to_form.on('click', this.scroll_to_form_onClick);\n      this.modal_toggler.on('click', this.modal_toggler_onClick.bind(this));\n      $(window).on('load', this.window_onLoad.bind(this));\n    }\n  }, {\n    key: 'window_onLoad',\n    value: function window_onLoad() {\n      var _this = this;\n\n      if (this.faq_nav.length && $(window).outerWidth() > 767) {\n        var footer_top = $('.footer').offset().top;\n        var left_top = this.faq_nav.outerHeight();\n\n        $(window).scroll(function (e) {\n          $(window).scrollTop() > footer_top - (left_top + 79 + 150) ? _this.faq_nav.addClass('left--absolute') : _this.faq_nav.removeClass('left--absolute');\n        });\n      }\n\n      if ($(window).outerWidth() > 767 && this.tabs.length) {\n        var tabs_top = this.tabs.offset().top;\n        $(window).scroll(function (e) {\n          $(window).scrollTop() > tabs_top - 50 ? _this.tabs.addClass('section-tabs__tabs--sticky') : _this.tabs.removeClass('section-tabs__tabs--sticky');\n        });\n      }\n    }\n  }, {\n    key: 'modal_toggler_onClick',\n    value: function modal_toggler_onClick(e) {\n      var target = $(e.target).closest('.item'),\n          image_url = target.find('.thumb').css('background');\n      this.modal.find('.modal-download__right').css({\n        background: image_url\n      });\n      this.modal.find('.headline').text(target.find('.headline').text());\n      this.modal.find('.modal-download__left p').text(target.find('p').text());\n      this.modal.find('.btn').attr('href', target.attr('data-document'));\n    }\n  }, {\n    key: 'scroll_to_form_onClick',\n    value: function scroll_to_form_onClick(e) {\n      e.preventDefault();\n      if ($(window).outerWidth() < 991) $('.navbar-toggler').trigger('click'); // hide menu on mobile\n      $('html, body').animate({ scrollTop: $('section.form').offset().top - 80 }, 700);\n    }\n  }, {\n    key: 'learn_more_btn_onClick',\n    value: function learn_more_btn_onClick(e) {\n      e.preventDefault();\n      var next_block = $('.hero').next('section');\n      $('html, body').animate({ scrollTop: $(next_block).offset().top - 80 }, 400);\n    }\n  }, {\n    key: 'faq_nav_link_onClick',\n    value: function faq_nav_link_onClick(e) {\n      e.preventDefault();\n      var hash = this.hash;\n      $('html, body').animate({ scrollTop: $(hash).offset().top - 90 }, 400);\n    }\n  }, {\n    key: 'tab_link_onClick',\n    value: function tab_link_onClick(e) {\n      e.preventDefault();\n      var hash = this.hash;\n      $('html, body').animate({ scrollTop: $(hash).offset().top - 80 }, 400);\n    }\n  }]);\n\n  return Main;\n}();\n\nexports.default = Main;\n\n//# sourceURL=webpack:///./js/modules/Main.js?");

/***/ })

/******/ });