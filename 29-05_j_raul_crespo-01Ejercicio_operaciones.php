
        <?php
        // Paso 1
        //1.- Crea una variable y asígnale el valor 15.
        //Asignamos un valos a la variable
        $variable=15;
        echo "Respuesta 1: " . $variable. "<br>";
        
         // Paso 2  
        //2.- Comprueba si este número es divisible entre 3.
        $resultado=false;
        //Comprobamos si la variable es divisible por otro número        
        if($variable % 3 == 0){
            $resultado=true;            
        }
        echo "Respuesta 2: " . $resultado. "<br>";
              
        // Paso 3
        // 3.- Multiplica este número por 21.
        //Multiplicamos la variable por otro número
        $variable=$variable*21;
        echo "Respuesta 3: " . $variable . "<br>";
        
        
        //Paso 4
        //4.- Añade cien veces el valor 1 a la variable.
        //Añadimos valores con un for a la variable           
        $variable=0;
        for ($i=0; $i<100; $i++) {
            $variable +=1;
        }
        echo "Respuesta 4: " . $variable . "<br>";

        //Paso 5
        //5.- Consigue la raíz del número resultante y muestra el resultado sin decimales(número entero).
        //Buscamos la raiz de un número y lo convertimos en entero
        $variable=15;
        $raiz= intval(sqrt($variable));
        echo "Respuesta5: " . $raiz . "<br>";
        
        $variable=341;
        //Paso 6
        //Añadir un texto en un medio de un numero
        $num_text = strval($variable);
        $array_string = str_split($num_text);
        $ultimo_valor = $array_string[count($array_string)-1];
        $array_string[count($array_string)-1]="code";
        array_push($array_string, $ultimo_valor);
        $array_en_texto = implode("", $array_string);
        echo "Respuesta 6: " . $array_en_texto . "<br>";       
        
        ?>
        