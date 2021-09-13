@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Links</div>
                <div class="panel-body">
                    <div class="form-group"><a href="links/create" class="btn btn-primary">Create</a></div>
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
                        @if(count($links) > 0)
                            @foreach($links as $link)
                                <tr>
                                    <td><a href="links/{{$link->id}}/edit">{{$link->link_name}}</a></td>
                                    <td><a href="links/{{$link->ref_id}}" target="_blank">Preview</a></td>
                                    <td>{{$link->updated_at}}</td>
                                    <td>
                                        <a href="links/{{$link->id}}/edit" class="btn btn-primary">Edit</a>
                                        {!! Form::open(['action' => ['LinksController@destroy', $link->id], 'method' => 'POST', 'class' => 'form-inline']) !!}
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