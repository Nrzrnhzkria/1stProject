@extends('layouts.app')

@section('content')
    <h1>Our Plan</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="container">
          <div class="row">
            <!-- General Tier -->
            <div class="columns">
                <ul class="price">
                  <li class="header">General</li>
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

        
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection