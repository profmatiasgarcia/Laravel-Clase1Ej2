<?php
/*Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3.
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/-*/
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/', function () {
    return view('home', ['nombre' => 'Matias']);
}); */


/* Route::get('/', function () {
    return view('home')->with('nombre', 'Prof Matias')->with('edad', '41');
}); */


/* Route::get('/', function () {
	$viewhome = View::make('home2')->nest('content', 'partials.view1');
	return $viewhome;
    // return View::make('home2')->nest('content', 'partials.view1');
}); */

Route::get('ej1', function () {
    return view('ej1blade');
})->name('ej1');

Route::get('ej2', function () {
    return view('ej2blade');
})->name('ej2');

Route::get('inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('acerca_de', function () {
    return view('acerca_de');
});

Route::get('contacto', function () {
    return view('contacto');
});

$Productos = [
	['title' => 'Producto 1'],
	['title' => 'Producto 2'],
	['title' => 'Producto 3'],
	['title' => 'Producto 4'],

];

Route::view('/productos', 'productos', compact('Productos'));
