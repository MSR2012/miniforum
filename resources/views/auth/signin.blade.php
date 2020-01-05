@extends('layout.layout')

@section('title')
<title>Signin</title>
@endsection

@section('stylesheet')
<style>
    .page-content--bge5 {
        height: 100vh;
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
                
                @if(Session::has('successMessage'))

                <div class="summary-errors alert alert-success alert-dismissible" style="display: block;">
                    <button data-dismiss="alert" aria-label="Close" class="close" type="button">
                        <span aria-hidden="true">X</span>
                    </button>
                    <p>{{Session::get('successMessage')}}</p>
                </div>


                @endif

                @if(Session::has('errorMessage'))

                <div class="summary-errors alert alert-danger alert-dismissible" style="display: block;">
                    <button data-dismiss="alert" aria-label="Close" class="close" type="button">
                        <span aria-hidden="true">X</span>
                    </button>
                    <p>{{Session::get('errorMessage')}}</p>
                </div>


                @endif
                <div class="login-form">
                    <form action="{{url('/signin')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Email</label>
                            <input class="au-input au-input--full" type="text" name="email" placeholder="email" value="{{\Illuminate\Support\Facades\Input::old('email')}}" required>
                            <span class="validator_output <?php if ($errors->first('email') != null) echo "alert-danger" ?>">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                            <span class="validator_output <?php if ($errors->first('password') != null) echo "alert-danger" ?>">{{ $errors->first('password') }}</span>
                        </div>
                        <div class="login-checkbox">
                            <label>
                                <a href="#">Forgotten Password?</a>
                            </label>
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>

                    </form>
                    <div class="register-link">
                        <p>
                            Don't you have account?
                            <a href="{{url('/signup')}}">Sign Up Here</a>
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