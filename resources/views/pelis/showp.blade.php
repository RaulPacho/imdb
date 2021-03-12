@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md- 8">
            <div class="card">
            <table class='table'>
    
                @if($datos[0]->count())
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Director</th>
                            <th>Actor</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                @endif
                <tbody>
                    @foreach ($datos[0] as $pelicula)
                    
                        <tr>
                        
                            <td>{{$pelicula->titulo}}</td>
                            @foreach($datos[1] as $d)
                                @if($d->id == $pelicula->dir_id)
                                    <td>{{$d->nombre}}</td>
                                @endif
                            @endforeach
                            @foreach($datos[2] as $a)
                                @if($a->id == $pelicula->act_id)
                                    <td>{{$a->nombre}}</td>
                                @endif
                            @endforeach
                            <td>{{$pelicula->descripcion}}</td>
                            @if (auth()->check())
                            <td>
                                <form method="POST" action="{{route('destroy',['id'=>$pelicula->id])}}">
                                    @method ("DELETE")                                    
                                    @csrf                                    
                                    <button type="submit" class="btn btn-danger">Eliminar peli</button>      
                                </form>        
                            </td>
                            @endif              
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (auth()->check())
            <div class="card-footer"><a href ="{{route('pelis.store')}}">Añadir pelicula</a></div> 
            @endif
            </div>
        </div>
    </div>
</div>
@endsection