


<body>
        <script>
                //Declaracion de variables
                var num1 = 0;
                var num2 = 0;
                var opera;
    
            //Función que coloca el número presionado
            function darNumero(numero){
                if(num1==0 && num1 !== '0.'){
                    num1 = numero;
                }else{
                    num1 += numero;
                }
                refrescar();
            }
    
            //Función que coloca la coma al presionar dicho botón
            function darComa(){
                if(num1 == 0) {
                    num1 = '0.';
                } else if(num1.indexOf('.') == -1) {
                    num1 += '.';
                }
                refrescar();
            }
    
            //Función que coloca la C al presionar dicho botón
            function darC(){
                num1 = 0;
                num2 = 0;
                refrescar();
            }
    
    
            //Esta función realiza las distintas operaciones aritméticas en función del botón pulsado
            function operar(valor){
                if (num1 == 0){
                    num1 = parseFloat(document.getElementById("valor_numero").value);
                }
                num2 = parseFloat(num1);
                num1= 0;
                opera = valor;
            }
    
            //Función para pulsar igual
                /*
                suma = 1
                resta = 2
                multiplicacion = 3
                division = 4
                potencia = 5
            */
    
            function esIgual(){
                num1 = parseFloat(num1);
                switch (opera){
                    case 1:
                        num1 += num2;
                    break;
                    case 2:
                        num1 = num2 - num1;
                    break;
                    case 3:
                        num1 *= num2;
                    break;
                    case 4:
                        num1 = num2 / num1;
                    break;
                    case 5:
                        num1 = Math.pow(num2, num1);
                    break;
                }
                refrescar();
                num2 = parseFloat(num1);
                num1 = 0;
            }
    
            function refrescar(){
                document.getElementById("valor_numero").value = num1;
            }
        </script>
<table id="calculadora">
        <tr>
            <td colspan="4">
                <input type="text" id="valor_total" maxlength="20" value="TOTAL" class="cajita_total" readonly="true">
                <input type="text" id="valor_numero" maxlength="20" value="0" class="cajita_valor" readonly="true">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                
            </td>
            <td>
                
            </td>
            <td>
                
            </td>
        </tr>
        <tr>
            <td>
                <input type="Button" id="7" value="7" class="boton">
            </td>
            <td>
                <input type="Button" id="8" value="8" class="boton">
            </td>
            <td>
                <input type="Button" id="9" value="9" class="boton">
            </td>
            <td>
                <input type="Button" id="C" value="C" class="boton funcion">
            </td>
        </tr>
        <tr>
            <td>
                <input type="Button" id="4" value="4" class="boton">
            </td>
            <td>
                <input type="Button" id="5" value="5" class="boton">
            </td>
            <td>
                <input type="Button" id="6" value="6" class="boton">
            </td>
            <td>
                <input type="Button" id="igual" value="=" class="boton funcion">
            </td>
        </tr>
        <tr>
            <td>
                <input type="Button" id="1" value="1" class="boton">
            </td>
            <td>
                <input type="Button" id="2" value="2" class="boton">
            </td>
            <td>
                <input type="Button" id="3" value="3" class="boton">
            </td>
            <td>
                
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="Button" id="0" value="0" class="boton_largo">
            </td>
	    <td>
                <input type="Button" id="," value="," class="boton">
            </td>
    	    
        </tr>
    </table>
</body>