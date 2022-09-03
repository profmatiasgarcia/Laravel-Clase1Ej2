{{-- Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3. 
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/- --}}

<!DOCTYPE html>
<html>
	<head>
		<title>@yield('titulo')</title>
	</head>
	<body>
		<nav>
			<ul style="border: 1px solid blue; width: 100px">
				<li><a href="inicio">Inicio</a></li>
				<li><a href="acerca_de">Acerca de</a></li>
				<li><a href="productos">Productos</a></li>
				<li><a href="contacto">Contacto</a></li>
			</ul>
		</nav>
		@yield('contenido')
	</body>
</html>