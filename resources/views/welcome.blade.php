@extends('layouts.app')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">

<div class="container marketing top50px bottom60px">      
    <div class="col-md-12">
        <div class="card" align="center">
            <div class="card-header" id="map-header">
                <h3>Detector de noticias falsas </h3>
            </div>
            <div class="top10px" id="mapa-ecuador" style="height:72vh">  
                <div class="top50px" id="mapa-ecuador" style="height:72vh">  
                    <h4>Ingresa tu URL aquí</h4>
                    <form action="/validarUrl" style="width:80%;" method="POST">    
                        <div class="top20px">
                            <input class="form-control" type="text" id="url" name="url" required>
                        </div>
                        <div class="top20px">
                            <input class="btn btn-success" type="submit" value="Validar">
                        </div>                        
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container marketing top20px bottom60px">  
    <div class="" align="center">
        <h4><b></b> Nuestra misión es proporcionar una herramienta <br> capaz de validar noticias verdaderas y detectar noticias falsas <br> por medio del uso de la tecnología</h4>
    </div>
</div>

<!-- <div class="container marketing top20px1 bottom60px">      
    <div class="col-md-12">
        <div class="card" align="center">
            <div class="card-header" id="map-header">
                <b>Detector de noticias falsas </b>
            </div>
            <div class="top10px" id="mapa-ecuador" style="height:72vh">                        
            </div>
        </div>
    </div>
</div> -->

<div class="container-fluid marketing">
    <div class="row">
        <div class="col-lg-12 top20px bottom20px text-white" align="center" style="background-color:#990000;">
            <h2 class="top20px bottom20px text-white">Evitando la propagación de FAKE NEWS</b></h2>

            <div class="row top20px bottom20px">
                <div class="col-md-4 top20px bottom20px">
                    <h4>Validación de fuentes</h4> 
                    <span class="font-size320">
                        <img id="" class="services_icons pointer top20px" src="{{asset('images/price1.png')}}" alt="Servicio de consultoría">
                    </span>
                    <!-- <a href="" target="_blank" class="btn btn-lg btn-second">Abrir</a>                    -->
                </div>

                <div class="col-md-4 top20px bottom20px">
                    <h4>Detección de flags en imágenes</h4>
                    <span class="font-size320">
                        <img id="" class="services_icons pointer top20px" src="{{asset('images/price2.png')}}" alt="Servicio de consultoría">
                    </span>
                    <!-- <a href="" target="_blank" class="btn btn-lg btn-second">Abrir</a >                    -->
                </div>

                <div class="col-md-4 top20px bottom20px">
                    <h4>Validación de imágenes</h4>
                    <span class="font-size320">
                        <img id="" class="services_icons pointer top20px" src="{{asset('images/price3.png')}}" alt="Servicio de consultoría">
                    </span>
                    <!-- <a href="" target="_blank" class="btn btn-lg btn-second">Abrir</a >                    -->
                </div>

            </div>      
            
            
        </div>
        <!-- <div class="col-lg-6 top20px text-white" align="left" style="background-color:#ff4d4d; background-image: url('images/beneficios_cliente.png'); background-size: cover; background-position: center;">
            <h2 class="top20px botom20px left50px text-black">Beneficios para sus <b class="">Clientes</b></h2>
            
        </div> -->
    </div>
</div>



<div class="container">

    <hr class="featurette-divider">
    
    <!-- <h2 class="col-md-12" align="center">EcuPets</h2> -->

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">Desde el auge de las <span class="text-muted">REDES SOCIALES</span></h2>
        <!-- <p class="lead">Los veterinarios y clínicas veterinarias pueden llevar un registro de las mascotas atendidas, de los servicios y vacunas suministradas.</p> -->
    </div>
    <div class="col-md-5">
        <!-- <img class="featurette-image img-fluid mx-auto" src="{{asset('images/laptop.png')}}" alt="Generic placeholder image"> -->
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7 order-md-2" style="margin-top:-60px;">
        <h2 class="featurette-heading">Las noticias <span class="text-muted">SE PROPAGAN VELOZMENTE</span></h2>
        <!-- <p class="lead">Nuestros usuarios pueden acceder a la información de sus mascotas desde cualquier lugar y/o dispositivo, cuidando de tu mascota en todo momento.</p> -->
    </div>
    <div class="col-md-5 order-md-1">
        <!-- <img class="featurette-image img-fluid mx-auto" src="{{asset('images/responsive.png')}}" alt="Generic placeholder image"> -->
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">Inmersas entre ellas <span class="text-muted">LAS FAKE NEWS</span></h2>
        <!-- <p class="lead">Tanto los veterinarios como los usuarios pueden llevar un control total de las mascotas accediento a nuestro sistema.</p> -->
    </div>
    <div class="col-md-5">
        <!-- <img class="featurette-image img-fluid mx-auto" src="{{asset('images/datos.png')}}" alt="Generic placeholder image"> -->
    </div>
    </div>

    <hr class="featurette-divider">

</div>


<!-- <div class="container top100px bottom100px" id="divContactanos"> 
    <div class="row">
        <div class="col-md-12" align="center">
           
            <h2>Contáctanos</h2>

            <form action="/action_page.php" method="get">
                <div class="col-md-12 row" align="center">
                    <div class="col-md-12 top30px">
                        <div class="input-contacto">
                            <input type="text" class="form-control" required="required" placeholder="Nombres" name="nombres">
                        </div>
                    </div>
                    <div class="col-md-12 top10px">	
                        <div class="input-contacto">
                            <input type="email" class="form-control" required="required" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="col-md-12 top10px">	
                        <div class="input-contacto">
                            <input type="number" class="form-control" required="required" placeholder="Teléfono" name="telefono">
                        </div>
                    </div>
                    <div class="col-md-12 top10px">	
                        <div class="input-contacto">
                            <textarea type="text" class="form-control" required="required" placeholder="Asunto" name="asunto" style="height:100px;"></textarea>
                        </div>
                    </div>
                
                    <div class="top20px col-md-12" align="center">
                        <button class="btn btn-lg btn-main">Enviar</button>
                    </div>
                </div>
            </form>
               
        </div>
    </div>
</div> -->


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->   

                <!-- <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

  
                </div> -->
            </div>
        </div>
    </div>
</div>

<div class="modal" id="NoticiaValidada">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Validación de URL's</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <div class="" align="center">
            <i class="fa fa-thumbs-up" style="font-size:500%; color:#33cc33;"></i>
        </div>
        <h4 class="top20px">Tu noticia ha sido validada, puedes difundirla con seguridad</h4>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="NoticiaNoValidada">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Validación de URL's</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <div class="" align="center">
            <i class="fa fa-thumbs-down" style="font-size:500%; color:#FF0000;"></i>
        </div>
        <h4 class="top20px">Tu noticia no es verdadera, por favor no la difundas</h4>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<input type="hidden" id="validar" name="validar" value="{{ $validar }}">

@endsection



<script type="text/javascript"> 
    
</script>


@section('scripts')
<script type="text/javascript">

$(document).ready(function() {   
    var validar = $('#validar').val();
    

    if (validar != 'Inicio') {
        if (validar == 'validada') {
            $('#NoticiaValidada').modal('show');  
        }else {            
            $('#NoticiaNoValidada').modal('show');  
        }        
    }    

    $('body').on('hidden.bs.modal', function () {        
        location.replace("/");  
    });
    
});

</script>

<style>
    

</style>

@stop
