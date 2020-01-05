@extends('layout.layout')

@section('title')
    <title>Signup</title>
@endsection

@section('stylesheet')
    <style>
        .page-content--bge5 {
            height: 120vh;
        }
    </style>
@endsection

@section('content')
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="{{url('/')}}">
                            MiniForum
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="{{url('/signup')}}" method="post">
                            @csrf
                        <div class="form-group">
                            <label>Username</label>
                            <input class="au-input au-input--full" type="text" name="username" placeholder="username" value="{{\Illuminate\Support\Facades\Input::old('username')}}" required>
                            <span class="validator_output <?php if($errors->first('username')!=null) echo "alert-danger"?>">{{ $errors->first('username') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="au-input au-input--full" type="email" name="email" placeholder="email" value="{{\Illuminate\Support\Facades\Input::old('email')}}" required>
                            <span class="validator_output <?php if($errors->first('email')!=null) echo "alert-danger"?>">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="au-input au-input--full" type="password" name="password" placeholder="password">
                            <span class="validator_output <?php if($errors->first('password')!=null) echo "alert-danger"?>">{{ $errors->first('password') }}</span>
                        </div>

                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign up</button>

                        </form>
                        <div class="register-link">
                            <p>
                                Already have account?
                                <a href="{{url('/signin')}}">Sign in Here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection