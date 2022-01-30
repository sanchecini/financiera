@extends('layouts.admin')
@section('title','Editar cliente')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')

<div class="">

    <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary"> Actualizar cliente </h3>
        </div>
        <div class="card-body">
        

        {!! Form::model($cliente,['route'=>['clientes.update',$cliente], 'method'=>'PUT','files' => true]) !!}

                   

                            <div class="form-group">
                                <label> Nombre </label>
                                <input type="text" name="cliente" class="form-control" value="{{$cliente->cliente}}" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Actividad</label>
                                <input type="text" name="actividad" class="form-control" value="{{$cliente->actividad}}" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Domicilio</label>
                                <input type="text" name="direccion" class="form-control" value="{{$cliente->direccion}}" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Municipio</label>
                                <input type="text" name="municipio" class="form-control" value="{{$cliente->municipio}}" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label> Telefono </label>
                                <input type="number" name="telefono" class="form-control" value="{{$cliente->telefono}}" autocomplete="off" required>
                            </div>

                            <a href="{{route('clientes.index')}}" class="btn btn-danger"> Cancelar </a>
                            <button type="submit" name="" class="btn btn-success"> Actualizar </button>

                            {!! Form::close() !!}
                      
        </div>
    </div>
</div>

</div>
@endsection
@section('scripts')

@endsection
