<header id="header" class="fixed-top d-flex align-items-cente">
	<div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

		<h1 class="logo me-auto me-lg-0"><a href="index.html">Film</a></h1>
		<!-- Uncomment below if you prefer to use an image logo -->
		<!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="/theme/img/logo.png" alt="" class="img-fluid"></a>-->

		<nav id="navbar" class="navbar order-last order-lg-0">
			<ul>
				@php
					use App\Kategori;
					$data = Kategori::all();
				@endphp
				@foreach ($data as $item)
					<li><a class="nav-link scrollto" href="{{ url('kategori/'.$item->kategori_id.'/1') }}">{{ $item->kategori }}</a></a></li>
				@endforeach
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->
	</div>
</header>
