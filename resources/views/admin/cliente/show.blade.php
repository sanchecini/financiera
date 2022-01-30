@extends('layouts.admin')
@section('title','Información del cliente')
@section('styles')

@endsection
@section('create')

@endsection
@section('options')

@endsection
@section('preference')

@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      
    <h3>Información del cliente</h3>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">
                                <h3>{{$cliente->cliente}}</h3>
                                <div class="d-flex justify-content-between">
                                </div>
                            </div>
                            <div class="border-bottom py-4">
                                <div class="list-group">
                                    <a class="list-group-item list-group-item-action active" id="list-home-list"
                                        data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                                        Sobre cliente
                                    </a>
                                    <a class="list-group-item list-group-item-action" id="list-profile-list"
                                        data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                                        Productos
                                    </a>
                                    {{--  <button type="button" class="list-group-item list-group-item-action">Registrar
                                        producto</button>  --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pl-lg-5">




                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" user="tabpanel"
                                    aria-labelledby="list-home-list">

                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4>Información de cliente</h4>
                                        </div>
                                    </div>
                                    <div class="profile-feed">
                                        <div class="d-flex align-items-start profile-feed-item">
                                            
                                            <div class="form-group col-md-6">
                                                <strong><i class="fas fa-user-circle"></i> Nombre</strong>
                                                <p class="text-muted">
                                                    {{$cliente->cliente}}
                                                </p>
                                                <hr>
                                                <strong>
                                                <i class="fas fa-phone-volume"></i> Teléfono</strong>
                                                <p class="text-muted">
                                                {{$cliente->telefono}}
                                                </p>
                                                <hr>
                                                <strong><i class="fas fa-envelope"></i> Correo</strong>
                                                <p class="text-muted">
                                                {{$cliente->correo}}
                                                </p>
                                            </div>
        
                                            <div class="form-group col-md-6">
                                              
                                                <strong><i class="fas fa-address-card"></i> Dirección</strong>
                                                <p class="text-muted">
                                                {{$cliente->direccion}}
                                                </p>
                                                <hr>
                                                
                                                <strong><i class="fas fa-map-marker-alt"></i> Municipio</strong>
                                                <p class="text-muted">
                                                {{$cliente->municipio}}
                                                </p>
                                                <hr>

                                               
                                            </div>
                                           
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="list-profile" user="tabpanel"
                                    aria-labelledby="list-profile-list">


                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4>COSAS EXTRAS</h4>
                                        </div>
                                    </div>
                                    <div class="profile-feed">
                                        <div class="d-flex align-items-start profile-feed-item">
    
                                            <div class="table-responsive">
                                                <table id="order-listing" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Productos</th>
                                                            <th>Precio</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       
                                                        <tr>
                                                            
                                                            <td>A</td>
                                                            <td>B</td>
                        
                                                        </tr>
                                                     
                                                    </tbody>
                                                    
                                                </table>
                                            </div>
    
                                        </div>
                                    </div>

                                </div>
                          





                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('clientes.index')}}" class="btn btn-primary float-right">Regresar</a>
                </div>
            </div>
        </div>
    </div>
  

</div>
@endsection
@section('scripts')

@endsection
