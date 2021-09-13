@extends('layouts.app')

@section('content')

    <?php var_dump($links); die();?>

    @if(isset($links))
        <h1>Edit Links</h1>
        {!! Form::open(['action' => ['LinksController@update', $links->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{Form::hidden('_method', 'PUT')}}
    @else
        <h1>Create Chat</h1>
        {!! Form::open(['action' => 'LinksController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @endif

    <div class="form-group">
        <a href="/links" class="btn btn-default">Cancel</a>
        {{Form::bsSubmit('Save', ['class' => 'btn btn-primary'])}}
    </div>
    <hr>

    <div class="row">

        <div class="col-sm-6 mb-5">

            <div class="form-group">
                <label for="links_page" class="control-label">Name this links page</label>
                <input class="form-control" type="text" name="links_page"
                       value="@if(isset($links->links_page)){{ $links->links_page }}@else{{ old('links_page') }}@endif">
            </div>

        </div>

    </div>

    <hr>

    {!! Form::close() !!}

@endsection
@section('scripts')

@endsection