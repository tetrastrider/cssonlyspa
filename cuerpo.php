<div class='fix'>
<?php include('clase/control.php');
 $total=$control->paginacion($limit,$buscar,$categoria);
$from=(($pagina * $limit)- $limit);$data=$control->noticias($from,$limit,$orden,$buscar,$categoria,$id);
foreach($data as $data){?>
     
<section><a href="?id=<?=$data["id"];?>#simple"title="leer mas">         
<figure class='cap-bot'>
<img src='<?=$data["foto"];?>' class="imagen"/>
<figcaption>
		<h2 titulo='<?=$data["titulo"];?>'><?=$data["titulo"];?></h2>
		<div class="descr"><?= strip_tags($control->leermas($data["contenido"],450));?></div>
		<div class="inline">
        <p><i class="fa fa-calendar"></i> <?=$data["publicado"];?> <span class=autor><i class="fa fa-user"></i> <?=$data["user"];?></span></p>
        
        <p><i class="fa fa-eye"></i> <?=$data["visitas"];?> <span class=autor><i class="fa fa-comments"></i> <?php $cont=$control->comentariocont($data["id"]);?></span> <i class="fa fa-tags"></i> <?=$data["categoria"];?></p>

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