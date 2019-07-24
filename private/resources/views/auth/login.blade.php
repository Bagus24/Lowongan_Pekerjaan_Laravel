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
                                <p class="text-white"> Silahkan LOGIN terlebih dahulu</p>
                            </div>
                            
                            <form class="form-area" method="POST" action="{{ route('login') }}" class="contact-form text-right">
                            @csrf    
                            <div class="row">	
									<div class="col-lg-12 form-group">

										<input name="email" value="{{ old('email') }}" placeholder="Masukan email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan email'" class="common-input mb-20 form-control @error('email') is-invalid @enderror" required="" type="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										<input name="password" placeholder="Masukan password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan password'" class="common-input mb-20 form-control @error('password') is-invalid @enderror" required="" type="password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <div class="switch-wrap d-flex">
                                            
                                            <div class="primary-checkbox">
                                                <input type="checkbox" name="remember" id="default-checkbox" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="default-checkbox"></label>
                                            </div>
                                            <p class="text-white">&nbsp;Ingat saya</p>
                                        </div>

                                        <button type="submit" class="primary-btn mt-20 text-white" style="float: center;">Masuk</button>
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




