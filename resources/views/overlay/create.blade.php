@extends('layouts.app')

@section('content')
    @if(isset($overlay))
        <h1>Edit Overlay</h1>
        {!! Form::open(['action' => ['OverlayController@update', $overlay->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{Form::hidden('_method', 'PUT')}}
    @else
        <h1>Create Overlay</h1>
        {!! Form::open(['action' => 'OverlayController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @endif

    <div class="form-group">
        <a href="/overlay" class="btn btn-default">Cancel</a>
        {{Form::bsSubmit('Save', ['class' => 'btn btn-primary'])}}
    </div>
    <hr>
    <h1>Overlay</h1>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="overlay_scene">Name this overlay</label>
                <input type="text" class="form-control" name="overlay_scene" id="overlay_scene" value="@if(isset($overlay->overlay_scene)){{ $overlay->overlay_scene }}@else{{ old('overlay_scene') }}@endif">
            </div>
            <ul class="nav nav-tabs">
                <li class="active"><a role="tab" data-toggle="tab" href="#msg_1">Message 1</a></li>
                <li><a role="tab" data-toggle="tab" href="#msg_2">Message 2</a></li>
                <li><a role="tab" data-toggle="tab" href="#msg_3">Message 3</a></li>
                <li><a role="tab" data-toggle="tab" href="#msg_4">Message 4</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                @include('inc.messagesform', ['msgitem' => '1'])
                @include('inc.messagesform', ['msgitem' => '2'])
                @include('inc.messagesform', ['msgitem' => '3'])
                @include('inc.messagesform', ['msgitem' => '4'])
            </div>
        </div>

        <div class="col-lg-6 col-sm-12 mb-5">
            @if(isset($overlay->ref_id))
            <div class="text-center"><a class="btn btn-default" href="@if(isset($overlay->ref_id))../../overlay/{{ $overlay->ref_id }}@else about:blank @endif" target="_blank">Live Preview &#x2197;</a></div>
            @endif
            <iframe class="overlay-preview" id="overlay_preview_iframe" src="@if(isset($overlay->ref_id))../../overlay/preview/{{ $overlay->ref_id }}@else about:blank @endif"></iframe>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="overlay_bg_image" class="control-label">Background Image</label>
                <input class="form-control" type="file" name="overlay_bg_image"
                       value="@if(isset($overlay->overlay_bg_image)){{ $overlay->overlay_bg_image }}@else{{ old('overlay_bg_image') }}@endif">
            </div>
            @if(isset($overlay->overlay_bg_image))
                <div class="form-group">
                    <button class="btn btn-danger" id="overlay_bg_remove_image" data-id='{{ $overlay->id }}' type="button">
                        Remove Image
                    </button>
                </div>
                <div class="form-group" id="overlay_bg_image_preview">
                    <img class="img-responsive img-thumbnail"
                         src="{!! str_replace('public/', '../../storage/', $overlay->overlay_bg_image) !!}">
                </div>
            @endif
        </div>
    </div>
    <hr>

    {!! Form::close() !!}

@endsection
@section('scripts')

@endsection