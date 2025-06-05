@extends('layouts.mainaccount')

@section('container')

<div class="welcomepage_main">
    <div id="card-account" class="card">
        <div id="cardbody-account"  class="card-body">
            <div class="left_card">
                <h5 id="title_signup">Let's go on an adventure with a variety of information and communication technology knowledge!</h5>
                <h6 id="subtitle_signup">Create an account and start to learn the knowledge</h6>
                <form id="signupform" action="{{ route('Save') }}" method="POST">
                    
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif

                    @if(Session::get('fail'))
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
                        <button id="button_signup" type="submit">Sign Up</button>
                    </div>

                    <p class="have_account">Already have an account? <a href="/loginpageuser" class="link_account">Log In</a> </p>
                </form>

                <script>
                    document.getElementById('signupform').addEventListener('submit', function () {
                    if ('caches' in window) {
                        caches.keys().then(function(names) {
                        for (let name of names) caches.delete(name);
                        });
                    }
                    });
                </script>
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