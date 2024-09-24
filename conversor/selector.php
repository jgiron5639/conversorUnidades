<?php
ini_set('display_errors', 0);
error_reporting(0);


$select1 = '';
$selector1='';
$selector2='';
$resultadi='';

if(isset($_POST['convertir'])){
    $seleccion = $_POST['convertir'];

    if($seleccion == 'longitud'){
        $select1="<option value='milimetro'>Milimetro</option>
        <option value='centimetro'>Centimetro</option>
        <option value='metro'>Metro</option>
        <option value='kilometro'>Kilometro</option>";
    }elseif($seleccion == 'masa'){
        $select1="<option value='miligramo'>Miligramo</option>
        <option value='gramo'>Gramo</option>
        <option value='kilogramo'>Kilogramo</option>
        <option value='tonelada'>Tonelada</option>";
    }elseif($seleccion == 'temperatura'){
        $select1="<option value='celsius'>Celsius</option>
        <option value='fahrenheit'>Fahrenheit</option>
        <option value='kelvin'>Kelvin</option>";
    }elseif($seleccion == 'tiempo'){
        $select1="<option value='segundo'>Segundo</option>
        <option value='minuto'>Minuto</option>
        <option value='hora'>Hora</option>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $unidad1 = $_POST['selector1'];
    $unidad2 = $_POST['selector2'];
    $numero = $_POST['numero'];

    if (isset($numero) && is_numeric($numero) && $numero > 0){
        if($unidad1 === 'milimetro' && $unidad2 === 'centimetro'){$resultado = $numero / 10 .' Cm';
        }elseif($unidad1 === 'milimetro' && $unidad2 === 'metro'){$resultado = $numero / 1000 .' Mt';
        }elseif($unidad1 === 'milimetro' && $unidad2 === 'kilometro'){$resultado = $numero / 1e+6 .' Km';
        }elseif($unidad1 === 'centimetro' && $unidad2 === 'milimetro'){$resultado = $numero *10 .' mm';
        }elseif($unidad1 === 'centimetro' && $unidad2 === 'metro'){$resultado = $numero /100 .' Mt';
        }elseif($unidad1 === 'centimetro' && $unidad2 === 'kilometro'){$resultado = $numero /100000 .' Km';
        }elseif($unidad1 === 'metro' && $unidad2 === 'milimetro'){$resultado = $numero *1000 .' mm';
        }elseif($unidad1 === 'metro' && $unidad2 === 'centimetro'){$resultado = $numero *100 .' Cm';
        }elseif($unidad1 === 'metro' && $unidad2 === 'kilometro'){$resultado = $numero /1000 .' Km';
        }elseif($unidad1 === 'kilometro' && $unidad2 === 'milimetro'){$resultado = $numero *1e+6 .' mm';
        }elseif($unidad1 === 'kilometro' && $unidad2 === 'centimetro'){$resultado = $numero *100000 .' Cm';
        }elseif($unidad1 === 'kilometro' && $unidad2 === 'metro'){$resultado = $numero *1000 .' Mt';
        }elseif($unidad1 === 'miligramo' && $unidad2 === 'gramo'){$resultado = $numero /1000 .' gr';
        }elseif($unidad1 === 'miligramo' && $unidad2 === 'kilogramo'){$resultado = $numero /1e+6 .' Kg';
        }elseif($unidad1 === 'miligramo' && $unidad2 === 'tonelada'){$resultado = $numero /1e+9 .' t';
        }elseif($unidad1 === 'gramo' && $unidad2 === 'miligramo'){$resultado = $numero *1000 .' Mg';
        }elseif($unidad1 === 'gramo' && $unidad2 === 'kilogramo'){$resultado = $numero /1000 .' Kg';
        }elseif($unidad1 === 'gramo' && $unidad2 === 'tonelada'){$resultado = $numero /1e+6 .' t';
        }elseif($unidad1 === 'kilogramo' && $unidad2 === 'miligramo'){$resultado = $numero *1e+6 .' Mg';
        }elseif($unidad1 === 'kilogramo' && $unidad2 === 'gramo'){$resultado = $numero *1000 .' gr';
        }elseif($unidad1 === 'kilogramo' && $unidad2 === 'tonelada'){$resultado = $numero /1000 .' t';
        }elseif($unidad1 === 'tonelada' && $unidad2 === 'miligramo'){$resultado = $numero *1e+9 .' Mg';
        }elseif($unidad1 === 'tonelada' && $unidad2 === 'gramo'){$resultado = $numero *1e+6 .' gr';
        }elseif($unidad1 === 'tonelada' && $unidad2 === 'kilogramo'){$resultado = $numero *1000 .' Kg';
        }elseif($unidad1 === 'celsius' && $unidad2 === 'fahrenheit'){$resultado = ($numero *9/5)+32 .' °F';
        }elseif($unidad1 === 'celsius' && $unidad2 === 'kelvin'){$resultado = $numero +273.15 .' K';
        }elseif($unidad1 === 'fahrenheit' && $unidad2 === 'celsius'){$resultado = ($numero -32)*5/9 .' °C';
        }elseif($unidad1 === 'fahrenheit' && $unidad2 === 'kelvin'){$resultado = ($numero -32)*5/9+273.15 .' K';
        }elseif($unidad1 === 'kelvin' && $unidad2 === 'celsius'){$resultado = $numero -273.15 .' °C';
        }elseif($unidad1 === 'kelvin' && $unidad2 === 'fahrenheit'){$resultado = ($numero -273.15)*9/5+32 .' °F';
        }elseif($unidad1 === 'segundo' && $unidad2 === 'minuto'){$resultado = $numero /60 .' Min';
        }elseif($unidad1 === 'segundo' && $unidad2 === 'hora'){$resultado = $numero /3600 .' Hrs';
        }elseif($unidad1 === 'minuto' && $unidad2 === 'segundo'){$resultado = $numero *60 .' Seg';
        }elseif($unidad1 === 'minuto' && $unidad2 === 'hora'){$resultado = $numero /60 .' Hrs';
        }elseif($unidad1 === 'hora' && $unidad2 === 'segundo'){$resultado = $numero *3600 .' Seg';
        }elseif($unidad1 === 'hora' && $unidad2 === 'minuto'){$resultado = $numero *60 .' Min';}

        else{
            $resultado = 'Conversión no válida';
        }
    }else{
        $resultado = 'Por favor, ingrese un número válido';
    }
}
?>