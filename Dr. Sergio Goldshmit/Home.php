<!-- AGREGAR TIENDA -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="css/Styles.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8">
</script>

<script type="text/javascript">
$(function(){
$('a[href*=\\#]').click(function() {
if (location.pathname.replace(/^\//,") == this.pathname.replace(/^\//,")
&& location.hostname == this.hostname) {
var $target = $(this.hash);
$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
if ($target.length) {
var targetOffset = $target.offset().top;
$('html,body').animate({scrollTop: targetOffset}, 1000);
}
}
});
});
</script>

<script>
function mostrar(id) {
  obj = document.getElementById(id);
  obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
}
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  </head>
  <body>

    <header>
  <div class="contenedor">

<a href="Home.php" class="volvertit" style="color: black">  <h1 class="titulo"> Dr. Sergio Goldshmidt </h1> </a>
  <nav>
<a href="#" class="navicono"> <span class="ion-grid"></span> </a>
  <ul>
   <li><a href="#quiensoy"  onMouseover="this.style.color='gray'" onMouseout="this.style.color='blue'" class="nav"> Quien Soy </a></li>
   <li><a href="#mqh"  onMouseover="this.style.color='gray'" onMouseout="this.style.color='blue'" class="nav"> Mi Querida Heladera </a></li>
   <li><a href="experiencias.html"  onMouseover="this.style.color='gray'" onMouseout="this.style.color='blue'" class="nav"> Experiencias </a></li>
   <li><a href="#contacto"  onMouseover="this.style.color='gray'" onMouseout="this.style.color='blue'" class="nav"> Contacto </a></li>
  </ul>

  <div class="redes">
    <a href="https://twitter.com/drsergiomqh"target="_blank"><span class="ion-social-twitter" style="color: #1DC4F9"></span></a>
    <a href="https://www.instagram.com/miquerida_heladera/?hl=es-la"target="_blank"><span class="ion-social-instagram" style="color: black"></span></a>
    <a href="https://www.youtube.com/channel/UCT7uQuPqrhjK_BxEg1xM9pg"target="_blank"><span class="ion-social-youtube" style="color: red"></span></a>
    <a href="https://www.facebook.com/miqueridaheladera/"target="_blank"><span class="ion-social-facebook" style="color: blue" ></span></a>
  </div>

  </nav>

</div> <br>
  </header>
<div class="separador">

</div>

<div class="cuerpo" id="quiensoy">

<img src="images/FotoSergio.jpg" alt="" width="30%"> <br><br><br><br><br><br><br><br><br><br><br>
 <strong>
<i class="texto1">
  Acerca del Dr. Sergio Goldshmidt:
  </i>
  <br><br><br>
  </strong>

<i class="texto2">Médico Clínico egresado de la Universidad de Buenos Aires (UBA), Comenzó su carrera haciendo Ginecologia y Obstetricia hasta que tomó real conciencia que le apasionaban los tratamientos mas holisticos y naturales, es asi  que  se convirtió a lo largo de los años en un experto y referente  en psicología nutricional, alimentación saludable  y sobrepeso,  Autor del libro "Mi Querida Heladera". <br> Tambien es  Naturista, Ayurveda y Fito terapeuta, Libre pensador como el se autodenomina,   investigador en regeneración celular y energía humana,   Creador del Sistema de “Recodificación”.
</i>
<br><br><br><br><br><br>
    <a href="Home.php" class="arriba" style="margin: 10px 3px 3px 0 "> <i class="fa fa-home"></i> Ir Arriba </a>
</div>
<br>
<div class="separador2">

</div>

<div class="cuerpo2" id="mqh">
<center>
  <br><br><br><br>
<img class="mqhimg" src="images/miqueridaheladera.png" alt="">

 <br><br><br><br><br><br><br>
 <strong>
<i class="titulito">
  "Mi Querida Heladera"
  </i>
  </center>
  <br><br>
  </strong>

  <!-- <a href="#" onclick="mostrar('divTexto1'); return false" />Hago clic aca y se ve u oculta UNO</a>
  <div id="divTexto1" style="visibility:hidden">
  UNO
  </div> -->

<p> Un libro que trabaja la psiconutrición y la adicción a la comida, no importando cual sea su grado, donde se genera  una alerta  sobre la  pandemia mas importante que enfrenta  la humanidad en la actualidad  y esta a las puertas de nuestros hogares. <br> LA OBESIDAD! <a href="#" onclick="mostrar('divTexto2'); return false" style="margin-left:10px" class="vermas"/>Ver Más</a>
<div id="divTexto2" style="visibility:hidden">
</p>
<img class="libroo" src="images/libro.jpeg" alt="">
  <p> <br>
Una enfermedad que no aparece en los epitafios pero que es  causante de mas de 8 enfermedades irreversibles  que si lo son y que hoy ocupan mas del 30% de la población mundial según datos de la OMS.
<br><br>
El espíritu de este Libro, no esta en enseñar mas dietas ni llenar de calorías la mente de quien lo padece, si no mas bien, encarar el trasfondo de esta adicción con humildad y experiencia, hurgando en su lado psicológico de forma diferente, entendible y sin golpes bajos.
<br><br>
Practico y simple, cuenta historias y casos claros donde se ve claramente que hay una salida! Desmitifica el “Gordos para siempre” y humaniza mas al individuo que lo padece, enseñando finalmente y con OJOS BIEN ABIERTOS como hacer frente a este gran flagelo.
</div>
</div>

<!-- <div class="cuerpo3">
<h1>Experiencias</h1>

<h2>Recodificación</h2>
<p></p>
<img src="" alt="">

<h2>Eventos</h2>
<video src="videofile.ogg" autoplay poster="posterimage.jpg">

</video>
</div> -->

<div class="cuerpo4" id="contacto" style="margin-bottom:50px;">
<h1>Deja aca tu Comentario:</h1><br>
<div class="fb-comments" data-href="http://localhost/php/Dr.%20Sergio%20Goldshmit/" data-width="100%" data-numposts="5"></div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
$(".navicono").click(function(){
  $("li").slideToggle("medium");
});
</script>

  </body>
</html>
