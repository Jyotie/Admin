<head>

    <meta charset="utf-8">
    <meta name="description" content="Admin La Qarmita">
    <meta name="author" content="Daniel & Julio">
    <meta name="keyword" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> La Qarmita </title>

    <!-- start: Css -->
    <!--<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/plugins/simple-line-icons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/plugins/animate.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/plugins/fullcalendar.min.css')}}"/>
    <link href="{{ asset('asset/css/style.css')}}" rel="stylesheet">
    <!-- end: Css -->

    <link rel="shortcut icon" href="{{ asset('asset/img/logomi.png') }}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>





    <style>
        /* Clase que tendra el tooltip */
        .cssToolTip {
            position: relative; /* Esta clase tiene que tener posicion relativa */
            color: black; /* Color del texto */    
        }

        /* El tooltip */
        .cssToolTip span {
            background: rgba(0, 100%, 90%, 0,3)  center left 5px no-repeat; 
            border: 1px solid #050505;
            border-radius: 5px;
            box-shadow: 1px 1px 1px #333;
            color: #050505;
            display: none; /* El tooltip por defecto estara oculto */
            font-size: 0.8em;
            padding: 5px 5px 5px 5px;
            max-width: 6000px;
            position: absolute; /* El tooltip se posiciona de forma absoluta para no modificar el aspecto del resto de la página */
            top: 15px; /* Posicion apartir de la parte superior del primer elemento padre con posicion relativa */
            left: 100px; /* Posicion apartir de la parte izquierda del primer elemento padre con posicion relativa */
            z-index: 100; /* Poner un z-index alto para que aparezca por encima del resto de elementos */
        }

        /* El tooltip cuando se muestra */
        .cssToolTip:hover span {
            display: inline; /* Para mostrarlo simplemente usamos display block por ejemplo */
        }
        .popup {
            overflow-y: scroll;
            background-color: #ffffff;
            color: #888888;
            height: 600px;
            left: 100%;
            padding: 15px;
            position: fixed;
            right: 15%;
            top: 15%;
            width: 700px;
            z-index: 101;
            -moz-box-shadow: 0px 0px 10px 1px #888888;
            -webkit-box-shadow: 0px 0px 10px 1px #888888;
            box-shadow: 0px 0px 10px 1px #888888;
            border-radius:10px;
            -moz-border-radius:10px;
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
    </style>



</head>