<?php
$Ciudad = $_POST["ciudad"];
$Tipo = $_POST["tipo"];
$RangoPrecio = $_POST["precio"];
$separador = ";";
// Precios Array
// Valores Contenidos String

$Precios = explode($separador,$RangoPrecio);
// Conversión a Numeros
$PrecioMenor = intval($Precios[0]);
$PrecioMayor = intval($Precios[1]);

$data = file_get_contents("data-1.json");
//Propiedades es un array - string
$propiedades = json_decode($data, true);

//var_dump($propiedades);

$i = 0;

foreach ($propiedades as $propiedad) {
  //var_dump($b[$i]["Ciudad"]);
  //$c = array($b[$i]["Ciudad"]);
  
    $TipoPropiedad= $propiedades[$i]["Tipo"];
    $Ubicacion= $propiedades[$i]["Ciudad"];
    //String
    $cadenaPrecio = $propiedades[$i]["Precio"];
    $caracteres = array(",","$");
    //Se limpia las cadena de , y $
    $PrecioPropiedad= str_replace($caracteres,'',$cadenaPrecio);
    //Se convierte en número
    $PrecioPropiedadNum = intval($PrecioPropiedad);
    //var_dump ($Ciudad);
    //var_dump ($Tipo);
    //var_dump($PrecioPropiedad);
   //var_dump($PrecioPropiedadNum);

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