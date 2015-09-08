<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PaginasController extends Controller {

	//

	public function acerca(){

		$nombre='Ivan';
		$people=[
			'Ivan','Churru','Guapo'
		];

		return view('paginas.acerca', compact('people'));
	}
	public function contacto(){

		
		return view('contacto');
	}
}
