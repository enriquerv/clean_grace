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
			<img src="{{ env('APP_URL') }}/assets/images/banner_1.png"  width="100%">
		</div>
		{{-- MINI WIDGET PARA DIVISIÓN HR E IMAGENES --}}
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr_line mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<img src="{{ env('APP_URL') }}/assets/images/icon_1.png" width="100%">
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr_line ml-0">
		</div>

		<div class="col-md-8 offset-md-2 mt-2">
			<p class="p-normal text-justify" data-aos="zoom-in" data-aos-duration="1000">
				Somos una empresa dedicada a la eliminación de microorganismos patógenos, para que tú y tu familia se sientan protegidos. Contamos con un equipo técnico de ultima generación, personal altamente capacitado, productos de calidad y permisos sanitarios.
			</p>
		</div>

		{{-- MINI WIDGET PARA DIVISIÓN HR E IMAGENES --}}
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr_line mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<img src="{{ env('APP_URL') }}/assets/images/icon_2.png" width="100%">
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr_line ml-0">
		</div>

		<div class="col-md-10 offset-md-1 mt-5" data-aos="zoom-in" data-aos-duration="1000">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="{{ env('APP_URL') }}/assets/images/slider_1.png" alt="">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="{{ env('APP_URL') }}/assets/images/slider_2.png" alt="">
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
			<hr class="hr_line mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<img src="{{ env('APP_URL') }}/assets/images/icon_3.png" width="100%">
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr_line ml-0">
		</div>

		<div class="col-md-8 offset-md-2 mt-2">
			<h4 class="text-center mt-2 mb-3 h-sabias">¿Por qué sanitizar?</h4>
			<p class="p-normal text-justify mt-4">
					Al momento de sanitizar, está protegiendo una vida.
					<br><br>
					Al realizar este tratamiento de manera regular disminuye el riesgo de contagio de COVID 19 por contacto de superficies, ya que al aplicarse el producto, deja una residualidad la cual se mantiene activa durante un prolongado periodo de tiempo.
			</p>
		</div>

		{{-- MINI WIDGET PARA DIVISIÓN HR E IMAGENES --}}
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr_line mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<img src="{{ env('APP_URL') }}/assets/images/icon_4.png" width="100%">
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr_line ml-0">
		</div>

		<div class="col-12 mt-5 mb-5 row">
			<div class="col-md-4 text-center">
				<img src="{{ env('APP_URL') }}/assets/images/diag_1.png" data-aos="flip-left" data-aos-duration="1000" width="50%">
			</div>
			<div class="col-md-4 text-center">
				<img src="{{ env('APP_URL') }}/assets/images/diag_2.png" data-aos="flip-left" data-aos-duration="1000" width="50%">
			</div>
			<div class="col-md-4 text-center">
				<img src="{{ env('APP_URL') }}/assets/images/diag_3.png" data-aos="flip-left" data-aos-duration="1000" width="50%">
			</div>
			<div class="col-md-2 text-center"></div>
			<div class="col-md-4 mt-5 mb-5 text-center">
				<img src="{{ env('APP_URL') }}/assets/images/diag_4.png" data-aos="flip-left" data-aos-duration="1000" width="50%">
			</div>
			<div class="col-md-4 mt-5 mb-5 text-center">
				<img src="{{ env('APP_URL') }}/assets/images/diag_5.png" data-aos="flip-left" data-aos-duration="1000" width="50%">
			</div>
		</div>


	</div>
</section>

<style>
	.p-normal{
		color: #0d3b7c;
		font-size: 25px;
	}
	.hr_line{
		border-top: 3px solid rgb(148 116 30);
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
