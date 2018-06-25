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

            
    
     
</style>