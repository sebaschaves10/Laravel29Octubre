@extends('layouts.master')
@section('content')
    

    <body background="{{url('img/fondo.jpg')}}">
    
        <div class="container" align="center">
        <h1 style="color: white"> HABITACIONES </h1>
        <h5 style="color: white;"><br>Encuentra los mejores destinos turísticos en Colombia y en el mundo con una variedad de hoteles y resorts todo incluido</h5>
            <div class="form-row">
            
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{url('img/estandar.jpg')}}" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Habitacion Estándar</h5>
                            <p class="card-text">Habitación con capacidad de 1 ó 2 personas</p>
                            <a href="{{url('/reservas')}}" class="btn btn-primary">Reservar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{url('img/superior.jpg')}}" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Habitacion Superior</h5>
                            <p class="card-text">Goza de un espacio para acomodaciones dobles</p>
                            <a href="{{url('/reservas')}}" class="btn btn-primary">Reservar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{url('img/ejecutiva.jpg')}}" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Habitacion Ejecutiva</h5>
                            <p class="card-text">Son perfectas para descansar entre visitas o reuniones</p>
                            <a href="{{url('/reservas')}}" class="btn btn-primary">Reservar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{url('img/suite.jpg')}}" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Habitacion Suite</h5>
                            <p class="card-text">Brindan más espacio con un toque lujoso</p>
                            <a href="{{url('/reservas')}}" class="btn btn-primary">Reservar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="page-footer font-small black pt-4" style="color: whitesmoke;" c>
            <div class="container-fluid text-center text-md-left">
                <div align="center">
                    <div class="input-group mb-3">
                        <div style="font-size: 2rem;">
                            <div><i class="fab fa-facebook-f fa-fw white-text"></i></div>  
                        </div>
        
                        <div style="font-size: 2rem;">
                            <div><i class="fab fa-instagram fa-fw white-text"></i></div>
                        </div> 
                    </div>
                </div> 
                    
                <div class="input-group mb-3">
                    
                    <h5 class="footer-copyright text-center py-3"><br>¡Reserva Ya!</h5>
                </div>      
            </div>

            <div class="footer-copyright text-center py-3">© 2020 HOTEL LA RIVIERA
                <a href="https://mdbootstrap.com/"></a>
            </div>
        </footer>

    </body>

@stop