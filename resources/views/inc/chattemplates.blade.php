<style>
    @import url('https://fonts.googleapis.com/css2?family={{ $chat->chat_title_font }}');
    @import url('https://fonts.googleapis.com/css2?family={{ $chat->chat_msg_font }}');
    @import url('https://fonts.googleapis.com/css2?family={{ $chat->chat_username_font }}');

    #chat-body {
        @if(isset($chat->chat_bg_image))
        background-image: url({!! str_replace('public/', '../../storage/', $chat->chat_bg_image) !!}) !important;
        background-position: center;
        background-size: cover;
        background-repeat: repeat-y;
        background-color: transparent !important;
        @endif
    }

    div#chat-box {
        background: {{ $chat->chat_background_gradient_start }};
        background: linear-gradient({{ $background_positions->position }}, {{ $chat->chat_background_gradient_start }}{{ $transparency->hex_value }}, {{ $chat->chat_background_gradient_end }}{{ $transparency->hex_value }});
    }

    div.chat-line:last-child {
        @if(isset($chat->chat_title))
        margin-bottom: {{ $chat->chat_title_font_size + 25 }}px !important;
        @endif
    }

    div.chat-line {
        @if($chat->chat_text_shadow == 'on')
        text-shadow: 1px 1px {{ $chat->chat_text_shadow_color }} !important;
        @endif
    }

    .chat-title {
        @if($chat->chat_title_text_shadow == 'on')
        text-shadow: 1px 1px {{ $chat->chat_title_text_shadow_color }} !important;
        @endif
        @if(isset($chat->chat_title))
        background: {{ $chat->chat_title_bg }} !important;
        color: {{ $chat->chat_title_color }} !important;
        font-size: {{ $chat->chat_title_font_size }}px !important;
        font-family: {{ $chat->chat_title_font }} !important;
        @endif
    }

    .chat-badges {
        font-size: {{ $chat->chat_username_font_size }}px !important;
    }

    .chat-name {
        font-family: {{ $chat->chat_username_font }} !important;
        @if($chat->chat_use_twitch_colors == 'off')
        color: {{ $chat->chat_username_color }} !important;
        @endif
        font-size: {{ $chat->chat_username_font_size }}px !important;
    }

    .chat-colon {
        font-family: {{ $chat->chat_username_font }}  !important;
        @if($chat->chat_msg_twitch_colors == 'off')
        color: {{ $chat->chat_msg_color }} !important;
        @endif
        font-size: {{ $chat->chat_username_font_size }}px !important;
    }

    .chat-message, .chat-hosting-yes, .chat-notice{
        font-family: {{ $chat->chat_msg_font }} !important;
        font-size: {{ $chat->chat_msg_font_size }}px !important;
        @if($chat->chat_msg_twitch_colors == 'off')
        color: {{ $chat->chat_msg_color }} !important;
        @endif
    }

    @if($chat->chat_template == 2)
        div.chat-line {
            background: {{ $chat->chat_template_gradient_start }};
            background: linear-gradient({{ $positions->position }}, {{ $chat->chat_template_gradient_start }}{{ $gradient_transparency->hex_value }}, {{ $chat->chat_template_gradient_end }}{{ $gradient_transparency->hex_value }});
        }
    @endif
</style>