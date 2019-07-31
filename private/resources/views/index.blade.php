<!DOCTYPE html>
	<html lang="zxx" class="no-js">

	@include('pelamar.layouts.head')	

		<body>

		<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{ url('/') }}"><img src="{{ asset('public/joblisting/img/logo.png') }}" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
					  
				        <ul class="nav-menu">
						@if (Route::has('login'))
							@auth
								<a class="ticker-btn" href="{{ url('home') }}">Masuk</a>
							@else
								<li><a class="ticker-btn" href="{{ route('login') }}">Login</a></li>	
							@if (Route::has('register'))
								<li><a class="ticker-btn" href="{{ route('register') }}">Signup</a></li>	
							@endif
							@endauth
						@endif
						<li><a class="ticker-btn" href="{{ url('penyedia') }}">Perusahaan</a></li>		          				          
				        </ul>
					  
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

				<!-- start banner Area -->
				<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
							<h1 class="text-white">
								<span>1500+</span> Lowongan untuk anda				
							</h1>	
							<form action="search.html" class="serach-form-area">
								<div class="row justify-content-center form-wrap">
									<div class="col-lg-4 form-cols">
										<input type="text" class="form-control" name="search" placeholder="Nama perusahaan">
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects"">
											<select>
												<option value="1">Pilih daerah</option>
												<option value="2">a</option>
												<option value="3">b</option>
												<option value="4">c</option>
												<option value="5">d</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects2">
											<select>
												<option value="1">Jenis pekerjaan</option>
												<option value="2">a</option>
												<option value="3">b</option>
												<option value="4">c</option>
												<option value="5">d</option>
											</select>
										</div>										
									</div>
									<div class="col-lg-2 form-cols">
									    <button type="button" class="btn btn-info">
									      <span class="lnr lnr-magnifier"></span> Cari
									    </button>
									</div>								
								</div>
							</form>	
							<p class="text-white"> <span>Cari berdasarkan:</span> Teknologi, Bisnis, Konsultan, Perusahaan IT, Desain, Pengembang</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
	
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Lowongan pekerjaan</h1>
								<p>Berikut lowongan pekerjaan terbaru</p>
							</div>
						</div>
					</div>	
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul class="cat-list">
								<li><a href="#">Recent</a></li>
								<li><a href="#">Full Time</a></li>
								<li><a href="#">Intern</a></li>
								<li><a href="#">part Time</a></li>
							</ul>
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="img/post.png" alt="">
									<ul class="tags">
										<li>
											<a href="#">Art</a>
										</li>
										<li>
											<a href="#">Media</a>
										</li>
										<li>
											<a href="#">Design</a>					
										</li>
									</ul>
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="single.html"><h4>Creative Art Designer</h4></a>
											<h6>Premium Labels Limited</h6>					
										</div>
										<ul class="btns">
											<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
											<li><a href="#">Apply</a></li>
										</ul>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
									</p>
									<h5>Job Nature: Full time</h5>
									<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
									<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
								</div>
							</div>
							
							<!-- <a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a> -->

						</div>
						<div class="col-lg-4 sidebar">
							<div class="single-slidebar">
								<h4>Jobs by Location</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="category.html"><p>New York</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Park Montana</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Atlanta</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Arizona</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Florida</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Rocky Beach</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Chicago</p><span>17</span></a></li>
								</ul>
							</div>						
						</div>

					</div>
				</div>	
			</section>
			<!-- End post Area -->

	
	@include('pelamar.layouts.footer')

	@include('pelamar.layouts.script')
			
		</body>
	</html>



