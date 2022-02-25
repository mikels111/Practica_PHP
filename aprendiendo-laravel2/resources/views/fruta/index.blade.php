<h1>Lista de frutas</h1>
@if (session('status'))
    <p style="background: lightgreen">
        {{session('status')}}
    </p>
    
@endif
<h3><a href="{{action([App\Http\Controllers\FrutaController::class, 'create'])}}">Crear Fruta</a></h3>
<ul>
    @foreach ($frutas as $fruta)
        <li>
            <a href="{{action([App\Http\Controllers\FrutaController::class, 'detalle'],['fruta'=>$fruta->id])}}">
                {{$fruta->nombre}}
            </a>
        </li>
    @endforeach
</ul>