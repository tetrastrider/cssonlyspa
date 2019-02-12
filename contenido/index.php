<?php include('clase/control.php'); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<LINK REL="SHORTCUT ICON" HREF='imagenes/youtube.png'>
	<title>
      OVERCLOCKTECH
    </title>
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<link href="css/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet">
<script type='text/javascript' src='js/jq.js'></script>
<link rel="stylesheet" href="./sintax/styles/pojoaque.css">
<script src="./sintax/highlight.pack.js"></script>
<script>
  hljs.configure({tabReplace: '    '});
  hljs.initHighlightingOnLoad();
  </script>    
<script type='text/javascript' src='js/app.js'></script>
</head>
<body>
<main>
<header>
<a href="#noticias"><div class="imglogo"><h1>OVERCLOCK . TECH</h1>
</div></a>
<nav>
	<!-- <a href="?#inicio"><div class="col linicio" title='inicio'><i class="fa fa-home"></i></div></a> -->
	<a href="?#acerca"><div class="col lacerca"title='Qu&iacute;enes Somos'><i class="fa fa-question-circle"></i></i></div></a>
	<a href="?#servicios"><div class="col lservicios" title='servicios'><i class="fa fa-wrench"></i></div></a>
	<a href="?#noticias"><div class="col lnoticias" title='noticias'><i class="fa fa-newspaper-o"></i></div></a>
	<a href="?#contacto"><div class="col lcontacto" title='contacto'><i class="fa fa-user"></i></div></a>
</nav>
    </header>
<article>
<div class="servicios">

<!--INICIO-->	
<!-- <div id="inicio" class="modal">

</div> --><!--INICIO-->
<!--acerca-->	
<div id="acerca" class="modal">
<div class='ofrecidos'>
<?php $acerca=$control->acerca();?>
<?php foreach($acerca as $acerca){?> <?=$acerca['acerca'];?> <?php }?></div>
</div><!--acerca-->

<!--servicios-->	
<div id="servicios" class="modal">
<div class='ofrecidos'>
<h4>FAQs</h4> <h5>¿Que es webmarket?</h5> <p>webmarket.do es un portal dedicada a la pubpcación de cualquier producto o servicio por medio de nuestros usuarios registrados.</p> <h5>¿Cuál es el costo por publicarme en webmarket?</h5> <p>Puedes registrarte y tener hasta 10 anuncios por 25 días totalmente GRATIS. Si deseas tener más anuncios y destacarlo puedes optar por uno de nuestros planes, puedes visitar nuestra sección de planes.</p> <h5>¿Como puedo Vender un producto en webmarket?</h5> <p>Vender un producto es webmarket.do es muy fácil solo debes registrarte. Después de registrado puedes crear tus anuncios.</p> <h5>¿Como puedo registrarme en webmarket?</h5> <p>Puedes registrarte en webmarket sin costo alguna dando cpc a la opción “Regístrate Ahora” si deseas aprender a cómo hacerlo vista nuestra sección de Tutoriales.</p> <h5>¿Como puedo crear mi usuario?</h5> <p>Para crear un usuario debes registrarte. Si deseas aprender a cómo hacerlo Vista nuestra sección de Tutoriales.</p> <h5>¿Cuál es el costo de pubpcar un anuncio</h5> <p>La pubpcación de un anuncio es totalmente GRATIS. Si deseas resaltar un anuncio debes actuapzar tus planes, para saber más puedes visitar nuestra sección de planes.</p> <h5>¿Como púbpco un anuncio?</h5> <p>Puedes pubpcar un anuncio en webmarket sin costo alguna dando cpc a la opción “Pubpcar un anuncio”. Primero debes estar registrado y logeado al site. Si deseas aprender a cómo hacerlo vista nuestra sección de Tutoriales.</p> <h5>¿Como puedo comprar un producto?</h5> <p>webmarket solo anuncia productos de los usuarios registrados en el portal, para comprar un producto debes comunicarte directamente con la persona que pubpcó el anuncio.</p> <h5>¿webmarket.do vende productos?</h5> <p>No webmarket.do no vende NINGUNO de los productos anunciados en la pagina solo somos un portal de clasificados. Para comprar un producto anunciado en la página debes comunicarte directamente con la persona que pubpcó el anuncio.</p> <h5>¿webmarket es responsable de las transacciones reapzadas en la pagina?</h5> <p>No webmarket.do no es responsable ni es intermediario de las transacciones comerciales que se hagan por medio de los usuarios de la página.</p> <h5>¿Si fui estafado por medio de la pagina que puedo hacer?</h5> <p>Si fuiste estafado por medio de la página debe comunicarse con las autoridades correspondientes que en este caso es el DICAT (Departamento de Investigación de Crímenes y Deptos de Alta Tecnología.) -- Este es el departamento pertinente que le permitirá manejar estos inconvenientes en cooperación con webmarket.do.</p> <h5>¿Puedo comprar artículos a extranjero?</h5> <p>No es recomendable comprar artículos a extranjeras debido a su dudosa procedencia. Exhortamos NO hacer ningún envió de dinero a estos usuarios ya que pueden ser usuarios fraudulentos.</p> <h5> ¿Como puedo reportar un anuncio?</h5> <p>Para reportar un anuncio por su contenido o cualquier motivo que usted considere solo debe presión la opción “Reportar Anuncio” esta opción aparece en el lado derecho de cada anuncio. webmarket agradece tus reportes.</p> <h5>¿Como puedo encontrar un anuncio borrado?</h5> <p>Los anuncios borrados NO pueden ser recuperados a menos que sea a favor de una investigación sopcitada por las autoridades correspondientes. Para poder obtener esta información debe de sopcitada formalmente.</p> <h5>¿Como puedo recuperar mi contraseña?</h5> <p>Para recuperar tú clave primero debes acceder a la opción “Olvidaste tu Contraseña” luego debes escribir tú Email o Usuario, después de proporcionar esta información debes hacer cpc en el botón Recuperar. De esta manera te enviaremos un email de confirmación, este te llegara al correo que está definido en tú perfil.</p> <h5>¿Como puedo anunciarme en las posiciones Premium?</h5> <p>Para anunciarte en las posiciones premios debes comunicarte con nosotros para confirma la disponibipdad de las mismas al 809-381-2306 ext. 122.</p> <h5>¿Como puedo tener más anuncios?</h5> <p>Para tener más anuncios debes actuapzar tu plan, dependiendo del plan que tengas mas anuncios y más propiedades tendrás a la hora de hacer tus pubpcaciones. Si deseas conocer nuestros planes visita nuestra sección de planes.</p> <h5>¿Como puedo tener anuncios resaltados en amarillo?</h5> <p>Para tener anuncios resaltados en amarillo debes cambiar de plan, dependiendo del plan que tengas mas anuncios y más propiedades tendrás a la hora de hacer tu pubpcidad. Si deseas conocer nuestros planes visita nuestra sección de planes.</p> <h5>¿Como puedo resaltar mis anuncios con imágenes?</h5> <p>Para tener anuncios resaltados con imágenes debes cambiar de plan, dependiendo del plan que tengas mas anuncios y más propiedades tendrás a la hora de hacer tu pubpcidad. Si deseas conocer nuestros planes visita nuestra sección de planes.</p> <h5>¿Como borrar un anuncio?</h5> <p>Para borrar un anuncio debes primeramente estar logeado en el site, luego ir a la opción “Mis Anuncios” aquí podrás seleccionar el anuncio o los anuncios que deseas borrar y debes marcar la X roja de este.</p> <h5>¿Como editar un anuncio?</h5> <p>Para editar un anuncio debes primeramente estar logeado en el site, luego ir a la opción “Mis Anuncios” aquí podrás seleccionar el anuncio que deseas editar y debes marcar el lápiz que indica Editar. Luego esta opción te enviara al contenido del el anuncio donde podrás editar las informaciones generales del mismo.</p> <h5>¿Como puedo reiniciar la fecha de mis anuncios para que este en la primera fila?</h5> <p>Para reiniciar la fecha de tus anuncios debes primeramente ser usuario VIP. Si deseas conocer nuestros planes visita nuestra sección de planes. Si ya eres usuario VIP solo debes seleccionar los anuncios que deseas reiniciar y seleccionar la opción “Reiniciar Fecha”.</p> <h5>¿Porque no se activado mi cuenta aun?</h5> <p>Si no se ha activado tu cuenta aun debes confirma que ya hayas recibido el Email de confirmación y hayas dado cpc en el pnk de activación de la cuenta.</p> <h5>¿Porque no me llega mi correado de activación?</h5> <p>Si tu Email fue escrito correctamente al momento de crear tu usuario, el Email de activación te llegara, si no lo tienes en la “Bandeja de Entrada “puedes verificarlo en la carpeta de “Correos No Deseados”</p> <h5>¿Como puedo modificar mis datos de contacto?</h5> <p>Si deseas modificar tus datos de usuario debes primeramente estar logeado en el site, luego ir a la opción “Perfil,” aquí tendrás las opción de modificar tus datos personales y tu fotografía.</p> <h5>¿Puedo cambiar mi nombre de usuario?</h5> <p>No, por motivos de seguridad los usuarios son únicos y no pueden ser cambiados.</p> <h5>¿Puedo compartir mis anuncios con Facebook y/o Twitter?</h5> <p>Si, puedes compartir tus anuncios con Facebook y Twitter, para esto solo debes ir al anuncio que deseas compartir y a la derecha tendrás las opciones para “Compartir”</p> <h5>¿Como puedo comunicarme con un usuario de la pagina?</h5> <p>Puedes contactarlo a los número de contacto que a pubpcado en el anuncio o por medio del mismo anuncio del usuario con la opción “Enviar Mensaje a Este Vendedor”.</p> <h5>¿Como puedo obtener el IMEI de mi celuar?</h5> <p>Marcando *#06# desde tu celular.</p> </p>
</div>
</div><!--servicios-->
<!--noticias-->	
<div id="noticias" class="modal">
	<!---->
	<form  name="orden" method="get" class='limite'>
 
<input type="hidden" name="pagina" value="<?=$pagina?>"/>
<input type="hidden" name="url" value="cuerpo.php"/>
<label class="m custom-select">

<select onChange="from()" name="limit">

<option <?= $si;?>value=12>12</option>
<option <?= $si2;?> value=16>16</option>
<option <?= $si3;?> value=20>20</option>
<option <?= $si4;?> value=24>24</option>
<option <?= $si5;?> value=28>28</option>
<option <?= $si6;?> value=33>33</option>

</select>
</label>

<label class="n custom-select">
<select onChange="from()" name="cambio">
<option <?= $ok;?>value=1>Publicaciones Anteriores</option>
<option <?= $ok1;?> value=2>Publicaciones Nuevas</option>
</select>

</label>
<label class="n custom-select">
<select onChange="from()" name="categoria">
	<option value=''>TODAS</option>
	<?php $datos=$control->categoria();
foreach($datos as $datos){?>
<option <?= $ok;?>value='<?=$datos["categoria"];?>'><?=$datos["categoria"];?></option>
 <?php } ?>
</select>

</label>
</form>
	<!---->
<div class='fix'>
<?php $total=$control->paginacion($limit,$buscar,$categoria);
$from=(($pagina * $limit)- $limit);$data=$control->noticias($from,$limit,$orden,$buscar,$categoria,$id);
foreach($data as $data){?>
      
<section><a href="?id=<?=$data["id"];?>#simple"title="leer mas">        
<figure class='cap-bot'>
<img src='<?=$data["foto"];?>' class="imagen"/>
<figcaption>
		<h6 titulo='<?=$data["titulo"];?>'><?=$data["titulo"];?></h6>
		<div class="descr"><?= control::sanar($control->leermas($data["contenido"],450));?></div>
		<div class="inline">
        <p><i class="fa fa-calendar"></i> <?=$data["publicado"];?> <span class=autor><i class="fa fa-user"></i> <?=$data["user"];?></span></p>
        
        <p><i class="fa fa-eye"></i> <?=$data["visitas"];?> <span class=autor><i class="fa fa-comments"></i> 
        	<?php $cont=$control->comentariocont($data["id"]);?></span> <i class="fa fa-tags"></i> <?=$data["categoria"];?></p>

      <div class="divi">
   </div>
	</figcaption>
</figure></a>

</section>
       
      <?php }?>
       <!---->
        <div class='paginador'>
<ul class='pagina'>
<?php if($pagina==1){?>
<li class='boton no'><a>Inicio</a></li>
<?php }else{?>
<li class='boton'><a href="?pagina=1&orden=<?=$orden?>&limite=<?=$limit?>&categoria=<?=$categoria?>#noticias">Inicio</a></li>
<?php }?>  
<?php if($pagina==1){?>
<li class='boton no'><a>Anterior</a></li>
<?php }else{?>
 <li class='boton'><a href="?pagina=<?=$ant?>&orden=<?=$orden?>&limite=<?=$limit?>&categoria=<?=$categoria?>#noticias">Anterior</a></li>
<?php }?>
<li><a class='boton no'><?=$pagina?></a></li>
<?php if($pagina==$total){?>
<li class='boton no'><a>Siguiente</a></li>
<?php }else{?>
<li class='boton'><a href="?pagina=<?=$sig?>&orden=<?=$orden?>&limite=<?=$limit?>&categoria=<?=$categoria?>#noticias">Siguiente</a></li><?php }?>
<?php if($pagina==$total){?>
<li class='boton no'><a>Fin</a></li>
<?php }else{?>
<li class='boton'><a href="?pagina=<?=$total?>&orden=<?=$orden?>&limite=<?=$limit?>&categoria=<?=$categoria?>#noticias">Fin</a></li><?php }?></ul></div>
<!---->
  </div>
      <!--fin-->
</div><!--noticias-->
<!--simple-->	
<div id="simple" class="modal">
	<div class='ofrecidos'>
	<?php $simple=$control->simple($id);
	foreach($simple as $simple){ ?>
	<div class="centro">
	<img src='<?= $simple['foto'];?>' class="fotosim"/>
	<div class="infor">
		<h2><?= $simple['titulo'];?></h2>
	<p><i class="fa fa-calendar"></i> <?=$simple["publicado"];?></p>
	<p class=autor><i class="fa fa-user"></i> <?=$simple["user"];?></p>
        
<p><i class="fa fa-eye"></i> <?=$simple["visitas"];?></p>
<p><i class="fa fa-tags"></i> <?=$simple["categoria"];?></p>
<p class=autor><i class="fa fa-comments"></i> <?php $cont=$control->comentariocont($simple["id"]);?></p>
        <a class='boton' href='?#noticias'>ATRAS</a>
    </div>
</div>
	<div class='scont'><?= control::sanar($simple["contenido"]);?></div>
<?php } ?></div>
</div><!--simple-->
<!--contacto-->	
<div id="contacto" class="modal">
<div class='ofrecidos'>

	<div class="span">
	<h2>Imformaci&oacute;n de Cont&aacute;cto</h2>
	<h6>Sarasota # 40 Esq Higuemota Residencial Los Robles Apartamento 1 A 2.</h6>
<p>El edificio principal de la Lotería Nacional Dominicana está ubicado en la avenida Independencia, esquina José Jiménez Moya, La Feria, en Santo Domingo.<br>
</p>
<address>
<b>OverclockTech.<br>
Sarasota # 40 Esq Higuemota,<br>
Residencial Los Robles.</b><br>
<i class="fa fa-phone-square"></i> Telefono: +1 829-384-0994<br>
<i class="fa fa-print"></i> FAX: +1 809-535-0381<br>
<i class="fa fa-envelope"></i> E-mail: <a href="mailto:alexanderbrache@gmail.com">alexanderbrache@gmail.com</a><br>
<spa class="usuario"></spa>
Alexander Brache
</address>
	</div>
<div class="form">
<h2>Cont&aacute;ctenos</h2>
<div id="result"></div>
<input type="text" placeholder="Nombre:" name="name" id="name">
<input type="text" placeholder="E-mail:" name="email" id="email">
<input type="text" placeholder="Telefono:" name="phone" id="phone">
<textarea name="message" id="message" placeholder="Mensaje:"></textarea>
<input type="submit" id="submit_btn" class="csubmit" value="ENVIAR">
<input type="reset" Value="Borrar" id="borrar">
</div>
</div>
</div>
</div><!--contacto-->

</div>
<!--FIN SERVICIOS-->
<!--ASIDE-->
<aside>

<ul class="categ">
<?php $datos=$control->categoria();
foreach($datos as $datos){?>
<li><a href="?categoria=<?=$datos["categoria"];?>#noticias"><p><i class="fa fa-tags"></i><?=$datos["categoria"];?></p></a></li>
        <?php }?>
<li><a href="?#noticias"><p><i class="fa fa-tags"></i> todas</p></a></li>
</ul>
</aside>
<!--fin-->
</div></article>
<footer>
<ul class="social">
 	<h4><span style="color:#da823b">S&iacute;guenos</span> <span style="color:#fff">en:</span></h4>
<div class="layer">
<li class="face"><a><i class="fa fa-facebook"></i></a></li>
<li class="twi"><a><i class="fa fa-twitter icono"></i></a></li>
<li class="gog"><a><i class="fa fa-google-plus"></i></a></li>
<li class="cor"><a><i class="fa fa-youtube icono"></i></a></li>
</div>
</ul>	
<h3>&copy; OVERCLOCKTECH 2014</h3>
 <p title="Dise&ntilde;o y Programac&iacute;on Todos los derechos reservados &copy; Alexander Brache inf 829-384-0994">Dise&ntilde;o y Programac&iacute;on Todos los derechos reservados &copy; Alexander Brache</p>
 
 
</footer>
<!--FIN FOOTER-->
<!--FIN TODO-->
</main>
</body>
</html>