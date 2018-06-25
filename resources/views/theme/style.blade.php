<style>
    html,body {
        background-image: url("img/bg1.jpg");
    }
    h1{
        color: white;
    }
    h4{
        color: black;
    }

    #contenedorProductos{
        padding-top: 50px;
    }

    #comanda{
        height: 390px;
        width: 400px;
        overflow-y: scroll;
    }

    #padNum{
        height: 300px;
        width: 400px;
    }

    #ContComanda{
        height: 350px;
        width: 350px;
    }

    /***************** 
    |   PAD NUMERICO |
    ******************/

    #calculadora {
        text-align: center;
        background: transparent; 
        border: 0;
    }

    #calculadora td {
        padding: 4px;
    }
    .cajita_total {
        background-color: #acff38; 
        color: #467702; 
        border: 1px solid #454545; 
        width: 350px; 
        height: 30px; 
        font-family: Arial, Helvetica; 
        font-size: 20px; 
        line-height: 26px; 
        text-align: left; 
    }
    .cajita_valor {
        background-color: #acff38; 
        color: #467702; 
        border: 1px solid #454545; 
        width: 350px; 
        height: 30px; 
        font-family: Arial, Helvetica; 
        font-size: 20px; 
        line-height: 26px; 
        text-align: right; 
    }
    
    .boton {
        width: 70px;
        height: 32px;
        border: 1px solid #000; f
        font-family: Arial; 
        font-size: 12px; 
        cursor: hand; 
        background-color: #fff;
    }

    .boton_largo { 
        width: 150px; 
        height: 30px;
        border: 1px solid #000;  f
        font-family: Arial; 
        font-size: 12px; 
        cursor: hand; 
        background-color: #fff;
    }

    .funcion {
        font-weight: bold; 
        color: #b00;
    }

    /***************** 
    |   PAD NUMERICO |
    ******************/


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
    .well{
        width: 450px;
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


    
    .toggler {
        width: 500px;
        height: 200px;
        text-align: center;
    }

    #button {
        padding: .5em 1em;
        text-decoration: none;
    }
    
    #effect {
        position: relative;
        width: 240px;
        height: 170px;
        padding: 0.4em;
    }

    #effect h3 {
        margin: 0;
        padding: 0.4em;
        text-align: center;
    }
  </style>