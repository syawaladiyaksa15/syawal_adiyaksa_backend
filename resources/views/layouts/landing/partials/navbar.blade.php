<header class="header-area" style="background-color: #114FC3;">
	<div class="top-header">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
				</div>
				<div class="col-lg-6 col-md-6">
					<ul>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="navbar-area">
		<div class="evolta-responsive-nav">
			<div class="container">
				<div class="evolta-responsive-menu">
					<div class="logo">
						<a href="{{ route('/') }}">
							Article
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="evolta-nav">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" href="{{ route('/') }}">
						Article
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="{{ route('/') }}" class="nav-link">Beranda </a>
							</li>
							<li class="nav-item">
								<a href="{{ route('landing.article') }}" class="nav-link">Artikel </a>
							</li>
                            <li class="nav-item">
                                <a href="{{ route('/') }}" class="nav-link">Login </a>
                            </li>
						</ul>
						<div class="others-options">
							<div class="option-item">
								<i class="search-btn flaticon-search"></i>
								<i class="close-btn fas fa-times"></i>
								<div class="search-overlay search-popup">
									<div class='search-box'>
										<form class="search-form">
											<input class="search-input" name="search" placeholder="Search" type="text">
											<button class="search-button" type="submit"><i class="fas fa-search"></i></button>
										</form>
									</div>
								</div>
							</div>
							{{-- <a href="contact.html" class="btn btn-primary">Start Free Trial</a> --}}
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>

</header>