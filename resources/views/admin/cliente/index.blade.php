@extends('layouts.admin')
@section('title','Gestión de clientes')
@section('styles')
<link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
@endsection

@section('options')
@endsection
@section('preference')
@endsection
@section('content')

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['route'=>'clientes.store', 'method'=>'POST','files' => true]) !!}

        <div class="modal-body">

            <div class="form-group">
                <label> Nombre </label>
                <input type="text" name="cliente" class="form-control" placeholder="Nombre de cliente">
            </div>
            <div class="form-group">
                <label>Actividad</label>
                <input type="text" name="actividad" class="form-control" placeholder="Actividad o trabajo">
            </div>
            <div class="form-group">
                <label>Domicilio</label>
                <input type="text" name="direccion" class="form-control" placeholder="Ingresar domicilio">
            </div>
            <div class="form-group">
                <label>Municipio</label>
                <input type="text" name="municipio" class="form-control" placeholder="Ingresar municipio">
            </div>

            <div class="form-group">
                <label> Telefono </label>
                <input type="number" name="telefono" class="form-control" placeholder="Ingresar telefono">
            </div>

          
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" name="registrar" class="btn btn-primary">Registrar</button>
        </div>
        {!! Form::close() !!}

    </div>
  </div>
</div>


<div class="">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                   
                        <div class="welcome-text">
                            <h4>Clientes</h4>
                           
                        </div>
                   
                    
                </div>
                @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                <div class="row">
                    
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                                   Agregar nuevo cliente 
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                 <table id="clientes" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Dirección</th>
                                                <th>Municipio</th>
                                                <th>Actividad</th>
                                                <th>Telefono</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                            <tr>
                                               
                                            @foreach ($clientes as $cliente)
                                <tr>
                                    <th scope="row">{{$cliente->id}}</th>
                                    <td>
                                        <a href="{{route('clientes.show',$cliente)}}">{{$cliente->cliente}}</a>
                                    </td>
                                    <td>{{$cliente->direccion}}</td>
                                    <td>{{$cliente->municipio}}</td>
                                    <td>{{$cliente->actividad}}</td>
                                    <td>{{$cliente->telefono}}</td>

                                    <td style="">
                                        {!! Form::open(['route'=>['clientes.destroy',$cliente] ,'method'=>'DELETE']) !!}

                                        <a class="btn btn-success" href="{{route('clientes.edit', $cliente)}}" title="Editar">
                                        <i class="fa fa-pencil"></i>
                                        </a>

                                        <button class="btn btn-danger" type="submit" title="Eliminar">
                                        <i class="fa fa-trash"></i>
                                        </button>

                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
				</div>
     
       

            </div>
        </div>
    
@endsection

@section('scripts')

<script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<script src="">	
$(document).ready( function () {
    $('#clientes').DataTable();
} );</script>
@endsection