<?php
if (isset($overlay->overlay_scene)) {
    switch ($msgitem) {
        case '1';
            $msg = $overlay->overlay_msg_1;
            $msg_font = $overlay->overlay_msg_font_1;
            $msg_font_size = $overlay->overlay_msg_size_1;
            $msg_text_color = $overlay->overlay_msg_color_1;
            $msg_text_shadow = $overlay->overlay_msg_shadow_1;
            $msg_text_border = $overlay->overlay_msg_border_1;
            $msg_text_shadow_color = $overlay->overlay_msg_shadow_color_1;
            $msg_text_border_color = $overlay->overlay_msg_border_color_1;
            $msg_animation = $overlay->overlay_msg_animation_1;
            $msg_speed = $overlay->overlay_msg_animation_speed_1;
            $msg_style = $overlay->overlay_msg_style_1;
            $msg_position = $overlay->overlay_msg_position_1;
            $msg_gradient = $overlay->overlay_msg_gradient_1;
            $msg_gradient_start = $overlay->overlay_gradient_start_1;
            $msg_gradient_end = $overlay->overlay_gradient_end_1;
            $msg_gradient_position = $overlay->overlay_gradient_position_1;
            $msg_spacing = $overlay->overlay_msg_spacing_1;
            break;
        case '2';
            $msg = $overlay->overlay_msg_2;
            $msg_font = $overlay->overlay_msg_font_2;
            $msg_font_size = $overlay->overlay_msg_size_2;
            $msg_text_color = $overlay->overlay_msg_color_2;
            $msg_text_shadow = $overlay->overlay_msg_shadow_2;
            $msg_text_border = $overlay->overlay_msg_border_2;
            $msg_text_shadow_color = $overlay->overlay_msg_shadow_color_2;
            $msg_text_border_color = $overlay->overlay_msg_border_color_2;
            $msg_animation = $overlay->overlay_msg_animation_2;
            $msg_speed = $overlay->overlay_msg_animation_speed_2;
            $msg_style = $overlay->overlay_msg_style_2;
            $msg_position = $overlay->overlay_msg_position_2;
            $msg_gradient = $overlay->overlay_msg_gradient_2;
            $msg_gradient_start = $overlay->overlay_gradient_start_2;
            $msg_gradient_end = $overlay->overlay_gradient_end_2;
            $msg_gradient_position = $overlay->overlay_gradient_position_2;
            $msg_spacing = $overlay->overlay_msg_spacing_2;
            break;
        case '3';
            $msg = $overlay->overlay_msg_3;
            $msg_font = $overlay->overlay_msg_font_3;
            $msg_font_size = $overlay->overlay_msg_size_3;
            $msg_text_color = $overlay->overlay_msg_color_3;
            $msg_text_shadow = $overlay->overlay_msg_shadow_3;
            $msg_text_border = $overlay->overlay_msg_border_3;
            $msg_text_shadow_color = $overlay->overlay_msg_shadow_color_3;
            $msg_text_border_color = $overlay->overlay_msg_border_color_3;
            $msg_animation = $overlay->overlay_msg_animation_3;
            $msg_speed = $overlay->overlay_msg_animation_speed_3;
            $msg_style = $overlay->overlay_msg_style_3;
            $msg_position = $overlay->overlay_msg_position_3;
            $msg_gradient = $overlay->overlay_msg_gradient_3;
            $msg_gradient_start = $overlay->overlay_gradient_start_3;
            $msg_gradient_end = $overlay->overlay_gradient_end_3;
            $msg_gradient_position = $overlay->overlay_gradient_position_3;
            $msg_spacing = $overlay->overlay_msg_spacing_3;
            break;
        case '4';
            $msg = $overlay->overlay_msg_4;
            $msg_font = $overlay->overlay_msg_font_4;
            $msg_font_size = $overlay->overlay_msg_size_4;
            $msg_text_color = $overlay->overlay_msg_color_4;
            $msg_text_shadow = $overlay->overlay_msg_shadow_4;
            $msg_text_border = $overlay->overlay_msg_border_4;
            $msg_text_shadow_color = $overlay->overlay_msg_shadow_color_4;
            $msg_text_border_color = $overlay->overlay_msg_border_color_4;
            $msg_animation = $overlay->overlay_msg_animation_4;
            $msg_speed = $overlay->overlay_msg_animation_speed_4;
            $msg_style = $overlay->overlay_msg_style_4;
            $msg_position = $overlay->overlay_msg_position_4;
            $msg_gradient = $overlay->overlay_msg_gradient_4;
            $msg_gradient_start = $overlay->overlay_gradient_start_4;
            $msg_gradient_end = $overlay->overlay_gradient_end_4;
            $msg_gradient_position = $overlay->overlay_gradient_position_4;
            $msg_spacing = $overlay->overlay_msg_spacing_4;
            break;
    }
}
?>

<div class="tab-pane fade @if($msgitem == '1') active in @endif" id="msg_{{ $msgitem }}">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="overlay_msg_{{ $msgitem }}">Line {{ $msgitem }}</label>
                <input type="text" class="form-control" name="overlay_msg_{{ $msgitem }}"
                       id="overlay_msg_{{ $msgitem }}"
                       value="@if(isset($msg)){{ $msg }}@else{{ old('overlay_msg_$msgitem') }}@endif">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group" style="margin-bottom: 0;">
                <label for="overlay_msg_font_{{ $msgitem }}" class="control-label">Font</label>
                <select class="form-control font-select" name="overlay_msg_font_{{ $msgitem }}"
                        id="overlay_msg_font_{{ $msgitem }}">
                    @foreach($fonts as $font)
                        <option value="{{ $font->font }}"
                        @if(isset($msg_font)){{ $font->font == $msg_font ? 'selected' : '' }}@endif>{{ $font->font }}</option>
                    @endforeach
                </select>
                <iframe src="about:blank" class="font-preview" id="overlay_msg_iframe_{{ $msgitem }}"></iframe>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group range-slider">
                <label for="overlay_msg_size_{{ $msgitem }}" class="control-label">Font Size</label>
                <input type="range" name="overlay_msg_size_{{ $msgitem }}" class="range-slider-range" min="8" max="200"
                       step="1"
                       value="@if(isset($msg_font_size)){{ $msg_font_size }}@else{{ old('overlay_msg_size_$msgitem', '8') }}@endif">
                <small class="range-slider-value"></small>
                <small>px</small>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="row">

                <div class="col-lg-3">
                    <div class="form-group text-left">
                        <label for="overlay_msg_gradient_{{ $msgitem }}" class="control-label">Text Gradient</label>
                        <div>
                            <input type="checkbox" data-toggle="toggle" name="overlay_msg_gradient_{{ $msgitem }}"
                                   id="overlay_msg_gradient_{{ $msgitem }}"
                                   value="@if(isset($msg_gradient)){{ $msg_gradient }}@else{{ old('overlay_msg_gradient_$msgitem', 'on') }}@endif"
                            @if(isset($msg_gradient)){{ $msg_gradient == 'on' ? 'checked' : '' }}@endif>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="form-group">
                        <label for="overlay_msg_color_{{ $msgitem }}">Text Color</label>
                        <input type="color" class="form-control" name="overlay_msg_color_{{ $msgitem }}"
                               id="overlay_msg_color_{{ $msgitem }}"
                               value="@if(isset($msg_text_color)){{ $msg_text_color }}@else{{ old('overlay_msg_color_$msgitem') }}@endif">
                    </div>
                </div>
            </div>

            <div class="row" id="msg-gradient_{{ $msgitem }}" style="display: none;">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="overlay_gradient_start_{{ $msgitem }}">Gradient: Start</label>
                        <input name="overlay_gradient_start_{{ $msgitem }}" type="color" class="form-control"
                               value="@if(isset($msg_gradient_start)){{ $msg_gradient_start }}@else{{ old('overlay_gradient_start_$msgitem') }}@endif">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="form-group">
                        <label for="overlay_gradient_end_{{ $msgitem }}">Gradient: End</label>
                        <input name="overlay_gradient_end_{{ $msgitem }}" type="color" class="form-control"
                               value="@if(isset($msg_gradient_end)){{ $msg_gradient_end }}@else{{ old('overlay_gradient_end_$msgitem') }}@endif">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="overlay_gradient_position_{{ $msgitem }}" class="control-label">Gradient:
                            Position</label>
                        <select class="form-control" name="overlay_gradient_position_{{ $msgitem }}"
                                id="overlay_gradient_position_{{ $msgitem }}">
                            @foreach($gradientpositions as $gradientposition)
                                <option value="{{ $gradientposition->id }}"
                                @if(isset($msg_gradient_position)){{ $gradientposition->id == $msg_gradient_position ? 'selected' : '' }}@endif>{{ $gradientposition->position  }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group text-left">
                        <label for="overlay_msg_shadow_{{ $msgitem }}" class="control-label">Text Shadow</label>
                        <div>
                            <input type="checkbox" data-toggle="toggle" name="overlay_msg_shadow_{{ $msgitem }}"
                                   id="overlay_msg_shadow_{{ $msgitem }}"
                                   value="@if(isset($msg_text_shadow)){{ $msg_text_shadow }}@else{{ old('overlay_msg_shadow_$msgitem', 'on') }}@endif"
                            @if(isset($msg_text_shadow)){{ $msg_text_shadow == 'on' ? 'checked' : '' }}@endif>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="form-group">
                        <label for="overlay_msg_shadow_color_{{ $msgitem }}">Shadow Color</label>
                        <input type="color" class="form-control" name="overlay_msg_shadow_color_{{ $msgitem }}"
                               id="overlay_msg_shadow_color_{{ $msgitem }}"
                               value="@if(isset($msg_text_shadow_color)){{ $msg_text_shadow_color }}@else{{ old('overlay_msg_shadow_color_$msgitem') }}@endif">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group text-left">
                        <label for="overlay_msg_border_{{ $msgitem }}" class="control-label">Text Border</label>
                        <div>
                            <input type="checkbox" data-toggle="toggle" name="overlay_msg_border_{{ $msgitem }}"
                                   id="overlay_msg_border_{{ $msgitem }}"
                                   value="@if(isset($msg_text_border)){{ $msg_text_border }}@else{{ old('overlay_msg_border_$msgitem', 'on') }}@endif"
                            @if(isset($msg_text_border)){{ $msg_text_border == 'on' ? 'checked' : '' }}@endif>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="form-group">
                        <label for="overlay_msg_border_color_{{ $msgitem }}">Border Color</label>
                        <input type="color" class="form-control" name="overlay_msg_border_color_{{ $msgitem }}"
                               id="overlay_msg_border_color_{{ $msgitem }}"
                               value="@if(isset($msg_text_border_color)){{ $msg_text_border_color }}@else{{ old('overlay_msg_border_color_$msgitem') }}@endif">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="overlay_msg_animation_{{ $msgitem }}">Animation</label>
                <select class="form-control" name="overlay_msg_animation_{{ $msgitem }}"
                        id="overlay_msg_animation_{{ $msgitem }}">
                    <option>none</option>
                    @foreach($animations as $animation)
                        <option value="{{ $animation->animation }}"
                        @if(isset($msg_animation)){{ $msg_animation == $animation->animation ? 'selected' : '' }}@endif>{{ $animation->animation }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group range-slider">
                <label for="overlay_msg_animation_speed_{{ $msgitem }}" class="control-label">Speed</label>
                <input type="range" name="overlay_msg_animation_speed_{{ $msgitem }}" class="range-slider-range" min="0"
                       max="600" step="10"
                       value="@if(isset($msg_speed)){{ $msg_speed }}@else{{ old('overlay_msg_animation_speed_$msgitem', '0') }}@endif"
                       id="overlay_msg_animation_speed_{{ $msgitem }}">
                <small class="range-slider-value"></small>
                <small>secs</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="overlay_msg_style_{{ $msgitem }}">Style</label>
                <select class="form-control" name="overlay_msg_style_{{ $msgitem }}"
                        id="overlay_msg_style_{{ $msgitem }}">
                    <option>none</option>
                    @foreach($styles as $style)
                        <option value="{{ $style->style }}"
                        @if(isset($msg_style)){{ $msg_style == $style->style ? 'selected' : '' }}@endif>{{ $style->style }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="overlay_msg_position_{{ $msgitem }}">Position</label>
                <select class="form-control" name="overlay_msg_position_{{ $msgitem }}"
                        id="overlay_msg_position_{{ $msgitem }}">
                    @foreach($positions as $position)
                        <option value="{{ $position->position }}"
                        @if(isset($msg_position)){{ $msg_position == $position->position ? 'selected' : '' }}@endif>{{ $position->position }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group range-slider">
                <label for="overlay_msg_spacing_{{ $msgitem }}" class="control-label">Spacing</label>
                <input type="range" name="overlay_msg_spacing_{{ $msgitem }}" class="range-slider-range" min="0"
                       max="600" step="10"
                       value="@if(isset($msg_spacing)){{ $msg_spacing }}@else{{ old('overlay_msg_spacing_$msgitem', '0') }}@endif"
                       id="overlay_msg_spacing_{{ $msgitem }}">
                <small class="range-slider-value"></small>
                <small>px</small>
            </div>
        </div>
    </div>


</div>