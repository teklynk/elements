<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
    @if($chat->chat_template)
        <link rel="stylesheet" href="{{ asset('css/templates') }}/template{{ $chat->chat_template }}.css">
    @endif
    <title>Stream Elements | Chat Overlay</title>
    @include('inc.chattemplates')
</head>

<body>

<div id="chat-body">
    @if($chat->chat_title)
        <div class="chat-title">{{ $chat->chat_title }}</div>
    @endif
    <div class="container-fluid" id="chat-box">
        <div id="chat"></div>
    </div>
</div>

<script>
    //variables for chat.js
    var channels = ['{!! str_replace([',',' '], "','", trim($chat->chat_channel)) !!}'], // Channels to initially join
        fadeDelay = false, // Set to false to disable chat fade
        showChannel = true, // Show repespective channels if the channels is longer than 1
        useColor = {{ $chat->chat_use_twitch_colors == 'on' ? 'true' : 'false' }}, // Use chatters' colors or to inherit
        showBadges = {{ $chat->chat_show_badges == 'on' ? 'true' : 'false' }}, // Show chatters' badges
        showEmotes = {{ $chat->chat_show_emotes == 'on' ? 'true' : 'false' }}, // Show emotes in the chat
        doTimeouts = true, // Hide the messages of people who are timed-out
        doChatClears = true, // Hide the chat from an entire channel
        showHosting = true, // Show when the channel is hosting or not
        refresh = {{ $chat->chat_refresh }},
        chatLimit = {{ $chat->chat_max_cnt }},
        transition = '{{ $chat->chat_transition }}',
        showNotices = false, // Show chat-delete-timeout chat-timedout chat-notice
        botAccount = ['{!! str_replace([',',' '], "','", trim($chat->chat_bot)) !!}'],
        debugMode = true,
        showConnectionNotices = false; // Show messages like "Connected", "Disconnected", "Parted"
</script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/chat.js') }}"></script>
</body>
</html>