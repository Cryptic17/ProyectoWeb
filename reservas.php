<?php 

	$conexion=mysqli_connect('localhost','root','','login');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Los Santos Customs</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.html"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="index.html">inicio</a></li>
								<li><a href="inicioempleados.php">Menú empleados</a></li>
						    	

						    	
																
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  
	       </div>
	      </div>
		 </div>
	    </div>
	  </div>

<br>
<center>
	<br>
	<h1>RESERVAS TOTALES EFECTUADAS</h1>
	<br>
	<table border="1" style="width: 50%" name= >
		<tr>
			<td>AUTOMOVIL</td>
			<td>FECHA</td>
			<td>HORA</td>
				
		</tr>

		<?php 
		$sql="SELECT * from vehiculos_apartados";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['vehiculo'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
			<td><?php echo $mostrar['hora'] ?></td>
			
		</tr>
	<?php 
	}

	 ?>
	</table>
</center>                       
</body>
</html>