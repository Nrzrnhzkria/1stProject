@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>
                          <div class="panel-body">
                            <div class="columns">
                                <ul class="price">
                                <li class="header">Basic</li>
                                <li class="grey">$ 9.99 / year</li>
                                <li>10GB Storage</li>
                                <li>10 Emails</li>
                                <li>10 Domains</li>
                                <li>1GB Bandwidth</li>
                                <li class="grey"><a href="#" class="button">Sign Up</a></li>
                                </ul>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection