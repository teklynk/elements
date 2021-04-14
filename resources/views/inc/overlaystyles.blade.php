<style>
@import url('https://fonts.googleapis.com/css2?family={{ $overlay->overlay_msg_font_1 }}');
@import url('https://fonts.googleapis.com/css2?family={{ $overlay->overlay_msg_font_2 }}');
@import url('https://fonts.googleapis.com/css2?family={{ $overlay->overlay_msg_font_3 }}');
@import url('https://fonts.googleapis.com/css2?family={{ $overlay->overlay_msg_font_4 }}');

body {
    @if(isset($overlay->overlay_bg_image))
    background-image: url({!! str_replace('public/', '../../storage/', $overlay->overlay_bg_image) !!}) !important;
    background-position: center;
    background-size: cover;
    background-repeat: repeat-y;
    background-color: transparent !important;
    @endif
}

.msg-row {
    display: block !important;
}

.message {
    display: inline-block !important;
}
.msg-1 {
@if(isset($overlay->overlay_msg_1))
    @if($overlay->overlay_msg_border_color_1)
    -webkit-text-stroke: 2px {{$overlay->overlay_msg_border_color_1}};
    @endif
    margin-top: {{$overlay->overlay_msg_spacing_1}}px !important;
    font-family: {{$overlay->overlay_msg_font_1}} !important;
    font-size: {{$overlay->overlay_msg_size_1}}px !important;
    @if($overlay->overlay_msg_position_1)
    text-align: {{$overlay->overlay_msg_position_1}} !important;
    @endif
    @if($overlay->overlay_msg_gradient_1 == 'on')
    background: linear-gradient({{$gradient_position_1->position}}, {{$overlay->overlay_gradient_start_1}}, {{$overlay->overlay_gradient_end_1}}) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    @else
    color: {{$overlay->overlay_msg_color_1}} !important;
    @endif
    @if($overlay->overlay_msg_shadow_1 == 'on')
    filter: drop-shadow(2px 2px {{$overlay->overlay_msg_shadow_color_1}});
    @endif
@else
     display: none !important;
@endif
}

.msg-2 {
@if(isset($overlay->overlay_msg_2))
    @if($overlay->overlay_msg_border_color_2)
    -webkit-text-stroke: 2px {{$overlay->overlay_msg_border_color_2}};
    @endif
    margin-top: {{$overlay->overlay_msg_spacing_2}}px !important;
    font-family: {{$overlay->overlay_msg_font_2}} !important;
    font-size: {{$overlay->overlay_msg_size_2}}px !important;
    @if($overlay->overlay_msg_position_2)
    text-align: {{$overlay->overlay_msg_position_2}} !important;
    @endif
    @if($overlay->overlay_msg_gradient_2 == 'on')
    background: linear-gradient({{$gradient_position_2->position}}, {{$overlay->overlay_gradient_start_2}}, {{$overlay->overlay_gradient_end_2}}) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    @else
    color: {{$overlay->overlay_msg_color_2}} !important;
    @endif
    @if($overlay->overlay_msg_shadow_2 == 'on')
    filter: drop-shadow(2px 2px {{$overlay->overlay_msg_shadow_color_2}});
    @endif
@else
     display: none !important;
@endif
}

.msg-3 {
@if(isset($overlay->overlay_msg_3))
    @if($overlay->overlay_msg_border_color_3)
    -webkit-text-stroke: 2px {{$overlay->overlay_msg_border_color_3}};
    @endif
    margin-top: {{$overlay->overlay_msg_spacing_3}}px !important;
    font-family: {{$overlay->overlay_msg_font_3}} !important;
    font-size: {{$overlay->overlay_msg_size_3}}px !important;
    @if($overlay->overlay_msg_position_3)
    text-align: {{$overlay->overlay_msg_position_3}} !important;
    @endif
    @if($overlay->overlay_msg_gradient_3 == 'on')
    background: linear-gradient({{$gradient_position_3->position}}, {{$overlay->overlay_gradient_start_3}}, {{$overlay->overlay_gradient_end_3}}) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    @else
    color: {{$overlay->overlay_msg_color_3}} !important;
    @endif
    @if($overlay->overlay_msg_shadow_3 == 'on')
    filter: drop-shadow(2px 2px {{$overlay->overlay_msg_shadow_color_3}});
    @endif
@else
     display: none !important;
@endif
}

.msg-4 {
@if(isset($overlay->overlay_msg_4))
    @if($overlay->overlay_msg_border_color_4)
    -webkit-text-stroke: 2px {{$overlay->overlay_msg_border_color_4}};
    @endif
    margin-top: {{$overlay->overlay_msg_spacing_4}}px !important;
    font-family: {{$overlay->overlay_msg_font_4}} !important;
    font-size: {{$overlay->overlay_msg_size_4}}px !important;
    @if($overlay->overlay_msg_position_4)
    text-align: {{$overlay->overlay_msg_position_4}} !important;
    @endif
    @if($overlay->overlay_msg_gradient_4 == 'on')
    background: linear-gradient({{$gradient_position_4->position}}, {{$overlay->overlay_gradient_start_4}}, {{$overlay->overlay_gradient_end_4}}) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    @else
    color: {{$overlay->overlay_msg_color_4}} !important;
    @endif
    @if($overlay->overlay_msg_shadow_4 == 'on')
    filter: drop-shadow(2px 2px {{$overlay->overlay_msg_shadow_color_4}});
    @endif
@else
     display: none !important;
@endif
}
</style>