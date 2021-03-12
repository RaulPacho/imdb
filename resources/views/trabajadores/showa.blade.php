@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md- 8">
            <div class="card">
            <div class="card-header">Actores</div> 
            <table class='table'>
    
                @if($actores->count())
                    <thead>
                        <tr>
                        @if (auth()->check())
                            <th>Id</th>
                        @endif
                            <th>Nombre</th>
                            <th>Crítica</th>
                        </tr>
                    </thead>
                @endif
                <tbody>
                    @foreach ($actores as $actor)
                    
                        <tr>
                        @if (auth()->check())
                        <td>{{$actor->id}}</td>
                        @endif
                            <td>{{$actor->nombre}}</td>
                            <td>{{$actor->opinion}}</td>
                            @if (auth()->check())
                                @if (auth()->user()->rol==0)
                                <td>
                                    <form method="POST" action="{{route('destroy',['id'=>$actor->id])}}">
                                        @method ("DELETE")                                    
                                        @csrf                                    
                                        <button type="submit" class="btn btn-danger">Eliminar actor</button>      
                                    </form>        
                                </td>
                                @endif              
                            @endif              
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (auth()->check())
            <div class="card-footer"><a href ="{{route('trabajadores.storea')}}">Añadir actor</a></div> 
            @endif
            </div>

        </div>
    </div>
</div>
@endsection