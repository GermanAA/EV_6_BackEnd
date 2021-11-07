<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/index.css" media="screen,projection" />
    <title>Document</title>
</head>

<body>

    <body>


        <div class="contenedor">

            <div class="card rowTitulo">
                <h1>Buscador</h1>
            </div>
            <div class="colFiltros">
                <form action="" method="post" id="formulario">
                    <div class="filtrosContenido">
                        <div class="tituloFiltros">
                            <h5>Realiza una búsqueda personalizada</h5>
                        </div>
                        <div class="filtroCiudad input-field">
                            <label for="selectCiudad">Ciudad:</label>
                            <select name="ciudad" id="selectCiudad">
                                <option value="" selected>Elige una ciudad</option>
                            </select>
                        </div>

                        <div class="filtroTipo input-field">
                            <label for="selecTipo">Tipo:</label><br>
                            <select name="tipo" id="selectTipo">
                                <option value="" selected>Elige un tipo</option>
                            </select>
                        </div>
                        <div class="filtroPrecio">
                            <label for="rangoPrecio">Precio:</label>
                            <input type="text" id="rangoPrecio" name="precio" value="" />
                        </div>
                        <div class="botonField">
                            <input type="submit" class="btn white" value="Buscar" id="submitButton">
                        </div>
                    </div>
                </form>
            </div>
            <!--Mostrar Todos -->
            <div class="colContenido">
                <div class="tituloContenido card">
                    <h5>Resultados de la búsqueda:</h5>
                    <div class="divider"></div>
                    <button type="button" name="todos" class="btn-flat waves-effect" id="mostrarTodos">Mostrar Todos</button>
                </div>

                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $data = file_get_contents("data-1.json");
                    $products = json_decode($data, true);

                    foreach ($products as $product) {
                        echo '<pre>';

                        echo (print_r($product, true));

                        //echo ("<tr><td>" . $product["id"] . "</td>");
                        //echo ( . $product["Direccion"] . "</td>");
                    };

                    $b = array_values($products);

                    $i =0;
                    
                    foreach ($b as $bb){
                        //var_dump($b[$i]["Ciudad"]);
                        echo '<br>';
                        echo($b[$i]["Id"]);
                        echo '<br>';
                        echo($b[$i]["Direccion"]);
                        echo '<br>';
                        echo($b[$i]["Ciudad"]);
                        echo '<br>';
                        echo($b[$i]["Telefono"]);
                        echo '<br>';
                        echo($b[$i]["Codigo_Postal"]);
                        echo '<br>';
                        echo($b[$i]["Tipo"]);
                        echo '<br>';
                        echo($b[$i]["Precio"]);
                        echo '<br>';
                        echo '<br>';
                        
                        //var_dump($c);
                        $i++;
                    };
                }
                ?>
            </div>
        </div>

        <script type="text/javascript" src="js/jquery-3.0.0.js"></script>
        <!-- #endregion  <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script> -->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/index2.js"></script>
    </body>
</body>

</html>