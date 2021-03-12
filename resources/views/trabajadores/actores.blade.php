@extends('layouts.app') 

@section('content') 
<div class="container">     
    <div class="row justify-content-center">  
    @if(App\Models\Models\Pelicula::$fallo) 
    <div class="alert alert-danger">
    <ul>
      
        <li>El actor no se encunetra en la base de datos</li>
    
    </ul>
    </div>
@endif       
        <div class="col-md-8">             
            <div class="card"> 
                <div class="card-header">Añadir un director </div> 
                <div class="card-body">                     
                    <form method="POST" action="{{route('trabajadores.storea')}}">  
                    @include("partials.errors")
                        @csrf                         
                        
                        <div class="form-group">        
                                             
                            <label for="nombre">Nombre del actor</label>                             
                            <input type="text" class="form-control" name="nombre"/>                             
                            <label for="opinion">Crítica</label>                             
                            <input type="text" class="form-control" name="opinion"/>   
                             
                        </div>                         
                        <input type="submit" class="btn btn-block btn-dark" value="Añadir al director">
                    </form>                 
                </div>             
            </div>         
        </div>     
    </div> 
</div> 
@endsection