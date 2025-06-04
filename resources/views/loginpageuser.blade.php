@extends('layouts.mainaccount')

@section('container')

<div class="welcomepage_main">
    <div id="card-account" class="card">
        <div id="cardbody-account" class="card-body">
            <div class="left_card">
                <h5 id="title_signup">Welcome Back Smart People!</h5>
                <h6 id="subtitle_signup">Fill your day with new knowledge</h6>
                <form action="{{ url('/Check') }}" method="POST">

                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif

                    @if(Session::has('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                        
                    @csrf

                    <div class="signup_input" id="signupinput_name">
                        <label>Username</label><br>
                        <input type="text" name="username" class="signup_namalengkap" value="{{ old('username') }}" placeholder="Enter Username" style="width: 300px">
                        <span class="text-danger">@error('username'){{ $message }} @enderror</span>
                    </div>

                    <div class="signup_input">
                        <label>Password</label><br>
                        <input type="password" name="password" class="signup_password" value="{{ old('password') }}" placeholder="Enter Password" style="width: 300px">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>

                    <div id="divbtn_signup">
                        <button id="button_signup" type="submit">Log In</button>
                    </div>

                    <p class="have_account">Don't have an account? <a href="/signuppageuser" class="link_account">Sign Up</a> </p>
                </form>
            </div>
            <div class="right_card">
                {{-- <h4>Right Content</h4> --}}
                <img id="img_signup" src="assets/images/wave.png" alt="wave background">
                {{-- <img id="img_signup" src="assets/images/earth.png" alt="earth"> --}}
            </div>
        </div>
    </div>

</div>
    
@endsection