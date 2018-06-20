<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Importa jquery -->
        <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>

        <!-- TODOS LAS FUNCIONES SCRIPT DANIÉ-->

        <script>

            var idProducto = 0;
            var totalmoney = 0; //dinero total
            var aux = 0;
            var gettotal = 0;
            $.ajax({
                url: "/Slim2/index.php/categorias",

                success: function (result) {
                                                    var obj = JSON.parse(result)
                                                    //for(var i=0;i<obj.length;i++)
                                                    for (i in obj) {
                                                            var butt o n = '<button class="categoria btn btn-primary btn-lg" id=' + obj[i].idCategoria + '>' + obj[i].Nombre + ' </button>';
                                                                    $("#categorias").append(button);

                    }
                }
                                                                    });

                                                            $(document).ready(function () {
            $(".categoria").click(function ()
            {
            $("#productos").empty(); //Limpia el div
                                                                    console.log("primer on:" + this.id);
                                                            var id = this.id;
                                                    // Crea productos
                                                    $.ajax({
                                            url: '/Slim2/index.php/productoscategoria/' + id,
                                            success: function (result) {
                                                    var obj = JSON.parse(result)
                                                    //for(var i=0;i<obj.length;i++)
                                    for (i in obj) {
                                                    var button = '<button class="producto btn btn-primary btn-lg" id=' + obj[i].idProducto + '>' + obj[i].Nombre + ' </button>';
                                                            $("#productos").append(button);
                                                            }
                                                    $(".producto").click(function ()
                            {
                            idProducto = this.id;
                                                            console.log("segun on: " + idProducto);
                                    $.ajax({
                                                    url: '/Slim2/index.php/productos/' + idProducto,
                                                    success: function (result) {
                                                            var obj = JSON.parse(result)
                                                            totalmoney = obj[0].Precio;
                                                                    var buttond = '<tr id ="' + obj[0].idProducto + 'a" class="danger"><td>' + obj[0].Nombre + '</td><td id="dinero">' + obj[0].Precio + '</td><td id="cantidad">1</td><td id="total">' + obj[0].Precio + '</td></tr>';
                                                                                                $(document).ready(function () {
                                                                                        if ($("#" + obj[0].idProducto + "a").length) {
                                                                                        console.log("Ya hay loco");
                                                                                                $('#' + obj[0].idProducto + 'a').each(function ()
                                                                                        {
                                                                                        var canti = $(this).find("#cantidad").html();
                                                                                                //alert($(this).html());
<!--Aumento de cantidad-->
                                                                                                canti++;
                                                                                                $(this).find("#cantidad").text(canti);

                                                    <!--Calculo del total-->
                                                    var preci= ($(this).find("#dinero").html());
                                                    var totil=canti*preci;
                                                    aux=totil;
                                                    console.log("El total va por aqui"+totalmoney);

                                                     $(this).find("#total").text(totil);
                                                });


                                            } else {
                                                $("#comandaP").append(buttond);
                                                console.log("No hayy, mas diniretitititito :D");
                                                
                                            }

                                            <!--Sumatorio del total-->

                                            console.log("antes de total money: " +totalmoney);
                                            totalmoney=+aux;
                                            console.log("despues de la acumulacion"+totalmoney);
                                            gettotal=$(this).find("#totalin").html();
                                            alert( $(this).find("#totalin").html());
                                            gettotal+= aux;
                                            $(this).find("#totalin").text(gettotal);

                                        });
                                    }
                                });
                            }
                            );

                        }
                    });

                }//Fin click
                );


            });

            /*Creación de botones en la comanda*/




    </script>
        <script>

                                                                                                                function ejemplo() {

                                                  $('tr').each(function() {
                                                                                                                var suma = 0;
                                                                                                                        $(this).find(".sumar").each(function() {
                                                                                                                suma += Number($(this).attr("dato"));
                                                                                                                });
                                                                                                                        $(this).find(".total").first().text(suma);
                                                                                                                });
                                                                                                                }

        </script>

        <!--FIN DE LAS FUNCIONES SCRIPT DANIÉ-->

            <title>TPV</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <style>
                /* Remove the navbar's default margin-bottom and rounded borders */ 
                .navbar {
                    margin-bottom: 0;
                    border-radius: 0;
                }

                /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
                .row.content {height: 450px}

                /* Set gray background color and 100% height */
                .sidenav {
                    padding-top: 20px;
                    background-color: #f1f1f1;
                    height: 100%;
                }

                /* Set black background color, white text and some padding */
                footer {
                    background-color: #555;
                    color: white;
                    padding: 15px;
                }

                /* On small screens, set height to 'auto' for sidenav and grid */
                @media screen and (max-width: 767px) {
                    .sidenav {
                        height: auto;
                        padding: 15px;
                    }
                    .row.content {height:auto;} 
                }
            </style>


        </head>
        <body>

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Qarmita</a>
                    </div>


            </nav>
            <!-- div general !-->
            <div class="container-fluid text-center">    

                <!-- Barra lateral comanda !-->
                <div class="col-sm-4 " style="background-color:aquamarine;">
                    <h1> <p>Comanda</p></h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Producto:</th>
                                <th>Precio:</th>
                                <th>Cantidad:</th>
                                <th>Total:</th>
                            </tr>
                        </thead>

                        <tbody id="comandaP">
                        </tbody>
                    </table>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Blabla</button>
                        <button type="button" class="btn btn-success">Imprimir</button>
                        <button type="button" class="btn btn-danger">Borrar</button>
                    </div>
                    <div id="cuentageneral"> 
                        <h2><p>Total:</p>
                            <a id="totalin"></a><span> €</span>
                        </h2>

                    </div>
                </div>

                <!-- Div de Panel de productos/categorias!-->
                <div class="col-sm-8 text-center"> 
                    <!-- Div de categorias!-->
                    <div>
                        <u> <h2>Categorías</h2> </u>

                        <div id="categorias">

                        </div> <!-- Fin div de categorias-->


                    </div>

                    <hr>
                    <!-- Div de Productos!-->
                    <div>
                        <h2>Productos</h2>

                        <div id="productos">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

