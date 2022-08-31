@extends('layouts/layout')
@section('content')
	<section id="gallery" class="gallery">
		<div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
			<div class="row g-0">
				@foreach ($all as $row)
					<div class="col-lg-3 col-md-4">
						<div class="gallery-item">
							<a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
								<img src="https://image.tmdb.org/t/p/original/{{ $row['poster_path'] }}" alt="" class="img-fluid" />
							</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
@endsection
