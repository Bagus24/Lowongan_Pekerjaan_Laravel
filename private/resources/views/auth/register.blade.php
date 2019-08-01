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
                            
                            <form class="form-area" method="POST" action="{{ route('register') }}" class="contact-form text-right">
                            @csrf    
                            <div class="row">	
									<div class="col-lg-12 form-group">
                                            @error('email')
                                                <div class="alert alert-danger" role="alert">Email sudah terdaftar</div>
                                            @enderror
                                            @error('password')
                                                <div class="alert alert-danger" role="alert">Kata sandi tidak cocok atau kurang dari 8 karakter</div>
                                            @enderror
										<input pattern="[A-Za-z ]+"  id="name" type="text" placeholder="Masukan nama lengkap" class="common-input mb-20 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										<input id="email" type="email" placeholder="Masukan email" class="common-input mb-20 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            
                                        <input id="password" type="password" placeholder="Masukan kata sandi" class="common-input mb-20 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            
										<input id="password-confirm" type="password"  placeholder="Masukan ulang kata sandi"  class="common-input mb-20 form-control" name="password_confirmation" required autocomplete="new-password" >
                                        

                                        <div class="row justify-content-center form-wrap">
                                            <button type="submit" class="genric-btn primary" style="float: center;">Daftar</button>

                                            <p class="text-white">&nbsp;&nbsp;Sudah punya akun? <a href="{{ route('login') }}"> <strong>Masuk</strong> </a></p>
                                                
                                        </div>
                                        
                                        
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




