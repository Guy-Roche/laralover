@extends('.layouts.corpsconect')

@section('corps')
<div class="main">
    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form" action="{{ route('login') }}">
                    @csrf
                    <h2 class="form-title">Connexion</h2>

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
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Se connecter"/>
                    </div>
                </form>

            </div>
        </div>
    </section>
</div>
@endsection
