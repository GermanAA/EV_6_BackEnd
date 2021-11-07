<?php


function getListasRep()
{
  $parametro = "Ciudad";
  $data = file_get_contents("../data-1.json");
  $products = json_decode($data, true);

  function unique_multidim_array($array, $key)
  {
    $temp_array = array();
    $i = 0;
    $key_array = array();

    foreach ($array as $val) {
      if (!in_array($val[$key], $key_array)) {
        $key_array[$i] = $val[$key];
        $temp_array[$i] = $val;
      }

      $i++;
    }
    return $temp_array;
  }

  $details = unique_multidim_array($products, $parametro);


  $b = array_values($details);

  $i = 0;

  $listas = '<option value="0">Elige una Ciudad </option>';


  foreach ($b as $bb) {
    //var_dump($b[$i]["Ciudad"]);
    //$c = array($b[$i]["Ciudad"]);
      $c= $b[$i]["Ciudad"];
    //var_dump($c);
    $listas .= "<option value='$c'>$c</option>";
    $i++;
  };



  return $listas;
};

echo getListasRep();
