<?php
$Ciudad = $_POST["ciudad"];
$Tipo = $_POST["tipo"];
$RangoPrecio = $_POST["precio"];
//var_dump ($Ciudad);
//var_dump($Tipo);
//var_dump($RangoPrecio);

$data = file_get_contents("data-1.json");
$propiedades = json_decode($data, true);

var_dump($propiedades);

$i = 0;

foreach ($propiedades as $propiedad) {
  //var_dump($b[$i]["Ciudad"]);
  //$c = array($b[$i]["Ciudad"]);
  
    $TipoPropiedad= $propiedades[$i]["Tipo"];
    $Ubicacion= $propiedades[$i]["Ciudad"];
    //var_dump ($Ciudad);
    //var_dump ($Tipo);
    if ($Tipo == $TipoPropiedad and $Ciudad === "0"){
        //var_dump($c);
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
    }
    elseif($Ciudad == $Ubicacion and $Tipo === "0"){
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

    }

    elseif($Ciudad === $Ubicacion && $Tipo === $TipoPropiedad ){
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

  }

        
  //$listas .= "<option value='$c'>$c</option>";
  $i++;
};