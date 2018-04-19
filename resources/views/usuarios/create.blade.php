@extends('layouts.default')
@section('content')
<h1>Crear usuario</h1>
<h1>Crear Usuario</h1>
<form id="frmCrearUsuario" action>
{{csr_field()}}
    <div class="form-group">
        <label>Correo electrónico</label>
        <input type="email" class="form-control">
    </div>
    <div class="form-group">
        <label>Confirmar password</label>
        <input type="password" id="txtPassword" class="form-control">
    </div>
    <div class="form-group">
        <label>Tipo de usuario</label>
        <select class="form-control">
            @foreach($tiposUsuario as $tipo)
                <option value="{{$tipo->id}}">{{$tipo->descripcion}}
            @endforeach
        </select>
    </div>

    <div>
        <button class"btn btn-primary" type="button" >Crear Usuario</button>
    </div>
</form>
@endsection

@section('customscripts')
    <script src="/js"></script>
@endsection