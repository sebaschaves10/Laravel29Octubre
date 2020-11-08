@extends('layouts.master')
@section('content')

    <body background="{{url('img/fondo.jpg')}}">
        <div class="container" align="center">
            <h1 style="color: white"> ¡BIENVENIDOS AL HOTEL LA RIVIERA! </h1>
            <h5 style="color: white;"><br>La mejor manera de encontrarte a ti mismo es perderte en el servicio a los demás</h5>

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{url('img/3.jpg')}}" class="d-block w-100" alt="..." height="500">
                    <div class="carousel-caption d-none d-md-block">
                        <h1> &#x2655;</h1>
                        <p><h4>Danos el gusto de atenderte</h4></p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{url('img/2.jpg')}}" class="d-block w-100" alt="..." height="500">
                    <div class="carousel-caption d-none d-md-block">
                        <h1> &#x2655;</h1>
                        <p><h4>Simplemente relajante</h4></p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="<img src="{{url('img/corona.png')}}" height="100">{{url('img/1.jpg')}}" class="d-block w-100" alt="..." height="500">
                    <div class="carousel-caption d-none d-md-block">
                        <h1> &#x2655;</h1>
                        <p><h4>Sienteté como en casa</h4></p> 
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <br><br>
            <img src="{{url('img/corona.png')}}" height="100">

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
        </div>
    </body>

@stop