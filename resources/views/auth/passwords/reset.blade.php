@extends('layouts.page')

@section('content')
<div id="login" class="animate form">
    <section class="login_content">
        <form role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}
            <h1>Reset Password</h1>
            <div>
                <input type="text" class="form-control" placeholder="E-Mail Address" required="" />
            </div>
            <div>
                <a class="btn btn-primary submit" href="#"><i class="fa fa-envelope"></i> Send Password Reset Link</a>                
            </div>
            <div class="clearfix"></div>
            <div class="separator">
                <div>
                    <h1><i class="fa fa-book" style="font-size: 26px;"></i> ห้องสมุดออนไลน์</h1>

                    <p>©2016 All Rights Reserved. ห้องสมุดออนไลน์ is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
            </div>
        </form>
        <!-- form -->
    </section>
    <!-- content -->
</div>
@endsection
