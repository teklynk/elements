/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
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
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 28);
/******/ })
/************************************************************************/
/******/ ({

/***/ 28:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(3);


/***/ }),

/***/ 3:
/***/ (function(module, exports) {

var refreshRate = 0;
var chatTimer = void 0;
var chatCount = 0;

//auto scroll to bottom of chat-container every 1 second
window.setInterval(function () {
    var browserWindowHeight = $(window).height();
    var elem = document.getElementById('chat');
    $('#chat').height(browserWindowHeight);
    elem.scrollTop = elem.scrollHeight;
}, 100);

var names = ["Alberta", "Barry", "Charley", "Christopher", "Dianne", "Ellen", "Ethel", "James", "Jodee", "Joseph", "Lilia", "Mark", "Mary", "Merri", "Michael", "Mildred", "Randall", "Roy", "Thomas", "Venus"];
var messages = ["Hello", "This is great", "GG", "How are you doing?", "This is a really long game", "whatever", "hahahah", "What game is this?", "seen any good movies", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", "save your game!", "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat", "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur", "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum", "If you could remove something that exists in this world forever, what would it be?", "Where do you see yourself in 5 years?", "What is the last thing that you totally overreacted to?", "Have you ever had or witnessed a drop the mic moment?", "What is the best random act of kindness you've ever witnessed?", "What little thing instantly tells you that a person is good?"];

var badges = ["chat-badge-mod", "", "chat-badge-vip", "", "chat-badge-turbo", "chat-badge-broadcaster", "", "", "chat-badge-mod", "", "chat-badge-vip", "", "chat-badge-turbo", "", "chat-badge-mod", "chat-badge-vip", "", "chat-badge-vip", "", ""];

var emotes = ["<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/555555584/3.0\">", "", "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/41/3.0\">", "", "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/555555580/3.0\">", "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0\">", "", "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/1/3.0\">", "", "", "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/555555584/3.0\">", "", "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/41/3.0\">", "", "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/555555580/3.0\">", "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0\">", "", "", "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0\">", "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/41/3.0\">"];

var interval = 3000;
var badge = '';
var emote = '';

names.forEach(function (el, index) {

    chatCount++;

    if (chatCount === chatLimit) {
        names.length = index + 1;
    } // break

    setTimeout(function () {
        if (showBadges === true) {
            badge = badges[index];
        }
        if (showEmotes === true) {
            emote = emotes[index];
        }
        $('#chat').append('<div class="chat-line new ' + transition + '">' + '<span class="chat-badges"><div class="' + badge + '"></div></span>' + '<span class="chat-name">' + names[index] + '</span>' + '<span class="chat-colon"></span>' + '<span class="chat-message">' + messages[index] + ' ' + emote + '</span></div>');
    }, index * interval);
});

/***/ })

/******/ });