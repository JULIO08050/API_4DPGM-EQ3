<?php
//AGREGAMOS NUESTROS OBJETOS EN ESTE CASO SON CARROS
//primer carro
$carro1=[
  "marca"=>"toyota",
  "modelo"=>"corolla_2000",
"color_de_pintura"=>"gris_metalico",
"motor"=>1.8,
"capacidad_combustible"=> 13.2,
  "Velocidad"=>"225KM/H",
  "10 velocidades"=true,
  "llantas"=>"215/50",
  "caballos de fuerza"=>125,
"5 asientos"=>true,
  "puertas"=> 4,
  "precio"=>400000,
"peso"=>1055,
"urbano"=>"9,1 l/100 km",
"extraurbano"=>"5,9 l/100 km"
"longitud"=>"4.315 mm",
"anchura"=>"1.690 mm",
"4 cilindros"=>true,




];  
//SEGUNDO CARRO
$carro2=[

"marca"=>"jeep",
"modelo"=>"WRANGLER_Rubicon_2024",
"color_de_pintura"=>"negro_mate",
"Potencia"=>"285/6400 hp/rpm",
"Cilindros"=>"6_en_V",
"Válvulas"=>"24",
"Rendimiento_en_ciudad"=>"6.6km/l",
"Rendimiento_en_ruta"=>"10.4km/l",
"Rendimiento_mixto"=>"7.9km/l",
"Motor-Tracción"=>"delantero-integral",
"Transmisión"=>"automática_8_velocidades",
"Neumáticos"=>"255/75/R17",
"Suspensión_delantera"=>"Eje_rígido_con_resortes_helicoidales,brazos_paralelos,barra_estabilizadora_y_amortiguadores_de_trabajo_pesado",
"Dirección_asistida"=>"electro-hidráulica",
"Largo"=>"4237mm", 
"Ancho_sin_espejos"=>"1875mm",
"Alto"=>"1868mm",
"Distancia_entre_ejes"=>"2460mm",
"Peso"=>"1794kg",
"Tanque_de_combustible"=>"66L",  
"Capacidad_de_carga"=>"454kg",
];


//carro3 
  $carro3=[
"Fabricante"=>"Mazda"
"Modelo"=>"RX8"
"Año_de_fabricación"=>"2002"
"Tipo_de_carrocería"=>"Coupé_de_4puertas"
"Precio_mínimo_actual"=>"5,999_Dólares"
"Ubicación_del_motor"=>"Central_delantero_longitudinal"
"Tracción"=>"Trasera"
"Motores"=>"1.3_L_RENESIS
"Tipo_de_motor"=>"Rotativo_Wankel"
"Velocidad_Máxima"=>"255_km/h"
"Número_de_cilindros"=>"Rotor_y_estator"
"Número_de_puertas"=>"4"
"Número_de_asientos"=>"4"
"País_de_origen"=>"Japón"
"Peso_del_vehículo"=>"1420_kg"
"Combustible"=>"



$carros=[
$carro1,
  $carro2,
  $carro3];

echo_json_encode($carros);
