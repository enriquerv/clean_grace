@extends('layout.principal')

@section('title')
	Inicio
@endsection

@section('styles')
@endsection

@section('content')

<section class="container-fluid">
	<div class="row mt-3">
		<div class="col-12">
			<img src="{{ env('APP_URL') }}/assets/images/banner_1.png" width="100%">
		</div>
		{{-- MINI WIDGET PARA DIVISIÓN HR E IMAGENES --}}
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<img src="{{ env('APP_URL') }}/assets/images/icon_1.png" width="100%">
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red ml-0">
		</div>

		<div class="col-md-6 offset-md-3 mt-2">
			<p class="p-normal text-center">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, minima numquam quod nihil! Debitis atque, laborum cumque. Ut non velit laudantium? Hic optio culpa at delectus atque dicta! Natus, quisquam.
			</p>
		</div>

		{{-- MINI WIDGET PARA DIVISIÓN HR E IMAGENES --}}
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<img src="{{ env('APP_URL') }}/assets/images/icon_2.png" width="100%">
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red ml-0">
		</div>

		<div class="col-md-10 offset-md-1 mt-5">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="https://via.placeholder.com/1322x455?text=1322x455_slide1" alt="">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="https://via.placeholder.com/1322x455?text=1322x455_slide2" alt="S">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="https://via.placeholder.com/1322x455?text=1322x455_slide3" alt="">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		{{-- MINI WIDGET PARA DIVISIÓN HR E IMAGENES --}}
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<img src="{{ env('APP_URL') }}/assets/images/icon_3.png" width="100%">
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red ml-0">
		</div>

		<div class="col-md-8 offset-md-2 mt-2">
			<h4 class="text-center mt-2 mb-3 h-sabias">Sabías que ...</h4>
			<p class="p-normal text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dicta ratione excepturi officiis at a, voluptatibus fugiat quod fuga optio quam, nisi cumque, voluptatem, itaque sunt. Eveniet velit, eum neque.
			</p>
		</div>

		{{-- MINI WIDGET PARA DIVISIÓN HR E IMAGENES --}}
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<img src="{{ env('APP_URL') }}/assets/images/icon_4.png" width="100%">
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red ml-0">
		</div>

		<div class="col-12 mb-5 row">
			<div class="col-md-3 text-center">
				<img src="https://via.placeholder.com/295x295?text=295x295_icono_valores" width="70%">
			</div>
			<div class="col-md-3 text-center mar-obj">
				<img src="https://via.placeholder.com/295x295?text=295x295_icono_valores" width="70%">
			</div>
			<div class="col-md-3 text-center">
				<img src="https://via.placeholder.com/295x295?text=295x295_icono_valores" width="70%">
			</div>
			<div class="col-md-3 text-center mar-obj">
				<img src="https://via.placeholder.com/295x295?text=295x295_icono_valores" width="70%">
			</div>
		</div>


	</div>
</section>

<style>
	.p-normal{
		color: #0d3b7c;
		font-size: 25px;
	}
	.hr-red{
		border-top: 3px solid rgb(219, 25, 59);
	    width: 85%;
	    margin-top: 8%;
	}
	.lines-mid{
		max-width: 10% !important;
		flex: 0 0 10%;
	}
	.lines-left-right{
		max-width: 45% !important;
		flex: 0 0 45%;
	}
	.h-sabias{
		font-size: 50px;
		color: #0d3b7c;
		font-weight: bolder;
	}
	.mar-obj{
		margin-top: 100px;
	}

</style>

@endsection

@section('scripts')
@endsection
