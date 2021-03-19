@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chat</div>
                <div class="panel-body">
                    <div class="form-group"><a href="chat/create" class="btn btn-primary">Create</a></div>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Preview Link</th>
                            <th>Modified</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($chats) > 0)
                            @foreach($chats as $chat)
                                <tr>
                                    <td><a href="chat/{{$chat->id}}/edit">{{$chat->chat_scene}}</a></td>
                                    <td><a href="chat/{{$chat->ref_id}}" target="_blank">Preview</a></td>
                                    <td>{{$chat->updated_at}}</td>
                                    <td>
                                        <a href="chat/{{$chat->id}}/edit" class="btn btn-primary">Edit</a>
                                        {!! Form::open(['action' => ['ChatController@destroy', $chat->id], 'method' => 'POST', 'class' => 'form-inline']) !!}
                                        {{Form::bsSubmit('Delete', ['class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection