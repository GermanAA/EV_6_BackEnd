<?php
               // if ($_SERVER['REQUEST_METHOD'] == 'POST') {

               // }3

               require('library.php');

               function mostrarTodos(){

                
                $data = file_get_contents("../data-1.json");
                $propiedades = json_decode($data, true);

                $i =0;
                
                foreach ($propiedades as $propiedad){
                    echo "<img src=../img/home.jpg alt=MNo se pudo cargar>";
                    echo '<br>';
                    echo($propiedades[$i]["Id"]);
                    echo '<br>';
                    echo("Dirección: ". $propiedades[$i]["Direccion"]);
                    echo '<br>';
                    echo("Ciudad: ". $propiedades[$i]["Ciudad"]);
                    echo '<br>';
                    echo("Telefono: ".$propiedades[$i]["Telefono"]);
                    echo '<br>';
                    echo("Código Postal: " . $propiedades[$i]["Codigo_Postal"]);
                    echo '<br>';
                    echo("Tipo: ".$propiedades[$i]["Tipo"]);
                    echo '<br>';
                    echo("Precio: " .$propiedades[$i]["Precio"]);
                    echo '<br>';
                    echo '<br>';
                    
                   
                    $i++;
                };

            }

                //$mostrarTodos = mostrarTodos();

                //echo ('$mostrarTodos');

                

                //echo '<pre>';
                echo getData();
               
              
