@extends('layout.principal')

@section('title', '| '.trans($active.'.title'))

@section('styles')
@endsection

@section('content')

    <!-- BANNER -->
    <div>
        <img src="https://via.placeholder.com/1592x234?text=1592x234_banner" width="100%">
    </div>

    <section class="mt-5 white">
        <div class="row">
            <div class="col-md-6 pt-5 pl-5 pb-5 pr-5">
                <form action="#" class="container">
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="email" class="form-control" id="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="Email">E-mail</label>
                        <input type="text" class="form-control" id="Email">
                    </div>
                    <div class="form-group">
                        <label for="Telefono">Teléfono</label>
                        <input type="text" class="form-control" id="Telefono">
                    </div>  
                    <div class="form-group">
                        <label for="Mensaje">Mensaje</label>
                        <textarea class="form-control" id="Mensaje" rows="5"></textarea>
                    </div>  
                    <div class="form-group text-center">
                        <button class="btn btn-primary pl-5 pr-5">Enviar</button>
                    </div>              
                    
                </form>
            </div>
            <div class="col-md-6 pt-5 pl-5 pb-5 pr-5">
                <div class="row">
                    <div class="col-4 text-center">
                        <img src="https://via.placeholder.com/350x350" width="50%">
                    </div>
                    <div class="col-4 text-center">
                        <img src="https://via.placeholder.com/350x350" width="50%">
                    </div>
                    <div class="col-4 text-center">
                        <img src="https://via.placeholder.com/350x350" width="50%">
                    </div>
                    <div class="col-md-12 mt-5 text-center" style="font-size: 20px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci voluptatem ea cum ullam veritatis doloribus tempora totam, nemo aliquam, nam porro, dolores, voluptas quidem. Tempore facere saepe officiis officia labore!
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    @include('website.formvalidation.contact')
@endsection
