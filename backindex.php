<?php include('clase/control.php');?>
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
<script type=text/javascript src='js/jquery.min.js'></script>
<link rel="stylesheet" href="./sintax/styles/pojoaque.css">
<script src="./sintax/highlight.pack.js"></script>
<script>
  hljs.configure({tabReplace: '    '});
  hljs.initHighlightingOnLoad();
  </script>    
<!-- <script src='js/todo.js'></script>    --> 
<script type=text/javascript src='js/app.js'></script>
</head>
<body>
<main>
<header>
<a href="#inicio"><div class="imglogo"><h1>OVERCLOCK . TECH</h1>
</div></a>
<nav>
	<a href="?#inicio"><div class="col linicio" title='inicio'><i class="fa fa-home"></i></div></a>
	<a href="?#acerca"><div class="col lacerca"title='Qu&iacute;enes Somos'><i class="fa fa-question-circle"></i></i></div></a>
	<a href="?#servicios"><div class="col lservicios" title='servicios'><i class="fa fa-wrench"></i></div></a>
	<a href="?#noticias"><div class="col lnoticias" title='noticias'><i class="fa fa-newspaper-o"></i></div></a>
	<a href="?#contacto"><div class="col lcontacto" title='contacto'><i class="fa fa-user"></i></div></a>
</nav>
    </header>
<article>
<div class="servicios">

<!--INICIO-->	
<div id="inicio" class="modal">
<!-- <div class="container">
<?php $data=$control->carrusel()?>
  <?php foreach($data as $data):?>
  <img class='photo'  src="<?=$data['baner'];?>" alt="<?=$data['titulo'];?>" />
<?php endforeach?>
</div> -->
<!---->
<!-- <div class="facebook">
    
    <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FDOMLOTERIA%3Ffref%3Dts&amp;width=1230&amp;height=285&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false" scrolling="no" frameborder="0" style="border:0;overflow:hidden;width:96%;height:285px" allowtransparency="true" class="fright">
    </iframe>
    
  </div> -->
<!---->
</div><!--INICIO-->
<!--acerca-->	
<div id="acerca" class="modal">
<div class='ofrecidos'>
<?php $acerca=$control->acerca();?>
<?php foreach($acerca as $acerca){?> <?=$acerca['acerca'];?> <?php }?></div>
</div><!--acerca-->

<!--servicios-->	
<div id="servicios" class="modal">
<div class='ofrecidos'>
<?php $servicio=$control->servicio();?>
<?php foreach($servicio as $servicio){?>
<?=$servicio['servicio'];?>
<?php }?>
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
		<div class="descr"><?= strip_tags($control->leermas($data["contenido"],450));?></div>
		<div class="inline">
        <p><i class="fa fa-calendar"></i> <?=$data["publicado"];?> <span class=autor><i class="fa fa-user"></i> <?=$data["user"];?></span></p>
        
        <p><i class="fa fa-eye"></i> <?=$data["visitas"];?> <span class=autor><i class="fa fa-comments"></i> <?php $cont=$control->comentariocont($data["id"]);?></span> <i class="fa fa-tags"></i> <?=$data["categoria"];?></p>

        <!--strip_tags($control->leermas($data["contenido"],450),$permit);-->
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
	<?php $simple=$control->noticias($from,$limit,$orden,$buscar,$categoria,$id);
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
	<div class='scont'><?= $simple["contenido"];?></div>
<?php } ?>
</div><!--simple-->
<!--contacto-->	
<div id="contacto" class="modal">
<div class='contactos'>
<iframe class="goframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/?ie=UTF8&amp;ll=18.455659,-69.93982&amp;spn=0.011907,0.021136&amp;t=m&amp;z=16&amp;output=embed"></iframe>
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
<h1>categorias</h1>
<ul class="categ">
<?php $datos=$control->categoria();
foreach($datos as $datos){?>
<li><a href="?categoria=<?=$datos["categoria"];?>#noticias"><p><i class="fa fa-tags"></i><?=$datos["categoria"];?></p></a></li>
        <?php }?>
<li><a href="?#noticias"><p><i class="fa fa-tags"></i> TODAS</p></a></li>
</ul>
</aside>
<!--fin-->
</div></article>
<footer><hr>
<h3>&copy; OVERCLOCKTECH 2014</h3>
 <p title="Dise&ntilde;o y Programac&iacute;on Todos los derechos reservados &copy; Alexander Brache inf 829-384-0994">Dise&ntilde;o y Programac&iacute;on Todos los derechos reservados &copy; Alexander Brache</p>
 <ul class="cont">
<li><i class="fa fa-home"></i> Sarasota # 40 Esq Higuemota</li>
<li><i class="fa fa-phone-square"></i> 809-535-0381 / 829-384-0994</li>
</ul>
 <ul class="social">
 	<h4><span style="color:#da823b">S&iacute;guenos</span> <span style="color:#777">en:</span></h4>
<div class="layer">
<li class="face"><a><i class="fa fa-facebook"></i></a></li>
<li class="twi"><a><i class="fa fa-twitter icono"></i></a></li>
<li class="gog"><a><i class="fa fa-google-plus"></i></a></li>
<li class="cor"><a><i class="fa fa-youtube icono"></i></a></li>
</div>
</ul>
</footer>
<!--FIN FOOTER-->
<!--FIN TODO-->
</main>
</body>
</html>

