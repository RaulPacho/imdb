    @extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md- 8">
                <div class="card">
                <div class="card-header">Directores</div> 
                <table class='table'>
        
                    @if($directores->count())
                        <thead>
                            <tr>
                            @if (auth()->check())
                                <th>Id</th>
                            @endif
                                <th>Nombre</th>
                                <th>País</th>
                            </tr>
                        </thead>
                    @endif
                    <tbody>
                        @foreach ($directores as $director)
                        
                            <tr>
                            @if (auth()->check())
                            <td>{{$director->id}}</td>
                            @endif
                                <td>{{$director->nombre}}</td>
                                <td>{{$director->pais}}</td>
                                @if (auth()->check())
                                    @if (auth()->user()->rol==0)
                                    <td>
                                        <form method="POST" action="{{route('destroy',['id'=>$director->id])}}">
                                            @method ("DELETE")                                    
                                            @csrf                                    
                                            <button type="submit" class="btn btn-danger">Eliminar director</button>      
                                        </form>        
                                    </td>
                                    @endif              
                                @endif              
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if (auth()->check())
                <div class="card-footer"><a href ="{{route('trabajadores.stored')}}">Añadir director</a></div> 
                @endif
                </div>
            </div>
        </div>
    </div>
    @endsection