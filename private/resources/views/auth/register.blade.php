@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!DOCTYPE html>
	<html lang="zxx" class="no-js">

	@include('pelamar.layouts.head')	

		<body>
				
                <section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-6">

                            <div class="row justify-content-center form-wrap">
                                <div id="logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('public/joblisting/img/logo.png') }}" alt="" title="" /></a>
                                </div>
                            </div>
                            
                            <form class="form-area" method="POST" action="{{ route('login') }}" class="contact-form text-right">
                            @csrf    
                            <div class="row">	
									<div class="col-lg-12 form-group">
                                            @error('email')
                                                <div class="alert alert-danger" role="alert">Email atau password salah</div>
                                            @enderror
                                            @error('password')
                                                <div class="alert alert-danger" role="alert">Email atau password salah</div>
                                            @enderror
										<input name="email" value="{{ old('email') }}" placeholder="Masukan email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan email'" class="common-input mb-20 form-control @error('email') is-invalid @enderror" required="" type="email">
                                            
										<input name="password" placeholder="Masukan password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan password'" class="common-input mb-20 form-control @error('password') is-invalid @enderror" required="" type="password">
                                            
                                        <div class="switch-wrap d-flex">
                                            
                                            <div class="primary-checkbox">
                                                <input type="checkbox" name="remember" id="default-checkbox" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="default-checkbox"></label>
                                            </div>
                                            <p class="text-white">&nbsp;Ingat saya</p>
                                        </div>

                                        <button type="submit" class="genric-btn primary" style="float: center;">Masuk</button>
										<div class="mt-20 alert-msg" style="text-align: left;"></div>
									</div>
								</div>
							</form>	
							
						</div>											
					</div>
				</div>
			</section>
			

	@include('pelamar.layouts.script')
			
		</body>
	</html>





