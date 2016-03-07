@extends('layouts.page')

@section('content')
<div id="login" class="animate form">
    @include('includes.errors')
    <section class="login_content">        
        <form  class="form-horizontal form-label-left" novalidate role="form" method="POST" action="{{ url('/register') }}">
            {!! csrf_field() !!}
            <h1>Create Account</h1>
            <div>
                <input type="text" class="form-control" placeholder="Full Name" name="name" value="{{ old('name') }}" required="" />
            </div>
            <div>
                <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required="" />
            </div>
            <div>
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required="" />
            </div>
            <div>
                <input type="text" class="form-control" placeholder="Telephone number" name="tel" value="{{ old('tel') }}" />
            </div>
            <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
            </div>
            <div>
                <input type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation" required="" />
            </div>            
            <div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user submit"></i> Register
                </button>                
            </div>
            <div class="clearfix"></div>
            <div class="separator">

                <p class="change_link">Already a member ?
                    <a href="{{ url('/login') }}" class="to_register"> Log in </a>
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
