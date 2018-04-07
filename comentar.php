<?php jhjhjhjhjh
$comentario=strip_tags($_POST['comentario']);
$usuario=strip_tags($_POST['usuario']);

if($comentario=="" or $usuario==""){	
echo "<script type='text/javascript'>alert('Llene los campos');window.location.href='index.php'</script>";
}else{

$grabar = fopen("comentarios.html","a");
	
fwrite($grabar,"<p><strong>$usuario</strong><br>$comentario</p>");

fclose($grabar);

include("index.php");
	
}
?>
