@extends('layout.principal')

@section('title')
	Nosotros
@endsection

@section('styles')
@endsection

@section('content')

	<!-- BANNER -->
    <div>
        <img src="{{ env('APP_URL') }}/assets/images/banner_2.png" width="100%">
    </div>


	<!-- QUIENES SOMOS -->
	<section class="mt-5 mb-5 white">
		<div class="container">
			<h1 class="text-center">¿Quienes somos?</h1>
			<p class="text-justify mt-3" style="width: 70%; margin: 0 auto; font-size: 18px;">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat laborum beatae, iure dolore eligendi accusantium molestias ut quos illum obcaecati sequi nam, enim ullam provident cupiditate amet? Nihil, ipsa, dignissimos!
			</p>
			<div class="container row mt-5 mb-5">

				<!-- MISION -->
				<div class="col-md-3">
					<img src="https://via.placeholder.com/350x350" width="100%">
				</div>
				<div class="col-md-9">
					<h2 class="text-left mt-5 mb-4">Misión</h2>
					<p class="text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, qui aspernatur quos, ipsa amet aliquam ad optio quod aliquid autem sint. Voluptatum at officia iure quod, amet repudiandae quisquam quo.
					</p>
				</div>

				<!-- VISION -->
				<div class="col-md-9">
					<h2 class="text-right mt-5 mb-4">Visión</h2>
					<p class="text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae quaerat porro sit, recusandae optio dolorem vero debitis maiores ad modi quibusdam dicta ratione obcaecati excepturi molestias, architecto suscipit distinctio, vel?
					</p>
				</div>
				<div class="col-md-3">
					<img src="https://via.placeholder.com/350x350" width="100%">
				</div>

				<!-- OBJETIVOS -->
				<div class="col-md-3">
					<img src="https://via.placeholder.com/350x350" width="100%">
				</div>
				<div class="col-md-9">
					<h2 class="text-left mt-5 mb-4">Objetivos</h2>
					<p class="text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias dolore similique quisquam. Beatae quas et ducimus sapiente aliquid repellat eveniet ut unde autem reiciendis, sequi, exercitationem doloribus facere repellendus soluta.
						<br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab fuga esse libero porro architecto nisi dignissimos quaerat, magnam odio eius, quis delectus, nobis blanditiis atque deleniti et, consequuntur iusto iste!
					</p>
				</div>

				<!-- VALORES -->
				<div class="col-12 mt-5 mb-4"><h2 class="text-center">Valores</h2></div>
				<div class="col-md-2 offset-1 text-center">
					<img src="https://via.placeholder.com/350x350" width="75%">
					<p class="font-weight-bold">Responsabilidad</p>
				</div>
				<div class="col-md-2 text-center">
					<img src="https://via.placeholder.com/350x350" width="75%">
					<p class="font-weight-bold">Compromiso</p>
				</div>
				<div class="col-md-2 text-center">
					<img src="https://via.placeholder.com/350x350" width="75%">
					<p class="font-weight-bold">Honestidad</p>
				</div>
				<div class="col-md-2 text-center">
					<img src="https://via.placeholder.com/350x350" width="75%">
					<p class="font-weight-bold">Comunicación</p>
				</div>
				<div class="col-md-2 text-center">
					<img src="https://via.placeholder.com/350x350" width="75%">
					<p class="font-weight-bold">Trabajo en equipo</p>
				</div>
			</div>
		</div>
	</section>


@endsection

@section('scripts')
@endsection
