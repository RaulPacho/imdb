<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Director;
use Exception;
use App\Models\Models\Pelicula;
class DirectorController extends Controller
{
    public function stored(Request $request){ 
        Pelicula::$fallo = false;
        $this->validate(request(), [
            "nombre"=>"required",
            "pais"=>"required"]);
            
        Director::create($request->all());         
        return back();   
    }

    public function index()
    {
        return view('trabajadores.directores');
    }

    public function showd(){
        
        $directores=Director::all();
        return view('trabajadores.showd') -> with('directores',$directores);
    }

    public function destroy($id){ 
        if (request()->isMethod("DELETE")){
             try{ 
                 $director = Director::findOrFail($id);
                 $director->delete();
                 return redirect(route("trabajadores.showd"));   
                } 
                
            catch (Exception $ex){
                dd($ex);       
            }  
            
        }      
    }
}
