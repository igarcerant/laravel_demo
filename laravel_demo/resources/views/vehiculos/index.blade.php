@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">COONATRASYS</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Vehículos</h3>

                            <a class="btn btn-warning" href="{{ route('vehiculos.create') }}">Nuevo</a>
                            
                            <table class="table table-striped mt-2">
                                <thead style="background-color: green;">
                                    <th style="display:none;">ID</th>
                                    <th style="color:#fff;">Código</th>
                                    <th style="color:#fff;">Placa</th>
                                    <th style="color:#fff;">Propietario</th>
                                    <th style="color:#fff;">Marca</th>
                                    <th style="color:#fff;">Modelo</th>
                                    <th style="color:#fff;">Año</th>
                                    <th style="color:#fff;">Asientos</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($vehiculos as $vehiculo)
                                        <tr>
                                            <td style="display:none;">{{$vehiculo->id}}</td>
                                            <td>{{$vehiculo->codigo}}</td>
                                            <td>{{$vehiculo->placa}}</td>
                                            <td>{{$vehiculo->propietario}}</td>
                                            <td>{{$vehiculo->marca}}</td>
                                            <td>{{$vehiculo->modelo}}</td>
                                            <td>{{$vehiculo->anio}}</td>
                                            <td>{{$vehiculo->cant_asientos}}</td>
                                            
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('vehiculos.edit', $vehiculo->id) }}">Editar</a>

                                                {!! Form::open(['method' => 'DELETE', 'route'=>['vehiculos.destroy', $vehiculo->id], 'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}    
                                                {!! Form::close() !!}
                                                <a class="btn btn-primary" href="{{ route('vehiculoUbi')}}?id={{$vehiculo->id}}">Ubicacion</a>                                                                                                
                                            </td>
                                        </tr>    
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $vehiculos->links() !!}
                            </div>    
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

