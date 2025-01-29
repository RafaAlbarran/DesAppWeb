//DATOS

const datos=[
    ["Mont Saint-Michel", "Un importante centro de peregrinaje en la Edad Media, situado en una posición privilegiada sobre un pequeño islote en la desembocadura del río Couesnon."],
    ["Paris", "La capital de Francia y una de las ciudades más románticas del mundo, es un destino perfecto para pasar unos días con amigos o en pareja disfrutando de largos paseos románticos por la orilla del Sena o por los barrios de Montmartre y Le Marais"],
    ["Carcasona", "En la región Languedoc-Rosellón y rodeada de viñedos se encuentra Carcasona (Carcassone en francés), un conjunto medieval declarado Patrimonio de la Humanidad,"],
    ["Midi-Pyrénées", "Una región situada en el sur de Francia, te llevará por hermosos paisajes de valles y bosques, antiguos castillos y pueblos mágicos que se reclinan suspendidos en las rocas."],
    ["Alsacia", "Ubicada en la zona noreste del país, cerca de la frontera con Alemania y Suiza, es a día de hoy una de las regiones más bonitas que ver en Francia, especialmente cuando se acerca la época navideña."],
    ["Castillos del Loira", "Te conducirá por los impresionantes Castillos de Loira, declarados Patrimonio de la Humanidad y situados cerca de la orilla del río del verde Valle del Loira."],
    ["Provenza", "Coloridos campos de lavanda, de un lila tan intenso que parecen estar sacados del cuadro de un pintor."],
    ["Costa Azul", "Es una de las costas más emblemáticas no sólo de Francia, si no del mundo, donde se dan cita cada año algunas de las celebrities más conocidas."]
];

let indiceActual=0; //para controlar en que posición del array estamos

function siguienteImagen(){
    //aumentar en 1 el indice
    indiceActual++;

    //llamar a la función mostrarImagen
    mostrarImagen(indiceActual);    
}

function anteriorImagen(){
    //restar 1 al indice
    indiceActual--;

    //llamar a la función mostrarImagen
    mostrarImagen(indiceActual);    
}

function imagenAleatoria(){    
    //genero un número aleatorio entre 0 y 8
    let indice=Math.floor(Math.random() * (8 - 0) ) + 0;
    console.log(indice);

    //actualizar la variable global indiceActual con el valor del número generado
    indiceActual=indice
    //llamar a la función mostrarImagen
    mostrarImagen(indice);     
}

function mostrarImagen(indice){
    //Comprobar si estamos en la primera imagen
    if(indice == 0){                
        //Ocultamos botón Anterior
        document.querySelector('#btnAnterior').style.display="none";
    } else {
        document.querySelector('#btnAnterior').style.display="inline";
    }

    //Comprobar si estamos en la última imagen
    if(indice == datos.length-1){
        //Ocultamos botón Siguiente
        document.querySelector('#btnSiguiente').style.display="none";
    } else {
        document.querySelector('#btnSiguiente').style.display="inline";
    }


    let imagen=`img/${datos[indice][0]}.jpg`;
    let nombre=datos[indice][0];
    let desc=datos[indice][1];
    
    //dibujamos
    document.querySelector("#imagenLugar").src=imagen;
    document.querySelector("#lugar").innerHTML=nombre;
    document.querySelector("#descripcion").innerHTML=desc;
}