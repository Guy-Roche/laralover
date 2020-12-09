@extends('.layouts.corpsconect')

@section('corps')
<div class="main">
    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form" action="{{ route('register') }}">
                    @csrf
                    <h2 class="form-title">Create account</h2>
                    <div class="form-group">
                        <input type="text" class="form-input @error('name') is-invalid @enderror" name="name" id="name" placeholder="Your Name"/>
                        @error('name')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email"/>
                        @error('email')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                    </div>
                </form>
                <p class="loginhere">
                    Have already an account ? <a href="#" class="loginhere-link">Login here</a>
                </p>
            </div>
        </div>
    </section>
</div>
@endsection
