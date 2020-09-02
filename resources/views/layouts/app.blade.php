<!DOCTYPE html>
<!-- <html lang="es"> -->
<html lang="{{ app()->getLocale() }}">
    <head>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-1951584-7"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-1951584-7');
        </script>

       
        @include('partials.header')    

        
                          
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> 
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/> 

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">      
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/> 

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
                              
        
    
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">               

        <!-- webpack.mix.js -->
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">

        

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>                         

        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" /> -->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
                
        
        <link href="{{ asset('css/app_pruebas.css') }}" rel="stylesheet">

        

        <style>
          
        </style>

        @yield('styles')
        @stack('styles')
    </head>
    <body>
        <div id="app">
            @include('partials.navBar')
            @yield('content')

            <!-- Modal Reutilizado para mostrar mensajes de eliminar items  -->
            <div class="modal" id="modal-eliminar">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">                
                    
                        <div class="modal-header card-header bg-dark text-white">
                            <h5 id="titulo-modal-eliminar" class="modal-title">Título</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                                                
                        <div class="modal-body">
                            <h6 id="mensaje-modal-eliminar" class="" align="center">Mensaje</h6>
                        </div>
                                                
                        <div class="modal-footer">
                            <button id="eliminar-item" type="button" class="btn btn-danger" data-dismiss="modal">
                                <i class="fa fa-fw fa-remove"></i> Sí
                            </button>   
                            <button type="button" class="btn btn-second" data-dismiss="modal">
                                <i class="fa fa-fw fa-remove"></i> No
                            </button>                                          
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">  

                           
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 


        
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <!-- webpack.mix.js -->
        <!-- <script src="{{ asset('js/all.js') }}" type="text/javascript"></script>         -->

        <!-- <script async src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" charset="utf-8"></script>
        <script async src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" charset="utf-8"></script>
        <script async src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js" charset="utf-8"></script> -->
        

        <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
        <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  -->
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>           
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>           
           
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>    
                 
        
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script> -->
        
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>   

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        
        
                  
            
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v6.0&appId=795247517280044&autoLogAppEvents=1"></script>

        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        

        

        <script type="text/javascript">   
                                    
            $(function() {     

               
                // $(document).on('click','#navbarDropdown1',function(e){
                //     e.preventDefault();        
                    
                // });                                             
                    
                // $(".datepicker").datepicker({ 
                //         autoclose: true, 
                //         todayHighlight: true,
                //         dateFormat: 'yy-mm-dd'
                // }).datepicker('update', new Date());
               
                               
                $('.datetimepicker').datetimepicker({
                    locale: 'es-EC',  
                    format:'YYYY-MM-DD'                  
                    // inline: true,
                    // sideBySide: true                              
                });     
                

                $('.datepicker').datetimepicker({
                    locale: 'es-EC',                                     
                    format:'YYYY-MM-DD',
                    icons:{
                        time: 'fa fa-history',
                        date: 'fa fa-calendar',
                        up: 'fa fa-sort-asc',
                        down: 'fa fa-sort-desc',
                        previous: 'fa fa-toggle-left',
                        next: 'fa fa-toggle-right',
                        today: 'fa fa-bolt',
                        clear: 'fa fa-trash',
                        close: 'fa fa-close'
                    }                                                         
                });       

                $('.timepicker').datetimepicker({
                    locale: 'es-EC',                                        
                    format: 'LT',         
                    icons:{
                        time: 'fa fa-history',
                        date: 'fa fa-calendar',
                        up: 'fa fa-sort-asc',
                        down: 'fa fa-sort-desc',
                        previous: 'fa fa-toggle-left',
                        next: 'fa fa-toggle-right',
                        today: 'fa fa-bolt',
                        clear: 'fa fa-trash',
                        close: 'fa fa-close'
                    }               
                });               


                // Submit se ejecute una sola vez cuando internet esta lento
                $("form").submit(function() {              
                    $('input[type="submit"]').attr('disabled','disabled');
                    $('button[type="submit"]').attr('disabled','disabled');
                }); 
                

          
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip(); 
                });
                
                // Configuraciones de las DataTables
                $('.datatable').DataTable({
                    "pagingType": "full_numbers",                    
                    "paging": true,
                    "responsive": false,
                    "iDisplayLength": 50,
                    "aaSorting": [[ 0, 'Asc' ]],                     
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "autoWidth": false,
                    "info": true,
                    // language: {
                    //     "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                    // }  
                    // language: {
                    //     "decimal": "",
                    //     "emptyTable": "No hay información",
                    //     "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    //     "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    //     "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    //     "infoPostFix": "",
                    //     "thousands": ",",
                    //     "lengthMenu": "Mostrar _MENU_ Entradas",
                    //     "loadingRecords": "Cargando...",
                    //     "processing": "Procesando...",
                    //     "search": "Buscar:",
                    //     "zeroRecords": "Sin resultados encontrados",
                    //     "paginate": {
                    //         "first": "Primero",
                    //         "last": "Ultimo",
                    //         "next": "Siguiente",
                    //         "previous": "Anterior"
                    //     }
                    // }              
                });     

                //Configuraciones para Notificaciones TOASTR
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };  

            });

            function validarInput(e,data){
                key = e.keyCode || e.which;
                tecla = String.fromCharCode(key).toLowerCase();
                letras = data;
                especiales = "8-37-39-46";

                tecla_especial = false;
                for(var i in especiales){
                    if(key == especiales[i]){
                        tecla_especial = true; 
                        break;
                    }
                }

                if(letras.indexOf(tecla)==-1 && !tecla_especial){
                    return false;
                }
            }    

            function validarEmail(mail) {                
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
                    return (true)
                }             
                return (false)
            }

            $(document).on('click','.inputDate',function(e){  
                $('.datepicker').trigger('focus');
            });   
            
           
            
        </script>
        
        
        @yield('scripts')
        @stack('scripts')
    </body>
    <footer>
        @include('partials.footer')
    </footer>
</html>
