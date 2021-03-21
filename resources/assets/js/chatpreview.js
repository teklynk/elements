let refreshRate = 0;
let chatTimer;
let chatCount = 0;

//auto scroll to bottom of chat-container every 1 second
window.setInterval(function () {
    let browserWindowHeight = $(window).height();
    let elem = document.getElementById('chat');
    $('#chat').height(browserWindowHeight);
    elem.scrollTop = elem.scrollHeight;
}, 100);

const names = [
    "Alberta",
    "Barry",
    "Charley",
    "Christopher",
    "Dianne",
    "Ellen",
    "Ethel",
    "James",
    "Jodee",
    "Joseph",
    "Lilia",
    "Mark",
    "Mary",
    "Merri",
    "Michael",
    "Mildred",
    "Randall",
    "Roy",
    "Thomas",
    "Venus"
];
const messages = [
    "Hello",
    "This is great",
    "GG",
    "How are you doing?",
    "This is a really long game",
    "what ever",
    "Ethel",
    "James",
    "Jodee",
    "Joseph",
    "Lilia",
    "Mark",
    "Mary",
    "Merri",
    "Michael",
    "Mildred",
    "Randall",
    "Roy",
    "Thomas",
    "Venus"
];

var interval = 3000;

names.forEach(function (el, index) {

    chatCount++;

    if (chatCount === chatLimit) { names.length = index + 1; } // break

    setTimeout(function () {
        $('#chat').append('<div class="chat-line new ' + transition + '">' +
            '<span class="chat-badges"></span>' +
            '<span class="chat-name">' + names[index] + '</span>' +
            '<span class="chat-colon"></span>' +
            '<span class="chat-message">' + messages[index] + '</span></div>');
    }, index * interval);

});