{{-- Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3. 
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/- --}}

@extends('layouts.principal')

@section('titulo', "Productos")

@section('contenido')

	<h1>Pagina Productos</h1>

	<ul>

		<?php foreach ($Productos as $ProductosItem) {
			echo "<li>" . $ProductosItem['title'] . "</li>";
		} ?>

		<?php foreach ($Productos as $ProductosItem): ?>
			<li>{{ $ProductosItem['title'] }}</li>
			<?php endforeach ?>

		<h3>Forma de hacerlo con Blade</h3>

		@if($Productos)
			@foreach ($Productos as $ProductosItem)
				<li>{{ $ProductosItem['title'] }}</li>
			@endforeach
		@else
			<li>No hay productos para mostrar</li>
		@endif

		<h3>Otra forma de hacerlo con Blade</h3>

		@forelse($Productos as $ProductosItem)
			<li>{{ $ProductosItem['title'] }}</li>
		@empty
			<li>No hay productos para mostrar</li>
		@endforelse

	</ul>

@endsection