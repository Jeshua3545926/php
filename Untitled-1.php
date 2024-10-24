<?php
echo "Hola Mundo ";
$F=[0,2,3,2];
$nombre = "ana";
function gola($nombre){
    return "nombre ".$nombre;
}
    echo gola($nombre). PHP_EOL;
    echo "ingrse su nombre"; 
    
    $input = trim(fgets(STDIN));
    echo "hola, $input" .PHP_EOL;
    if ($input == "Jeshua" || $input == " jeshua"){
        echo "hola, $input" .PHP_EOL;

        $colores = [
            "\033[31m",  //Rojo
            "\033[31m",  
            "\033[31m", 
            "\033[31m",  
            "\033[31m",
            "\033[31m" ,
        ];

        $estructura = [
        "Programaador: Senior",
        "Aprendizaje: 100%",
        "Programaador: Junior",
        "Aprendizaje: 20%",
        "Programaador: Semi Senior",
        "Aprendizaje: 40%",
        "Programaador: SQL (Base De Datos)",
        "Aprendizaje: 55%",
        "Programaador: Desarrollador Web",
        "Aprendizaje: 50%",
        "Programaador: Desarrollador De IA",
        "Aprendizaje: 100%",
        ];

foreach($estructura as $index => $linea){
$color = $colores[$index % count($colores)];
echo  $color . $linea . "\033[0m" . PHP_EOL;
}
echo $estructura[0];
}