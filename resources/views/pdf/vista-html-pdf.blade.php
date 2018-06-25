<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <title>Listado de Productos | La Qarmita</title>
        <style type="text/css">
            body{
                font-size: 16px;
                font-family: "Arial";
            }
            table{
                border-collapse: collapse;
            }
            td{
                padding: 6px 5px;
                font-size: 15px;
            }
            .h1{
                font-size: 21px;
                font-weight: bold;
            }
            .h2{
                font-size: 18px;
                font-weight: bold;
            }
            .tabla1{
                margin-bottom: 20px;
            }
            .tabla2 {
                margin-bottom: 20px;
            }
            .tabla3{
                margin-top: 15px;
            }
            .tabla3 td{
                border: 1px solid #000;
            }
            .tabla3 .cancelado{
                border-left: 0;
                border-right: 0;
                border-bottom: 0;
                border-top: 1px dotted #000;
                width: 200px;
            }
            .emisor{
                color: red;
            }
            .linea{
                border-bottom: 1px dotted #000;
            }
            .border{
                border: 1px solid #000;
            }
            .fondo{
                background-color: #dfdfdf;
            }
            .fisico{
                color: #fff;
            }
            .fisico td{
                color: #fff;
            }
            .fisico .border{
                border: 1px solid #fff;
            }
            .fisico .tabla3 td{
                border: 1px solid #fff;
            }
            .fisico .linea{
                border-bottom: 1px dotted #fff;
            }
            .fisico .emisor{
                color: #fff;
            }
            .fisico .tabla3 .cancelado{
                border-top: 1px dotted #fff;
            }
            .fisico .text{
                color: #000;
            }
            .fisico .fondo{
                background-color: #fff;
            }

        </style>
    </head>






    <body>
        <div class="">

            <!-- CABECERA PDF -->
            <table width="100%" class="tabla1">
                <tr>
                    <td width="73%" align="center"><img id="logo" src="{{ asset('asset/img/logomi.png') }}" alt="" width="255" height="57"></td>
                    <td width="27%" rowspan="3" align="center" style="padding-right:0">
                        <table width="100%">
                            <tr>
                                <td height="40" align="center" class="border fondo"><span class="h1">LISTADO DE PRODUCTOS</span></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center">Calle Aguila, 20 -- Granada, España</td>
                </tr>
                <tr>
                    <td align="center">Telf.: +34 958 07 34 22  Correo: laqarmita@gmail.com</td>
                </tr>
            </table>
            <!-- CABECERA PDF -->






            <!-- CONTENIDO PDF -->
            <table width="100%" class="table table-hover table-striped tabla2">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio €</th>
                        <th>Categoría</th>
                    </tr>                            
                </thead>
                <tbody>
                    @foreach ($productos as $producto)

                    <tr class="gradeA odd" role="row">
                        <td>{{ $producto->Nombre }}</td>
                        <td>{{ $producto->Descripcion }}</td>
                        <td>{{ $producto->Precio }}</td>
                        <td>{{ $producto->idCategoria }}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            <!-- CONTENIDO PDF -->

            <!-- PIE PDF -->
            <table width="100%" class="tabla3">
                <tr>
                    <td width="11%">La Qarmita</td>
                    <td width="7%" align="center" class="border fondo"><strong>FECHA</strong></td>
                </tr>
                <tr>
                    <td>Dirección:</td>
                    <td class="linea"><span class="text">  </span></td>
                    <td>DNI:</td>
                    <td class="linea"><span class="text">  </span></td>
                    <td>&nbsp;</td>
                    <td align="center" class="border"><span class="text"> {{ now()->toDateString() }} </span></td>
                </tr>
            </table>
            <!-- PIE PDF -->
            
        </div>
    </body>
</html>