@extends('layouts.app')

@section('content')
    <h1>Our Plan</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Roket Pemasaran Momentum (RPM)</div>
                          <div class="panel-body">

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

                            <div class="columns">
                                <ul class="price">
                                <li class="header">Gold</li>
                                <li class="grey">$ 9.99 / year</li>
                                <li>10GB Storage</li>
                                <li>10 Emails</li>
                                <li>10 Domains</li>
                                <li>1GB Bandwidth</li>
                                <li class="grey"><a href="#" class="button">Sign Up</a></li>
                                </ul>
                            </div>

                            <div class="columns">
                                <ul class="price">
                                <li class="header">Diamond</li>
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
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Advance Roket Bisnes (ARB)</div>
                            <div class="panel-body">
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
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Intensif Momentum Pemasaran Internet (IMPI)</div>
                              <div class="panel-body">
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
                        </div>
                    </div>
                </div>
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection