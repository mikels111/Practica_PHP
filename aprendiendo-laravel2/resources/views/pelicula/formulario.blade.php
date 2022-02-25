<h1>Formulario en laravel</h1>

<form action="{{action([App\Http\Controllers\PeliculaController::class,'recibir'])}}" method="POST">
    {{ csrf_field() }}
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
    </p>
    <p>
        <label for="email">Email</label>
        <input type="email" name="email">
    </p>
    <input type="submit" value="Enviar">
</form>