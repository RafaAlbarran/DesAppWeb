<style>
		.n1, .n5{
			font-family: sans-serif;
		}
        .n2, .n4{
            font-family: Monospace;
            font-size: 20px;
        }		
		.n2{
			color:green;
		}

        .n3{
			color:orange;
            font-style: italic;
		}

        .n4{
            color: blue;
        }

        .n5{
			color:red;
		} 
        
</style>

<?php

$alumnos=[
	'Juan',
	'María',
	'Antonio',
	'Marta',
	'Carolina',
	'Carla',
	'Mateo'
];

$cursos=[
    'Desarrollo web',
    'Ciberseguridad',
    'Ïnglés',
    'Java',
    'Programación sistemas',
    'Plataformas ERP'
];

function asignar(){
    global $cursos; // importamos cursos dentro de la función

    $numCursos = count($cursos)-1; // nº elementos de array $cursos
    $numAleatorio = rand(0,$numCursos); // nº entre 0 y el max. elem. en $cursos  

    return $numAleatorio;
}

//recorremos el array de alumnos
for($i=0;$i<count($alumnos);$i++){

    $miTexto=$alumnos[$i].' está en el curso de '.$cursos[asignar()];
    echo '<li class="n'.rand(0,5).'">'.$miTexto.'</li>';	
}


?>