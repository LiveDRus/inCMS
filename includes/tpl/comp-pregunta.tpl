<div class="cbb clearfix blue ">
<h2 class="title">Pregunta del dia</h2>


		<div class="habblet-container ">	
				<div class="cbb clearfix <?php echo $color; ?>">
					<div class="box-content">
				<p>
					<ul id="feed-items">
						<li id="feed-friends">	
                               

<?php

include("datos.php");
$conexion = mysql_connect("$host","$user","$pw");
mysql_select_db("xdrcms",$conexion);

?> 

                <link rel="stylesheet" type="text/css" href="index2.css">
                <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
       
               
<center style="font-family:verdana;font-size:12px"><b>Pregunta: </b><?php
$consulta = mysql_query("SELECT PREGUNTA FROM preguntas where ID = $id");  
while ($extraccion = mysql_fetch_array($consulta)){
        echo $extraccion['preguntas'];
        ?><br>
    <form action="procesar.php" method="post">
     
        <br /><b class="texto">Respuesta:</b>
   <p> <input type="text" name="respuesta" class="texto"></p><b class="texto">Tu user o el que deses
 
que se le agregen los coins </b><p>
    <input type="text" name="username" class="texto" /></p>
    <input type="submit" value="Responder" class="boton"><br>
    </form>
               
        </body>
</html>
               
    
	<?php
}
?>

	</div>



</div>	