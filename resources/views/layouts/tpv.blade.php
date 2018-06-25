<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Importa jquery -->
        <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>

        <!-- TODOS LAS FUNCIONES SCRIPT DANIÉ-->

        <script>

            //Script de total
            var eltotal = Number($("#totalin").text());

            function calcularTotalLoco() {


                //Por cada uno va a ejecutar la función y hará algo.


                $('.total').each(function () {


                    eltotal = parseFloat(eltotal) + parseFloat($(this).text());


                    console.log("ILAAA: " + eltotal);
                    console.log("ILAAA22: " + $(this).text());



                });
                $("#totalin").val("");
                $("#totalin").text(Number(eltotal));
                $("#calculadoratotal").text(Number(eltotal));



            }
            $(document).ready(function () {
                function eliminarFila(index) {
                    $((index + "a").remove());
                }
            });


            //Fin de calcular total

            var idProducto = 0;
            var totalmoney = 0; //dinero total
            var aux = 0;
            // alert($(this).find("#totalin").html());
            // var gettotal=$(this).find("#totalin").html();

            $.ajax({
                url: "/Slim2/index.php/categorias",

                success: function (result) {
                    var obj = JSON.parse(result)
                    //for(var i=0;i<obj.length;i++)
                    for (i in obj) {
                        var button = '<button class="categoria btn btn-primary btn-lg" id=' + obj[i].idCategoria + '>' + obj[i].Nombre + ' </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
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
                                var button = '<button class="producto btn btn-success btn-lg" id=' + obj[i].idProducto + '>' + obj[i].Nombre + ' </button>&nbsp;&nbsp;';
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

                                        var buttond = '<tr id ="' + obj[0].idProducto + 'a" class="danger"><td>' + obj[0].Nombre + '</td><td class="dinero">' + obj[0].Precio + '</td><td class="cantidad">1</td><td class="total">' + obj[0].Precio + '</td><td><button type="reset" class="btn btn-danger btn">x</button></td></tr>';

                                        $(document).ready(function () {

                                            calcularTotalLoco();
                                            if ($("#" + obj[0].idProducto + "a").length) {
                                                console.log("Ya hay loco");

                                                $('#' + obj[0].idProducto + 'a').each(function ()
                                                {
                                                    var canti = $(this).find(".cantidad").html();

                                                    //alert($(this).html());
                                                    //Aumento de cantidad
                                                    canti++;
                                                    $(this).find(".cantidad").text(canti);

                                                    //Calculo del total
                                                    var preci = ($(this).find(".dinero").html());
                                                    var totil = canti * preci;

                                                    aux = totil;
                                                    $(this).find(".total").text(totil);

                                                });


                                            } else {
                                                $("#comandaP").append(buttond);
                                                console.log("No hayy, mas diniretitititito :D");

                                            }

                                            //Sumatorio del total


                                            //  alert( $(this).find("#totalin").html());
                                            // gettotal=gettotal+ Number(aux);

                                            //  $(this).find("#totalin").text(gettotal);

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

        <!-- SCRIPT PARA ABRIR VENTANA POPUP-->
        <script type="text/javascript">
            function openDialog() {
                $('#cobrar').fadeIn('fast', function () {
                    $('#popup').css('display', 'block');
                    $('#popup').animate({'left': '30%'}, 500);
                });
            }


            function closeDialog(id) {
                $('#' + id).css('position', 'absolute');
                $('#' + id).animate({'left': '-100%'}, 500, function () {
                    $('#' + id).css('position', 'fixed');
                    $('#' + id).css('left', '100%');
                    $('#overlay').fadeOut('fast');
                });
            }
        </script>



        <!-- SCRIPT PARA ABRIR VENTANA POPUP-->


        <!--FIN DE LAS FUNCIONES SCRIPT DANIÉ-->

        <title>TPV</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>

            body {
                background-image: url("{{ asset('asset/img/gate.jpg') }}");

            }
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




            .popup {
                overflow-y: scroll;
                background-color: #FBEEE6;
                color: #888888;
                height: 600px;
                left: 100%;
                padding: 20px;
                position: fixed;
                right: 10%;
                top: 25%;
                width: 800px;
                z-index: 101;
                -moz-box-shadow: 0px 0px 10px 1px #888888;
                -webkit-box-shadow: 0px 0px 10px 1px #888888;
                box-shadow: 0px 0px 10px 1px #888888;
                border-radius:10px;
                -moz-border-radius:10px;
                overflow-x:hidden;
                overflow-y:hidden;

            }

            .overlay {
                background: #000000;
                bottom: 0;
                left: 0;
                position: fixed;
                right: 0;
                top: 0;
                z-index: 100;
                opacity:0.5;
            }

            a.close {
                background: url("cancel.png") repeat scroll left top transparent;
                cursor: pointer;
                float: right;
                height: 26px;
                left: 32px;
                position: relative;
                top: -33px;
                width: 26px;
            }

            <!-- Documento CSS calcu-->
            form {
                width: 100%;
                max-width: 400px;
                text-align: center;
                border: solid 1px #c2c2c2;
                padding-bottom: 10px;
                margin: auto;
                background: #fafafa;
            }
            input[type=textfield] {
                width: 75%;
                padding: 16px 32px;
                font-size: 16px;
                margin: 8px 0;
                border: 1px solid silver;
                border-radius: 1px;
                text-align: left;
                color: #333;
                background: #ccc;
            }
            input[type=button], input[type=submit], input[type=reset] {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 16px 32px;
                font-size: 16px;
                min-width: 21%;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
            }
            input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover {
                background-color: #333;
            }
            <!-- Finaliza codigo calculadora CSS-->



        </style>


    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('main.index') }}">Atrás <- Qarmita</a>
                </div>
        </nav>
        <!-- VENTANA POPUP PARA EDITAR UNA ENCUESTA NUEVA -->
        <div id="popup" class="popup col-lg-12">
            <a onclick="closeDialog('popup');" class="close"></a>
            <div>
                <a onclick="closeDialog('popup');" class="close"> X</a>
                <!-- Empieza codigo calculadora html-->
                <form name="calculator">
                    <center><h1>Total</h1>



                        <br><FONT SIZE=10><a id="calculadoratotal">0</a><span> €</span></font></br>

                        <input type="textfield" name="ans" value="">
                        <br>
                        <input type="button" value="1" onClick="document.calculator.ans.value += '1'">
                        <input type="button" value="2" onClick="document.calculator.ans.value += '2'">
                        <input type="button" value="3" onClick="document.calculator.ans.value += '3'">
                        <input type="button" value="+" onClick="document.calculator.ans.value += '+'">
                        <br>
                        <input type="button" value="4" onClick="document.calculator.ans.value += '4'">
                        <input type="button" value="5" onClick="document.calculator.ans.value += '5'">
                        <input type="button" value="6" onClick="document.calculator.ans.value += '6'">
                        <input type="button" value="-" onClick="document.calculator.ans.value += '-'">
                        <br>
                        <input type="button" value="7" onClick="document.calculator.ans.value += '7'">
                        <input type="button" value="8" onClick="document.calculator.ans.value += '8'">
                        <input type="button" value="9" onClick="document.calculator.ans.value += '9'">
                        <input type="button" value="*" onClick="document.calculator.ans.value += '*'">
                        <br>
                        <input type="button" value="0" onClick="document.calculator.ans.value += '0'">
                        <input type="reset" value="c">
                        <input type="button" value="/" onClick="document.calculator.ans.value += '/'">
                        <input type="button" value="=" onClick="document.calculator.ans.value = eval(document.calculator.ans.value)">
                        </form></center>
                        <br>   
                        <a href=" {{ route('main.index') }} " type="button" class="btn btn-warning btn-lg btn-block">Finalizar</a>
        
                    </body>
                    </html>
                    <!-- Finaliza codigo calculadora html -->


            </div>
        </div>
        <!-- VENTANA POPUP PARA EDITAR UNA ENCUESTA NUEVA -->

        <!-- div general !-->
        <div class="container-fluid text-center">    

            <!-- Barra lateral comanda !-->
            <div class="col-sm-4 " style="background-color:aquamarine">
                <h1> <p>Comanda</p></h1>
                <h6> Mesa seleccionada: {{ $mesas->idMesa }}</h6>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto:</th>
                            <th>Precio:</th>
                            <th>Cantidad:</th>
                            <th>Total:</th>
                            <th>-X-</th>
                        </tr>
                    </thead>

                    <tbody id="comandaP">
                    </tbody>
                </table>
                <div class="btn-group">
                    <button id="cobrar" type="button" class="btn btn-default btn-lg" onclick="openDialog();">    Cobrar    </button>
                </div>
                <div id="cuentageneral"> 
                    <h2><p>Total:</p>
                        <a id="totalin">0</a><span> €</span>
                    </h2>

                </div>
            </div>

            <!-- Div de Panel de productos/categorias!-->
            <div class="col-sm-8 text-center"> 
                <!-- Div de categorias!-->
                <div>
                    <u> <h1>Categorías</h1> </u>

                    <div id="categorias">

                    </div> <!-- Fin div de categorias-->


                </div>

                <hr>
                <!-- Div de Productos!-->
                <div class="row">
                    <h1>Productos</h1>


                    <div id="productos">




                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

