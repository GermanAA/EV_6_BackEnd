<?php
$parametro = "Ciudad";
$data = file_get_contents("data-1.json");
$products = json_decode($data, true);

//echo gettype($products);

var_dump ($products);

echo '<pre>';
echo '<pre>';

foreach ($products as $product) {
    echo '<pre>';
    print_r($product);
    echo $product[$parametro];
    //array_unique($product[$parametro]);

    echo '<pre>';
    echo gettype ($product[$parametro]);

    echo '</pre>';
}

echo ("Función --------------------------------------------------------------------------------------------") ;

function unique_multidim_array($array, $key) {
    $temp_array = array();
    $i = 0;
    $key_array = array();
   
    foreach($array as $val) {
        if (!in_array($val[$key], $key_array)) {
            $key_array[$i] = $val[$key];
            $temp_array[$i] = $val;
        }
        $i++;
    }
    return $temp_array;
}

$details = unique_multidim_array($products,'Ciudad');


//

echo ("Print R---------------------------------------------------------") ;

print_r ($details);

echo ("Tipo details---------------------------\n") ;

//echo gettype ($details);


var_dump($details[4]["Ciudad"]);

echo ("Tipo details---------------------------\n") ;

$b = array_values($details);

$i =0;

foreach ($b as $bb){
    //var_dump($b[$i]["Ciudad"]);
    $c=array($b[$i]["Ciudad"]);
    var_dump($c);
    $i++;
};




?>
