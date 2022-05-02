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
                                                <a class="btn btn-primary" href="{{ route('vehiculos.edit', $vehiculo->id) }}">Ubicación</a>                                                
                                            </td>
                                        </tr>    
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $vehiculos->links() !!}
                            </div>    
                            <div>
                                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                 src="https://www.openstreetmap.org/export/embed.html?bbox=-69.64233398437501%2C8.91220689226023%2C-63.51196289062501%2C11.990965150182246&amp;layer=mapnik&amp;marker=10.455401826918397%2C-66.5771484375" style="border: 1px solid black">
                                     
                                 </iframe>
                                 <br/>
                                 <small><a href="https://www.openstreetmap.org/?mlat=10.455&amp;mlon=-66.577#map=8/10.455/-66.577">Ver mapa más grande</a></small>
                            </div>
                            <div id="map">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

