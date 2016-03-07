@extends('layouts.page')

@section('content')

<div id="login" class="animate form">
    @include('includes.errors')
    <section class="login_content">
        <form role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}
            <h1>Login Form</h1>
            <div>
                <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required="" />
            </div>
            <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
            </div>
            <div>                
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary submit">
                    <i class="fa fa-btn fa-sign-in"></i> Login
                </button>
                <a class="reset_pass" href="{{ url('/pwdreset') }}">Lost your password?</a>
            </div>            
            <div class="clearfix"></div>
            <div class="separator">

                <p class="change_link">New to site?
                    <a href="{{ url('/register') }}" class="to_register"> Create Account </a>
                </p>
                <div class="clearfix"></div>
                <br />
                <div>
                    <h1><i class="fa fa-book" style="font-size: 26px;"></i> {{ apps_name }}</h1>

                    <p>©2016 All Rights Reserved. {{ apps_name }} is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
            </div>
        </form>
        <!-- form -->
    </section>
    <!-- content -->
</div>
@endsection
