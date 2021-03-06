@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Vehiculo</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>Revise los Campos!!!</strong>
                                @foreach($errors->all() as $error)
                                    <span class="badge badge-danger">{{$error}}</span>
                                @endforeach                            
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>  
                            @endif

                            {!! Form::model($vehiculo,['method'=>'PATCH','route'=>['vehiculos.update',$vehiculo->id]]) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="codigo">Codigo:</label>
                                        {!! Form::text('codigo',null,array('class'=>'form-control')) !!}
                                    </div>
                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="placa">Placa:</label>
                                        {!! Form::text('placa',null,array('class'=>'form-control')) !!}
                                    </div>                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="propietario">Propietario:</label>
                                        {!! Form::text('propietario',null,array('class'=>'form-control')) !!}
                                    </div>                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="marca">Marca:</label>
                                        {!! Form::text('marca',null,array('class'=>'form-control')) !!}
                                    </div>                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="modelo">Modelo:</label>
                                        {!! Form::text('modelo',null,array('class'=>'form-control')) !!}
                                    </div>                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="anio">Anio:</label>
                                        {!! Form::number('anio',null,array('class'=>'form-control')) !!}
                                    </div>                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="cant_asientos">Cantidad de Asientos:</label>
                                        {!! Form::number('cant_asientos',null,array('class'=>'form-control')) !!}
                                    </div>                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>

                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

