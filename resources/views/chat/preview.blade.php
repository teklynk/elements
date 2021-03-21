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
    //variables for chatpreview.js
    var showBadges = {{ $chat->chat_show_badges == 'on' ? 'true' : 'false' }}, // Show chatters' badges
        showEmotes = {{ $chat->chat_show_emotes == 'on' ? 'true' : 'false' }}, // Show emotes in the chat
        refresh = {{ $chat->chat_refresh }},
        chatLimit = {{ $chat->chat_max_cnt }},
        refresh = {{ $chat->chat_refresh }},
        transition = '{{ $chat->chat_transition }}'
</script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/chatpreview.js') }}"></script>
</body>
</html>