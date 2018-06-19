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
        .popup {
            overflow-y: scroll;
            background-color: #ffffff;
            color: #888888;
            height: 450px;
            left: 100%;
            padding: 20px;
            position: fixed;
            right: 10%;
            top: 25%;
            width: 600px;
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