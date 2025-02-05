<?php
echo 'Fichero de configuración';
// especifica si estamos en modo desarrollo
$debug=true;

//Array con elementos a utilizar
$menu =[
    // texto del link           //url del link                  //title                             //target (1 abre en nueva pestaña)  //class
    ['txt'=>'Home',             'lnk' =>'index.php',            'title'=>'Pagina de Inicio',        'tar'=>0,                               'cls'=>'cosa1'],
    ['txt'=>'La galaxia hoy',   'lnk' =>'blog.php',             'title'=>'Blog',                    'tar'=>0,                               'cls'=>'cosa1'],
    ['txt'=>'Nosotros',         'lnk' =>'nosotros.php',         'title'=>'Sobre nosotros',          'tar'=>0,                               'cls'=>'cosa1'],
    ['txt'=>'Calendario',       'lnk' =>'calendario.php',       'title'=>'Calendario astronómico',  'tar'=>0,                               'cls'=>'cosa1'],
    ['txt'=>'Facebook',         'lnk' =>'https://facebook.com', 'title'=>'Pagina de Facebook',      'tar'=>1,                               'cls'=>'mifacebook'],
    ['txt'=>'Contacto',         'lnk' =>'contacto.php',         'title'=>'Pagina de Contacto',      'tar'=>0,                               'cls'=>'cosa1']
];

//config y datos de la web generales
$datos = [
    // Configuración general
    'tituloSite'      => 'AstraLavista',
    'descripcion'     => 'Grupo de astrónomos entusiastas en Asturias, explorando el cosmos desde la tierra.',
    'lang'           => 'es',
    'autor'          => 'Miguel Esteban Corporation International',
    'charset'        => 'UTF-8',
    'timezone'       => 'Europe/Madrid',

    // Rutas de archivos y directorios
    'baseURL'        => 'https://www.astralavista.com/',
    'imgFolder'      => 'assets/img/',

    // Metaetiquetas para SEO
    'metaKeywords'   => 'astronomía, astrofotografía, planetas, cosmos, telescopios, observaciones',
    'metaDescription'=> 'AstraLavista',
    // Redes sociales
    'socials' => [
        'facebook'  => 'https://facebook.com/AstraLavistaAsturias',
        'twitter'   => 'https://twitter.com/AstraLavista',
        'instagram' => 'https://instagram.com/AstraLavistaAsturias',
        'youtube'   => 'https://youtube.com/AstraLavista',
        'tiktok'    => 'https://tiktok.com/@AstraLavista'
    ],

    // Datos de contacto
    'contacto' => [
        'email'     => 'contacto@astralavista.com',
        'telefono'  => '+34 600 123 456',
        'direccion' => 'C/ Observatorio, 12, Oviedo, Asturias, España',
        'mapa'      => 'https://maps.google.com/?q=C%2F+Observatorio,+12+Oviedo+Asturias+España'
    ],

   
    // Parámetros visuales
    'logo'          => 'assets/img/logo.png',
    'logoFooter'    => 'assets/img/logo-footer.png',
    'favicon'       => 'assets/img/favicon.ico',

];

function constructorMenu(){
    global $menu; // para poder utilizar las variables fuera de la función

    echo 'Hola';
    
    echo "<nav> <ul>";
    //inicio del bucle
    //echo "<li><a href='COSA.PHP' class='COSA' title='DESCRIPCION DEL APARTADO' target='_blank'>COSA</a></li>";
    foreach($menu as $elemento){        
        // echo "<li><a href='{$elemento['Lkn']}' class='{$elemento['cls']}' title='{$elemento['title']}' target='_blank'>{$elemento['txt']}</a></li>";
        echo "<li><a href='{$elemento['lnk']}' class='{$elemento['cls']}' title='{$elemento['title']}'";        

        //comprobamos si tar es igual a 0 o a 1
        if($elemento['tar']){
            //si lo es escribe esto
            echo " target='_blank' ";
        }
        
        //seguimos
        echo ">{$elemento['txt']}</a></li>";
    }
    // fin del bucle
    echo "</ul> </nav>";

}

?>