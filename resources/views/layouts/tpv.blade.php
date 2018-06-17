<!DOCTYPE html>

<html lang="es">
    <head>
        <title>La Qarmita</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        @include('theme.style')

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
    
        <script>
            $( function() {
                // run the currently selected effect
                function runEffect() {
                    // get effect type from
                    var selectedEffect = $( "#effectTypes" ).val();
                
                    // Most effect types need no options passed by default
                    var options = {};
                    // some effects have required parameters
                    if ( selectedEffect === "scale" ) {
                        options = { percent: 50 };
                    } else if ( selectedEffect === "size" ) {
                        options = { to: { width: 200, height: 60 } };
                    }
                
                    // Run the effect
                    $( "#contenedorProductos" ).toggle( selectedEffect, options, 500 );
                };
            
                // Set effect from select menu value
                $( "#buttonCafe" ).on( "click", function() {
                    runEffect();
                });
            } );
        </script>
    </head>
    <body>

        <!-- Nav de la página -->
        @include('theme.navTPV')
        <!-- Nav de la página -->

        
        <div class="container-fluid text-center">    
            <div class="row content">
                <div class="row">

                    <!-- ------------------CONTENIDO SIDEBAR------------------------------ -->
                    <div class="col-sm-4"> <!-- Aqui antes tenia la propiedad well -->
                        <div id="comanda" class="well">
                            <p>COMANDA</p>
                            @include('layouts.comanda')
                        </div>
                
                        <div id="padNum" class="well center">
                            <p>PAD</p>
                            @include('layouts.pad')
                        </div>
                    </div>
                    <!-- ------------------CONTENIDO SIDEBAR------------------------------ -->



                    <!-- ------------------CONTENIDO PRINCIPAL------------------------------ -->
                    <div class="row content">
                        <div id="contenedorCategorias" class="col-sm-7 panel-body"> 
                            <h1>CATEGORIAS</h1>
                            <div id="contCat" class="">
                                @foreach($categorias as $cat)
                                    <button id="buttonCafe" type="button" class="btn">{{$cat->Nombre}}</button>
                                @endforeach
                                <hr>
                            </div>
                        </div>
                        
                        <th></th>
                        
                        <div id="contenedor" class="col-sm-7 panel-body"> 
                            <h1>PRODUCTOS</h1>
                            <div id="contenedorProductos" class="">
                               
                                    <button id="btnCafe" type="button" class="btn btn-primary"></button>
                               
                            </div>
                        </div>
                    </div>
                    <!-- ------------------CONTENIDO PRINCIPAL------------------------------ -->

                </div>
             </div>
        </div>
        
        <script>
            $.ajax({
                url: "/Slim2/index.php/categorias",
                success: function( result ) {
                    var obj = JSON.parse(result)
                    var int;
                    for(i=0; i<obj.productos.length; i++)
                        $("#buttonCafe").append (obj.productos[i].Nombre + " ");
                }
            });
        </script>
        
    </body>
</html>



