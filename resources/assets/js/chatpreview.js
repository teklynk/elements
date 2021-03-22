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
    "whatever",
    "hahahah",
    "What game is this?",
    "seen any good movies",
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "save your game!",
    "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat",
    "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur",
    "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
    "If you could remove something that exists in this world forever, what would it be?",
    "Where do you see yourself in 5 years?",
    "What is the last thing that you totally overreacted to?",
    "Have you ever had or witnessed a drop the mic moment?",
    "What is the best random act of kindness you've ever witnessed?",
    "What little thing instantly tells you that a person is good?"
];

const badges = [
    "chat-badge-mod",
    "",
    "chat-badge-vip",
    "",
    "chat-badge-turbo",
    "chat-badge-broadcaster",
    "",
    "",
    "chat-badge-mod",
    "",
    "chat-badge-vip",
    "",
    "chat-badge-turbo",
    "",
    "chat-badge-mod",
    "chat-badge-vip",
    "",
    "chat-badge-vip",
    "",
    ""
];

const emotes = [
    "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/555555584/3.0\">",
    "",
    "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/41/3.0\">",
    "",
    "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/555555580/3.0\">",
    "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0\">",
    "",
    "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/1/3.0\">",
    "",
    "",
    "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/555555584/3.0\">",
    "",
    "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/41/3.0\">",
    "",
    "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/555555580/3.0\">",
    "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0\">",
    "",
    "",
    "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0\">",
    "<img class=\"emoticon\" src=\"https://static-cdn.jtvnw.net/emoticons/v1/41/3.0\">"
];

let interval = 3000;
let badge = '';
let emote = '';

names.forEach(function (el, index) {

    chatCount++;

    if (chatCount === chatLimit) { names.length = index + 1; } // break

    setTimeout(function () {
        if (showBadges === true) {
            badge = badges[index];
        }
        if (showEmotes === true) {
            emote = emotes[index];
        }
        $('#chat').append('<div class="chat-line new ' + transition + '">' +
            '<span class="chat-badges"><div class="' + badge + '"></div></span>' +
            '<span class="chat-name">' + names[index] + '</span>' +
            '<span class="chat-colon"></span>' +
            '<span class="chat-message">' + messages[index] + ' ' + emote + '</span></div>');
    }, index * interval);

});