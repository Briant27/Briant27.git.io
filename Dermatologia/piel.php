<!DOCTYPE html>
<html lan="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Inicio </title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<nav><a href="index.html">Inicio</a>
			
		</nav>
		<section class="textos-header">
			<h1>  "My Happy Dermatology"</h1>
			<h2> Ayudando al cuidando de tu piel </h2>
		</section>
		<div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>	
	</header>
<main>
<section class="contenedor sobre-nosotros">
	
     </section>
     <section class="portafolio">
     	<div class="contenedor">
        <h2 class="titulo">QUE TIPO DE PIEL TIENES:</h2>
        <div class="galeria-port">

         <?php
        
          if(isset($_REQUEST['radio2'])=="siempre" &&  ($_REQUEST['radio4'])=="siempre" && ( $_REQUEST['radio7'])=="nunca"){
                echo "Tienes la Piel grasa"."</br>"."</br>".

"La piel grasa se nota por su brillo y su tacto aceitoso. Además de poros dilatados, granitos y/o puntos negros especialmente en las aletas de la nariz, textura resbaladiza o áspera, mala pigmentación y sensibilidad en la piel. Debido a su excesiva acumulación de sebo en determinadas partes de la cara, es una piel con una alta tendencia acnéica. Este tipo de pieles requieren unos productos indicados ya que tienden a deshidratarse y descamarse con facilidad. Por ello, a la hora de escoger cremas, fluidos y demás debes tener en cuenta algunos factores: que tengan fórmulas que aporten agua; que no contengan aceites ni vaselinas y observar que el producto sea humectante. Para evitar la inflamación y la infección de la piel es importante no tocar los granos e imperfecciones del rostro, como tampoco tocar el rostro con las manos sucias. Se aconseja mantenerlas limpias antes de aplicar cualquier producto.". "</br>";

}
 else if(isset($_REQUEST['radio1'])=="Brillante" && ( ($_REQUEST['radio2'])=="T" || ($_REQUEST['radio2'])=="siempre") && ( ($_REQUEST['radio4'])=="siempre" || ($_REQUEST['radio4'])=="aveces")){
                echo "Tienes la Piel Mixta"."</br>"."</br>".

"La piel mixta, una de las que más cuidados requiere, presenta una zona grasa y otra seca. La zona grasa tiende a llamarse zona T (frente, nariz y barbilla) y suele lucir grasosa, con puntos negros, brillo y acné. De igual modo, la parte de las mejillas presenta sequedad y debajo de los ojos se forman líneas de expresión. Al combinar dos tipos de piel es necesario un cuidado especial que consiga hidratar y al mismo tiempo que no engrase. Por este motivo, es recomendable el uso de un jabón neutro ya que suele ser menos agresivo que aquellos que tienen perfume. En la zona T aplícalo con movimientos circulares para eliminar el exceso de grasa y de forma ligera en otras partes de la cara. Evita, también, el agua demasiado caliente ya que resecará la piel y producirá más sebo, además de perjudicar la barrera natural. Lo mejor, usar agua fría, templada o tibia.". "</br>";

}
else if(isset($_REQUEST['radio1'])=="Gruesa" && ( ($_REQUEST['radio5'])=="enocasiones" || ($_REQUEST['radio5'])=="siempre") && ( ($_REQUEST['radio7'])=="aveces" || ($_REQUEST['radio7'])=="casisiempre")){
                echo "Tienes la Piel Seca"."</br>"."</br>".

"La piel seca se identifica por estar quebradiza, tirante, áspera, los poros son pequeños y presenta arrugas y descamaciones. Es un tipo de piel incómoda y puede dar lugar a un envejecimiento prematuro. En la parte de la cara suele aparecer en las mejillas y alrededor de los ojos, aunque los labios suelen secarse de manera frecuente, sobre todo en invierno. En cuanto al resto del cuerpo, los pies y las espinillas son los primeros en notar la piel seca, ya que son zonas que poseen menos glándulas sebáceas y están más expuestas al entorno. No obstante, puede aparecer en cualquier lugar del cuerpo.". "</br>";

}

         ?>


</div>
    </div>    
 </section>
        <div class="clientes-contenedor">
        </br>
        <h2 class="titulo"> Que dicen nuestros usuarios</h2>	
        <div class="cards">
        	  <div class="card">
        	  	<img src="recursos/face1.png" alt="">
        	  	<div class="contenido-texto-card">
        	  <h4> Paulina Negrete </h4>
        	  <p>Muy buena pagina, conoci mi tipo de piel </p>
        	  </div>
        	  </div>

        	  <div class="card">
        	  	<img src="recursos/face2.png" alt="">
        	  	<div class="contenido-texto-card">
        	  <h4> Briant Gustavo </h4>
        	  <p> Gracias a este formulario supe mi tipo de piel y pude tratarme para que no se descuidara mi piel.</p>
        	  </div>
        	  </div>	
        	</div>
        </div>


        <footer>
                <p><small>© 23/03/2020 Gonzalez Rosales Briant Gustavo.</small>
                <small> Todos los derechos reservados. </small></p>
            </footer>
       
	</body>
</html>
