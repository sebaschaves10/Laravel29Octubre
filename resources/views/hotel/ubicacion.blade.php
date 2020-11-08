@extends('layouts.master')
@section('content')

    <body background="{{url('img/fondo.jpg')}}">
        <div class="container" align="center" >
            <h1 style="color: white"> UBICACIÓN </h1>
            <h5 style="color: white;"><br>Ubicación acertada dentro de la ciudad de Cartagena de Indias porque tiene fácil acceso a cualquier lugar.</h5>
        
            <img src="{{url('img/mapa.png')}}" height="100">

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