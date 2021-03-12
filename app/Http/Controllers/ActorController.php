<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Models\Actor;
use App\Models\Models\Pelicula;

class ActorController extends Controller
{
    public function storea(Request $request){ 
        Pelicula::$fallo = false;

        $this->validate(request(), [
            "nombre"=>"required",
            "opinion"=>"required"]);
            
        Actor::create($request->all());         
        return back();   
    }

    public function index()
    {
        return view('trabajadores.actores');
    }

    public function showa(){
        
        $actores=Actor::all();
        return view('trabajadores.showa') -> with('actores',$actores);
    }

    public function destroy($id){ 
        if (request()->isMethod("DELETE")){
             try{ 
                 $actor = Actor::findOrFail($id);
                 $actor->delete();
                 return redirect(route("trabajadores.showa"));   
                } 
                
            catch (Exception $ex){
                dd($ex);       
            }  
            
        }      
    }
}
