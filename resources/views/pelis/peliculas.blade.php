@extends('layouts.app') 

@section('content') 
<div class="container">     
    <div class="row justify-content-center">         
        <div class="col-md-8">             
            <div class="card"> 
                <div class="card-header">Crear una nueva peli </div> 
                <div class="card-body">                     
                    <form method="POST" action="{{route('pelis.store')}}">  
                    @include("partials.errors")
                        @csrf                         
                        
                        <div class="form-group">                             
                                                       
                            <label for="titulo">Título</label>                             
                            <input type="text" class="form-control" name="titulo"/>   
                            <label for="dir_id">Id del director</label>                             
                            <input type="text" class="form-control" name="dir_id"/>
                            <label for="act_id">Id del prota</label>                             
                            <input type="text" class="form-control" name="act_id"/>                                   
                            <label for="desccripcion">Resumen</label>                             
                            <textarea class="form-control" name="descripcion"></textarea>   
                                         
                        </div>                         
                        <input type="submit" class="btn btn-block btn-dark" value="Añadir una peli">
                    </form>                 
                </div>             
            </div>         
        </div>     
    </div> 
</div> 
@endsection