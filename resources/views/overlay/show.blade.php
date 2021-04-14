<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/overlay.css') }}">

    <title>Stream Elements | Overlay</title>
    @include('inc.overlaystyles')
</head>

<body>

    @if(isset($overlay->overlay_msg_1))
        <div class="msg-row msg-1"><div class="message">{{ $overlay->overlay_msg_1 }}</div></div>
    @endif
    @if(isset($overlay->overlay_msg_2))
        <div class="msg-row msg-2"><div class="message">{{ $overlay->overlay_msg_2 }}</div></div>
    @endif
    @if(isset($overlay->overlay_msg_3))
        <div class="msg-row msg-3"><div class="message">{{ $overlay->overlay_msg_3 }}</div></div>
    @endif
    @if(isset($overlay->overlay_msg_4))
        <div class="msg-row msg-4"><div class="message">{{ $overlay->overlay_msg_4 }}</div></div>
    @endif

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/overlay.js') }}"></script>
</body>
</html>
