@extends('layouts.app')

@section('title', 'Profile User')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Profile <small>Profile User</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link" href="{{ url('/') }}"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @include('includes.errors')
                    <br>
                    <form id="demo-form2" method="POST" action="{{ url('/users/'.$users->id) }}"  data-parsley-validate="" class="form-horizontal form-label-left">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fullname">Full Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" id="fullname" placeholder="Full Name" value="{{ $users->name }}" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="username" name="username" placeholder="Username" value="{{ $users->username }}" required="required" class="form-control col-md-7 col-xs-12" {{ ($users->username)? 'readonly' : '' }}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">E-mail <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="email" name="email" placeholder="E-mail" value="{{ $users->email }}" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Tel
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="tel" name="tel" placeholder="Telephone number" value="{{ $users->tel }}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" id="password" name="password" placeholder="Password" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password_confirmation">Password Confirmation
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="reset" class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-success">Upate</button>
                            </div>
                        </div>
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_profile" value="sAcIw">
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop