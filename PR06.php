<style>
table, th, td {
  border:1px solid black;
}
</style>
<?php
   /* $matriz = array();
    $matriz2 = array();
    $equiposLocales = array("Zamora", "Valladolid", "Avila", "Salamanca");
    $equiposVisitantes = array("Zamora", "Valladolid", "Avila", "Salamanca");
    for($i = 0; $i < count($equiposLocales); $i++){
        for ($e=0; $e < count($equiposLocales); $e++) {
            $matriz2[$equiposVisitantes[$e]] = "hola";
        }
        $matriz[$equiposLocales[$i]] = $matriz2;
    }
    echo "<pre>";
    print_r($matriz);
    echo "</pre>";
*/

    //
    //
    //

    $arrayequipos = array();
    $array = array(
        "Zamora" => array(
            "Valladolid"=> array(
                "Resultado"=>"2-2",
                "Rojas"=>1,
                "Amarillas"=>5,
                "Penaltis"=>1),
            "Salamanca" => array(
                "Resultado"=>"2-1",
                "Rojas"=>1,
                "Amarillas"=>1,
                "Penaltis"=>2),
            "Avila" => array(
                "Resultado"=>"3-1",
                "Rojas"=>0,
                "Amarillas"=>2,
                "Penaltis"=>0),
            ),
        "Valladolid" => array(
            "Zamora"=> array(
                "Resultado"=>"3-4",
                "Rojas"=>2,
                "Amarillas"=>7,
                "Penaltis"=>0),
            "Salamanca" => array(
                "Resultado"=>"1-1",
                "Rojas"=>2,
                "Amarillas"=>3,
                "Penaltis"=>1),
            "Avila" => array(
                "Resultado"=>"3-1",
                "Rojas"=>0,
                "Amarillas"=>8,
                "Penaltis"=>0),
            ),
        "Salamanca" => array(
            "Zamora"=> array(
                "Resultado"=>"0-0",
                "Rojas"=>1,
                "Amarillas"=>5,
                "Penaltis"=>0),
            "Valladolid"=> array(
                "Resultado"=>"6-1",
                "Rojas"=>0,
                "Amarillas"=>0,
                "Penaltis"=>3),
            "Avila" => array(
                "Resultado"=>"2-1",
                "Rojas"=>1,
                "Amarillas"=>1,
                "Penaltis"=>1),
            ),
        "Avila" => array(
            "Zamora"=> array(
                "Resultado"=>"1-4",
                "Rojas"=>1,
                "Amarillas"=>7,
                "Penaltis"=>1),
            "Valladolid"=> array(
                "Resultado"=>"3-3",
                "Rojas"=>2,
                "Amarillas"=>1,
                "Penaltis"=>1),
            "Salamanca" => array(
                "Resultado"=>"6-3",
                "Rojas"=>0,
                "Amarillas"=>4,
                "Penaltis"=>0),
            ),
    );
    echo "<table>";
    echo "<tr>";
    echo "<th>"."EQUIPOS"."</th>";
    foreach ($array as $key => $value) {
        array_push($arrayequipos, $key); 
        echo "<th>".$key."</th>";
    }
    
    echo "</tr>";
    foreach ($array as $key => $value){
        $contador=0;
        echo "<tr>";
            echo "<td>".$key."</td>";
                foreach ($value as $key2 => $value2) {
                    echo $arrayequipos[$contador]."".$key;
                    if ($arrayequipos[$contador]==$key) {
                        echo "<td></td>";
                }
                    echo "<td>";
                    print_r($value2);
                    echo "</td>";
                
                $contador = $contador+1;
            }
        echo "</tr>";        
    }
    echo "</table>";
    echo "<pre>";
    print_r($arrayequipos);
    echo "</pre>";
?>