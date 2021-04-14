@extends('layouts.app')

@section('content')

    @if(isset($chat))
        <h1>Edit Chat</h1>
        {!! Form::open(['action' => ['ChatController@update', $chat->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{Form::hidden('_method', 'PUT')}}
    @else
        <h1>Create Chat</h1>
        {!! Form::open(['action' => 'ChatController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @endif

    <div class="form-group">
        <a href="/chat" class="btn btn-default">Cancel</a>
        {{Form::bsSubmit('Save', ['class' => 'btn btn-primary'])}}
    </div>
    <hr>

    <div class="row">

        <div class="col-sm-6 mb-5">

            <div class="form-group">
                <label for="chat_scene" class="control-label">Name this chat</label>
                <input class="form-control" type="text" name="chat_scene"
                       value="@if(isset($chat->chat_scene)){{ $chat->chat_scene }}@else{{ old('chat_scene') }}@endif">
            </div>

            <div class="form-group">
                <label for="chat_channel" class="control-label">Twitch Channel</label>&nbsp;<a data-toggle="popover"
                                                                                               data-placement="top"
                                                                                               data-content="You can add multiple channels by separating names with a comma or a space. GamerX,RetroLife,CODoIt,FortDay"><i
                            class="fa fa-info-circle"></i></a>
                <input class="form-control" type="text" name="chat_channel"
                       value="@if(isset($chat->chat_channel)){{ $chat->chat_channel }}@else{{ old('chat_channel') }}@endif">
            </div>

            <div class="form-group">
                <label for="chat_bot" class="control-label">Chat Bot</label>&nbsp;<a data-toggle="popover"
                                                                                     data-placement="top"
                                                                                     data-content="You can add multiple channels by separating names with a comma or a space. StreamElements,Streamlabs,Nightbot"><i
                            class="fa fa-info-circle"></i></a>
                <input class="form-control" type="text" name="chat_bot"
                       value="@if(isset($chat->chat_bot)){{ $chat->chat_bot }}@else{{ old('chat_bot') }}@endif">
            </div>

            <div class="form-group">
                <label for="chat_template" class="control-label">Template</label>
                <select class="form-control" name="chat_template" id="chat_template">
                    <option value="1">Default</option>
                    @foreach($templates as $template)
                        <option value="{{ $template->ref_id }}"
                        @if(isset($chat->chat_template)){{ $template->ref_id == $chat->chat_template ? 'selected' : '' }}@endif>{{ $template->template  }}</option>
                    @endforeach
                </select>
            </div>

            <div class="row" id="gradient-options" style="display: none;">
                <div class="col-lg-3">
                    <label for="">Gradient: Start</label>
                    <input name="chat_template_gradient_start" type="color" class="form-control"
                           value="@if(isset($chat->chat_template_gradient_start)){{ $chat->chat_template_gradient_start }}@else{{ old('chat_template_gradient_start') }}@endif">
                </div>
                <div class="col-lg-9">
                    <label for="">Gradient: End</label>
                    <input name="chat_template_gradient_end" type="color" class="form-control"
                           value="@if(isset($chat->chat_template_gradient_end)){{ $chat->chat_template_gradient_end }}@else{{ old('chat_template_gradient_end') }}@endif">
                </div>
                <div><p>&nbsp;</p></div>
                <div class="form-group range-slider col-lg-6">
                    <label for="chat_template_gradient_transparency" class="control-label">Gradient:
                        Transparency</label>
                    <input type="range" name="chat_template_gradient_transparency" class="range-slider-range" min="0"
                           max="100" step="5"
                           value="@if(isset($chat->chat_template_gradient_transparency)){{ $chat->chat_template_gradient_transparency }}@else{{ old('chat_template_gradient_transparency', '0') }}@endif">
                    <small class="range-slider-value"></small>
                    <small>%</small>
                </div>
                <div class="col-lg-6">
                    <label for="chat_template_gradient_position" class="control-label">Position</label>
                    <select class="form-control" name="chat_template_gradient_position"
                            id="chat_template_gradient_position">
                        @foreach($positions as $position)
                            <option value="{{ $position->id }}"
                            @if(isset($chat->chat_template_gradient_position)){{ $position->id == $chat->chat_template_gradient_position ? 'selected' : '' }}@endif>{{ $position->position  }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12 mb-5">
            @if(isset($chat->ref_id))
            <div class="text-center"><a class="btn btn-default" href="@if(isset($chat->ref_id))../../chat/{{ $chat->ref_id }}@else about:blank @endif" target="_blank">Live Preview &#x2197;</a></div>
            @endif
            <iframe class="chat-preview" id="chat_preview_iframe"
                    src="@if(isset($chat->ref_id))../../chat/preview/{{ $chat->ref_id }}@else about:blank @endif"></iframe>
        </div>

        <div class="col-sm-12 mb-5">
            <div class="form-group">
                <label for="chat_title" class="control-label">Title</label>&nbsp;<small>(optional)</small>
                <input class="form-control" type="text" name="chat_title"
                       value="@if(isset($chat->chat_title)){{ $chat->chat_title }}@else{{ old('chat_title') }}@endif">
            </div>

            <div class="form-group">
                <label for="chat_title_bg" class="control-label">Title Background Color</label>
                <input class="form-control" type="color" name="chat_title_bg"
                       value="@if(isset($chat->chat_title_bg)){{ $chat->chat_title_bg }}@else{{ old('chat_title_bg') }}@endif">
            </div>

            <div class="form-group">
                <label for="chat_title_color" class="control-label">Title Color</label>
                <input class="form-control" type="color" name="chat_title_color"
                       value="@if(isset($chat->chat_title_color)){{ $chat->chat_title_color }}@else{{ old('chat_title_color') }}@endif">
            </div>

            <div class="form-group">
                <label for="chat_title_font" class="control-label">Title Font</label>
                <select class="form-control font-select" name="chat_title_font" id="chat_title_font">
                    @foreach($fonts as $font)
                        <option value="{{ $font->font }}"
                        @if(isset($chat->chat_title_font)){{ $font->font == $chat->chat_title_font ? 'selected' : '' }}@endif>{{ $font->font }}</option>
                    @endforeach
                </select>
                <iframe src="about:blank" class="font-preview" id="chat_title_font_iframe"></iframe>
            </div>

            <div class="form-group range-slider">
                <label for="chat_title_font_size" class="control-label">Title Font Size</label>
                <input type="range" name="chat_title_font_size" class="range-slider-range" min="8" max="100" step="1"
                       value="@if(isset($chat->chat_title_font_size)){{ $chat->chat_title_font_size }}@else{{ old('chat_title_font_size', '8') }}@endif">
                <small class="range-slider-value"></small>
                <small>px</small>
            </div>

            <div class="form-group">
                <label for="chat_title_text_shadow" class="control-label">Title Text Shadow</label>
                <div><input type="checkbox" data-toggle="toggle" name="chat_title_text_shadow"
                            id="chat_title_text_shadow"
                            value="@if(isset($chat->chat_title_text_shadow)){{ $chat->chat_title_text_shadow }}@else{{ old('chat_title_text_shadow', 'on') }}@endif"
                    @if(isset($chat->chat_title_text_shadow)){{ $chat->chat_title_text_shadow == 'on' ? 'checked' : '' }}@endif>
                </div>
            </div>

            <div class="form-group">
                <label for="chat_title_text_shadow_color" class="control-label">Title Text Shadow Color</label>
                <input class="form-control" type="color" name="chat_title_text_shadow_color" id="chat_text_shadow_color"
                       value="@if(isset($chat->chat_title_text_shadow_color)){{ $chat->chat_title_text_shadow_color }}@else{{ old('chat_title_text_shadow_color') }}@endif"
                @if(isset($chat->chat_title_text_shadow) && $chat->chat_title_text_shadow == 'off'){!! 'disabled readonly' !!}@endif
                @if(!isset($chat)){!! 'disabled readonly' !!}@endif>
            </div>
            <hr>
        </div>

        <div class="col-sm-12 mb-5">

            <div class="form-group">
                <label for="chat_username_color" class="control-label">Chat Username Color</label>
                <input class="form-control" type="color" name="chat_username_color"
                       @if(isset($chat->chat_use_twitch_colors) && $chat->chat_use_twitch_colors == 'on'){!! 'disabled readonly' !!}@endif
                       value="@if(isset($chat->chat_username_color)){{ $chat->chat_username_color }}@else{{ old('chat_username_color') }}@endif">
            </div>

            <div class="form-group">
                <label for="chat_use_twitch_colors" class="control-label">Use Twitch username colors</label>
                <div><input type="checkbox" data-toggle="toggle" name="chat_use_twitch_colors"
                            id="chat_use_twitch_colors"
                            value="@if(isset($chat->chat_use_twitch_colors)){{ $chat->chat_use_twitch_colors }}@else{{ old('chat_use_twitch_colors', 'on') }}@endif"
                    @if(isset($chat->chat_use_twitch_colors)){{ $chat->chat_use_twitch_colors == 'on' ? 'checked' : '' }}@endif>
                </div>
            </div>

            <div class="form-group">
                <label for="chat_username_font" class="control-label">Chat Username Font</label>
                <select class="form-control" name="chat_username_font" id="chat_username_font">
                    @foreach($fonts as $font)
                        <option value="{{ $font->font }}"
                        @if(isset($chat->chat_username_font)){{ $font->font == $chat->chat_username_font ? 'selected' : '' }}@endif>{{ $font->font }}</option>
                    @endforeach
                </select>
                <iframe src="about:blank" class="font-preview" id="chat_username_font_iframe"></iframe>
            </div>

            <div class="form-group range-slider">
                <label for="chat_username_font_size" class="control-label">Chat Username Font Size</label>
                <input type="range" name="chat_username_font_size" class="range-slider-range" min="8" max="100" step="1"
                       value="@if(isset($chat->chat_username_font_size)){{ $chat->chat_username_font_size }}@else{{ old('chat_username_font_size', '8') }}@endif">
                <small class="range-slider-value"></small>
                <small>px</small>
            </div>

            <div class="form-group">
                <label for="chat_msg_color" class="control-label">Chat Message Color</label>
                <input class="form-control" type="color" name="chat_msg_color"
                       @if(isset($chat->chat_msg_twitch_colors) && $chat->chat_msg_twitch_colors == 'on'){!! 'disabled readonly' !!}@endif
                       value="@if(isset($chat->chat_msg_color)){{ $chat->chat_msg_color }}@else{{ old('chat_msg_color') }}@endif">
            </div>

            <div class="form-group">
                <label for="chat_msg_twitch_colors" class="control-label">Use Twitch colors</label>
                <div><input type="checkbox" data-toggle="toggle" name="chat_msg_twitch_colors"
                            id="chat_msg_twitch_colors"
                            value="@if(isset($chat->chat_msg_twitch_colors)){{ $chat->chat_msg_twitch_colors }}@else{{ old('chat_msg_twitch_colors', 'on') }}@endif"
                    @if(isset($chat->chat_msg_twitch_colors)){{ $chat->chat_msg_twitch_colors == 'on' ? 'checked' : '' }}@endif>
                </div>
            </div>

            <div class="form-group">
                <label for="chat_msg_font" class="control-label">Chat Message Font</label>
                <select class="form-control" name="chat_msg_font" id="chat_msg_font">
                    @foreach($fonts as $font)
                        <option value="{{ $font->font }}"
                        @if(isset($chat->chat_msg_font)){{ $font->font == $chat->chat_msg_font ? 'selected' : '' }}@endif>{{ $font->font }}</option>
                    @endforeach
                </select>
                <iframe src="about:blank" class="font-preview" id="chat_msg_font_iframe"></iframe>
            </div>

            <div class="form-group range-slider">
                <label for="chat_msg_font_size" class="control-label">Chat Message Font Size</label>
                <input type="range" name="chat_msg_font_size" class="range-slider-range" min="8" max="100" step="1"
                       value="@if(isset($chat->chat_msg_font_size)){{ $chat->chat_msg_font_size }}@else{{ old('chat_msg_font_size', '8') }}@endif">
                <small class="range-slider-value"></small>
                <small>px</small>
            </div>

            <div class="row" id="gradient-options">
                <div class="col-lg-3">
                    <label for="chat_background_gradient_start">Gradient: Start</label>
                    <input name="chat_background_gradient_start" type="color" class="form-control"
                           value="@if(isset($chat->chat_background_gradient_start)){{ $chat->chat_background_gradient_start }}@else{{ old('chat_background_gradient_start') }}@endif">
                </div>
                <div class="col-lg-9">
                    <label for="chat_background_gradient_end">Gradient: End</label>
                    <input name="chat_background_gradient_end" type="color" class="form-control"
                           value="@if(isset($chat->chat_background_gradient_end)){{ $chat->chat_background_gradient_end }}@else{{ old('chat_background_gradient_end') }}@endif">
                </div>
                <div><p>&nbsp;</p></div>
                <div class="form-group range-slider col-lg-6">
                    <label for="chat_transparency" class="control-label">Gradient: Transparency</label>
                    <input type="range" name="chat_transparency" class="range-slider-range" min="0" max="100" step="5"
                           value="@if(isset($chat->chat_transparency)){{ $chat->chat_transparency }}@else{{ old('chat_transparency', '0') }}@endif">
                    <small class="range-slider-value"></small>
                    <small>%</small>
                </div>
                <div class="col-lg-6">
                    <label for="chat_background_gradient_position" class="control-label">Gradient: Position</label>
                    <select class="form-control" name="chat_background_gradient_position"
                            id="chat_background_gradient_position">
                        @foreach($positions as $position)
                            <option value="{{ $position->id }}"
                            @if(isset($chat->chat_background_gradient_position)){{ $position->id == $chat->chat_background_gradient_position ? 'selected' : '' }}@endif>{{ $position->position  }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="chat_bg_image" class="control-label">Chat Background Image</label>
                <input class="form-control" type="file" name="chat_bg_image"
                       value="@if(isset($chat->chat_bg_image)){{ $chat->chat_bg_image }}@else{{ old('chat_bg_image') }}@endif">
            </div>

            @if(isset($chat->chat_bg_image))
                <div class="form-group">
                    <button class="btn btn-danger" id="chat_bg_remove_image" data-id='{{ $chat->id }}' type="button">
                        Remove Image
                    </button>
                </div>
                <div class="form-group" id="chat_bg_image_preview">
                    <img class="img-responsive img-thumbnail"
                         src="{!! str_replace('public/', '../../storage/', $chat->chat_bg_image) !!}">
                </div>
            @endif

        </div>

        <div class="col-sm-12 mb-5">

            <div class="form-group range-slider">
                <label for="chat_max_cnt" class="control-label">Max number of messages to show</label>
                <input type="range" name="chat_max_cnt" class="range-slider-range" min="1" max="100" step="1"
                       value="@if(isset($chat->chat_max_cnt)){{ $chat->chat_max_cnt }}@else{{ old('chat_max_cnt', '0') }}@endif">
                <small class="range-slider-value"></small>
                <small>messages</small>
            </div>

            <div class="form-group range-slider">
                <label for="chat_refresh" class="control-label">Refresh</label>&nbsp;<a data-toggle="popover"
                                                                                        data-placement="top"
                                                                                        data-content="Clears chat box if a message sits idle for longer than the Refresh time."><i
                            class="fa fa-info-circle"></i></a>
                <input type="range" name="chat_refresh" class="range-slider-range" min="0" max="600" step="10"
                       value="@if(isset($chat->chat_refresh)){{ $chat->chat_refresh }}@else{{ old('chat_refresh', '0') }}@endif"
                       id="myRange">
                <small class="range-slider-value"></small>
                <small>secs</small>
            </div>

            <div class="form-group">
                <label for="chat_transition" class="control-label">Chat Message Transition</label>
                <select class="form-control" name="chat_transition" id="chat_transition">
                    <option value="">None</option>
                    @foreach($transitions as $transition)
                        <option value="{{ $transition->transition }}"
                        @if(isset($chat->chat_transition)){{ $transition->transition == $chat->chat_transition ? 'selected' : '' }}@endif>{{ $transition->transition }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="chat_text_shadow" class="control-label">Chat Text Shadow</label>
                <div><input type="checkbox" data-toggle="toggle" name="chat_text_shadow" id="chat_text_shadow"
                            value="@if(isset($chat->chat_text_shadow)){{ $chat->chat_text_shadow }}@else{{ old('chat_text_shadow', 'on') }}@endif"
                    @if(isset($chat->chat_text_shadow)){{ $chat->chat_text_shadow == 'on' ? 'checked' : '' }}@endif>
                </div>
            </div>

            <div class="form-group">
                <label for="chat_text_shadow_color" class="control-label">Chat Text Shadow Color</label>
                <input class="form-control" type="color" name="chat_text_shadow_color" id="chat_text_shadow_color"
                       value="@if(isset($chat->chat_text_shadow_color)){{ $chat->chat_text_shadow_color }}@else{{ old('chat_text_shadow_color') }}@endif"
                @if(isset($chat->chat_text_shadow) && $chat->chat_text_shadow == 'off'){!! 'disabled readonly' !!}@endif
                @if(!isset($chat)){!! 'disabled readonly' !!}@endif>
            </div>

            <div class="form-group">
                <label for="chat_show_badges" class="control-label">Show Badges</label>
                <div><input type="checkbox" data-toggle="toggle" name="chat_show_badges" id="chat_show_badges"
                            value="@if(isset($chat->chat_show_badges)){{ $chat->chat_show_badges }}@else{{ old('chat_show_badges', 'on') }}@endif"
                    @if(isset($chat->chat_show_badges)){{ $chat->chat_show_badges == 'on' ? 'checked' : '' }}@endif>
                </div>
            </div>

            <div class="form-group">
                <label for="chat_show_emotes" class="control-label">Show Emotes</label>
                <div><input type="checkbox" data-toggle="toggle" name="chat_show_emotes" id="chat_show_emotes"
                            value="@if(isset($chat->chat_show_emotes)){{ $chat->chat_show_emotes }}@else{{ old('chat_show_emotes', 'on') }}@endif"
                    @if(isset($chat->chat_show_emotes)){{ $chat->chat_show_emotes == 'on' ? 'checked' : '' }}@endif>
                </div>
            </div>

        </div>

    </div>

    <hr>

    {!! Form::close() !!}

@endsection
@section('scripts')

@endsection