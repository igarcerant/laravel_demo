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
                            
                            
                           <div id="map">
                               
                                
                            
                                
                            </div>
                           <script type="text/javascript">
                               function mostrarUbicacion(lat, long, zom) {

                                   
                                   var map = L.map('map').setView([lat, long], zom);

                                   L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                                                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                                maxZoom: 50,
                                                id: 'mapbox/streets-v11',
                                                tileSize: 512,
                                                zoomOffset: -1,
                                                accessToken: 'pk.eyJ1IjoibG9yZW5hY2ciLCJhIjoiY2wxZnptb3E5MHQxMzNxcDhzcWg3aDhnNCJ9.vdevPEi2zQbWAKC1FM8orA'
                                            }).addTo(map);

                                   var marker = L.marker([lat, long]).addTo(map);
                               }
                            
                               
                               var lat = {{$posicion[0]->latitud}};
                               var long = {{$posicion[0]->longitud}};
                               
                               
                               mostrarUbicacion(lat, long, 15);
                               
                               
                           </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

