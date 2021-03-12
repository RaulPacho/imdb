<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Pelicula;
use App\Models\Models\Director;
use App\Models\Models\Actor;
use Exception;
class PeliculaController extends Controller
{

    public function __construct()
    {
        
    }
    public function store(Request $request){ 
        $this->validate(request(), [
            "titulo"=>"required",
            "dir_id"=>"numeric",
            "act_id"=>"numeric",
            "descripcion"=>"required"]);
            $peli = new Pelicula(); 
        try{        
        $actores= Actor::findOrFail($request->input('act_id'));
        }catch (Exception $ex){
            Pelicula::$fallo = true;
            return view('trabajadores.actores');      
        }  
        try{
        $director= Director::findOrFail($request->input('dir_id')); 
        }catch (Exception $ex){
            Pelicula::$fallo = true;
            return view('trabajadores.directores');      
        } 
        Pelicula::create($request->all());         
        return back();   
    }

    public function index()
    {
        return view('pelis.peliculas');
    }

    public function showp(){
        
        $peliculas=Pelicula::all();
        $dir = Director::all();
        $actor = Actor::all();
        $datos = [$peliculas,$dir,$actor];
        return view('pelis.showp') -> with('datos',$datos);
    }

    public function destroy($id){ 
        if (request()->isMethod("DELETE")){
             try{ 
                 $pelicula = Pelicula::findOrFail($id);
                 $pelicula->delete();
                 return redirect(route("pelis.showp"));   
                } 
                
            catch (Exception $ex){
                dd($ex);       
            }  
            
        }      
    }
}
