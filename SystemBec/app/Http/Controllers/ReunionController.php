<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class ReunionController extends Controller
{
      /*Este constructor lo que hace es pasarme a espanol la fecha con carbon*/
    public function __construct(){
           Carbon::setLocale('es');
                                 }

    /*Sirve para la creacion de la reunion pantalla donde se crea con todos los campos*/
    public function create(){
    return view('templates.admin.liderazgo.reunion.agregar');
						                }

 
    /*Crea el taller*/                        
	public function store(Request $request){ 
    		   
	return redirect()->route('templates.admin.formacion.talleres.index');
							                             }

	/*Pagina donde se muestran todas las taller*/
	public function index(Request $request){
		       $carbon=Carbon::now();
       
	return view('templates.admin.formacion.talleres.index')->with('carbon',$carbon);
	                                          }

    /*Muestra todos los talleres que ya fueron desactivad0s*/                                        
	public function historial(Request $request){
		
	return view('templates.admin.actividades.historial')->with('actividades',$actividades);
	                                             }

    /*Guardo cambios en los talleres*/
  	public function update(Request $request, $id){

    return redirect()->route('Actividades.index');
                                                 }

    /*Edito los talleres*/                                             
    public function edit($id){
     	     
    return view('templates.admin.actividades.editar');
                             }

    /*Este metodo es de eliminar pero yo lo utilice para cambiar el estado de los talleres ('sin son desactivados o no')*/
    public function destroy($id){     	
           
    return redirect()->route('Actividades.index');

		}

    /*Perfil del taller*/
    public function perfil($id){

    return view("templates.admin.formacion.talleres.perfil");
    }

    /*Index de los becarios o el buscador*/
    public function index_becarios(Request $request){

    return view("templates.admin.formacion.becarios.index");
    }

    /*Perfil de los becarios*/
    public function perfil_becarios($id){
         $carbon=Carbon::now();
    return view("templates.admin.formacion.becarios.perfil")->with('carbon',$carbon);
    }  

}
